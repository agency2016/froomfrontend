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

</head>

<body>

<!-- 1st navigation -->
<nav class="navbar navbar-inverse navbar-fixed-top navbar-1" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">F-ROOM</a>
        </div>

    <div class="collapse navbar-collapse" id="navbar-collapse-1">
        <ul class="nav navbar-nav navbar-right">
            <li><p class="navbar-text">Already have an account?</p></li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><b>Login</b> <span class="caret"></span></a>
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
                                        <button type="submit" class="btn btn-primary btn-block">Sign in</button>
                                    </div>
                                    <div class="checkbox">
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
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>


<!-- Navigation -->
<nav class="navbar navbar-default navbar-static-top navbar-2" role="navigation">
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
            <div class="fill" style="background-image:url('img/flash.jpg');"></div>
            <!-- <div class="carousel-caption">
                <h2>Caption 1</h2>
            </div> -->
        </div>
        <div class="item">
            <div class="fill" style="background-image:url('img/superman.jpg');"></div>
                <!-- <div class="carousel-caption">
                    <h2>Caption 2</h2>
                </div> -->
        </div>
        <div class="item">
            <div class="fill" style="background-image:url('img/gl.png');"></div>
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
                    <button class="btn btn-default" type="button"><span class="glyphicon glyphicon-search"></span></button>
                </span>
            </div>
        </div>
    </div>

    <div class="row centered">
            <div class="input-btn-group col-md-3 col-lg-3 dropdown search-panel1">
                <button class="btn btn-block btn-warning dropdown-toggle" type="button" id="menu" data-toggle="dropdown">
                <span id="search_concept1">Select Min price</span> <span class="caret"></span></button>
                <ul class="dropdown-menu scrollable-menu" role="menu" aria-labelledby="menu">
                  <li role="presentation"><a role="menuitem" tabindex="-1" href="#">HTML</a></li>
                  <li role="presentation"><a role="menuitem" tabindex="-1" href="#">CSS</a></li>
                  <li role="presentation"><a role="menuitem" tabindex="-1" href="#">JavaScript</a></li>
                  <li role="presentation"><a role="menuitem" tabindex="-1" href="#">About Us</a></li>
                </ul>
            </div>


            <div class="input-btn-group col-md-3 col-lg-3 dropdown search-panel2">
                <button class="btn btn-block btn-warning dropdown-toggle" type="button" id="menu" data-toggle="dropdown">
                <span id="search_concept2">Select Max price</span> <span class="caret"></span></button>
                <ul class="dropdown-menu scrollable-menu" aria-labelledby="menu">
                  <li role="presentation"><a href="#">HTML</a></li>
                  <li role="presentation"><a href="#">CSS</a></li>
                  <li role="presentation"><a href="#">JavaScript</a></li>
                  <li role="presentation"><a href="#">About Us</a></li>
                </ul>
            </div>
    
            
            <div class="input-btn-group col-md-3 col-lg-3 dropdown search-panel3">
                <button class="btn btn-block btn-warning dropdown-toggle" type="button" id="menu" data-toggle="dropdown">
                <span id="search_concept3">Beds</span> <span class="caret"></span></button>
                <ul class="dropdown-menu scrollable-menu" role="menu" aria-labelledby="menu">
                  <li role="presentation"><a href="#">HTML</a></li>
                  <li role="presentation"><a href="#">CSS</a></li>
                  <li role="presentation"><a href="#">JavaScript</a></li>
                  <li role="presentation"><a href="#">About Us</a></li>
                  <li role="presentation"><a href="#">HTML</a></li>
                  <li role="presentation"><a href="#">CSS</a></li>
                  <li role="presentation"><a href="#">JavaScript</a></li>
                  <li role="presentation"><a href="#">About Us</a></li>
                  <li role="presentation"><a href="#">HTML</a></li>
                  <li role="presentation"><a href="#">CSS</a></li>
                  <li role="presentation"><a href="#">JavaScript</a></li>
                  <li role="presentation"><a href="#">About Us</a></li>
                  <li role="presentation"><a href="#">HTML</a></li>
                  <li role="presentation"><a href="#">CSS</a></li>
                  <li role="presentation"><a href="#">JavaScript</a></li>
                  <li role="presentation"><a href="#">About Us</a></li>
                  <li role="presentation"><a href="#">HTML</a></li>
                  <li role="presentation"><a href="#">CSS</a></li>
                  <li role="presentation"><a href="#">JavaScript</a></li>
                  <li role="presentation"><a href="#">About Us</a></li>
                  <li role="presentation"><a href="#">HTML</a></li>
                  <li role="presentation"><a href="#">CSS</a></li>
                  <li role="presentation"><a href="#">JavaScript</a></li>
                  <li role="presentation"><a href="#">About Us</a></li>
                  <li role="presentation"><a href="#">HTML</a></li>
                  <li role="presentation"><a href="#">CSS</a></li>
                  <li role="presentation"><a href="#">JavaScript</a></li>
                  <li role="presentation"><a href="#">About Us</a></li>
                  <li role="presentation"><a href="#">HTML</a></li>
                  <li role="presentation"><a href="#">CSS</a></li>
                  <li role="presentation"><a href="#">JavaScript</a></li>
                  <li role="presentation"><a href="#">About Us</a></li>
                  <li role="presentation"><a href="#">HTML</a></li>
                  <li role="presentation"><a href="#">CSS</a></li>
                  <li role="presentation"><a href="#">JavaScript</a></li>
                  <li role="presentation"><a href="#">About Us</a></li>
                  <li role="presentation"><a href="#">HTML</a></li>
                  <li role="presentation"><a href="#">CSS</a></li>
                  <li role="presentation"><a href="#">JavaScript</a></li>
                  <li role="presentation"><a href="#">About Us</a></li>

                </ul>
              </div>
              
            <div class="input-btn-group col-md-3 col-lg-3 dropdown search-panel4">
                <button class="btn btn-block btn-warning dropdown-toggle" type="button" id="menu" data-toggle="dropdown">
                <span id="search_concept4">something else</span> <span class="caret"></span></button>
                <ul class="dropdown-menu scrollable-menu" role="menu" aria-labelledby="menu">
                    <li role="presentation"><a href="#">HTML</a></li>
                    <li role="presentation"><a href="#">CSS</a></li>
                    <li role="presentation"><a href="#">JavaScript</a></li>
                    <li role="presentation"><a href="#">About Us</a></li>
                </ul>
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
</header>
    <!-- /. Header Carousel -->

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

<!-- Footer -->
<!-- <footer>
<div class="container">
    <div class="row">
        <div class="col-md-6 copy">
            <p>Copyright &copy; Agency Delta 2015</p>
        </div>
        <div class="col-md-6 social-icons">
            <a class="social-roll" href="#"><img src="img/facebook.png" alt="facebook.png"></a>
            <a class="social-roll" href="#"><img src="img/twitter.png" alt="twitter.png"></a>
        </div>
    </div>
    </div>
</footer> -->
  <div class="footer-bottom navbar navbar-default navbar-fixed-bottom">
        <div class="container">
          <div class="row">
            <div class="col-md-6 copy"><p>&copy; 2015 All rights reserved</p></div>
            <div class="col-md-6 social-icons">
                <a class="social-roll" href="#"><img src="img/facebook.png" alt="facebook.png"></a>
                <a class="social-roll" href="#"><img src="img/twitter.png" alt="twitter.png"></a>
            </div>
        </div>
   </div>
</div>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <script type="text/javascript">

//search bar dropdown menu load
$(document).ready(function(e){
    $('.search-panel .dropdown-menu').find('a').click(function(e) {
        e.preventDefault();
        var param = $(this).attr("href").replace("#","");
        var concept = $(this).text();
        $('.search-panel span#search_concept').text(concept);
        $('.input-group #search_param').val(param);
    });
});



$(document).ready(function(e){
    $('.search-panel1 .dropdown-menu').find('a').click(function(e) {
        e.preventDefault();
        var param = $(this).attr("href").replace("#","");
        var concept = $(this).text();
        $('.search-panel1 span#search_concept1').text(concept);
        $('.input-group #search_param').val(param);
    });
});


$(document).ready(function(e){
    $('.search-panel2 .dropdown-menu').find('a').click(function(e) {
        e.preventDefault();
        var param = $(this).attr("href").replace("#","");
        var concept = $(this).text();
        $('.search-panel2 span#search_concept2').text(concept);
        $('.input-group #search_param').val(param);
    });
});


$(document).ready(function(e){
    $('.search-panel3 .dropdown-menu').find('a').click(function(e) {
        e.preventDefault();
        var param = $(this).attr("href").replace("#","");
        var concept = $(this).text();
        $('.search-panel3 span#search_concept3').text(concept);
        $('.input-group #search_param').val(param);
    });
});


$(document).ready(function(e){
    $('.search-panel4 .dropdown-menu').find('a').click(function(e) {
        e.preventDefault();
        var param = $(this).attr("href").replace("#","");
        var concept = $(this).text();
        $('.search-panel4 span#search_concept4').text(concept);
        $('.input-group #search_param').val(param);
    });
});

</script>

</body>

</html>
