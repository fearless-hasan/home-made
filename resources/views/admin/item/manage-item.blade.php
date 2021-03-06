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
                                <th>Sub Categiry Name</th>
                                <th>Item Name</th>
                                <th>Item Detail</th>
                                <th>Unit</th>
                                <th>Price</th>
                                <th>Publication Status</th>
                                <th>Action</th>
                            </tr>
                            @php($i=1)
                            @foreach($items as $item)
                                <tr>
                                    <td>{{ $i++ }}</td>
                                    <td>{{ $item->sub_category_name }}</td>
                                    <td>{{ $item->item_name }}</td>
                                    <td>{{ $item->item_detail }}</td>
                                    <td>{{ $item->unit }}</td>
                                    <td>{{ $item->price }}</td>
                                    <td class="{{ $item->publication_status == 1 ? "btn-success" : "btn-danger" }}">{{ $item->publication_status == 0 ? "Unpublished" : "Published" }}</td>
                                    <td>
                                        @if($item->publication_status == 1)
                                            <a href="{{ route('unpublish-item', ['id' => $item->id]) }}" class="btn btn-info btn-xs">
                                                <span class="glyphicon glyphicon-arrow-up"></span>
                                            </a>
                                        @else
                                            <a href="{{ route('publish-item', ['id'=>$item->id]) }}" class="btn btn-warning btn-xs">
                                                <span class="glyphicon glyphicon-arrow-down"></span>
                                            </a>
                                        @endif
                                        <a href="{{ route('edit-item', ['id'=>$item->id]) }}" class="btn btn-success btn-xs">
                                            <span class="glyphicon glyphicon-edit"></span>
                                        </a>
                                        <a href="{{ route('delete-item', ['id'=>$item->id]) }}" class="btn btn-danger btn-xs">
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