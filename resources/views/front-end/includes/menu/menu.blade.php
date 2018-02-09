
<div class="container">
    <div class="row">
        <div class="span12 header-block">
            <h1 class="brand"><a href="index.html"><img src="{{ asset('/') }}/front-end/img/logo.png" alt="Cooking Recipes"></a></h1>
            <div class="navbar navbar_ clearfix">
                <div class="navbar-inner">
                    <div class="nav-collapse nav-collapse_ collapse">
                        <ul class="nav sf-menu clearfix">
                            <li class="active"><a href="{{route('/')}}">Home</a></li>
                            <li class="sub-menu"><a href="{{route('news')}}">News</a>
                                <ul>
                                    <li><a href="#">Lorem ipsum</a></li>
                                    <li><a href="#">Dolor sit amet</a></li>
                                    <li><a href="#">Conse ctetur</a></li>
                                    <li><a href="#">Dipisicing</a></li>
                                    <li><a href="#">Eeliteiusmod</a></li>
                                </ul>
                            </li>
                            <li><a href="{{route('new-recipe')}}">New recipes</a></li>
                            <li><a href="{{route('post-recipe')}}">Post recipe</a></li>
                            <li><a href="{{route('contacts')}}">Contacts</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>