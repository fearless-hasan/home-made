@extends('admin.master')
@section('body')
    <br/>
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <h3 class="text-center text-success">{{ Session::get('message') }}</h3>
                    {{ Form::open(['route'=>'new-item', 'method'=>'POST', 'class'=>'form-horizontal', 'enctype'=>'multipart/form-data']) }}
                    <div class="form-group">
                        <label class="control-label col-md-3">Sub Category Name</label>
                        <div class="col-md-9">
                            <select class="form-control" name="sub_category_id">
                                <option>--- Select Sub Category Name---</option>
                                @foreach($subCategories as $subCategory)
                                    <option value="{{ $subCategory->id }}">{{ $subCategory->sub_category_name }}</option>
                                @endforeach
                            </select>
                            <span class="text-danger">{{ $errors->has('sub_category_name') ? $errors->first('sub_category_name') : ' ' }}</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3">Item Name</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" name="item_name"/>
                            <span class="text-danger">{{ $errors->has('item_name') ? $errors->first('item_name') : ' ' }}</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3">Item Detail</label>
                        <div class="col-md-9">
                            <textarea class="form-control" name="item_detail"></textarea>
                            <span class="text-danger">{{ $errors->has('item_detail') ? $errors->first('item_detail') : ' ' }}</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3">Price</label>
                        <div class="col-md-9">
                            <input type="number" class="form-control" name="price"/>
                            <span class="text-danger">{{ $errors->has('price') ? $errors->first('price') : ' ' }}</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3">Unit</label>
                        <div class="col-md-9">
                            <input type="number" class="form-control" name="unit"/>
                            <span class="text-danger">{{ $errors->has('unit') ? $errors->first('unit') : ' ' }}</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3">Publication status</label>
                        <div class="col-md-9 radio">
                            <label><input type="radio" name="publication_status" value="1"/> Published </label>
                            <label><input type="radio" name="publication_status" value="0"/> Unpublished </label><br/>
                            <span class="text-danger">{{ $errors->has('publication_status') ? $errors->first('publication_status') : ' ' }}</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-9 col-md-offset-3">
                            <input type="submit" name="btn" class="btn btn-success btn-block" value="Save Item Info"/>
                        </div>
                    </div>
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>

@endsection