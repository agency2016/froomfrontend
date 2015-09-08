<?php include 'header.php'; ?>

<style>

    .search_bar{
        background-color: #f6dac0;
    }
    .search_button_place{
        padding-bottom: 20px; padding-right: 30px; float: right;
    }
    .page_left {
        height: 728px; 
        padding-right: 20px;
        overflow:scroll;
    }    
    .page_block{
        background-color: #fbf2e9;
        box-shadow: 0px 0px 10px 0px #efbf92;
        margin-bottom: 50px;
    }
    .house_photo{
        /*padding: 22px 0px 10px 8px;*/
        margin-top: 20px;
        padding-left: 10px;
    }
    .house-details{
        padding-left: 10px;
    }
    .house-address{
        line-height: 12px;
        padding-bottom: 15px;
    }
    .details-house{
        line-height: 9px;
        padding-bottom: 5px;
    }
    .font_inside_option{
        height: 25px;
        padding: 0px;
    }
    


</style>

<div class="container-fluid search_bar">
    <form role="form">
        <!--visible portion-->
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="form-group has-feedback">
                            <label class="control-label" for="inputSuccess2"></label>
                            <input type="text" class="form-control" id="display_more"/>
                            <span class="glyphicon glyphicon-search form-control-feedback"></span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <select class="form-control input-sm">
                                <option selected>Select Min. Price</option>
                                <option value="" >1</option>
                                <option value="" >2</option>
                                <option value="" >3</option>
                                <option value="" >4</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <select class="form-control input-sm">
                                <option selected>Select Min. Price</option>
                                <option value="" >1</option>
                                <option value="" >2</option>
                                <option value="" >3</option>
                                <option value="" >4</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <select class="form-control input-sm">
                                <option selected>Select Min. Price</option>
                                <option value="" >1</option>
                                <option value="" >2</option>
                                <option value="" >3</option>
                                <option value="" >4</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <select class="form-control input-sm">
                                <option selected>Select Min. Price</option>
                                <option value="" >1</option>
                                <option value="" >2</option>
                                <option value="" >3</option>
                                <option value="" >4</option>
                            </select>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!--end visible portion-->

        <!--invisible portion-->
        <div class="row">
            <div class="col-md-3">
                <div class="form-group">
                    <label class="control-label" for="inputSuccess2">Minimum Sq. Ft</label>
                    <select class="form-control font_inside_option">                    
                        <option selected style="">any</option>
                        <option value="" >1687432</option>
                        <option value="" >232r</option>
                        <option value="" >332r32r</option>
                        <option value="" >4r32r</option>
                    </select> 
                    <label class="control-label" for="inputSuccess2">Minimum Lot Size</label>
                    <select class="form-control font_inside_option">                    
                        <option selected>any</option>
                        <option value="" >1687432</option>
                        <option value="" >232r</option>
                        <option value="" >332r32r</option>
                        <option value="" >4r32r</option>
                    </select> 
                    <label class="control-label" for="inputSuccess2">Year Built</label>
                    <select class="form-control font_inside_option">                    
                        <option selected>any</option>
                        <option value="" >1687432</option>
                        <option value="" >232r</option>
                        <option value="" >332r32r</option>
                        <option value="" >4r32r</option>
                    </select> 
                    <label class="control-label" for="inputSuccess2">Days listed</label>
                    <select class="form-control font_inside_option">                    
                        <option selected>any</option>
                        <option value="" >1687432</option>
                        <option value="" >232r</option>
                        <option value="" >332r32r</option>
                        <option value="" >4r32r</option>
                    </select> 
                </div>
            </div>
            <div class="col-md-3">
                <h3>Property type</h3>
                <div class="checkbox" name="family-type">
                    <label>
                        <input type="checkbox" value="">
                        Single Family
                    </label>
                </div>
                <div class="checkbox" name="family-type">
                    <label>
                        <input type="checkbox" value="">
                        Condo/Townhouse
                    </label>
                </div>
                <div class="checkbox" name="family-type">
                    <label>
                        <input type="checkbox" value="">
                        Multi-Family
                    </label>
                </div>
            </div>
            <div class="col-md-3">
                <h3>Listing features</h3>
                <div class="form-group">
                    <label class="control-label" for="inputSuccess2">Price reductions</label>
                    <select class="form-control font_inside_option">                    
                        <option selected>include</option>
                        <option value="" >1687432</option>
                        <option value="" >232r</option>
                        <option value="" >332r32r</option>
                        <option value="" >4r32r</option>
                    </select> 
                    <label class="control-label" for="inputSuccess2">Featured listings</label>
                    <select class="form-control font_inside_option">                    
                        <option selected>include</option>
                        <option value="" >1687432</option>
                        <option value="" >232r</option>
                        <option value="" >332r32r</option>
                        <option value="" >4r32r</option>
                    </select> 
                    <label class="control-label" for="inputSuccess2">Listings with photos</label>
                    <select class="form-control font_inside_option">                    
                        <option selected>include</option>
                        <option value="" >1687432</option>
                        <option value="" >232r</option>
                        <option value="" >332r32r</option>
                        <option value="" >4r32r</option>
                    </select>                    
                </div>
            </div>
            <div class="col-md-3">
                <h3>Listing type</h3>
                <div class="form-group">
                    <label class="control-label" for="inputSuccess2">Foreclosures</label>
                    <select class="form-control font_inside_option">                    
                        <option selected>include</option>
                        <option value="" >1687432</option>
                        <option value="" >232r</option>
                        <option value="" >332r32r</option>
                        <option value="" >4r32r</option>
                    </select> 
                    <label class="control-label" for="inputSuccess2">Short Sales</label>
                    <select class="form-control font_inside_option">                    
                        <option selected>include</option>
                        <option value="" >1687432</option>
                        <option value="" >232r</option>
                        <option value="" >332r32r</option>
                        <option value="" >4r32r</option>
                    </select> 
                    <label class="control-label" for="inputSuccess2">Fixer Uppers</label>
                    <select class="form-control font_inside_option">                    
                        <option selected>include</option>
                        <option value="" >1687432</option>
                        <option value="" >232r</option>
                        <option value="" >332r32r</option>
                        <option value="" >4r32r</option>
                    </select>                    
                </div>
            </div>
        </div>
        <!--end inviable portion-->
        <hr class="colorgraph">
        <div class="search_button_place"><a href="#" class="btn btn-warning">Search</a></div>
    </form>
    <!--</form>-->
</div>
<!--end container fluid-->


<div class="container-fluid">
    <div class="row" style="margin-top: 30px;">
        <div class="col-lg-6">
            <div class="page_left">
                <!--start block-->
                <div class="row page_block">
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="house_photo"> 
                            <img src="assets/house photo/download.jpg" class="img-responsive" alt="photo not loaded">
                        </div>
                    </div>
                    <div class="house-details">
                        <div class="col-md-8 col-sm-8 col-xs-12">
                            <div class="house-address">
                                <h3>House Name</h3>
                                <p>Address: Baridhara DOHS, lan 4 , 3rd floor</p>
                            </div>
                            <div class="details-house">
                                <p><strong>3200<sup>+</sup>/Month</strong></p>
                                <p>1-2 Bed | 2 Bath | 520<sup>+</sup> Sq Ft</p>
                                <p>For Rent</p>
                                <p>Managed by : john</p>
                                <p>Pets allowed</p>
                                <p><strong>23</strong> hours ago by john</p>
                            </div>
                        </div> 
                    </div>
                </div>
                <!--end block-->
                <!--start block-->
                <div class="row page_block">
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="house_photo"> 
                            <img src="assets/house photo/download.jpg" class="img-responsive" alt="photo not loaded">
                        </div>
                    </div>
                    <div class="house-details">
                        <div class="col-md-8 col-sm-8 col-xs-12">
                            <div class="house-address">
                                <h3>House Name</h3>
                                <p>Address: Baridhara DOHS, lan 4 , 3rd floor</p>
                            </div>
                            <div class="details-house">
                                <p><strong>3200<sup>+</sup>/Month</strong></p>
                                <p>1-2 Bed | 2 Bath | 520<sup>+</sup> Sq Ft</p>
                                <p>For Rent</p>
                                <p>Managed by : john</p>
                                <p>Pets allowed</p>
                                <p><strong>23</strong> hours ago by john</p>
                            </div>
                        </div> 
                    </div>
                </div>
                <!--end block-->
                <!--start block-->
                <div class="row page_block">
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="house_photo"> 
                            <img src="assets/house photo/download.jpg" class="img-responsive" alt="photo not loaded">
                        </div>
                    </div>
                    <div class="house-details">
                        <div class="col-md-8 col-sm-8 col-xs-12">
                            <div class="house-address">
                                <h3>House Name</h3>
                                <p>Address: Baridhara DOHS, lan 4 , 3rd floor</p>
                            </div>
                            <div class="details-house">
                                <p><strong>3200<sup>+</sup>/Month</strong></p>
                                <p>1-2 Bed | 2 Bath | 520<sup>+</sup> Sq Ft</p>
                                <p>For Rent</p>
                                <p>Managed by : john</p>
                                <p>Pets allowed</p>
                                <p><strong>23</strong> hours ago by john</p>
                            </div>
                        </div> 
                    </div>
                </div>
                <!--end block-->
                <!--start block-->
                <div class="row page_block">
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="house_photo"> 
                            <img src="assets/house photo/download.jpg" class="img-responsive" alt="photo not loaded">
                        </div>
                    </div>
                    <div class="house-details">
                        <div class="col-md-8 col-sm-8 col-xs-12">
                            <div class="house-address">
                                <h3>House Name</h3>
                                <p>Address: Baridhara DOHS, lan 4 , 3rd floor</p>
                            </div>
                            <div class="details-house">
                                <p><strong>3200<sup>+</sup>/Month</strong></p>
                                <p>1-2 Bed | 2 Bath | 520<sup>+</sup> Sq Ft</p>
                                <p>For Rent</p>
                                <p>Managed by : john</p>
                                <p>Pets allowed</p>
                                <p><strong>23</strong> hours ago by john</p>
                            </div>
                        </div> 
                    </div>
                </div>
                <!--end block-->
                <!--start block-->
                <div class="row page_block">
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="house_photo"> 
                            <img src="assets/house photo/download.jpg" class="img-responsive" alt="photo not loaded">
                        </div>
                    </div>
                    <div class="house-details">
                        <div class="col-md-8 col-sm-8 col-xs-12">
                            <div class="house-address">
                                <h3>House Name</h3>
                                <p>Address: Baridhara DOHS, lan 4 , 3rd floor</p>
                            </div>
                            <div class="details-house">
                                <p><strong>3200<sup>+</sup>/Month</strong></p>
                                <p>1-2 Bed | 2 Bath | 520<sup>+</sup> Sq Ft</p>
                                <p>For Rent</p>
                                <p>Managed by : john</p>
                                <p>Pets allowed</p>
                                <p><strong>23</strong> hours ago by john</p>
                            </div>
                        </div> 
                    </div>
                </div>
                <!--end block-->
                <div class="text-center">
                    <nav>
                        <ul class="pagination">
                            <li>
                                <a href="#" aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                </a>
                            </li>
                            <li><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li>
                                <a href="#" aria-label="Next">
                                    <span aria-hidden="true">&raquo;</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div>
                <img src="assets/house photo/subway_2400x2889.jpg" class="img-responsive" alt="Responsive image">
            </div>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>