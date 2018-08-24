<?php

namespace App\Http\Controllers\Shopping;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
class ShoppingController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function BrowseItems(){
         return view('Shopping\BrowseItems');
    }

    public function ShoppingItem(){
        return view('Shopping\ShoppingItem');
    }

    public function addCart(Request $request){
        
        $item_name = Session::put('item_name', $request->item_name);
        $item_price = Session::put('item_price', $request->item_price);
        $item_count = Session::put('item_count', $request->item_count);
        $item_name = Session::get('item_name', '沒有商品');
        $item_price = Session::get('item_price', '沒有價錢');
        $item_count = Session::get('item_count', '沒有數量');
        
        return response()->json(array('item_name'=>$item_name,'item_price'=>$item_price,'item_count'=>$item_count));
    }

    public function getCart(){

        $item_name = Session::get('item_name', '沒有商品');
        $item_price = Session::get('item_price', '沒有價錢');
        $item_count = Session::get('item_count', '沒有數量');

        
        return response()->json(['item_name' => $item_name,'item_price' => $item_price,'item_count' => $item_count]);
    }

    public function ShoppingCart()
    {
        return view('ShoppingCart\ShoppingCart');
    }

}
