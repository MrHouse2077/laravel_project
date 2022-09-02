<?php
namespace App\Providers;
 
use Illuminate\Support\facades\View;
use Illuminate\Support\ServiceProvider;
use App\Models\Category;
class SearchServiceProvider extends ServiceProvider
{
    
    public function boot()
    {   
        
        View::composer('layouts/default', function($view){

         $categories = Category::get();

          $view->with('widget', view('providers.search', compact('categories')));
        });
    }
} 