@extends('front-end.master')
@section('title')
    News
    @endsection
@section('body')
    <div id="content" class="sub-content">
        <div class="container">
            <div class="row">
                <div class="span8">
                    <h3>Hot news</h3>
                    <ul class="list-news">
                        <li>
                            <img src="{{ asset('/') }}/front-end/img/page2-img1.jpg" alt="">
                            <p class="text-info"><a href="#" class="text-info">June 25th, 2013</a></p>
                            Sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate. Velit esse cillum dolore eu fugiat. Sit amet conse ctetur adipis.<br>
                            <a href="#" class="link">Read more</a>
                        </li>
                        <li>
                            <img src="{{ asset('/') }}/front-end/img/page2-img2.jpg" alt="">
                            <p class="text-info"><a href="#" class="text-info">June 25th, 2013</a></p>
                            Sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate. Velit esse cillum dolore eu fugiat. Sit amet conse ctetur adipis.<br>
                            <a href="#" class="link">Read more</a>
                        </li>
                        <li>
                            <img src="{{ asset('/') }}/front-end/img/page2-img3.jpg" alt="">
                            <p class="text-info"><a href="#" class="text-info">June 25th, 2013</a></p>
                            Sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate. Velit esse cillum dolore eu fugiat. Sit amet conse ctetur adipis.<br>
                            <a href="#" class="link">Read more</a>
                        </li>
                        <li>
                            <img src="{{ asset('/') }}/front-end/img/page2-img4.jpg" alt="">
                            <p class="text-info"><a href="#" class="text-info">June 25th, 2013</a></p>
                            Sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate. Velit esse cillum dolore eu fugiat. Sit amet conse ctetur adipis.<br>
                            <a href="#" class="link">Read more</a>
                        </li>
                    </ul>
                </div>
                <div class="span4">
                    <h3>News of the week</h3>
                    <ul class="list-advantages">
                        <li>
                            <span class="badge">20<span>June</span></span>
                            <div><p class="text-info"><a href="#" class="text-info">Vestibulum iaculis lacinia est roin
                                        dictum elementum velit.</a></p>Sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua<a href="#"><u>...</u></a></div>
                        </li>
                        <li>
                            <span class="badge">18<span>June</span></span>
                            <div><p class="text-info"><a href="#" class="text-info">Culis lacinia est roin por lore ater
                                        dictum elementum velit.</a></p>Sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua<a href="#"><u>...</u></a></div>
                        </li>
                        <li>
                            <span class="badge">16<span>June</span></span>
                            <div><p class="text-info"><a href="#" class="text-info">Vestibulum iaculis lacinia est roin
                                        dictum elementum velit.</a></p>Sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua<a href="#"><u>...</u></a></div>
                        </li>
                        <li>
                            <span class="badge">14<span>June</span></span>
                            <div><p class="text-info"><a href="#" class="text-info">Culis lacinia est roin por lore ater
                                        dictum elementum velit.</a></p>Sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua<a href="#"><u>...</u></a></div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    @endsection