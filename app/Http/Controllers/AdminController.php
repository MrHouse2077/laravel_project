<?php 
	namespace App\Http\Controllers;
	use App\Providers\SearchServiceProvider;
	use App\Providers\MainMenuServiceProvider;
	use Illuminate\Http\Request;
    use App\Http\Controllers\Controller;
	use Illuminate\Support\Facades\Redirect;
    use Illuminate\Support\Facades\Storage;
	use Illuminate\Support\Facades\DB;
    use Illuminate\Support\Facades\Auth;

	use App\Models\Product;
    use App\Models\User;
	use App\Models\Category;
	use App\Models\Page;
    use App\Models\Tag;

    use App\Jobs\AddCategory;
    use App\Jobs\AuthMail;
    use App\Jobs\ResetMail;
    use Illuminate\Support\Facades\Validator;
    use App\Http\Validators\CategoryValidator;
    use App\Http\Validators\EmailCheckValidator;
    use App\Http\Validators\PasswordConfirmValidator;

    use Carbon\Carbon;

    use Illuminate\Support\Facades\Mail;
    use App\Mail\AuthNotify;
    use App\Mail\ResetPassword;

    use Illuminate\Support\Facades\Hash;

	class AdminController extends Controller{

	    private $template = 'admin';


		public function indexAction(){
			$template= $this->template;
            if(!Auth::check()){
                return redirect()->route('admin-login');
            }
            return view('pages.admin.dashboard', compact('template'));
	    }
        public function loginAction(){
			$template= $this->template;

            return view('pages.admin.login', compact('template'));
	    }

        public function authAction(Request $request){
			$template= $this->template;
            
            $validator = Validator::make($request->all(), [
                'name' => 'required|min:2|max:255',
                'email' => 'required|email:rfc,dns',
                'password' => 'required|min:3',
            ]);
            if ($validator->fails()) {
                return redirect()->route('admin-login');
            }
            if(Auth::attempt([
                'email'=> $request->email,
                'password'=>$request->password,

            ])){
               
                $date = Carbon::now();
                $current_date = $date->toDateTimeString();
                AuthMail::dispatch('notify', $current_date);
                return redirect()->route('dashboard');
            }
            else{
                return redirect()->route('admin-login');
            }  
            
	    }

        public function categoriesAction(){

            
            $template= $this->template;
            if(!Auth::check()){
                return redirect()->route('adminCategories');
            }

            $categories = Category::Get();
            return view('pages.admin.categories', compact('template', 'categories'));
        }
        public function addCategoryAction(Request $request){

            $validator = CategoryValidator::addcategory($request);
            if ($validator->fails()) {
                return redirect()->route('adminCategories')->with('error', 'Упс! Произошла ошиб очка')->withInput();
            }
            AddCategory::dispatch($request);
          
           
            
        }
        public function deleteCategoryAction(Request $request){
       
            $validator = CategoryValidator::categoryDelete($request);
            if ($validator->fails()) {
                return redirect()->route('adminCategories')->with('error', 'Упс! Произошла ошиб очка');
            }
            Category::where(['id'=>$request->category_id])->delete();

            return redirect()->route('adminCategories')->with('success', 'Ок! Категория успешно добавлена!');
        }


        public function listProductsAction(){
            $template= $this->template;
            if(!Auth::check()){
                return redirect()->route('adminListProducts');
            }

            $products = Product::Get();

            return view('pages.admin.list_products', compact('template', 'products'));
        }



        public function addProductsAction(){
            $template= $this->template;
            if(!Auth::check()){
                return redirect()->route('adminAddProducts');
            }
            $tags = Tag::Get();
            $products = Product::Get();
            $categories = Category::Get();
            return view('pages.admin.add_products', compact('template', 'products', 'tags', 'categories'));
        }

        public function addProductFormAction(Request $request){


           
            
            $validate = Validator::make($request->all(), [
                'name' => 'required',
                'count' => 'required',
                'current_price' => 'required',
                'old_price' => 'required',
                'status' => 'required',
                'tags' => 'required',
                'category' => 'required',
                'img' => 'required|mimes:jpeg,png,jpg,pdf|max:10000',
                ],
                [
                    'img.required' => 'ошибка!',
                ]
                    
                
            );

            if ($validate->fails()) {
                return redirect()->route('adminListProducts')->withErrors($validated)->with('error', 'Упс! Произошла ошиб очка');
            }
            $request->img->store('/public/images');


            $product = new Product;

            $product->name = $request->name;
            $product->current_price = $request->current_price;
            $product->old_price = $request->old_price;
            $product->category_id = $request->category;
            $product->status = $request->status;
            $product->image = $request->img->hashName();
            $product->count = $request->count;
            //$product->tags = $request->tags;

            $product->save();

            return redirect()->route('adminListProducts')->with('success', 'Ок! Товар успешно добавлен!');

            
           
           
        }

        public function forgotpassAction(Request $request){
            return view('pages.admin.forgotpassword');
        }

        public function resetpassAction($token){
            $user = User::where('token', $token)->first();
            if($user==null){
                return redirect()->route('admin-login');
            }
            $id = $user->id;
          
            return view('pages.admin.resetpassword', compact('id'));
        }
        public function email_checkAction(Request $request){
            $validated = EmailCheckValidator::EmailCheck($request);
            if($validated->fails()){
                return redirect()->route('adminForgotPass')->with('error', 'Упс! Произошла ошиб очка');
            }
            $mail = trim(mb_strtolower($request->mail));
            $user = User::where('email', $mail)->first();

            if($user==NULL){
                
                return redirect()->route('adminForgotPass')->with('error', 'Упс! Такого юзера не существует');
                
            }
            else{
              
        
            
                User::where('id',$user->id)->update(['token'=>md5($user->id."".$user->password)]);
               
                ResetMail::dispatch("resetpassword", $mail, md5($user->id."".$user->password));
                return redirect()->route('adminForgotPass')->with('success', 'Успех! Проверьте почтовый ящик');
            }
        }
        public function resetpassRequestAction(Request $request){
            $validated = PasswordConfirmValidator::PasswordConfirm($request);
            

            if ($validated->fails()) {
                return redirect()->route('admin-login')->with('error', 'Не верно!');
            }
            $user = User::where('id', $request->id)->first();
            
            $user->token = null;
            $user->password = Hash::make($request->password);
            $user->update();
            return redirect()->route('admin-login')->with('success', 'Пароль успешно изменён!');
            
        }

    }
    
    
?>