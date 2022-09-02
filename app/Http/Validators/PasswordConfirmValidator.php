<?php

namespace App\Http\Validators;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
class PasswordConfirmValidator{
    public static function PasswordConfirm($request){
        return Validator::make($request->all(), [
            'password' => 'required|min:3',
            'password_confirmation' => 'required|min:3|same:password',
            
        ],
        [
            'category_id.required' => 'Ошибка!',
            'category_id.integer' => 'Ошибка!',
            
        ]);
    }

    public static function addcategory($request){
        return Validator::make($request->all(), [
            'name' => 'required|min:2|max:200',
            'description' => 'max:1000',
        ],
        [
            'name.required' => 'название категории обязательно',
            'name.min:2' => 'название категории слишком мало',
            'name.max:200' => 'название категории слишком велико',
            'description.max:1000' => 'описание слишком велико',
        ]
    
        );
    }
}