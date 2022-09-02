<?php 
	namespace App\Models;
	use Illuminate\Database\Eloquent\Model;

	class Product extends Model{
		protected $table = 'products';
		public $timestamps = false;
		public function category(){
        	return $this->belongsTo('App\Models\Category', 'category_id');
    	}
		
		public function tags(){
        	return $this->belongsToMany('App\Models\Tag', 'tags_product', 'product_id', 'tag_id');
    	}
	}






 ?>