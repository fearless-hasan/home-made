<?php

namespace App\Http\Controllers;

use App\SubCategory;
use Illuminate\Http\Request;

class SubCategoryController extends Controller
{
    public function index(){
        return view('admin.sub-category.add-sub-category');
    }

    public function getAllSubCategoty(){
        $subCategories = SubCategory::all();
        return view('admin.sub-category.manage-sub-category', ['subCategories'=>$subCategories]);
    }
    public function getSubCategoryById($id){
        $subCategory = SubCategory::find($id);
        return view('admin.sub-category.edit-sub-category', ['subCategory'=>$subCategory]);
    }

    public function addSubCategory(Request $request){
        $subCategory = new SubCategory();
        $subCategory->category_id = $request->category_id;
        $subCategory->sub_category_name = $request->sub_category_name;
        $subCategory->sub_category_photo = $request->sub_category_photo;
        $subCategory->sub_category_detail = $request->sub_category_detail;
        $subCategory->publication_status = $request->publication_status;
        $subCategory->save();
        return redirect('sub-category/new')->with('message','Sub Category added successfully');

    }
    public function deleteSubCategory($id){
        $subCategory = SubCategory::find($id);
        $subCategory->delete();
        return redirect('sub-category/manage')->with('message','ub Category Deleted Successfully');
    }
    public function publishSubCategory($id){
        $subCategory = SubCategory::find($id);
        $subCategory->publication_status = 1;
        $subCategory->save();
        return redirect('sub-category/manage')->with('message','Sub Category Published');
    }
    public function unpublishSubCategory($id){
        $subCategory = SubCategory::find($id);
        $subCategory->publication_status = 0;
        $subCategory->save();
        return redirect('sub-category/manage')->with('message','Sub Category Unpublished');
    }
    public function updateSubCategory(Request $request,$id){
        $subCategory = Category::find($id);
        $subCategory->category_id = $request-> category_id;
        $subCategory->sub_category_name = $request-> sub_category_name;
        $subCategory->sub_category_photo = $request-> sub_category_photo;
        $subCategory->sub_category_detail = $request-> sub_category_detail;
        $subCategory->publication_status = $request-> publication_status;
        $subCategory->update();
        return redirect('sub-category/manage')->with('message','Sub Category Updated');
    }
}
