<?php

namespace App\Http\Controllers;

use App\product;
use Illuminate\Http\Request;

class ProductController extends Controller

{
    //Go into the product table and get the latest product and return a view.
    public function index(product $products){

        $all_products = $products->all_products();

        $img_height = 140;
        $img_width =  140;


     return view('index', compact('all_products','img_height','img_width'));

    }

    public static function requests(){

        $product_requests = [



            request('product_name'),

            request('product_description'),

            request('product_price'),

            request('product_image'),

            request('product_id')


        ];

        return  $product_requests;
    }

    public function in_basket(){

        //Push an array into a session
        session()->push('products',static::requests());


        return back();
    }

    //Forget the array in the session that has this id
    public function delete_from_basket()
    {



        foreach (session('products') as $product) {


            if (in_array($product[4],$product)) {

                session()->forget('products', $product[4]);

            }

        }

        return back();

    }


    public function showproduct(product $product){

        $img_height = 500;
        $img_width =  500;


        return view('layouts.product', compact('product','img_height','img_width'));
    }

    public function user_checkout(product $product){

        return view('layouts.checkout',compact('product'));
    }
}
