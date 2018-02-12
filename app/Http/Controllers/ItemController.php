<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function index(){
        return view('admin.category.add-item');
    }
    public function getAllItem(){

    }
    public function getItemById($id){

    }

    public function addItem(Request $request){

    }
    public function deleteItem($id){

    }
    public function publishItem($id){

    }
    public function unpublishItem($id){

    }
    public function updateItem(Request $request,$id){

    }
}
