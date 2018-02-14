<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use Image;

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
        $imageUrl = $this->imageUpload($request);
        $category = new Category();
        $category->category_name = $request-> category_name;
        $category->category_photo = $imageUrl;
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
    public function updateCategory(Request $request){
        $id = $request->category_id;
        $category = Category::find($id);
        $category->category_name = $request-> category_name;
        if($request-> category_photo) {
            $imageUrl = $this->imageUpload($request);
            $category->category_photo = $imageUrl;
        }
        $category->category_detail = $request-> category_detail;
        $category->publication_status = $request-> publication_status;
        $category->update();
        return redirect('category/manage')->with('message','Category Updated');
    }
    protected function imageUpload($request) {
        $image = $request->file('category_photo');
        $fileType = $image->getClientOriginalExtension();
        $imageName = $request->category_name.'.'.$fileType;
        $directory = 'images/category/';
        $imageUrl = $directory.$imageName;
        Image::make($image)->resize(300, 200)->save($imageUrl);
        return $imageUrl;
    }
}
