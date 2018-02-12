<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){
        return view('admin.category.add-category');
    }

   public function getAllCategoty(){
       $categories = Category::all();
       return view('admin.category.manage-category', ['categories'=>$categories]);
   }
    public function getCategoryById($id){
        $category = Category::find($id);
        return view('admin.category.edit-category', ['category'=>$category]);
    }

    public function addCategory(Request $request){
        $category = new Category();
        $category->category_name = $request-> category_name;
        $category->category_photo = $request-> category_photo;
        $category->category_detail = $request-> category_detail;
        $category->publication_status = $request-> publication_status;
        $category->save();
        return redirect('category/new')->with('message', 'Category Added Successfully');
    }
    public function deleteCategory($id){
        $category = Category::find($id);
        $category->delete();
        return redirect('category/manage')->with('message','Category Deleted Successfully');
    }
    public function publishCategory($id){
        $category = Category::find($id);
        $category->publication_status = 1;
        $category->save();
        return redirect('category/manage')->with('message','Category Published');
    }
    public function unpublishCategory($id){
        $category = Category::find($id);
        $category->publication_status = 0;
        $category->save();
        return redirect('category/manage')->with('message','Category Unpublished');
    }
    public function updateCategory(Request $request,$id){
        $category = Category::find($id);
        $category->category_name = $request-> category_name;
        $category->category_photo = $request-> category_photo;
        $category->category_detail = $request-> category_detail;
        $category->publication_status = $request-> publication_status;
        $category->update();
        return redirect('category/manage')->with('message','Category Updated');
    }
}
