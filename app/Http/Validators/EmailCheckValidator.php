<?php

namespace App\Http\Validators;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
class EmailCheckValidator{
    public static function EmailCheck($request){
        return Validator::make($request->all(), [
            'email' => 'requiered|email:rfc,dns',
        ],
        [
            'category_id.required' => 'Ошибка!',
            'category_id.integer' => 'Ошибка!',
            
        ]);
    }

    
}