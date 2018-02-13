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
                                <th>Item Name</th>
                                <th>Name</th>
                                <th>Comment</th>
                                <th>Publication Status</th>
                                <th>Action</th>
                            </tr>
                            @php($i=1)
                            @foreach($subCategories as $subCategory)
                                <tr>
                                    <td>{{ $i++ }}</td>
                                    <td>{{ $review->item_name }}</td>
                                    <td>{{ $review->name }}</td>
                                    <td>{{ $review->comment }}</td>
                                    <td class="{{ $review->publication_status == 0 ? "btn-success" : "btn-danger" }}">{{ $review->publication_status == 0 ? "Unpublished" : "Published" }}</td>
                                    <td>
                                        @if($review->publication_status == 1)
                                            <a href="{{ route('unpublish-review', ['id'=>$review->id]) }}" class="btn btn-info btn-xs">
                                                <span class="glyphicon glyphicon-arrow-up"></span>
                                            </a>
                                        @else
                                            <a href="{{ route('publish-review', ['id'=>$review->id]) }}" class="btn btn-warning btn-xs">
                                                <span class="glyphicon glyphicon-arrow-down"></span>
                                            </a>
                                        @endif
                                        <a href="{{ route('edit-review', ['id'=>$review->id]) }}" class="btn btn-success btn-xs">
                                            <span class="glyphicon glyphicon-edit"></span>
                                        </a>
                                        <a href="{{ route('delete-review', ['id'=>$review->id]) }}" class="btn btn-danger btn-xs">
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