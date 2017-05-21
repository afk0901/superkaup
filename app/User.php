<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',

        'address','postalcode','city', 'country'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    //One user has many orders.
    public function orders(){

        return static::hasmany(Order::class);
    }

    //Gets the user id where email.
    public function find_user_id($email){

        return  $this->where('email',$email)->get()->pluck('id')[0];

    }

    //Gets any column from the order table where user id is something.
    public function user_order($email,$column){

        $uid = $this->find_user_id($email);//Find the id

        $order = $this->find($uid)->orders;//Find everything from the order table that has this user.

        return $order->pluck($column);//Get the data from a specific column
    }


}
