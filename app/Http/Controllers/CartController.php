<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Cart;
use Illuminate\Support\Facades\Redirect;

class CartController extends Controller
{
    public function add_to_cart(Request $request){
        $qty=$request->qty;
        $products_id=$request->products_id;
        $product_info=DB::table('tbl_products')
                        ->where('products_id',$products_id)
                        ->frist();
        $data['qty']=$qty;
        $data['id']=$product_info->products_id;
        $data['name']=$product_info->products_name;
        $data['price']=$product_info->product_price;
        $data['options']['image']=$product_info->product_image;

        Cart::add($data);
        return Redirect('/show-cart');
    }
    public function show_cart(){
        $all_published_category=DB::table('tbl_category')
                                ->where('publication_status',1)
                                ->get();
        $manage_published_category=view('pages.add_to_cart')
            ->with('all_published_category',$all_published_category);
        return view('layout')
            ->with('pages.add_to_cart',$manage_published_category);
    }
}
