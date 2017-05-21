<?php

namespace App;

use Illuminate\Support\Facades\Auth;

class Order extends Model
{

    //One order has many products, but we want to find the products that belongs to the order.
    //Laravel tries to match the id in the product table to the column that has the name
    //of the method. As we only know the user product_id in the order table we need to connect
    //that table with the products. So, as there are many product_id's on one product, we have
    //a many-to-one connection, so many product_ids in the order table belongs to one id in the product table.

    public function product(){

        return $this->belongsTo(product::class);

    }

    //Gets the users products by the order id.
    public function ordered_products($order_id)
    {

        $order = $this->find($order_id);

        return $order->product;

    }

    public function store_order(User $user){


       $products = session('products');


        $pick_up = false;
        $paid = false;
        $sent = false;


        if($_GET['option'] == 'pick_up'){

            $pick_up = True;

        }

        if($_GET['option'] == 'pay'){

            $sent = True;

        }

//Paid is always 0 because the payment option is not implementen yet.
        foreach($products as $product) {


            Order::create([

                'product_id' => $product[4],

                'picked_up' => $pick_up,

                'sent' => $sent,

                'user_id' => Auth::user()->id,

                'paid' => 0
            ]);
        }
        session()->flush('products');


    }






}
