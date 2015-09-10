<?php include 'header.php'; ?>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-3" style="padding-right: 0px; padding-left: 0px; padding-top: 0px;">
            <nav class="navbar navbar-default navbar-static-top" role="navigation">
                <div class="navbar-default sidebar" role="navigation">
                    <div class="sidebar-nav navbar-collapse">
                        <ul class="nav">                            
                            <li>
                                <a href="user_info_dashboard.php" class="nav_side_txt_color"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                            </li>
                            <li>
                                <a href="add_property.php" class="nav_side_txt_color"><i class="fa fa-plus fa-fw"></i> Add Property</a>
                            </li>
                            <!--                            <li>
                                                            <a href="index.html"><i class="fa fa-envelope fa-fw"></i> Message <span class="badge" style="float: right;">10</span></a>
                                                        </li>-->
                            <li>
                                <a href="user_info_details.php" class="nav_side_txt_color"><i class="fa fa-user fa-fw"></i></i> User Details</a>                                
                            </li> 
                            <li>
                                <a href="index.html" class="nav_side_txt_color"><i class="fa fa-wrench fa-fw"></i></i> Settings</a>                                
                            </li>                                                  
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        <div class="col-md-9">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-10">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h1 class="panel-title">Please input property information.</h1>
                        </div>
                        <div class="panel-body">
                            <form role="form"> 
                                <div class="row">
                                    <div class="col-xs-12 col-sm-8 col-md-8">
                                        <label for="exampleInputEmail1">Property Name</label>
                                        <div class="form-group">
                                            <input type="text" name="roperty_name" id="display_name" class="form-control" placeholder="Property Name" tabindex="3">
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-4 col-md-4">

                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-12 col-sm-8 col-md-8">
                                        <label for="exampleInputEmail1">Address</label>
                                        <div class="form-group">
                                            <textarea class="form-control" rows="5" placeholder="Address"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-4 col-md-4">

                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-12 col-sm-8 col-md-8">
                                        <label for="exampleInputEmail1">Phone number</label>
                                        <div class="form-group">
                                            <input type="number" name="price" class="form-control" placeholder="Phone number" tabindex="1">
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-4 col-md-4">

                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-12 col-sm-8 col-md-8">
                                        <label for="exampleInputEmail1">Current State</label>
                                        <div class="form-group">
                                            <select class="form-control input-sm">
                                                <option selected>Current state</option>
                                                <option value="" >Washington DC</option>
                                                <option value="" >Washington DC</option>
                                                <option value="" >Chian</option>
                                                <option value="" >Washington DC</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-4 col-md-4">

                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-12 col-sm-8 col-md-8">
                                        <label for="exampleInputEmail1">Current City</label>
                                        <div class="form-group">
                                            <select class="form-control input-sm">
                                                <option selected>Current city</option>
                                                <option value="" >kabalega</option>
                                                <option value="" >labdanum DC</option>
                                                <option value="" >Chian</option>
                                                <option value="" >baas DC</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-4 col-md-4">

                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-12 col-sm-8 col-md-8">
                                        <label for="exampleInputEmail1">Zip</label>
                                        <div class="form-group">
                                            <input type="number" name="zip" class="form-control" placeholder="Zip code" tabindex="1">
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-4 col-md-4">

                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-12 col-sm-8 col-md-8">
                                        <label for="exampleInputEmail1">Catagorie</label>
                                        <div class="form-group">
                                            <select class="form-control input-sm">
                                                <option selected>Catagorie</option>
                                                <option value="" >kabalega</option>
                                                <option value="" >labdanum DC</option>
                                                <option value="" >Chian</option>
                                                <option value="" >baas DC</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-4 col-md-4">

                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-12 col-sm-4 col-md-4">
                                        <label for="exampleInputEmail1">Bed</label>
                                        <div class="form-group">
                                            <input type="number" name="display_name" id="display_name" class="form-control" placeholder="Number of bed" tabindex="3">
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-4 col-md-4">
                                        <label for="exampleInputEmail1">Bath</label>
                                        <div class="form-group">
                                            <input type="number" name="display_name" id="display_name" class="form-control" placeholder="Number of bath" tabindex="3">
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-4 col-md-4">
                                        <label for="exampleInputEmail1">Sq Ft</label>
                                        <div class="form-group">
                                            <input type="number" name="display_name" id="display_name" class="form-control" placeholder="Sq Ft" tabindex="3">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-12 col-sm-8 col-md-8">
                                        <label for="exampleInputEmail1">Price</label>
                                        <div class="form-group">
                                            <input type="number" name="price" class="form-control" placeholder="Price" tabindex="1">
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-4 col-md-4">

                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <h2 class="text-center">Upload your house photo</h2>
                                        <hr/>
                                        <input class="btn btn-success" type="file" id="files" multiple /> 
                                    </div>
                                    <div class="col-md-12">
                                        
                                    </div>

                                </div>
                                <div class="row">                                 
                                    <output id="list"></output>
                                </div>                               
                                <hr class="colorgraph" style="">
                                <div class="row">
                                    <div class="col-xs-12 col-md-12 contact_agent_button_place"><a href="#" class="btn btn-warning btn-block">Complete</a></div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div> 
        </div>
    </div>
</div>

<script>
//    document.getElementById("files").onchange = function () {
//        var reader = new FileReader();
//
//        reader.onload = function (e) {
//            // get loaded data and render thumbnail.
//            document.getElementById("image").src = e.target.result;
//        };
//
//        // read the image file as a data URL.
//        reader.readAsDataURL(this.files[0]);
//    };

    function handleFileSelect(evt) {
        var files = evt.target.files;

        // Loop through the FileList and render image files as thumbnails.
        for (var i = 0, f; f = files[i]; i++) {

            // Only process image files.
            if (!f.type.match('image.*')) {
                continue;
            }

            var reader = new FileReader();

            // Closure to capture the file information.
            reader.onload = (function (theFile) {
                return function (e) {
                    // Render thumbnail.
                    var span = document.createElement('span');
                    span.innerHTML =
                            [
                                '<div class="col-md-4">\n\
                                <img class="img-responsive" alt="Responsive image" \n\
                                style="height: 150px; width: 200px; border: 1px solid #000; \n\
                                margin: 5px" src="',
                                e.target.result,
                                '" title="', escape(theFile.name),
                                '"/></div>'
                            ].join('');

                    document.getElementById('list').insertBefore(span, null);
                };
            })(f);

            // Read in the image file as a data URL.
            reader.readAsDataURL(f);
        }
    }

    document.getElementById('files').addEventListener('change', handleFileSelect, false);
</script>
<?php include 'footer.php'; ?>