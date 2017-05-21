<?php

namespace App;

use Illuminate\Database\Eloquent\Model as Eloquent;

//Then, extends Eloquent and we are ready.
class Model extends Eloquent
{

protected $fillable = ['product_id', 'picked_up', 'sent', 'user_id', 'paid'];

}