<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Modern Business - Start Bootstrap Template</title>

    <!-- Bootstrap Core CSS -->
    {{--<link href="../../public/css/bootstrap.min.css" rel="stylesheet">--}}

    <!-- Custom CSS -->
    {{--<link href="../../public/css/modern-business.css" rel="stylesheet">--}}

    <!-- Custom Fonts -->
    {{--<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">--}}


    {{--<link rel="stylesheet" href="{{ url('/') }}./css/bootstrap.css/bootstrap.min.css" type="text/css"/>--}}
    {{--<link rel="stylesheet" href="{{ url('/') }}./css/modern-business.css" type="text/css"/>--}}

    <link rel="stylesheet" href="{{URL::to('src/css/bootstrap.css') }}">

    <link rel="stylesheet" href="{{URL::to('src/css/modern-business.css') }}">


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

<!-- Navigation -->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.html">The Awesome </a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a href="about.html">About</a>
                </li>
                <li>
                    <a href="services.html">Services</a>
                </li>
                <li>
                    <a href="contact.html">Contact</a>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Portfolio <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="portfolio-1-col.html">1 Column Portfolio</a>
                        </li>
                        <li>
                            <a href="portfolio-2-col.html">2 Column Portfolio</a>
                        </li>
                        <li>
                            <a href="portfolio-3-col.html">3 Column Portfolio</a>
                        </li>
                        <li>
                            <a href="portfolio-4-col.html">4 Column Portfolio</a>
                        </li>
                        <li>
                            <a href="portfolio-item.html">Single Portfolio Item</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Blog <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="blog-home-1.html">Blog Home 1</a>
                        </li>
                        <li>
                            <a href="blog-home-2.html">Blog Home 2</a>
                        </li>
                        <li>
                            <a href="blog-post.html">Blog Post</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Other Pages <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="full-width.html">Full Width Page</a>
                        </li>
                        <li>
                            <a href="sidebar">Sidebar Page</a>
                        </li>
                        <li>
                            <a href="faq.html">FAQ</a>
                        </li>
                        <li>
                            <a href="404.html">404</a>
                        </li>
                        <li>
                            <a href="pricing">Pricing Table</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>

<!-- Header Carousel -->
<header id="myCarousel" class="carousel slide">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
        <div class="item active">
            {{--<div class="fill" style="background-image:url('http://placehold.it/1900x1080&text=Slide One');"></div>--}}
            <img src="{{asset('CarousePage1a.jpg')}}">
            <div class="carousel-caption">
                <h2>Caption 1</h2>
            </div>
        </div>
        <div class="item">
            {{--<div class="fill" style="background-image:url('http://placehold.it/1900x1080&text=Slide Two');"></div>--}}
            <img src="{{asset('CarouselPage3.jpg')}}">
            <div class="carousel-caption">
                <h2>Caption 2</h2>
            </div>
        </div>
        <div class="item">
            {{--<div class="fill" style="background-image:url('http://placehold.it/1900x1080&text=Slide Three');"></div>--}}
            <img src="{{asset('CarousePage2.jpg')}}">
            <div class="carousel-caption">
                <h2>Caption 3</h2>
            </div>
        </div>
    </div>

    <!-- Controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
        <span class="icon-prev"></span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
        <span class="icon-next"></span>
    </a>
</header>

<!-- Page Content -->
<div class="container">

    <!-- Marketing Icons Section -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                Courses
            </h1>
        </div>

    </div>
    <!-- /.row -->


    <!-- Course Icon-->


    <div class="row">

        <div class="col-sm-4 col-lg-4 col-md-4">
            <div class="thumbnail">
                <img src="{{asset('csharplogo1.jpg')}}">
                <div class="caption">
                    <h4 class="pull-right"></h4>
                    <h4><a href="#">C#</a>
                    </h4>
                    <p>See more snippets like this online store item at <a target="_blank" href="http://www.bootsnipp.com">Bootsnipp - http://bootsnipp.com</a>.</p>
                </div>
                {{--<div class="ratings">--}}
                    {{--<p class="pull-right">15 reviews</p>--}}
                    {{--<p>--}}
                        {{--<span class="glyphicon glyphicon-star"></span>--}}
                        {{--<span class="glyphicon glyphicon-star"></span>--}}
                        {{--<span class="glyphicon glyphicon-star"></span>--}}
                        {{--<span class="glyphicon glyphicon-star"></span>--}}
                        {{--<span class="glyphicon glyphicon-star"></span>--}}
                    {{--</p>--}}
                {{--</div>--}}
                <a href="#" class="btn btn-default">Preview</a>
            </div>
        </div>



        <div class="col-sm-4 col-lg-4 col-md-4">
            <div class="thumbnail">
                <img src="{{asset('VisualStudiotipsTricks.jpg')}}">
                {{--<img src="http://placehold.it/320x150" alt="">--}}
                <div class="caption">
                    <h4 class="pull-right"></h4>
                    <h4><a href="#">Visual Studio</a>
                    </h4>
                    <p>This is a short description. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
                {{--<div class="ratings">--}}
                    {{--<p class="pull-right">12 reviews</p>--}}
                    {{--<p>--}}
                        {{--<span class="glyphicon glyphicon-star"></span>--}}
                        {{--<span class="glyphicon glyphicon-star"></span>--}}
                        {{--<span class="glyphicon glyphicon-star"></span>--}}
                        {{--<span class="glyphicon glyphicon-star"></span>--}}
                        {{--<span class="glyphicon glyphicon-star-empty"></span>--}}
                    {{--</p>--}}
                {{--</div>--}}
                <a href="#" class="btn btn-default">Preview</a>
            </div>
        </div>
        <div class="col-sm-4 col-lg-4 col-md-4">
            <div class="thumbnail">
                {{--<img src="../../public/AngularIcon.jpg" alt="">--}}
                <img src="{{asset('Angular.jpg')}}">
                <div class="caption">
                    <h4 class="pull-right"></h4>
                    <h4><a href="sidebar">Angular</a>
                    </h4>
                    <p>This is a short description. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
                {{--<div class="ratings">--}}
                    {{--<p class="pull-right">31 reviews</p>--}}
                    {{--<p>--}}
                        {{--<span class="glyphicon glyphicon-star"></span>--}}
                        {{--<span class="glyphicon glyphicon-star"></span>--}}
                        {{--<span class="glyphicon glyphicon-star"></span>--}}
                        {{--<span class="glyphicon glyphicon-star"></span>--}}
                        {{--<span class="glyphicon glyphicon-star-empty"></span>--}}
                    {{--</p>--}}
                {{--</div>--}}
                <a href="sidebar" class="btn btn-default">Preview</a>
            </div>
        </div>

        <div class="col-sm-4 col-lg-4 col-md-4">
            <div class="thumbnail">
                {{--<img src="http://placehold.it/320x150" alt="">--}}
                <img src="{{asset('UMLIcon.jpg')}}">
                <div class="caption">
                    <h4 class="pull-right"></h4>
                    <h4><a href="#">Unified Modelling Language</a>
                    </h4>
                    <p>This is a short description. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
                {{--<div class="ratings">--}}
                    {{--<p class="pull-right">6 reviews</p>--}}
                    {{--<p>--}}
                        {{--<span class="glyphicon glyphicon-star"></span>--}}
                        {{--<span class="glyphicon glyphicon-star"></span>--}}
                        {{--<span class="glyphicon glyphicon-star"></span>--}}
                        {{--<span class="glyphicon glyphicon-star-empty"></span>--}}
                        {{--<span class="glyphicon glyphicon-star-empty"></span>--}}
                    {{--</p>--}}
                {{--</div>--}}
                <a href="#" class="btn btn-default">Preview</a>
            </div>
        </div>

        <div class="col-sm-4 col-lg-4 col-md-4">
            <div class="thumbnail">
                {{--<img src="http://placehold.it/320x150" alt="">--}}
                <img src="{{asset('OOPS.jpg')}}">
                <div class="caption">
                    <h4 class="pull-right"></h4>
                    <h4><a href="#">Object Oriented Programming</a>
                    </h4>
                    <p>This is a short description. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
                {{--<div class="ratings">--}}
                    {{--<p class="pull-right">18 reviews</p>--}}
                    {{--<p>--}}
                        {{--<span class="glyphicon glyphicon-star"></span>--}}
                        {{--<span class="glyphicon glyphicon-star"></span>--}}
                        {{--<span class="glyphicon glyphicon-star"></span>--}}
                        {{--<span class="glyphicon glyphicon-star"></span>--}}
                        {{--<span class="glyphicon glyphicon-star-empty"></span>--}}
                    {{--</p>--}}
                {{--</div>--}}
                <a href="#" class="btn btn-default">Preview</a>
            </div>
        </div>

        <div class="col-sm-4 col-lg-4 col-md-4">
            <div class="thumbnail">
                <img src="{{asset('sqlserveer2012.jpg')}}">
                {{--<img src="http://placehold.it/320x150" alt="">--}}
                <div class="caption">
                    <h4 class="pull-right"></h4>
                    <h4><a href="#">SQL Server training</a>
                    </h4>
                    <p>This is a short description. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
                {{--<div class="ratings">--}}
                    {{--<p class="pull-right">18 reviews</p>--}}
                    {{--<p>--}}
                        {{--<span class="glyphicon glyphicon-star"></span>--}}
                        {{--<span class="glyphicon glyphicon-star"></span>--}}
                        {{--<span class="glyphicon glyphicon-star"></span>--}}
                        {{--<span class="glyphicon glyphicon-star"></span>--}}
                        {{--<span class="glyphicon glyphicon-star-empty"></span>--}}
                    {{--</p>--}}
                {{--</div>--}}
                <a href="#" class="btn btn-default">Preview</a>

            </div>
        </div>




        <div class="col-sm-4 col-lg-4 col-md-4">
            <div class="thumbnail">
                <img src="{{asset('MSBI.jpg')}}">
                {{--<img src="http://placehold.it/320x150" alt="">--}}
                <div class="caption">
                    <h4 class="pull-right"></h4>
                    <h4><a href="#">Fourth Product</a>
                    </h4>
                    <p>This is a short description. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
                {{--<div class="ratings">--}}
                {{--<p class="pull-right">6 reviews</p>--}}
                {{--<p>--}}
                {{--<span class="glyphicon glyphicon-star"></span>--}}
                {{--<span class="glyphicon glyphicon-star"></span>--}}
                {{--<span class="glyphicon glyphicon-star"></span>--}}
                {{--<span class="glyphicon glyphicon-star-empty"></span>--}}
                {{--<span class="glyphicon glyphicon-star-empty"></span>--}}
                {{--</p>--}}
                {{--</div>--}}
                <a href="#" class="btn btn-default">Preview</a>
            </div>
        </div>

        <div class="col-sm-4 col-lg-4 col-md-4">
            <div class="thumbnail">
                <img src="{{asset('MVC5.jpg')}}">
                {{--<img src="http://placehold.it/320x150" alt="">--}}
                <div class="caption">
                    <h4 class="pull-right"></h4>
                    <h4><a href="#">Fifth Product</a>
                    </h4>
                    <p>This is a short description. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
                {{--<div class="ratings">--}}
                {{--<p class="pull-right">18 reviews</p>--}}
                {{--<p>--}}
                {{--<span class="glyphicon glyphicon-star"></span>--}}
                {{--<span class="glyphicon glyphicon-star"></span>--}}
                {{--<span class="glyphicon glyphicon-star"></span>--}}
                {{--<span class="glyphicon glyphicon-star"></span>--}}
                {{--<span class="glyphicon glyphicon-star-empty"></span>--}}
                {{--</p>--}}
                {{--</div>--}}
                <a href="#" class="btn btn-default">Preview</a>
            </div>
        </div>

        <div class="col-sm-4 col-lg-4 col-md-4">
            <div class="thumbnail">
                <img src="{{asset('Sharepoint.jpg')}}">
                {{--<img src="http://placehold.it/320x150" alt="">--}}
                <div class="caption">
                    <h4 class="pull-right"></h4>
                    <h4><a href="#">Fifth Product</a>
                    </h4>
                    <p>This is a short description. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
                {{--<div class="ratings">--}}
                {{--<p class="pull-right">18 reviews</p>--}}
                {{--<p>--}}
                {{--<span class="glyphicon glyphicon-star"></span>--}}
                {{--<span class="glyphicon glyphicon-star"></span>--}}
                {{--<span class="glyphicon glyphicon-star"></span>--}}
                {{--<span class="glyphicon glyphicon-star"></span>--}}
                {{--<span class="glyphicon glyphicon-star-empty"></span>--}}
                {{--</p>--}}
                {{--</div>--}}
                <a href="#" class="btn btn-default">Preview</a>

            </div>
        </div>






    </div>

    <!-- End of course Icon -->




    <!-- Features Section -->
    <div class="row">
        <div class="col-lg-12">
            <h2 class="page-header">The Awesome Programmer package </h2>
        </div>
        <div class="col-md-6">
            <p>The Awesome Programmer package includes </p>
            <ul>
                <li><strong>C# </strong>
                </li>
                <li><strong>Angular 1.5 & 2.0 </strong>
                </li>
                <li><strong> MSBI</strong>
                </li>

            </ul>
            <p>The entire package includes over 900 hours and additional interview materials to ensure you are prepared for the job market, join now for the success of your future for a low price of just $8.99 per month</p>
        </div>
        <div class="col-md-6">
            {{--<img class="img-responsive" src="http://placehold.it/700x450" alt="">--}}
            <a href="pricing">  <img  class="img-responsive" src="{{asset('BuyMeNowLogo.jpg')}}"></a>

        </div>
    </div>
    <!-- /.row -->




        <hr>

    {{--<!-- Call to Action Section -->--}}
    {{--<div class="well">--}}
        {{--<div class="row">--}}
            {{--<div class="col-md-8">--}}
                {{--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias, expedita, saepe, vero rerum deleniti beatae veniam harum neque nemo praesentium cum alias asperiores commodi.</p>--}}
            {{--</div>--}}
            {{--<div class="col-md-4">--}}
                {{--<a class="btn btn-lg btn-default btn-block" href="#">Call to Action</a>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}

    {{--<hr>--}}


    <div class="container">




    <div class="row">
        <div class="col-md-8">
            <h3>Send us a Message</h3>
            <form name="sentMessage" id="contactForm" novalidate>
                <div class="control-group form-group">
                    <div class="controls">
                        <label>Full Name:</label>
                        <input type="text" class="form-control" id="name" required data-validation-required-message="Please enter your name.">
                        <p class="help-block"></p>
                    </div>
                </div>
                <div class="control-group form-group">
                    <div class="controls">
                        <label>Phone Number:</label>
                        <input type="tel" class="form-control" id="phone" required data-validation-required-message="Please enter your phone number.">
                    </div>
                </div>
                <div class="control-group form-group">
                    <div class="controls">
                        <label>Email Address:</label>
                        <input type="email" class="form-control" id="email" required data-validation-required-message="Please enter your email address.">
                    </div>
                </div>
                <div class="control-group form-group">
                    <div class="controls">
                        <label>Message:</label>
                        <textarea rows="10" cols="100" class="form-control" id="message" required data-validation-required-message="Please enter your message" maxlength="999" style="resize:none"></textarea>
                    </div>
                </div>
                <div id="success"></div>
                <!-- For success/fail messages -->
                <button type="submit" class="btn btn-primary">Send Message</button>
            </form>
        </div>

        </div>
    </div>


    <div class="row">
        <div class="col-md-4">
            <h3>Contact Details</h3>
            <p>
                3481 Melrose Place<br>Beverly Hills, CA 90210<br>
            </p>
            <p><i class="fa fa-phone"></i>
                <abbr title="Phone">P</abbr>: (123) 456-7890</p>
            <p><i class="fa fa-envelope-o"></i>
                <abbr title="Email">E</abbr>: <a href="mailto:name@example.com">name@example.com</a>
            </p>
            <p><i class="fa fa-clock-o"></i>
                <abbr title="Hours">H</abbr>: Monday - Friday: 9:00 AM to 5:00 PM</p>
            <ul class="list-unstyled list-inline list-social-icons">
                <li>
                    <a href="#"><i class="fa fa-facebook-square fa-2x"></i></a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-linkedin-square fa-2x"></i></a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-twitter-square fa-2x"></i></a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-google-plus-square fa-2x"></i></a>
                </li>
            </ul>
        </div>
    </div>








    <!-- Footer -->
    <footer>
        <div class="row">
            <div class="col-lg-12">
                <p>Copyright &copy; Your Website 2014</p>
            </div>
        </div>
    </footer>

</div>
<!-- /.container -->

<!-- jQuery -->
{{--<script src="../../public/src/js/jquery.js"></script>--}}

{{--<link rel="stylesheet" href="{{URL::to('src/js/jquery.js') }}">--}}

<script type="text/javascript" src="{{URL::to('src/js/jquery.js')}}"></script>



<!-- Bootstrap Core JavaScript -->
{{--<script src="../../public/src/js/bootstrap.min.js"></script>--}}


<script type="text/javascript" src="{{URL::to('src/js/bootstrap.js')}}"></script>



<!-- Script to Activate the Carousel -->
<script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
</script>

</body>

</html>
