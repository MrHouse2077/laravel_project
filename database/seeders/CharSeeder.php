<?php
 
namespace Database\Seeders;
 
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
 
class CharSeeder extends Seeder
{
    /**
     * Run the database seeders.
     *
     * @return void
     */
    public function run()
    {   
        $i=1;
        while($i <= 10){
            DB::table('characteristics')->insertOrIgnore([
                [
                    'id' => $i,
                    'name' => Str::random(10),
                    'value' => rand(1,9999)
                ]
                
                
            ]);
            $i++;
        }
    }
}