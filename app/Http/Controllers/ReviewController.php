<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function index(){
        return view('admin.review.add-review');
    }
    public function getAllReview(){
        $reviews = Review::all();
        return view('admin.review.manage-review', ['reviews'=>$reviews]);
    }
    public function getReviewById($id){
        $review = Review::find($id);
        return view('admin.review.edit-review', ['review'=>$review]);
    }

    public function addReview(Request $request){
        $review = new Review();
        $review->item_id = $request->item_id;
        $review->name = $request->name;
        $review->comment = $request->comment;
        $review->publication_status = $request->publication_status;
        $review->save();
        return redirect('review/new')->with('message','Review added successfully');
    }
    public function deleteReview($id){
        $review = Review::find($id);
        $review->delete();
        return redirect('review/manage')->with('message','Review Deleted Successfully');
    }
    public function publishReview($id){
        $review = Review::find($id);
        $review->publication_status = 1;
        $review->save();
        return redirect('review/manage')->with('message','Review Unpublished');
    }
    public function unpublishReview($id){
        $review = Review::find($id);
        $review->publication_status = 0;
        $review->save();
        return redirect('review/manage')->with('message','Review Unpublished');
    }
    public function updateReview(Request $request,$id){
        $review = Item::find($id);
        $review->item_id = $request->item_id;
        $review->name = $request->name;
        $review->comment = $request-> comment;
        $review->publication_status = $request-> publication_status;
        $review->update();
        return redirect('review/manage')->with('message','Review Updated');
    }
}
