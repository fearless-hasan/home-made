@extends('admin.master')
@section('body')
    <br/>
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <h3 class="text-center text-success" id="xyz">{{ Session::get('message') }}</h3>
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <tr class="bg-primary">
                                <th>Sl No</th>
                                <th>Sub Category Name</th>
                                <th>Sub Category Photo</th>
                                <th>Sub Category Detail</th>
                                <th>Publication Status</th>
                                <th>Action</th>
                            </tr>
                            @php($i=1)
                            @foreach($subCategories as $subCategory)
                                <tr>
                                    <td>{{ $i++ }}</td>
                                    <td>{{ $subcategory->sub_category_name }}</td>

                                    <td>
                                        <img src="{{ asset($subCategory->sub_category_photo) }}" alt="" height="100" width="100">
                                    </td>
                                    <td>{{ $subCategory->sub_category_detail }}</td>
                                    <td class="{{ $subcategory->publication_status == 0 ? "btn-success" : "btn-danger" }}">{{ $subCategory->publication_status == 0 ? "Unpublished" : "Published" }}</td>
                                    <td>
                                        @if($subCategory->publication_status == 1)
                                            <a href="{{ route('unpublish-category', ['id'=>$subCategory->id]) }}" class="btn btn-info btn-xs">
                                                <span class="glyphicon glyphicon-arrow-up"></span>
                                            </a>
                                        @else
                                            <a href="{{ route('publish-category', ['id'=>$subCategory->id]) }}" class="btn btn-warning btn-xs">
                                                <span class="glyphicon glyphicon-arrow-down"></span>
                                            </a>
                                        @endif
                                        <a href="{{ route('edit-category', ['id'=>$subCategory->id]) }}" class="btn btn-success btn-xs">
                                            <span class="glyphicon glyphicon-edit"></span>
                                        </a>
                                        <a href="{{ route('delete-category', ['id'=>$subCategory->id]) }}" class="btn btn-danger btn-xs">
                                            <span class="glyphicon glyphicon-trash"></span>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection