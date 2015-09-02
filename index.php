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

</head>

<body>

<!-- 1st navigation -->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">F-ROOM</a>
        </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
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
    <nav class="navbar navbar-default navbar-static-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- <a class="navbar-brand" href="#">F-ROOM</a> -->
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
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
<div id="searchForm">
        <form class="">
            <div class="row row-centered">    
                <div class="col-xs-8 col-centered">
                    <div class="input-group">
                        <div class="input-group-btn search-panel">
                            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                <span id="search_concept">Filter by</span> <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu" role="menu">
                              <li><a href="#contains">Contains</a></li>
                              <li><a href="#its_equal">It's equal</a></li>
                              <li><a href="#greather_than">Greather than ></a></li>
                              <li><a href="#less_than">Less than < </a></li>
                              <li class="divider"></li>
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
            <div class="row row-centered"> 
            <div class="col-xs-2 col-centered">

            <input class="form-control" id="ex1" type="text">
            </div>
            <div class="col-xs-2 col-centered">

            <input class="form-control" id="ex2" type="text">
            </div>
            <div class="col-xs-2 col-centered">

            <input class="form-control" id="ex3" type="text">
            </div>

            </div>
        </form> 
        </div>


<!-- 

<div id="searchbox">
 
<div id="searchformbox">

  <div id="searchformboxin">

    <div class="yui-skin-sam">
      <div id="searchboxnav" class="yui-navset">

        <div class="yui-content">

          <div id="tab_homesforsale">

          <div id="forsalesearchbox">
            
            <form action="/homes/for-sale/search/locate?src=hp" name="homesearch" method="POST" onsubmit="return submitForm(document.homesearch)">

                <div class="main-key-search">
                  
                  <div id="searchformlocbox" class="yui-skin-sam form-std yui-ac">
                    <input autocomplete="off" class="searchformlocfld form-std--large-input form-std--search js-placeholder yui-ac-input" id="autocomplete_hp" name="location" size="46" placeholder="Type a city and state or zip code" value="" type="text">
                    <div id="autocomplete_choices_hp" class="autocompfield yui-ac-container"><div style="display: none;" class="yui-ac-content"><div style="display: none;" class="yui-ac-hd"></div><div class="yui-ac-bd"><ul><li style="display: none;"></li><li style="display: none;"></li><li style="display: none;"></li><li style="display: none;"></li><li style="display: none;"></li><li style="display: none;"></li><li style="display: none;"></li><li style="display: none;"></li><li style="display: none;"></li><li style="display: none;"></li></ul></div><div style="display: none;" class="yui-ac-ft"></div></div></div>
                    
                  </div>
                  <div id="searchformbtn">
                    
                    <button type="submit" name="submitbtn" value="Search" class="btn-primary btn-primary--input btn-primary--search">
                      <i class="f-icon f-icon-mob-search font-17"></i> <span class="ml-5">Search</span>
                    </button>
                  </div>
                  

                </div>

                <div id="searchformaddbox">

                  <span id="firstSearchFilter">
                    <label class="searchformprice">Price From</label>
                    <select name="listing_price_min">
                      <option value="">Any</option>
                      
                      <option value="50000">$50,000</option>
                      
                      <option value="75000">$75,000</option>
                      

                      
                    </select>
                  </span>

                  <span style="padding:0 15px 0 0">
                    <label style="padding-right:5px">To</label>
                    <select name="listing_price_max">
                      <option value="">Any</option>
                      
                      <option value="50000">$50,000</option>
                      
                      <option value="75000">$75,000</option>
                      

                      
                    </select>
                  </span>

                  <span style="padding-right:15px">
                    <label class="searchformbbs">Beds</label>
                    <select name="min_bedrooms">
                      <option value="">Any</option>
                      
                      <option value="1">1+</option>
                      
      
                      
                    </select>
                  </span>

                  <span style="">
                    <label class="searchformbbs">Baths</label>
                    <select name="min_full_baths">
                      <option value="">Any</option>
                      
                      <option value="1">1+</option>

                    </select>
                  </span>

                </div>
                
              </form>

            </div>
          </div>


        </div>
      </div>
    </div>


  </div>
</div><



      </div>

 -->














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
            <div class="col-lg-12">
                <h1 class="page-header">
                    Welcome to fRoom
                </h1>
            </div>
        </div>
        <!-- /.row -->

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Agency Delta 2015</p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

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


</script>

</body>

</html>
