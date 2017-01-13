<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Modern Business - Start Bootstrap Template</title>

{{--<!-- Bootstrap Core CSS -->--}}
{{--<link href="../../public/src/css/bootstrap.min.css" rel="stylesheet">--}}

{{--<!-- Custom CSS -->--}}
{{--<link href="../../public/src/css/modern-business.css" rel="stylesheet">--}}




<!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">




    <link rel="stylesheet" href="{{URL::to('src/css/bootstrap.css') }}">

    <link rel="stylesheet" href="{{URL::to('src/css/modern-business.css') }}">



    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script>jwplayer.key="WQZkXeGNutSQQYaDb9W0rWMpKoFjlI17zmK9Cg==";</script>

    <script type='text/javascript' src='https://content.jwplatform.com/libraries/42SqB9dO.js'></script>



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
            <a class="navbar-brand" href="index.html">Start Bootstrap</a>
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
                <li class="dropdown active">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Other Pages <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="full-width.html">Full Width Page</a>
                        </li>
                        <li class="active">
                            <a href="sidebar.html">Sidebar Page</a>
                        </li>
                        <li>
                            <a href="faq.html">FAQ</a>
                        </li>
                        <li>
                            <a href="404.html">404</a>
                        </li>
                        <li>
                            <a href="pricing.html">Pricing Table</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>

<!-- Page Content -->
<div class="container">

    <!-- Page Heading/Breadcrumbs -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Angular 1.5 & 2.0
                <small>Subheading</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href={{'/full-width.html'}}>Course Home</a>
                </li>
                <li class="active">Sidebar Page</li>
            </ol>
        </div>
    </div>
    <!-- /.row -->



    <!-- Content Row -->
    <div class="row">
        <!-- Sidebar Column -->
        <div class="col-md-3">
            <div class="list-group">
                <a href={{'/sidebar'}} class="list-group-item">Content & Objective</a>
                <a href="AngularLab1" class="list-group-item">Angular 1.5: Lab 1</a>
                <a href="services.html" class="list-group-item">Angular 1.5: Lab 2</a>
                <a href="contact.html" class="list-group-item">Angular 1.5: Lab 3</a>
                <a href="portfolio-1-col.html" class="list-group-item">Angular 1.5: Lab 4</a>
                <a href="portfolio-2-col.html" class="list-group-item">Angular 1.5: Lab 5</a>
                <a href="portfolio-3-col.html" class="list-group-item">Angular 1.5: Lab 6</a>
                <a href="portfolio-4-col.html" class="list-group-item">Angular 1.5: Lab 7</a>
                <a href="portfolio-item.html" class="list-group-item">Angular 1.5: Lab 8</a>
                <a href="blog-home-1.html" class="list-group-item">Angular 1.5: Lab 9</a>
                <a href="blog-home-2.html" class="list-group-item">Angular 1.5: Lab 10</a>
                <a href="blog-post.html" class="list-group-item">Angular 1.5: Lab 11</a>
                <a href="full-width.html" class="list-group-item">Angular 1.5: Lab 12</a>
                <a href="sidebar.html" class="list-group-item active">Angular 1.5: Lab 13</a>
                <a href="faq.html" class="list-group-item">Angular 2: Lab 1</a>
                <a href="404.html" class="list-group-item">Angular 2: Lab 2</a>
                <a href="pricing.html" class="list-group-item">Angular 2: Lab 3</a>
                <a href="pricing.html" class="list-group-item">Angular 2: Lab 4</a>
                <a href="pricing.html" class="list-group-item">Angular 2: Lab 5</a>

            </div>
        </div>
        <!-- Content Column -->
        <div class="col-md-9">
            <h2>Angular Lab1</h2>
            <p></p>
        </div>


        {{--<object data="http://www.youtube.com/embed/W7qWa52k-nE"--}}
                {{--width="560" height="315"></object>--}}

        <div id="bunny"></div>
        <script type="text/javascript">
            jwplayer("bunny").setup({
                file: "rtmp://siet50qt11cpm.cloudfront.net/cfx/st/mp4:lab1simplehelloworld20minutes.mp4",
                width: "720",
                height: "480",
                primary: "mp4"
            });
        </script>



    </div>











    <hr>

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

{{--<!-- jQuery -->--}}
{{--<script src="../../public/src/js/jquery.js"></script>--}}

{{--<!-- Bootstrap Core JavaScript -->--}}
{{--<script src="../../public/src/js/bootstrap.min.js"></script>--}}




<script type="text/javascript" src="{{URL::to('src/js/jquery.js')}}"></script>
<script type="text/javascript" src="{{URL::to('src/js/bootstrap.js')}}"></script>





</body>

</html>



<style type="text/css">
    .tg  {border-collapse:collapse;border-spacing:0;border-color:#999;border:none;}
    .tg td{font-family:Arial, sans-serif;font-size:14px;padding:17px 13px;border-style:solid;border-width:0px;overflow:hidden;word-break:normal;border-color:#999;color:#444;background-color:#F7FDFA;}
    .tg th{font-family:Arial, sans-serif;font-size:14px;font-weight:normal;padding:17px 13px;border-style:solid;border-width:0px;overflow:hidden;word-break:normal;border-color:#999;color:#fff;background-color:#26ADE4;}
    .tg .tg-lqy6{text-align:right;vertical-align:top}
    .tg .tg-yw4l{vertical-align:top}
    .tg .tg-9hbo{font-weight:bold;vertical-align:top}
</style>