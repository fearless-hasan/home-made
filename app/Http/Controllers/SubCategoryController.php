<?php

namespace App\Http\Controllers;

use App\Category;
use App\SubCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Image;

class SubCategoryController extends Controller
{
    public function index(){
        return view('admin.sub-category.add-sub-category');
    }

    public function getAllSubCategory(){
        $subCategories = DB::table('sub_categories')
            ->join('categories', 'categories.id', '=', 'sub_categories.category_id')
            ->whereNull('sub_categories.deleted_at')
            ->select('sub_categories.*', 'categories.category_name')
            ->get();

        return view('admin.sub-category.manage-sub-category', ['subCategories' =>$subCategories ]);
    }
    public function getSubCategoryById($id){
        $subCategories = DB::table('sub_categories')
            ->join('categories', 'categories.id', '=', 'sub_categories.category_id')
            ->where( 'sub_categories.id', '=', $id)
            ->select('sub_categories.*', 'categories.category_name', 'sub_categories.category_id')
            ->get();


        return view('admin.sub-category.edit-sub-category', ['subCategories'=>$subCategories]);
    }

    public function addSubCategory(Request $request){
        $imageUrl = $this->imageUpload($request);
        $subCategory = new SubCategory();
        $subCategory->category_id = $request->category_id;
        $subCategory->sub_category_name = $request->sub_category_name;
        $subCategory->sub_category_photo = $imageUrl;
        $subCategory->sub_category_detail = $request->sub_category_detail;
        $subCategory->publication_status = $request->publication_status;
        $subCategory->save();
        return redirect('sub-category/new')->with('message','Sub Category added successfully');

    }
    public function deleteSubCategory($id){
        $subCategory = SubCategory::find($id);
        unlink($subCategory->sub_category_photo);
        $subCategory->delete();
        return redirect('sub-category/manage')->with('message','Sub Category Deleted Successfully');
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


    protected function imageUpload($request) {
        $image = $request->file('sub_category_photo');
        $fileType = $image->getClientOriginalExtension();
        $imageName = $request->sub_category_name.'.'.$fileType;
        $directory = 'images/sub-category/';
        $imageUrl = $directory.$imageName;
        Image::make($image)->resize(300, 200)->save($imageUrl);
        return $imageUrl;
    }
}
