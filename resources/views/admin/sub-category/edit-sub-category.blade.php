@extends('admin.master')
@section('body')
    <br/>
    @foreach($subCategories as $subCategory)
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-body">

                    <h3 class="text-center text-success">{{ Session::get('message') }}</h3>
                    {{ Form::open(['route'=>'update-sub-category', 'method'=>'POST', 'class'=>'form-horizontal', 'enctype'=>'multipart/form-data', 'name'=>'editSubCategoryForm']) }}
                    <div class="form-group">
                        <label class="control-label col-md-3">Category Name</label>
                        <div class="col-md-9">
                            <select class="form-control" name="category_id">
                                <option>--- Select Category Name---</option>
                                @foreach($providedCategories as $category)
                                    <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                                @endforeach
                            </select>
                            <span class="text-danger">{{ $errors->has('category_name') ? $errors->first('category_name') : ' ' }}</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3">Sub Category Name</label>
                        <div class="col-md-9">
                            <input type="text" value="{{ $subCategory->sub_category_name }}" class="form-control" name="sub_category_name"/>
                            <input type="hidden" value="{{ $subCategory->id }}" class="form-control" name="sub_category_id"/>
                            <span class="text-danger">{{ $errors->has('sub_category_name') ? $errors->first('sub_category_name') : ' ' }}</span>
                        </div>
                    </div>


                    <div class="form-group">
                        <label class="control-label col-md-3">Sub Category Detail</label>
                        <div class="col-md-9">
                            <textarea class="form-control"  name="sub_category_detail" id="editor">{{ $subCategory->sub_category_detail }}</textarea>
                            <span class="text-danger">{{ $errors->has('sub_category_detail') ? $errors->first('sub_category_detail') : ' ' }}</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3">Sub Category Photo</label>
                        <div class="col-md-9">
                            <input type="file" name="sub_category_photo" accept="image/*"/>
                            <br/>
                            <img src="{{ asset($subCategory->sub_category_photo) }}" alt="" height="80" width="80"/>
                            <span class="text-danger">{{ $errors->has('sub_category_photo') ? $errors->first('sub_category_photo') : ' ' }}</span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3">Publication status</label>
                        <div class="col-md-9 radio">
                            <label><input type="radio" name="publication_status" {{ $subCategory->publication_status == 1 ? 'checked' : '' }} value="1"/> Published </label>
                            <label><input type="radio" name="publication_status" {{ $subCategory->publication_status == 0 ? 'checked' : '' }} value="0"/> Unpublished </label><br/>
                            <span class="text-danger">{{ $errors->has('publication_status') ? $errors->first('publication_status') : ' ' }}</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-9 col-md-offset-3">
                            <input type="submit" name="btn" class="btn btn-success btn-block" value="Update Sub Category Info"/>
                        </div>
                    </div>
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>
    @endforeach


@endsection
@section('script')
    <script>
        document.forms('editSubCategoryForm').elements['category_id'].value = '{{ $subCategory->category_id }}';
    </script>
@endsection













