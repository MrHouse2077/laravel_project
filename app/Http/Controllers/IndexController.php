<?php 
	namespace App\Http\Controllers;
	use App\Providers\SearchServiceProvider;
	use App\Providers\MainMenuServiceProvider;
	use Illuminate\Support\Facades\Mail;
	use Illuminate\Http\Request;
	use Illuminate\Support\Facades\Redirect;
	use App\Http\Controllers\Controller;
	use Illuminate\Support\Facades\DB;
	use App\Models\Product;
	use App\Models\Category;
	use App\Models\Page;
	use App\Mail\Mailer;
	class IndexController extends Controller{

		private $template = 'default';


		public function indexAction(){
			$template = $this->template;
			$categories = Category::get();
			$page = Page::where(['alias'=> 'home'])->first();
			return view('pages.index', compact('template', 'page', 'categories'));
		}
		public function categoryAction($id){
			$template = $this->template;
		//	$products = Product::get();

			$category = Category::where(['id'=> $id])->first();
			if(!$category){
				return abort(404);
			}
			$page = Page::where(['alias'=> 'category'])->first();
			
			
			
			return view('pages.category', compact('template', 'category', 'page'));
		}

		public function resultAction(){
			$template = $this->template;
			
			$products = Product::select();
			
			return view('pages.searchresult', compact('template', 'products'));
		}
		
		public function productAction($id){
			$template = $this->template;
		

			$product = Product::where(['id'=> $id])->first();
			if(!$product){
				return abort(404);
			}
			$page = Page::where(['alias'=> 'category'])->first();
			
			return view('pages.product', compact('template', 'product', 'page'));
		}

		public function mailerAction(Request $request){

			
		
			Mail::to('ipoletuev@mail.ru')->send(new Mailer($request->name, $request->message));
		}
		public function formAction(){
			return view('pages.form');
		}
		
	}

	


?>