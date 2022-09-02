<?php

    namespace App\Models;

    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Support\Facades\Validator;
    class Category extends Model{
        protected $table = 'categories';
        public $timestamps = false;
        public function products(){
                return $this->hasMany('App\Models\Product', 'category_id');
    	}
    }