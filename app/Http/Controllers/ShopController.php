<?php 
	namespace App\Http\Controllers;

	use Illuminate\Http\Request;
	use Illuminate\Support\Facades\Redirect;
	use App\Http\Controllers\Controller;

	class ShopController extends Controller{


		public function mainAction(Request $request){
			return view('pages.choise');
		}
        public function transferAction(Request $request){
            dd($request);
			return view('pages.show');
		}
		// public function checkAction(Request $request){

		//     return Redirect::route('contacts', ['status'=>1]);
			
		// }
	}

	


?>