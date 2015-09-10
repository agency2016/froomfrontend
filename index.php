<?php include 'header.php'; ?>
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

<div id="searchbox">
<!-- <div class="" id="searchformbox"> -->
  <div class="" id="searchformboxin">
        <form action="" name="homesearch" method="POST" onsubmit="">
            <div class="input-group">
                   <div class="input-group-btn search-panel">
                    <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown">
                        <span id="search_concept">Filter by</span> <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu scrollable-menu" role="menu">
                      <li><a href="#contains">Filter 1</a></li>
                      <li><a href="#greather_than">Filter 2</a></li>
                      <li><a href="#less_than">Filter 3</a></li>
                      <li><a href="#all">Filter 4</a></li>
                    </ul>
                </div>
                <input autocomplete="off" class="form-control" id="" name="location" size="46" placeholder="Type a city and state or zip code" value="" type="text">
                <span class="input-group-btn">
                    <button type="submit" name="submitbtn" value="Search" class="btn btn-warning">
                      <i class="glyphicon glyphicon-search"></i><span> Search</span>
                    </button>
                </span>
            </div>

            <!-- <div id="searchformaddbox">

                  <span id="firstSearchFilter">
                    <label class="searchformprice">Price From</label>
                    <select name="listing_price_min">
                      <option value="" selected>Any</option>                     
                      <option value="50000">$50,000</option>                     
                      <option value="75000">$75,000</option>                     
                      <option value="100000">$100,000</option>
                      <option value="110000">$110,000</option> 
                    </select>
                  </span>

                  <span style="padding:0 15px 0 0">
                    <label style="padding-right:5px">To</label>
                    <select name="listing_price_max">
                      <option value="" selected>Any</option>
                      <option value="50000">$50,000</option>  
                      <option value="75000">$75,000</option>
                      <option value="100000">$100,000</option>                   
                    </select>
                  </span>

                  <span style="padding-right:15px">
                    <label class="searchformbbs">Beds</label>
                    <select name="min_bedrooms">
                      <option value="" selected>Any</option>
                      <option value="1">1+</option>
                      <option value="2">2+</option> 
                    </select>
                  </span>

                  <span style="">
                    <label class="searchformbbs">Baths</label>
                    <select name="min_full_baths">
                      <option value="" selected>Any</option>
                      <option value="1">1+</option>
                      <option value="2">2+</option> 
                    </select>
                  </span>

                </div> -->

 <div class="row centered">
       <div class="col-md-3 col-lg-3 dropdown">
          <select class="form-control" id="">
              <option selected>Select Min. Price</option>
              <option value="" >1</option>
              <option value="" >2</option>
              <option value="" >3</option>
              <option value="" >4</option>
          </select>
        </div> 

            <div class="col-md-3 col-lg-3 dropdown">
            <form role="form">
              <div class="form-group">
                <select class="form-control" id="sel1" data-style="btn-warning">
                  <option selected>Select Max. Price</option>
                    <option value="" >2</option>
                    <option value="" >3</option>
                    <option value="" >4</option>
                </select>
              </div>
        </form>
            </div>
    
            
            <div class="col-md-3 col-lg-3 dropdown">
                <form role="form">
              <div class="form-group">
                <select class="form-control" id="sel1" data-style="btn-warning">
                    <option selected>Number of Beds</option>
                    <option value="" >2</option>
                    <option value="" >3</option>
                    <option value="" >4</option>
                </select>
              </div>
          </form>
              </div>
              
            <div class="col-md-3 col-lg-3 dropdown">
              <form role="form">
              <div class="form-group">
                <select class="form-control" id="sel1" data-style="btn-warning">
                    <option selected>Number of Baths</option>
                    <option value="" >2</option>
                    <option value="" >3</option>
                    <option value="" >4</option>
                </select>
              </div>
            </form>
            </div>
    </div>
      </form>
  </div><!-- searchformboxin -->
  <!-- <div class="col-md-3"></div> -->

<!-- </div> -->
<!-- searchformbox -->
</div>


<!--end demo  -->
<!-- <div class="container" id="searchForm">
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
              <option selected>Select Min. Price</option>
              <option value="" >1</option>
              <option value="" >2</option>
              <option value="" >3</option>
              <option value="" >4</option>
          </select>
        </div> 

            <div class="col-md-3 col-lg-3 dropdown">
            <form role="form">
              <div class="form-group">
                <select class="form-control" id="sel1" data-style="btn-warning">
                  <option selected>Select Max. Price</option>
                    <option value="" >2</option>
                    <option value="" >3</option>
                    <option value="" >4</option>
                </select>
              </div>
        </form>
            </div>
    
            
            <div class="col-md-3 col-lg-3 dropdown">
                <form role="form">
              <div class="form-group">
                <select class="form-control" id="sel1" data-style="btn-warning">
                    <option selected>Beds</option>
                    <option value="" >2</option>
                    <option value="" >3</option>
                    <option value="" >4</option>
                </select>
              </div>
          </form>
              </div>
              
            <div class="col-md-3 col-lg-3 dropdown">
              <form role="form">
              <div class="form-group">
                <select class="form-control" id="sel1" data-style="btn-warning">
                    <option selected>Baths</option>
                    <option value="" >2</option>
                    <option value="" >3</option>
                    <option value="" >4</option>
                </select>
              </div>
            </form>
            </div>
    </div>
</div>
 -->
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

 <div id="wrap">
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
                asldnalsdnlansdlnasldnalsndklasbflabd lfbalbdfasllsd
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
                asldnalsdnlansdlnasldnalsndklasbflabd lfbalbdfasll
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
</div>
<?php include 'footer.php'; ?>
