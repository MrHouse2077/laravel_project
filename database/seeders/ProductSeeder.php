<?php
 
namespace Database\Seeders;
 
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
 
class ProductSeeder extends Seeder
{
    /**
     * Run the database seeders.
     *
     * @return void
     */
    public function run()
    {   
        $i=1;
        while($i <= 20){
            DB::table('products')->insertOrIgnore([
                [
                    'id' => $i,
                    'name' => Str::random(10),
                    'current_price' => rand(1,9999),                 
                    'old_price' => rand(1,9999),
                    'category_id' => rand(1,3),                
                    'count' => rand(1,100),
                ]
                
                
            ]);
            $i++;
        }
    }
}