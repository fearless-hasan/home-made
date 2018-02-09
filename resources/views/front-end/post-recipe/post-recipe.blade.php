@extends('front-end.master')
@section('title')
    Post-Recipe
    @endsection
@section('body')

    <div id="content" class="sub-content">
        <div class="container">
            <div class="row">
                <div class="span8">
                    <h3>Blog</h3>
                    <ul class="list-blog">
                        <li class="clearfix">
                            <h4>Fusce euismod consequat ante orem ipsum dolor sre namet</h4>
                            <span class="text-info">Monday, 13.04.2013, 11:50 am</span><br>
                            <img src="{{ asset('/') }}/front-end/img/page4-img1.jpg" alt="" />
                            <p class="text-info">Fusce euismod consequat ante orem ipsum dolor sit amet, consectetuer adipiscing elit.</p>
                            Sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate. Velit esse cillum dolore eu fugiat. Sit am.<br>
                            <a href="#" class="link">Read more</a>
                        </li>
                        <li class="clearfix">
                            <h4>Fusce euismod consequat ante orem ipsum dolor sre namet</h4>
                            <span class="text-info">Monday, 13.04.2013, 11:50 am</span><br>
                            <img src="{{ asset('/') }}/front-end/img/page4-img2.jpg" alt="" />
                            <p class="text-info">Fusce euismod consequat ante orem ipsum dolor sit amet, consectetuer adipiscing elit.</p>
                            Sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate. Velit esse cillum dolore eu fugiat. Sit am.<br>
                            <a href="#" class="link">Read more</a>
                        </li>
                    </ul>
                </div>
                <div class="span4">
                    <h3>Categories</h3>
                    <ul class="list">
                        <li><a href="#">Suspendisse sollicitudin velit sed leo</a></li>
                        <li><a href="#">Ut pharetra augue nec augue</a></li>
                        <li><a href="#">Nam elit agna,endrerit sit amet lroe porta</a></li>
                        <li><a href="#">Tincidunt ac, viverra sed, nulla</a></li>
                        <li><a href="#">Donec porta diam eu massa</a></li>
                        <li><a href="#">Quisque diam lorem interdum vitaedapib</a></li>
                        <li><a href="#">Scelerisque vitae, pede</a></li>
                        <li><a href="#">Donec eget tellus non erat seretse</a></li>
                        <li><a href="#">Lacinia fermentum doloerestur</a></li>
                    </ul>
                    <div class="border-2"></div>
                    <h3>Archives</h3>
                    <ul class="list">
                        <li><a href="#">November 2013</a></li>
                        <li><a href="#">October 2013</a></li>
                        <li><a href="#">September 2013</a></li>
                        <li><a href="#">August 2013</a></li>
                        <li><a href="#">July 2013</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    @endsection