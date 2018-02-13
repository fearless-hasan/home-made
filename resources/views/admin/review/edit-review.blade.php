@extends('admin.master')
@section('body')
    <br/>
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <h3 class="text-center text-success">{{ Session::get('message') }}</h3>
                    {{ Form::open(['route'=>'update-category', 'method'=>'POST', 'class'=>'form-horizontal', 'enctype'=>'multipart/form-data', 'name'=>'editSubCategoryForm']) }}
                    <div class="form-group">
                        <label class="control-label col-md-3">Item Name</label>
                        <div class="col-md-9">
                            <select class="form-control" name="item_id">
                                <option>--- Select Item Name---</option>
                                @foreach($items as $item)
                                    <option value="{{ $item->id }}">{{ $item->item_name }}</option>
                                @endforeach
                            </select>
                            <span class="text-danger">{{ $errors->has('item_name') ? $errors->first('item_name') : ' ' }}</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3">Name</label>
                        <div class="col-md-9">
                            <input type="text" value="{{ $review->name }}" class="form-control" name="name"/>
                            <input type="hidden" value="{{ $review->id }}" class="form-control" name="review_id"/>
                            <span class="text-danger">{{ $errors->has('name') ? $errors->first('name') : ' ' }}</span>
                        </div>
                    </div>


                    <div class="form-group">
                        <label class="control-label col-md-3">Comment</label>
                        <div class="col-md-9">
                            <textarea class="form-control"  name="comment" id="editor">{{ $review->comment }}</textarea>
                            <span class="text-danger">{{ $errors->has('comment') ? $errors->first('comment') : ' ' }}</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3">Publication Status</label>
                        <div class="col-md-9 radio">
                            <label><input type="radio" name="publication_status" {{ $review->publication_status == 1 ? 'checked' : '' }} value="1"/> Published </label>
                            <label><input type="radio" name="publication_status" {{ $review->publication_status == 0 ? 'checked' : '' }} value="0"/> Unpublished </label><br/>
                            <span class="text-danger">{{ $errors->has('publication_status') ? $errors->first('publication_status') : ' ' }}</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-9 col-md-offset-3">
                            <input type="submit" name="btn" class="btn btn-success btn-block" value="Update Review Info"/>
                        </div>
                    </div>
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>

@endsection













