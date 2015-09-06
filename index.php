<!DOCTYPE html>
<html lang="en">

<head>
    <title>froom</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">  

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Raleway" />

    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.2/css/bootstrap-select.min.css" />

</head>

<body>

<!-- HEADER -->
<header class="navbar-fixed-top" role="banner">

<div id="brandlook">
<div class="container">
  <div class="row">
    <div class="col col-xs-12 col-sm-6 logo">
      <h1>F-ROOM</h1>
    </div>
    <div style="text-align: right;" class="col col-xs-12 col-sm-6">
        
    </div>
  </div> 
</div>
</div>

<!-- Navigation -->
<div class="navbar navbar-default " role="navigation">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-2">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <!-- <a class="navbar-brand" href="#">F-ROOM</a> -->
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="navbar-collapse-2">
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a href="#">Home</a>
                </li>
                <li>
                    <a href="#">About</a>
                </li>
                <li>
                    <a href="#">Portfolio</a>
                </li>

                <li>
                    <a href="#">Services</a>
                </li>
                <li>
                    <a href="#">Contact</a>
                </li>

                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="glyphicon glyphicon-user"></i> <span class="caret"></span></a>
                  <ul id="login-dp" class="dropdown-menu">
                    <li>
                        <div class="row">
                            <div class="col-md-12">
                                <form class="form" role="form" method="post" action="login" accept-charset="UTF-8" id="login-nav">
                                    <div class="form-group">
                                        <label class="sr-only" for="exampleInputEmail2">Email address</label>
                                        <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Email address" required>
                                    </div>
                                    <div class="form-group">
                                        <label class="sr-only" for="exampleInputPassword2">Password</label>
                                        <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Password" required>
                                        <div class="help-block text-right">
                                            <a href="">Forget the password ?</a>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-warning btn-block">Sign in</button>
                                    </div>
                                    <div class="checkbox" id="cbox">
                                        <label>
                                            <input type="checkbox"> keep me logged-in
                                        </label>
                                    </div>
                                </form>
                            </div>
                            <div class="bottom text-center">
                                New here ? <a href="#"><b>Join Us</b></a>
                            </div>
                          </div>
                      </li>
                  </ul>
                </li>

            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</div>

</header>
<!-- Header Carousel -->

<!-- Carousel Slider -->
<div id="myCarousel" class="carousel slide">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
        <div class="item active">
            <div class="fill" style="background-image:url('img/img1.jpg');"></div>
            <!-- <div class="carousel-caption">
                <h2>Caption 1</h2>
            </div> -->
        </div>
        <div class="item">
            <div class="fill" style="background-image:url('img/img4.jpg');"></div>
                <!-- <div class="carousel-caption">
                    <h2>Caption 2</h2>
                </div> -->
        </div>
        <div class="item">
            <div class="fill" style="background-image:url('img/img3.jpg');"></div>
                <!-- <div class="carousel-caption">
                    <h2>Caption 3</h2>
                </div> -->
        </div>
    </div>

<!-- search n filter bar -->                                  
<div class="container" id="searchForm">
    <div class="row centered">    
        
        <div class="col-md-12 col-xs-12" style="margin-bottom: 10px;">
            <div class="input-group">
                <div class="input-group-btn search-panel">
                    <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown">
                        <span id="search_concept">Filter by</span> <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu scrollable-menu" role="menu">
                      <li><a href="#contains">Contains</a></li>
                      <li><a href="#its_equal">It's equal</a></li>
                      <li><a href="#greather_than">Greather than ></a></li>
                      <li><a href="#less_than">Less than < </a></li>
                      <li><a href="#all">Anything</a></li>
                    </ul>
                </div>
            
                <input type="text" class="form-control" name="x" placeholder="Search term...">
                <span class="input-group-btn">
                    <button class="btn btn-warning" type="button"><span class="glyphicon glyphicon-search"></span></button>
                </span>
            </div>
        </div>
    </div>

    <div class="row centered">
       <div class="col-md-3 col-lg-3 dropdown">
          <select class="form-control" id="">
              <option>Select Min. Price</option>
              <option>1</option>
              <option>2</option>
              <option>3</option>
              <option>4</option>
          </select>
        </div> 

            <div class="col-md-3 col-lg-3 dropdown">
            <form role="form">
              <div class="form-group">
                <select class="form-control" id="sel1" data-style="btn-warning">
                  <option>Select Max. Price</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                </select>
              </div>
        </form>
            </div>
    
            
            <div class="col-md-3 col-lg-3 dropdown">
                <form role="form">
              <div class="form-group">
                <select class="form-control" id="sel1" data-style="btn-warning">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                </select>
              </div>
          </form>
              </div>
              
            <div class="col-md-3 col-lg-3 dropdown">
              <form role="form">
              <div class="form-group">
                <select class="form-control" id="sel1" data-style="btn-warning">
                  <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                </select>
              </div>
            </form>
            </div>
    </div>
</div>

<!-- /. search n filter bar -->

<!-- Controls -->
<a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="icon-prev"></span>
</a>
<a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="icon-next"></span>
</a>
</div>    
<!-- /. Carousel Slider-->


<!-- Page Content -->
<div class="container">
    <hr>
    <!-- row -->
    <div class="row">
        <div class="col-md-6">
            <h1 class="">
                Welcome to fRoom
            </h1>
            <p>
                lsdhasldhlasdhlasgdlashdlahsldhalsflcabldbal
                asldnalsdnlansdlnasldnalsndklasbflabd lfbalbdfasl
                lsdhasldhlasdhlasgdlashdlahsldhalsflcabldbal
                asldnalsdnlansdlnasldnalsndklasbflabd lfbalbdfasllsdhasldhlasdhlasgdlashdlahsldhalsflcabldbal
                asldnalsdnlansdlnasldnalsndklasbflabd lfbalbdfasl
                lsdhasldhlasdhlasgdlashdlahsldhalsflcabldbal
                asldnalsdnlansdlnasldnalsndklasbflabd lfbalbdfasl
                lsdhasldhlasdhlasgdlashdlahsldhalsflcabldbal
                asldnalsdnlansdlnasldnalsndklasbflabd lfbalbdfasl
                lsdhasldhlasdhlasgdlashdlahsldhalsflcabldbal
                asldnalsdnlansdlnasldnalsndklasbflabd lfbalbdfasl
                
            </p>
        </div>
        <div class="col-md-6">
            <h1 class="">
                Welcome to fRoom
            </h1>
            <p>
                lsdhasldhlasdhlasgdlashdlahsldhalsflcabldbal
                asldnalsdnlansdlnasldnalsndklasbflabd lfbalbdfasl
                lsdhasldhlasdhlasgdlashdlahsldhalsflcabldbal
                asldnalsdnlansdlnasldnalsndklasbflabd lfbalbdfasllsdhasldhlasdhlasgdlashdlahsldhalsflcabldbal
                asldnalsdnlansdlnasldnalsndklasbflabd lfbalbdfasl
                lsdhasldhlasdhlasgdlashdlahsldhalsflcabldbal
                asldnalsdnlansdlnasldnalsndklasbflabd lfbalbdfasl
                lsdhasldhlasdhlasgdlashdlahsldhalsflcabldbal
                asldnalsdnlansdlnasldnalsndklasbflabd lfbalbdfasl
                lsdhasldhlasdhlasgdlashdlahsldhalsflcabldbal
                asldnalsdnlansdlnasldnalsndklasbflabd lfbalbdfasl

            </p>
        </div>
    </div>
    <!-- /.row -->
</div>
<!-- /.container -->
<!-- /.Page Content -->



<!-- FOOTER -->
<footer id="footer-bottom">
        <div class="container">
          <div class="row">
            <div class="col col-md-6 col-xs-6 copy"><p>&copy; 2015 All rights reserved</p></div>
            <div class="col col-md-6 col-xs-6 social-icons">
              <div class="row">
                 <a href=""> <i data-toggle="tooltip" data-placement="top" title="Facebook" class="social-roll fa fa-facebook"></i></a>
                 <a href=""> <i data-toggle="tooltip" data-placement="top" title="Twitter" class="social-roll fa fa-twitter"></i></a>
                 <a href=""> <i data-toggle="tooltip" data-placement="top" title="Google Plus" class="social-roll fa fa-google-plus"></i></a>
                 <a href=""> <i data-toggle="tooltip" data-placement="top" title="Linkedin" class="social-roll fa fa-linkedin"></i></a>
              </div>
            </div>
        </div>
   </div>
</footer>
<!-- /. FOOTER -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- CUSTOM JS -->
    <script type="text/javascript" src="js/froom.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.2/js/bootstrap-select.min.js"></script>
    </body>

</html>
