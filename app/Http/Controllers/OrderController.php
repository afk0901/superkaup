<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Order;

use App\product;

use App\User;

class OrderController extends Controller
{
    public function index(User $user, order $order){

        $User_products = $order->ordered_products(1);

        return view('index',compact('user','email','User_products'));
    }

    public function store(Order $order,User $user){



        $order->store_order($user);

        session()->flash('finish', true);

        return back();


    }

}
