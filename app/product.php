<?php

namespace App;

use App\User;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    //As this only refers to the current class, we use the static keyword.

    //Gets all products
    public static function all_products(){

        return static::latest()->get();
    }


}
