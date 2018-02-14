<?php

namespace App\Http\Controllers;

use App\Item;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index($id){
        $item = Item::find($id);
        return view('front-end.orders.order', ['item' => $item]);
    }
}
