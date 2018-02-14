@extends('admin.master')
@section('body')
    <br/>
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <h3 class="text-center text-success">{{ Session::get('message') }}</h3>
                    {{ Form::open(['route'=>'update-item', 'method'=>'POST', 'class'=>'form-horizontal', 'enctype'=>'multipart/form-data', 'name'=>'editSubCategoryForm']) }}
                    <div class="form-group">
                        <label class="control-label col-md-3">Sub Category Name</label>
                        <div class="col-md-9">
                            <select class="form-control" name="sub_category_id">
                                <option>--- Select Sub Category Name---</option>
                                @foreach($providedSubCategories as $subCategory)
                                    <option value="{{ $subCategory->id }}">{{ $subCategory->sub_category_name }}</option>
                                @endforeach
                            </select>
                            <span class="text-danger">{{ $errors->has('sub_category_name') ? $errors->first('sub_category_name') : ' ' }}</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3">Item Name</label>
                        <div class="col-md-9">
                            <input type="text" value="{{ $item->item_name }}" class="form-control" name="item_name"/>
                            <input type="hidden" value="{{ $item->id }}" class="form-control" name="item_id"/>
                            <span class="text-danger">{{ $errors->has('item_name') ? $errors->first('item_name') : ' ' }}</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3">Item Detail</label>
                        <div class="col-md-9">
                            <textarea class="form-control"  name="item_detail" id="editor">{{ $item->item_detail }}</textarea>
                            <span class="text-danger">{{ $errors->has('item_detail') ? $errors->first('item_detail') : ' ' }}</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3">Unit</label>
                        <div class="col-md-9">
                            <input type="number" value="{{ $item->unit }}" class="form-control" name="unit"/>
                            <span class="text-danger">{{ $errors->has('unit') ? $errors->first('unit') : ' ' }}</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3">Price</label>
                        <div class="col-md-9">
                            <input type="number" value="{{ $item->price }}" class="form-control" name="price"/>
                            <span class="text-danger">{{ $errors->has('price') ? $errors->first('price') : ' ' }}</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3">Photo</label>
                        <div class="col-md-9">
                            <input type="file" name="sub_category_photo" accept="image/*"/>
                            <br/>
                            <img src="{{ asset($item->image) }}" alt="" height="80" width="80"/>
                            <span class="text-danger">{{ $errors->has('sub_category_photo') ? $errors->first('sub_category_photo') : ' ' }}</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3">Publication status</label>
                        <div class="col-md-9 radio">
                            <label><input type="radio" name="publication_status" {{ $item->publication_status == 1 ? 'checked' : '' }} value="1"/> Published </label>
                            <label><input type="radio" name="publication_status" {{ $item->publication_status == 0 ? 'checked' : '' }} value="0"/> Unpublished </label><br/>
                            <span class="text-danger">{{ $errors->has('publication_status') ? $errors->first('publication_status') : ' ' }}</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-9 col-md-offset-3">
                            <input type="submit" name="btn" class="btn btn-success btn-block" value="Update Item Info"/>
                        </div>
                    </div>
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>

    <script>
        document.forms('editSubCategoryForm').element['sub_category_id'].value = '';

    </script>

@endsection













