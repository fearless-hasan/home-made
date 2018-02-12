@extends('admin.master')
@section('body')
    <br/>
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <h3 class="text-center text-success">{{ Session::get('message') }}</h3>
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <tr class="bg-primary">
                                <th>Sl No</th>
                                <th>Category Name</th>
                                <th>Category Photo</th>
                                <th>Category Detail</th>
                                <th>Publication Status</th>
                                <th>Action</th>
                            </tr>
                            @php($i=1)
                            @foreach($categories as $category)
                                <tr>
                                    <td>{{ $i++ }}</td>
                                    <td>{{ $category->category_name }}</td>

                                    <td>
                                        <img src="{{ asset($category->category_photo) }}" alt="" height="100" width="100">
                                    </td>
                                    <td>{{ $category->category_detail }}</td>
                                    <td class="{{ $category->publication_status == 0 ? "btn-success" : "btn-danger" }}">{{ $category->publication_status == 0 ? "Unpublished" : "Published" }}</td>
                                    <td>
                                        @if($category->publication_status == 1)
                                            <a href="{{ route('unpublish-category', ['id'=>$category->id]) }}" class="btn btn-info btn-xs">
                                                <span class="glyphicon glyphicon-arrow-up"></span>
                                            </a>
                                        @else
                                            <a href="{{ route('publish-category', ['id'=>$category->id]) }}" class="btn btn-warning btn-xs">
                                                <span class="glyphicon glyphicon-arrow-down"></span>
                                            </a>
                                        @endif
                                        <a href="{{ route('edit-category', ['id'=>$category->id]) }}" class="btn btn-success btn-xs">
                                            <span class="glyphicon glyphicon-edit"></span>
                                        </a>
                                        <a href="{{ route('delete-category', ['id'=>$category->id]) }}" class="btn btn-danger btn-xs">
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