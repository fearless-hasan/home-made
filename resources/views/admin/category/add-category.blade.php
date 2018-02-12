@extends('admin.master')
@section('body')
    <br/>
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <h3 class="text-center text-success">{{ Session::get('message') }}</h3>
                    {{ Form::open(['route'=>'add-category', 'method'=>'POST', 'class'=>'form-horizontal', 'enctype'=>'multipart/form-data']) }}

                    <div class="form-group">
                        <label class="control-label col-md-3">Category Name</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" name="category_name"/>
                            <span class="text-danger">{{ $errors->has('category_name') ? $errors->first('category_name') : ' ' }}</span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3">Category Photo</label>
                        <div class="col-md-9">
                            <input class="form-control" type="file" name="category_photo" accept="image/*"/>
                            <span class="text-danger">{{ $errors->has('category_photo') ? $errors->first('category_photo') : ' ' }}</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3">Category Detail</label>
                        <div class="col-md-9">
                            <textarea class="form-control"  name="category_detail" id="editor"></textarea>
                            <span class="text-danger">{{ $errors->has('category_detail') ? $errors->first('category_detail') : ' ' }}</span>
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
                            <input type="submit" name="btn" class="btn btn-success btn-block" value="Save Category Info"/>
                        </div>
                    </div>
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>

@endsection