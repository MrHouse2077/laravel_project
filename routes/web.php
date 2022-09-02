<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\IndexController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\AdminController;
use App\Http\Middleware\Login;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [IndexController::class, 'indexAction']);

Route::get('/contacts', [IndexController::class, 'mainAction'])->name('contacts');

Route::get('/product/{id}', [IndexController::class, 'productAction'], function ($id){
    return $id;
});

Route::get('/result', [IndexController::class, 'resultAction']);

Route::get('/category/{id}', [IndexController::class, 'categoryAction'], function ($id){
    return $id;
});

Route::post('/mailer', [IndexController::class, 'mailerAction']);
Route::get('/form', [IndexController::class, 'formAction']);


Route::controller(AdminController::class)->group(function(){
    Route::middleware([Login::class])->group(function () {
        Route::get('/admin','indexAction')->name('dashboard');
        Route::get('/admin/list-product', 'indexAction')->name('list-product');
        Route::get('/admin/categories', 'categoriesAction')->name('adminCategories');
        Route::post('/admin/add_categories', 'addCategoryAction');
        Route::post('/admin/delete_categories', 'deleteCategoryAction');
        Route::get('/admin/list_products', 'listProductsAction')->name('adminListProducts');
        Route::get('/admin/add_products', 'addProductsAction')->name('adminAddProducts');
        Route::post('/admin/add_productform', 'addProductFormAction')->name('adminAddProductForm');
        
    });

Route::post('/admin/email_check', 'email_checkAction')->name('adminEmailCheck');

Route::get('/admin/forgotpassword', 'forgotpassAction')->name('adminForgotPass');
Route::get('/admin/resetpassword', 'resetpassAction')->name('adminResetPass');
Route::post('/admin/resetpasswordRequest', 'resetpassRequestAction')->name('adminResetPassRequest');

Route::get('/admin/login', 'loginAction')->name('admin-login');


Route::post('/admin/auth', 'authAction')->name('auth-login');

Route::get('/admin/logout', 'logoutAction')->name('logout')->middleware('logout');

Route::get('/admin/resetpassword/{token}', 'resetpassAction',function ($token){
    return $token;
})->name("adminResetPass");
});


