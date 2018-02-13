<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function index(){
        return view('admin.item.add-item');
    }
    public function getAllItem(){
        $items = Item::all();
        return view('admin.item.manage-item', ['items'=>$items]);
    }
    public function getItemById($id){
        $item = Item::find($id);
        return view('admin.item.edit-item', ['item'=>$item]);
    }

    public function addItem(Request $request){
        $item = new Item();
        $item->sub_category_id = $request-> sub_category_id;
        $item->item_name = $request-> item_name;
        $item->item_detail = $request-> item_detail;
        $item->price = $request-> price;
        $item->unit = $request-> unit;
        $item->publication_status = $request-> publication_status;
        $item->save();
        return redirect('item/new')->with('message', 'Item Added Successfully');
    }
    public function deleteItem($id){
        $item = Item::find($id);
        $item->delete();
        return redirect('item/manage')->with('message','Item Deleted Successfully');
    }
    public function publishItem($id){
        $item = Item::find($id);
        $item->publication_status = 1;
        $item->save();
        return redirect('item/manage')->with('message','Item Published');
    }
    public function unpublishItem($id){
        $item = Item::find($id);
        $item->publication_status = 0;
        $item->save();
        return redirect('item/manage')->with('message','Item Unpublished');
    }
    public function updateItem(Request $request,$id){
        $item = new Item();
        $item->sub_category_id = $request-> sub_category_id;
        $item->item_name = $request-> item_name;
        $item->item_detail = $request-> item_detail;
        $item->price = $request-> price;
        $item->unit = $request-> unit;
        $item->publication_status = $request-> publication_status;
        $item->update();
        return redirect('item/manage')->with('message','Item Updated');
    }
}
