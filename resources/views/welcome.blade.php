<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Fake News Detector | FYP</title>

    <!-- Bootstrap core CSS -->
    <link href="../resources/views/mainpage/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../resources/views/mainpage/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="../resources/views/mainpage/css/elusive-webfont.css">
    <link href="../resources/views/mainpage/css/animate.css" rel="stylesheet">

    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,700,300italic,400italic' rel='stylesheet' type='text/css'>

    <script src="../resources/views/mainpage/js/jquery.min.js"></script>
    <script type="text/javascript" src="../resources/views/mainpage/js/modernizr.custom.js"></script>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="../resources/views/mainpage/js/html5shiv.js"></script>
    <script src="../resources/views/mainpage/js/respond.min.js"></script>
    <![endif]-->
</head>
<body data-spy="scroll" data-offset="0" data-target="#navbar-main">


<div id="navbar-main">
    <!-- Fixed navbar -->
    <div class="navbar navbar-default navbar-fixed-top" >
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <i class="el-icon-lines"></i>
                </button>
                <a class="navbar-brand hidden-xs hidden-sm" href="#home"><h1> Fake News</h1></a>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
{{--                    <li><a href="#home" class="smoothScroll">Home</a></li>--}}
                    <li> <a href="#about" class="smoothScroll">About</a></li>
                    <li> <a href="#service" class="smoothScroll">Services</a></li>
                    <li> <a href="#team" class="smoothScroll">Team</a></li>
                    <li> <a href="#portfolio" class="smoothScroll">Portfolio</a></li>
                    <li> <a href="#blog" class="smoothScroll">Blog</a></li>
                    <li> <a href="#contact" class="smoothScroll">Contact</a></li>
                    @if (Route::has('login'))
{{--                        <div class="top-right links">--}}
                            @auth
                                <li><a class="smoothScroll" href="{{ url('/home') }}">Dashboard</a></li>
                            @else
                               <li> <a class="smoothScroll" href="{{ route('login') }}">Login</a></li>

                                @if (Route::has('register'))
                                   <li> <a class="smoothScroll" href="{{ route('register') }}">Register</a></li>
                                @endif
                            @endauth
{{--                        </div>--}}
                    @endif
                </ul>
            </div><!--/.nav-collapse -->
        </div>
    </div>
</div>



<!-- ==== HEADERWRAP ==== -->
<div id="headerwrap" id="home" name="home" >
    <header class="clearfix" style="
    background-color: black;">
        <h1 class="animated bounceIn">Fake News Detector</h1>
        <p class="animated slideInLeft">Let Us Help You Be Something Awesome.</p>
        <p class="animated slideInRight">We Are Here For You.</p>
        <a href="#about" class="btn homebtn smoothScroll">Learn More <i class="el-icon-chevron-down homeicon"></i></a>
    </header>
</div><!-- /headerwrap -->

<!--  SERVICES -->
<div class="greywrap">
    <div class="container" id="about" name="about">
        <div class="row">
            <div class="col-md-4 col-sm-4 col-xs-6 callout">
                <div class="col-md-3 service-icon-wrapper img-circle">
                    <i class="icon el-icon-time"></i>
                </div>
                <div class="col-md-9 fade-up service-info">
                    <h2>Were Fast</h2>
                    <p>Offending belonging promotion provision an be oh consulted ourselves it. Blessing welcomed ladyship she met humoured sir breeding her. Six curiosity day assurance bed necessary.</p>
                </div>
            </div>

            <div class="col-md-4 col-sm-4 col-xs-6 callout">
                <div class="col-md-3 service-icon-wrapper img-circle">
                    <i class="icon el-icon-star"></i>
                </div>
                <div class="col-md-9 fade-up service-info">
                    <h2>Were The Best</h2>
                    <p>Certain but she but shyness why cottage. Gay the put instrument sir entreaties affronting. Pretended exquisite see cordially the you.</p>
                </div>
            </div>

            <div class="col-md-4 col-sm-4 col-xs-6 callout">
                <div class="col-md-3 service-icon-wrapper img-circle">
                    <i class="icon el-icon-user"></i>
                </div>
                <div class="col-md-9 fade-up service-info">
                    <div class="fade-up">
                        <h2>Hire Us Today</h2>
                        <p>Parlors men express had private village man. Discovery moonlight recommend all one not. Indulged to answered prospect it bachelor is he bringing shutters. Pronounce forfeited mr direction oh he dashwoods ye unwilling.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- ==== ABOUT ==== -->
<div class="container" id="about" name="about">
    <div class="row white">
        <h1 class="fade-down centered">A LITTLE ABOUT US</h1>
        <hr>

        <div class="fade-up col-md-6">
            <p>Insipidity the sufficient discretion imprudence resolution sir him decisively. Proceed how any engaged visitor. Explained propriety off out perpetual his you. Feel sold off felt nay rose met you. We so entreaties cultivated astonished is. Was sister for few longer mrs sudden talent become. Done may bore quit evil old mile. If likely am of beauty tastes. </p>
        </div><!-- col-md-6 -->

        <div class="fade-up col-md-6">
            <p>Arrived totally in as between private. Favour of so as on pretty though elinor direct. Reasonable estimating be alteration we themselves entreaties me of reasonably. Direct wished so be expect polite valley. Whose asked stand it sense no spoil to. Prudent you too his conduct feeling limited and. Side he lose paid as hope so face upon be. Goodness did suitable learning put. </p>
        </div><!-- col-md-6 -->
    </div><!-- row -->
</div><!-- container -->


<!-- ==== SECTION DIVIDER2 -->
<section class="section-divider textdivider divider2">
    <div class="container">
        <h1 class="fade-down">HERE IS THE PROOF</h1>
        <hr>
        <div class="col-md-3">
            <span class="counter">100</span>
            <span class="counter-desc">Percent Focus</span>
        </div>
        <div class="col-md-3">
            <span class="counter">1000</span>
            <span class="counter-desc">Minimum Saving</span>
        </div>
        <div class="col-md-3">
            <span class="counter">10000</span>
            <span class="counter-desc">Ideas</span>
        </div>
        <div class="col-md-3">
            <span class="counter">100000</span>
            <span class="counter-desc">Profit</span>
        </div>
    </div><!-- container -->
</section><!-- section -->




<!-- ==== TEAM MEMBERS ==== -->
<div class="container section" id="team" name="team">
    <br>
    <div class="row white centered">
        <h1 class="fade-down centered">MEET THE DELTA TEAM</h1>
        <hr class="fade-down title-mb">
        <div class="col-md-4 ">
            <div class="col-md-3 col-sm-3 col-xs-3 fade-down team-image-wrapper">
                <img class="img team-image" src="../resources/views/mainpage/images/team01.jpg" alt="">
                <a href="#" class="team-social twitter"><i class="el-icon-twitter"></i></a>
                <a href="#" class="team-social facebook"><i class="el-icon-facebook"></i></a>
                <a href="#" class="team-social flickr"><i class="el-icon-flickr"></i></a>
            </div>
            <div class="col-md-9 col-sm-9 col-xs-9 fade-up team-info">
                <h4>Danny Jones</h4>
                <p>TRemain valley who mrs uneasy remove wooded him you. Her questions favourite him concealed. We to wife face took he. The taste begin early old why since dried can first. Prepared as or humoured formerly. Evil mrs true get post. Express village evening prudent my as ye hundred forming..</p>
            </div>
        </div>

        <div class="col-md-4">
            <div class="col-md-3 col-sm-3 col-xs-3 fade-down team-image-wrapper">
                <img class="img team-image" src="../resources/views/mainpage/images/team02.jpg" alt="">
                <a href="#" class="team-social twitter"><i class="el-icon-twitter"></i></a>
                <a href="#" class="team-social facebook"><i class="el-icon-facebook"></i></a>
                <a href="#" class="team-social flickr"><i class="el-icon-flickr"></i></a>
            </div>
            <div class="col-md-9 col-sm-9 col-xs-9 fade-up team-info">
                <h4>John Smith</h4>
                <p>Smile spoke total few great had never their too. Amongst moments do in arrived at my replied. Fat weddings servants but man believed prospect. Companions understood is as especially pianoforte connection introduced.</p>
            </div>
        </div>

        <div class="col-md-4">
            <div class="col-md-3 col-sm-3 col-xs-3 fade-down team-image-wrapper">
                <img class="img team-image" src="../resources/views/mainpage/images/team03.jpg" alt="">
                <a href="#" class="team-social twitter"><i class="el-icon-twitter"></i></a>
                <a href="#" class="team-social facebook"><i class="el-icon-facebook"></i></a>
                <a href="#" class="team-social flickr"><i class="el-icon-flickr"></i></a>
            </div>
            <div class="col-md-9 col-sm-9 col-xs-9 fade-up team-info">
                <h4>Lowri Roberts</h4>
                <p>In felicity up to graceful mistaken horrible consider. Abode never think to at. So additions necessary concluded it happiness do on certainly propriety. On in green taken do offer witty of.</p>
            </div>
        </div>

    </div><!-- row -->
</div><!-- container -->

<!-- ==== GREYWRAP ==== -->
<div class="greywrap">
    <div class="container">
        <div class="row">
            <div class="col-md-6 centered fade-up">
                <img class="img-responsive" src="../resources/views/mainpage/images/macbook.png" align="">
            </div>
            <div class="col-md-6 fade-down">
                <h2>Could You Be The Next Delta Ninja?</h2>
                <p>Often voice and the spoke. No shewing fertile village equally prepare up females as an. That do an case an what plan hour of paid. Invitation is unpleasant astonished preference attachment friendship on</p>
                <p><a class="btn btn-success">Contact Us</a></p>
            </div>
        </div><!-- row -->
    </div>
    <br>
    <br>
</div><!-- greywrap -->

<!-- ==== SECTION DIVIDER3 -->
<section class="section-divider textdivider divider3">
    <div class="container">
        <h1 class="fade-down">DELTA TEAM WILL HELP YOU GROW</h1>
        <hr>
        <p class="fade-up">Bringing him smallest met few now returned surprise learning jennings. Objection delivered eagerness he exquisite at do in. Warmly up he nearer mr merely me.</p>
    </div><!-- container -->
</section><!-- section -->

<!-- ==== PORTFOLIO ==== -->
<div id="portfolio" name="portfolio">
    <br>
    <div class="row white">
        <h1 class="fade-down centered">SOME OF WHAT WE HAVE DONE</h1>
        <hr class="fade-down title-mb">
    </div><!-- /row -->
    <div class="">
        <div class="">

            <div id="portfolio-carousel">
                <!-- PORTFOLIO IMAGE 1 -->
                <div class="fade-up col-md-4 ">
                    <div class="grid mask">
                        <figure>
                            <img class="img-responsive" src="../resources/views/mainpage/images/folio01.jpg" alt="">
                            <figcaption>
                                <h5>PROJECT ONE</h5>
                                <a href="single-project.html" class="btn btn-primary btn-lg"><i class="el-icon-link"></i></a>
                                <a href="../resources/views/mainpage/images/folio01.jpg" class="btn btn-primary btn-lg launch-lb"><i class="el-icon-zoom-in"></i></a>
                            </figcaption><!-- /figcaption -->
                        </figure><!-- /figure -->
                    </div><!-- /grid-mask -->
                </div><!-- /col -->

                <!-- PORTFOLIO IMAGE 2 -->
                <div class="fade-up col-md-4">
                    <div class="grid mask">
                        <figure>
                            <img class="img-responsive" src="../resources/views/mainpage/images/folio02.jpg" alt="">
                            <figcaption>
                                <h5>PROJECT TWO</h5>
                                <a href="../resources/views/mainpage/single-project.html" class="btn btn-primary btn-lg"><i class="el-icon-link"></i></a>
                                <a href="../resources/views/mainpage/images/folio01.jpg" class="btn btn-primary btn-lg launch-lb"><i class="el-icon-zoom-in"></i></a>
                            </figcaption><!-- /figcaption -->
                        </figure><!-- /figure -->
                    </div><!-- /grid-mask -->
                </div><!-- /col -->

                <!-- PORTFOLIO IMAGE 3 -->
                <div class="fade-up col-md-4">
                    <div class="grid mask">
                        <figure>
                            <img class="../resources/views/mainpage/img-responsive" src="../resources/views/mainpage/images/folio03.jpg" alt="">
                            <figcaption>
                                <h5>PROJECT THREE</h5>
                                <a href="single-project.html" class="btn btn-primary btn-lg"><i class="el-icon-link"></i></a>
                                <a href="../resources/views/mainpage/images/folio01.jpg" class="btn btn-primary btn-lg launch-lb"><i class="el-icon-zoom-in"></i></a>
                            </figcaption><!-- /figcaption -->
                        </figure><!-- /figure -->
                    </div><!-- /grid-mask -->
                </div><!-- /col -->

                <!-- PORTFOLIO IMAGE 4 -->
                <div class="fade-up col-md-4 ">
                    <div class="grid mask">
                        <figure>
                            <img class="img-responsive" src="../resources/views/mainpage/images/folio04.jpg" alt="">
                            <figcaption>
                                <h5>PROJECT FOUR</h5>
                                <a href="single-project.html" class="btn btn-primary btn-lg"><i class="el-icon-link"></i></a>
                                <a href="../resources/views/mainpage/images/folio01.jpg" class="btn btn-primary btn-lg launch-lb"><i class="el-icon-zoom-in"></i></a>
                            </figcaption><!-- /figcaption -->
                        </figure><!-- /figure -->
                    </div><!-- /grid-mask -->
                </div><!-- /col -->

                <!-- PORTFOLIO IMAGE 5 -->
                <div class="fade-up col-md-4">
                    <div class="grid mask">
                        <figure>
                            <img class="img-responsive" src="../resources/views/mainpage/images/folio05.jpg" alt="">
                            <figcaption>
                                <h5>PROJECT FIVE</h5>
                                <a href="../resources/views/mainpage/single-project.html" class="btn btn-primary btn-lg"><i class="el-icon-link"></i></a>
                                <a href="../resources/views/mainpage/images/folio01.jpg" class="btn btn-primary btn-lg launch-lb"><i class="el-icon-zoom-in"></i></a>
                            </figcaption><!-- /figcaption -->
                        </figure><!-- /figure -->
                    </div><!-- /grid-mask -->
                </div><!-- /col -->

                <!-- PORTFOLIO IMAGE 6 -->
                <div class="fade-up col-md-4">
                    <div class="grid mask">
                        <figure>
                            <img class="img-responsive" src="../resources/views/mainpage/images/folio06.jpg" alt="">
                            <figcaption>
                                <h5>PROJECT SIX</h5>
                                <a href="single-project.html" class="btn btn-primary btn-lg"><i class="el-icon-link"></i></a>
                                <a href="../resources/views/mainpage/images/folio01.jpg" class="btn btn-primary btn-lg launch-lb"><i class="el-icon-zoom-in"></i></a>
                            </figcaption><!-- /figcaption -->
                        </figure><!-- /figure -->
                    </div><!-- /grid-mask -->
                </div><!-- /col -->

                <!-- PORTFOLIO IMAGE 1 -->
                <div class="fade-up col-md-4 ">
                    <div class="grid mask">
                        <figure>
                            <img class="img-responsive" src="../resources/views/mainpage/images/folio01.jpg" alt="">
                            <figcaption>
                                <h5>PROJECT SEVEN</h5>
                                <a href="single-project.html" class="btn btn-primary btn-lg"><i class="el-icon-link"></i></a>
                                <a href="../resources/views/mainpage/images/folio01.jpg" class="btn btn-primary btn-lg launch-lb"><i class="el-icon-zoom-in"></i></a>
                            </figcaption><!-- /figcaption -->
                        </figure><!-- /figure -->
                    </div><!-- /grid-mask -->
                </div><!-- /col -->

                <!-- PORTFOLIO IMAGE 2 -->
                <div class="fade-up col-md-4">
                    <div class="grid mask">
                        <figure>
                            <img class="img-responsive" src="../resources/views/mainpage/images/folio02.jpg" alt="">
                            <figcaption>
                                <h5>PROJECT EIGHT</h5>
                                <a href="single-project.html" class="btn btn-primary btn-lg"><i class="el-icon-link"></i></a>
                                <a href="../resources/views/mainpage/images/folio01.jpg" class="btn btn-primary btn-lg launch-lb"><i class="el-icon-zoom-in"></i></a>
                            </figcaption><!-- /figcaption -->
                        </figure><!-- /figure -->
                    </div><!-- /grid-mask -->
                </div><!-- /col -->

                <!-- PORTFOLIO IMAGE 3 -->
                <div class="fade-up col-md-4">
                    <div class="grid mask">
                        <figure>
                            <img class="img-responsive" src="../resources/views/mainpage/images/folio03.jpg" alt="">
                            <figcaption>
                                <h5>PROJECT NINE</h5>
                                <a href="single-project.html" class="btn btn-primary btn-lg"><i class="el-icon-link"></i></a>
                                <a href="../resources/views/mainpage/images/folio01.jpg" class="btn btn-primary btn-lg launch-lb"><i class="el-icon-zoom-in"></i></a>
                            </figcaption><!-- /figcaption -->
                        </figure><!-- /figure -->
                    </div><!-- /grid-mask -->
                </div><!-- /col -->

                <!-- PORTFOLIO IMAGE 4 -->
                <div class="fade-up col-md-4 ">
                    <div class="grid mask">
                        <figure>
                            <img class="img-responsive" src="../resources/views/mainpage/images/folio04.jpg" alt="">
                            <figcaption>
                                <h5>PROJECT TEN</h5>
                                <a href="single-project.html" class="btn btn-primary btn-lg"><i class="el-icon-link"></i></a>
                                <a href="../resources/views/mainpage/images/folio01.jpg" class="btn btn-primary btn-lg launch-lb"><i class="el-icon-zoom-in"></i></a>
                            </figcaption><!-- /figcaption -->
                        </figure><!-- /figure -->
                    </div><!-- /grid-mask -->
                </div><!-- /col -->

                <!-- PORTFOLIO IMAGE 5 -->
                <div class="fade-up col-md-4">
                    <div class="grid mask">
                        <figure>
                            <img class="img-responsive" src="../resources/views/mainpage/images/folio05.jpg" alt="">
                            <figcaption>
                                <h5>PROJECT ELEVEN</h5>
                                <a href="single-project.html" class="btn btn-primary btn-lg"><i class="el-icon-link"></i></a>
                                <a href="../resources/views/mainpage/images/folio01.jpg" class="btn btn-primary btn-lg launch-lb"><i class="el-icon-zoom-in"></i></a>
                            </figcaption><!-- /figcaption -->
                        </figure><!-- /figure -->
                    </div><!-- /grid-mask -->
                </div><!-- /col -->

                <!-- PORTFOLIO IMAGE 6 -->
                <div class="fade-up col-md-4">
                    <div class="grid mask">
                        <figure>
                            <img class="img-responsive" src="../resources/views/mainpage/images/folio06.jpg" alt="">
                            <figcaption>
                                <h5>PROJECT TWELVE</h5>
                                <a href="single-project.html" class="btn btn-primary btn-lg"><i class="el-icon-link"></i></a>
                                <a href="../resources/views/mainpage/images/folio01.jpg" class="btn btn-primary btn-lg launch-lb"><i class="el-icon-zoom-in"></i></a>
                            </figcaption><!-- /figcaption -->
                        </figure><!-- /figure -->
                    </div><!-- /grid-mask -->
                </div><!-- /col -->

            </div><!-- /carousel -->
        </div><!-- /row -->

    </div><!-- /row -->
</div><!-- /container -->

<!-- ==== SECTION DIVIDER4 ==== -->
<section class="section-divider textdivider divider4">
    <div class="container">
        <h1 class="fade-down">YOU HAVE THE POTENTIAL</h1>
        <hr>
        <p class="fade-up">Bringing him smallest met few now returned surprise learning jennings. Objection delivered eagerness he exquisite at do in. Warmly up he nearer mr merely me.</p>
    </div><!-- container -->
</section><!-- section -->

<!-- ==== BLOG ==== -->
<div class="container" id="blog" name="blog">
    <br>
    <div class="row white">
        <h1 class="fade-down centered">WE ARE STORYTELLERS</h1>
        <hr class="fade-down title-mb">
    </div><!-- /row -->

    <div class="row">

        <div class="col-md-6 blog-bg">
            <div class="img-wrapper">
                <img class="img fade-down" src="../resources/views/mainpage/images/bg1.jpg">
                <div class="img-mask"><a href="single-post.htm" class="mask-icon"><i class="el-icon-link"></i></a></div>
            </div>
            <div class="col-md-2 col-sm-2 col-xs-2 blog-meta fade-down">
                <img class="img" src="../resources/views/mainpage/images/team01.jpg">
                <h4>John Smith</h4>
                <h5>Published April 7th.</h5>
            </div>
            <div class="col-md-10 col-sm-10 col-xs-10 blog-content fade-up">
                <h2>A Beautiful Story</h2>
                <p>Armed with insight, we embark on designing the right brand experience that engages the audience. It encompasses both the strategic direction and creative execution that solves a business problem and brings the brand to life.</p>
                <p>In the create phase, the big idea is unleashed to the world through different media touchpoints. This is when we watch the audience fall in love all over again with our client�s brand.</p>
                <p><a href="#" class="btn btn-success">Read More</a></p>
            </div>
        </div><!-- /col -->

        <div class="col-md-6 blog-bg">
            <div class="img-wrapper">
                <img class="img fade-down" src="../resources/views/mainpage/images/bg2.jpg">
                <div class="img-mask"><a href="single-post.htm" class="mask-icon"><i class="el-icon-link"></i></a></div>
            </div>
            <div class="col-md-2 col-sm-2 col-xs-2 blog-meta fade-down">
                <img class="img" src="../resources/views/mainpage/images/team02.jpg">
                <h4>Dan Jones</h4>
                <h5>Published April 4th.</h5>
            </div>
            <div class="col-md-10 col-sm-10 col-xs-10 blog-content fade-up">
                <h2>A Beautiful Story</h2>
                <p>Armed with insight, we embark on designing the right brand experience that engages the audience. It encompasses both the strategic direction and creative execution that solves a business problem and brings the brand to life.</p>
                <p>In the create phase, the big idea is unleashed to the world through different media touchpoints. This is when we watch the audience fall in love all over again with our client�s brand.</p>
                <p><a href="#" class="btn btn-success">Read More</a></p>
            </div>
        </div><!-- /col -->

        <div class="col-md-6 blog-bg">
            <div class="img-wrapper">
                <img class="img fade-down" src="../resources/views/mainpage/images/bg3.jpg">
                <div class="img-mask"><a href="single-post.htm" class="mask-icon"><i class="el-icon-link"></i></a></div>
            </div>
            <div class="col-md-2 col-sm-2 col-xs-2 blog-meta fade-down">
                <img class="img" src="../resources/views/mainpage/images/team03.jpg">
                <h4>John Smith</h4>
                <h5>Published April 2nd.</h5>
            </div>
            <div class="col-md-10 col-sm-10 col-xs-10 blog-content fade-up">
                <h2>A Beautiful Story</h2>
                <p>Armed with insight, we embark on designing the right brand experience that engages the audience. It encompasses both the strategic direction and creative execution that solves a business problem and brings the brand to life.</p>
                <p>In the create phase, the big idea is unleashed to the world through different media touchpoints. This is when we watch the audience fall in love all over again with our client�s brand.</p>
                <p><a href="#" class="btn btn-success">Read More</a></p>
            </div>
        </div><!-- /col -->

        <div class="col-md-6 blog-bg">
            <div class="img-wrapper">
                <img class="img fade-down" src="../resources/views/mainpage/images/bg4.jpg">
                <div class="img-mask"><a href="single-post.htm" class="mask-icon"><i class="el-icon-link"></i></a></div>
            </div>
            <div class="col-md-2 col-sm-2 col-xs-2 blog-meta fade-down">
                <img class="img" src="../resources/views/mainpage/images/team04.jpg">
                <h4>John Smith</h4>
                <h5>Published April 1st.</h5>
            </div>
            <div class="col-md-10 col-sm-10 col-xs-10 blog-content fade-up">
                <h2>A Beautiful Story</h2>
                <p>Armed with insight, we embark on designing the right brand experience that engages the audience. It encompasses both the strategic direction and creative execution that solves a business problem and brings the brand to life.</p>
                <p>In the create phase, the big idea is unleashed to the world through different media touchpoints. This is when we watch the audience fall in love all over again with our client�s brand.</p>
                <p><a href="#" class="btn btn-success">Read More</a></p>
            </div>
        </div><!-- /col -->

    </div><!-- /row -->
    <br>
    <br>
</div><!-- /container -->


<!-- ==== SECTION DIVIDER6 ==== -->
<section class="section-divider textdivider divider6">
    <div class="container">
        <h1 class="fade-down">CRAFTED IN NEW YORK, USA.</h1>
        <hr>
        <div class="fade-up">
            <p>Times Square, New York</p>
            <p>+12 12345 123</p>
        </div>
    </div><!-- container -->
</section><!-- section -->

<div class="container" id="contact" name="contact">
    <div class="row row white">
        <br>
        <h1 class="centered fade-down">THANKS FOR VISITING US</h1>
        <hr class="fade-down title-mb">
        <div class="col-md-4 fade-up">
            <h3>Contact Information</h3>
            <p><span class="icon icon-home"></span>Time Square, New York<br/>
                <span class="icon icon-phone"></span>+12 12345 123<br/>
                <span class="icon icon-mobile"></span>+12 12345 123<br/>
                <span class="icon icon-envelop"></span> <a href="#">email@templatestock.com</a> <br/>
                <span class="icon icon-twitter"></span> <a href="#">@templatestock.com</a> <br/>
                <span class="icon icon-facebook"></span> <a href="#">templatestock</a> <br/>
            </p>
        </div><!-- col -->

        <div class="col-md-4 fade-up">
            <h3>Newsletter</h3>
            <p>Register to our newsletter and be updated with the latests information regarding our services, offers and much more.</p>

{{--            <form class="form-horizontal" role="form">--}}
{{--                <div class="form-group">--}}
{{--                    <label for="inputEmail1" class="col-md-4 control-label"></label>--}}
{{--                    <div class="col-md-10">--}}
{{--                        <input type="email" class="form-control" id="inputEmail1" placeholder="Email">--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="form-group">--}}
{{--                    <label for="text1" class="col-md-4 control-label"></label>--}}
{{--                    <div class="col-md-10">--}}
{{--                        <input type="text" class="form-control" id="text1" placeholder="Your Name">--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="form-group">--}}
{{--                    <div class="col-md-10">--}}
{{--                        <button type="submit" class="btn btn-success">Sign in</button>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </form><!-- form -->--}}

        </div><!-- col -->

        <div class="col-md-4 fade-up">
            <h3>Support Us</h3>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
        </div><!-- col -->

    </div><!-- row -->

</div><!-- container -->

<div id="footerwrap">
    <div class="container">
        <div class="btt-wrapper fade-down"><a class="btt-link smoothScroll" href="#home"><i class="el-icon-chevron-up"></i></a></div>
        <ul id="footer-social" class="fade-down">
            <li><a href="#" target="_blank" title="Like Us"><i class="el-icon-twitter"></i></a></li>
            <li><a href="#" target="_blank" title="Like Us"><i class="el-icon-facebook"></i></a></li>
            <li><a href="#" target="_blank" title="Like Us"><i class="el-icon-googleplus"></i></a></li>
            <li><a href="#" target="_blank" title="Like Us"><i class="el-icon-flickr"></i></a></li>
            <li><a href="#" target="_blank" title="Like Us"><i class="el-icon-youtube"></i></a></li>
            <li><a href="#" target="_blank" title="Like Us"><i class="el-icon-rss"></i></a></li>
        </ul>
        <h4 class="fade-up">Created by <a href="#">Fake News Detector</a> - Copyright 2021</h4>
    </div>
</div>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script type="text/javascript" src="../resources/views/mainpage/js/bootstrap.js"></script>
<script type="text/javascript" src="../resources/views/mainpage/js/plugins.js"></script>
<script type="text/javascript" src="../resources/views/mainpage/js/init.js"></script>
</body>
</html>