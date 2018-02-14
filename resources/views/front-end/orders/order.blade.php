@extends('front-end.master')
@section('title')
    Order
@endsection
@section('body')
    <div id="content">
        <br>
        <br>
        <br>
        <div class="row">

                <ul id="" class="text">
                    <li class="span3">
                        <div>
                            <img alt="" src="{{ asset('/') }}/{{ $item->image }}">
                            <a href="#" class="caption">
                                <p class="text-info">{{ $item->item_name }}</p>
                                Adipisicing elit sed do eiusmod.<br>
                                {{ $item->item_detail }}
                            </a>
                        </div>
                    </li>
                </ul>
        </div>

            <div class="col-sm-3 center">
                <button class="btn-success btn-large">Order</button>
            </div>


        <br>
        <br>
        <br>
        @include('front-end.includes.follow-us')
    </div>

@endsection
