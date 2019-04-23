<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>The awareness risk mapping system</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <!-- css -->
    <link href="https://fonts.googleapis.com/css?family=Noto+Serif:400,400italic,700|Open+Sans:300,400,600,700" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet" />
    <link href="css/bootstrap-responsive.css" rel="stylesheet" />
    <link href="css/fancybox/jquery.fancybox.css" rel="stylesheet">
    <link href="css/jcarousel.css" rel="stylesheet" />
    <link href="css/flexslider.css" rel="stylesheet" />
    <link href="css/style.css" rel="stylesheet" />
    <!-- Theme skin -->
    <link href="skins/default.css" rel="stylesheet" />
    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="ico/apple-touch-icon-144-precomposed.png" />
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="ico/apple-touch-icon-114-precomposed.png" />
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="ico/apple-touch-icon-72-precomposed.png" />
    <link rel="apple-touch-icon-precomposed" href="ico/apple-touch-icon-57-precomposed.png" />
    <link rel="shortcut icon" href="img/maplogo.png" />

    <!-- =======================================================
      Theme Name: Flattern
      Theme URL: https://bootstrapmade.com/flattern-multipurpose-bootstrap-template/
      Author: BootstrapMade.com
      Author URL: https://bootstrapmade.com
    ======================================================= -->

    <style>
        .imgid {
            border-radius: 80%;
        }
        .imgcl{
            border-radius:100%
        }
    </style>
</head>

<body>
<div id="wrapper">
    <!-- toggle top area -->
    <div class="hidden-top">
        <div class="hidden-top-inner container">
            <div class="row">
                <div class="span12">
                    <ul>
                        <li><strong></strong></li>
                        <li></li>
                        <li> <i class=""></i> </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- end toggle top area -->
    <!-- start header -->
    <header>
        <div class="container ">
            <!-- hidden top area toggle link -->
            <div id="header-hidden-link">
                <a href="#" class="toggle-link" title="Click me you'll get a surprise" data-target=".hidden-top"><i></i>Open</a>
            </div>
            <!-- end toggle link -->
            <div class="row nomargin">
                <div class="span12">
                    <div class="headnav">
                        <ul>
                            <li><a href="#mySignup" data-toggle="modal" id="cad"><i class="icon-user"></i> Sign up</a></li>
                            <li><a href="#mySignin" data-toggle="modal">Sign in</a></li>
                        </ul>
                    </div>
                    <!-- Signup Modal -->
                    <div id="mySignup" class="modal styled hide fade" tabindex="-1" role="dialog" aria-labelledby="mySignupModalLabel" aria-hidden="true">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            <h4 id="mySignupModalLabel">Create an <strong>account</strong></h4>
                        </div>
                        <div class="modal-body">
                            <form class="form-horizontal">
                                <div class="control-group">
                                    <label class="control-label" for="inputEmail">Email</label>
                                    <div class="controls">
                                        <input type="text" id="inputEmail" placeholder="Email">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="inputSignupPassword">Password</label>
                                    <div class="controls">
                                        <input type="password" id="inputSignupPassword" placeholder="Password">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="inputSignupPassword2">Confirm Password</label>
                                    <div class="controls">
                                        <input type="password" id="inputSignupPassword2" placeholder="Password">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <div class="controls">
                                        <button type="submit" class="btn">Sign up</button>
                                    </div>
                                    <p class="aligncenter margintop20">
                                        Already have an account? <a href="#mySignin" data-dismiss="modal" aria-hidden="true" data-toggle="modal">Sign in</a>
                                    </p>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- end signup modal -->
                    <!-- Sign in Modal -->
                    <div id="mySignin" class="modal styled hide fade" tabindex="-1" role="dialog" aria-labelledby="mySigninModalLabel" aria-hidden="true">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            <h4 id="mySigninModalLabel">Login to your <strong>account</strong></h4>
                        </div>
                        <div class="modal-body">
                            <form class="form-horizontal">
                                <div class="control-group">
                                    <label class="control-label" for="inputText">Username</label>
                                    <div class="controls">
                                        <input type="text" id="inputText" placeholder="Username">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="inputSigninPassword">Password</label>
                                    <div class="controls">
                                        <input type="password" id="inputSigninPassword" placeholder="Password">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <div class="controls">
                                        <button type="submit" class="btn">Sign in</button>
                                    </div>
                                    <p class="aligncenter margintop20">
                                        Forgot password? <a href="#myReset" data-dismiss="modal" aria-hidden="true" data-toggle="modal">Reset</a>
                                    </p>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- end signin modal -->
                    <!-- Reset Modal -->
                    <div id="myReset" class="modal styled hide fade" tabindex="-1" role="dialog" aria-labelledby="myResetModalLabel" aria-hidden="true">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            <h4 id="myResetModalLabel">Reset your <strong>password</strong></h4>
                        </div>
                        <div class="modal-body">
                            <form class="form-horizontal">
                                <div class="control-group">
                                    <label class="control-label" for="inputResetEmail">Email</label>
                                    <div class="controls">
                                        <input type="text" id="inputResetEmail" placeholder="Email">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <div class="controls">
                                        <button type="submit" class="btn">Reset password</button>
                                    </div>
                                    <p class="aligncenter margintop20">
                                        We will send instructions on how to reset your password to your inbox
                                    </p>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- end reset modal -->
                </div>
            </div>
            <div class="row">
                <div class="span4">
                    <div class="logo">
                        <a href="index.html"><img src="img/maplogo.png" alt="" class="logo" height:60px; /></a>

                    </div>
                </div>
                <div class="span8">
                    <div class="navbar navbar-static-top">
                        <div class="navigation">
                            <nav>
                                <ul class="nav topnav">
                                    <li class="dropdown active">
                                        <a href="index.php">Home <i "></i></a>
                                        <ul class="dropdown-menu">

                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#">Area <i class="icon-angle-down"></i></a>
                                        <ul class="dropdown-menu">

                                            <li class="dropdown"><a href="#">Division <i class="icon-angle-right"></i></a>
                                                <ul class="dropdown-menu sub-menu-level1">
                                                    <li><a href="testimonials.php">Laroo</a></li>
                                                    <li><a href="index-alt2.html">Layibi</a></li>
                                                    <li><a href="index-alt3.html">Pece</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#RAM">About RAMS <i class=""></i></a>
                                        <ul class="dropdown-menu">




                                        </ul>
                                    </li>

                                    <li class="dropdown">
                                        <a href="check.php">Map <i "></i></a>
                                        <ul class="dropdown-menu">

                                        </ul>
                                    </li>
                                    <li>
                                        <a href="contact.php">Contact </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                        <!-- end navigation -->
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- end header -->
    <section id="featured">
        <!-- start slider -->
        <!-- Slider -->
        <div id="nivo-slider">
            <div class="nivo-slider">
                <!-- Slide #1 image -->
                <img src="img/download (1).jpg" alt="" title="#caption-1" height:200px />
                <!-- Slide #2 image -->
                <img src="img/images (2).jpg" alt="" title="#caption-2" />
                <!-- Slide #3 image -->
                <img src="img/3k.png" alt="" title="#caption-3" />
            </div>
            <div class="container">
                <div class="row">
                    <div class="span12">
                        <!-- Slide #1 caption -->
                        <div class="nivo-caption" id="caption-1">
                            <div>
                                <h2>Unbearable <strong>conditionss</strong></h2>
                                <p>
                                    The nation is not a aware that there people  who really need help
                                </p>

                            </div>
                        </div>
                        <!-- Slide #2 caption -->
                        <div class="nivo-caption" id="caption-2">
                            <div>
                                <h2><strong>Skyrocketing poverty</strong></h2>
                                <p>
                                    A report done by Uganda Bureau OF Statistics in 2016/2017 shows that people living in poverty now stands at 10M up from 6.6M in 2012/2013
                                </p>
                                <a href="https://www.newvision.co.ug/new_vision/news/1462490/poverty-figures-uganda" class="btn btn-theme">Read More</a>
                            </div>
                        </div>
                        <!-- Slide #3 caption -->
                        <div class="nivo-caption" id="caption-3">
                            <div>
                                <h2><strong>By Nelson Mandela</strong></h2>
                                <p>
                                   "Like slavery and apartheid, poverty is not natural. It is man made and can be over come and eradicated by the actions of human beings"
                                </p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end slider -->
    </section>

    <section id="content">
        <div class="container">
            <div class="row">
                <div class="span12">
                    <div class="row">
                        <div class="span3">
                            <div class="box aligncenter">
                                <div class="aligncenter icon">
                                    <img class="imgid" src="img/DSC05185_0.jpg" alt="Avatar" style="width:100px">
                                </div>
                                <div class="text">
                                    <h6><strong>Corruption in service Delivery</strong></h6>
                                    <p>
                                        Systematic corruption is failing operation wealth creation
                                    </p>
                                    <a href="https://kampalapost.com/content/business/systematic-corruption-failing-operation-wealth-creation-ofwono-opondo">Learn more</a>
                                </div>
                            </div>
                        </div>
                        <div class="span3">
                            <div class="box aligncenter">
                                <div class="aligncenter icon">
                                    <img class="imgid" src="img/images (2).jpg" alt="Avatar" style="width:100px">
                                </div>
                                <div class="text">
                                    <h6><strong>Why risk mapping</strong></h6>
                                    <p>
                                        Masses countinue to suffer in absolute due to resource missallocation and poor planning
                                    </p>
                                    <a href="https://www.newvision.co.ug/new_vision/news/1315521/population-poor-planning-unemployment-fuelling-slums-uganda">Learn more</a>
                                </div>
                            </div>
                        </div>
                        <div class="span3">
                            <div class="box aligncenter">
                                <div class="aligncenter icon">



                                </div>
                                <div class="text">
                                    <h6><strong>A glimpse of the levels of poverty in our country</strong></h6>
                                    <p>
                                        <img class="imgcl" src="img/inequlity.jpg" alt="Avatar" style="width:200px">
                                    </p>

                                </div>
                            </div>
                        </div>
                        <div class="span3">
                            <div class="box aligncenter">
                                <div class="text">
                                    <h6><strong>Why Register with Us Now</strong></h6>
                                    <p>
                                       If you wish to contribute new information to the website or that information currently displayed
                                        is misleading, then please complete <a href="contact.php"> the feedback form</a> You can always use this
                                        form to comment on our services generally. Only users with registered accounts can do this.
                                    </p>
                                    <a href="#cad">Sign up now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- divider -->
            <div class="row">
                <div class="span12">
                    <div class="solidline">
                    </div>
                </div>
            </div>
            <!-- end divider -->

            <!-- end divider -->
            <div class="row">
                <div class="span12">
                    <h4 id="RAM"><strong> WHAT IS RAMS...<em >Our purpose</em></strong></h4>
                    <p>RAMS is an acronym for the <strong>Risk Area Mapping System</strong><br/>This system/ project aims at working to improve the
                        livelihood of Ugandans living in absolute poverty by providing the right information about these masses.<br>The information collected is for access to
                        government agencies and development partners seeking to help masses suffering in absolute poverty through development projects.<br>
                        Info collected on each household includes House hold name, size of family, size of land, income level among others.
                        <br> As a result, we expect these agencies and development partners to embark on helping the poor citizens with a clear understanding of their
                        problems, attributes and who they are. Hence we are contributing towards effective planning and proper resource allocation in the quest for a "poverty free Uganda"<p>


                </div>
            </div>
    </section>
    <section id="bottom">
        <div class="container">
            <div class="row">
                <div class="span12">
                    <div class="aligncenter">
                        <div id="twitter-wrapper">
                            <div id="twitter">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer>

        <div id="sub-footer">
            <div class="container">
                <div class="row">
                    <div class="span6">
                        <div class="copyright">
                            <center>
                                <p>
                                    <span>&copy; RAMS - All right reserved.</span>
                                </p>
                                <div class="credits">
                                    <!--
                                      All the links in the footer should remain intact.
                                      You can delete the links only if you purchased the pro version.
                                      Licensing information: https://bootstrapmade.com/license/
                                      Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Flattern
                                    -->
                                    Designed by <a href="https://bootstrapmade.com/">3KS</a></center>
                        </div>
                    </div>
                </div>
                <div class="span6">

                </div>
            </div>
        </div>
</div>
</footer>
</div>
<a href="#" class="scrollup"><i class="icon-chevron-up icon-square icon-32 active"></i></a>
<!-- javascript
  ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="js/jquery.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/jcarousel/jquery.jcarousel.min.js"></script>
<script src="js/jquery.fancybox.pack.js"></script>
<script src="js/jquery.fancybox-media.js"></script>
<script src="js/google-code-prettify/prettify.js"></script>
<script src="js/portfolio/jquery.quicksand.js"></script>
<script src="js/portfolio/setting.js"></script>
<script src="js/jquery.flexslider.js"></script>
<script src="js/jquery.nivo.slider.js"></script>
<script src="js/modernizr.custom.js"></script>
<script src="js/jquery.ba-cond.min.js"></script>
<script src="js/jquery.slitslider.js"></script>
<script src="js/animate.js"></script>

<!-- Template Custom JavaScript File -->
<script src="js/custom.js"></script>

</body>
</html>
