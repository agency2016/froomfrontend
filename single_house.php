<?php include 'header.php'; ?>

<div class="container-fluid">
    <div class="row" style="margin-top: 30px;">
        <div class="col-lg-9">
            <div class="row">
                <div class="col-lg-12">
                    <div class="visible_image">
                        <img src="assets/house photo/myhome.jpg" class="img-responsive" alt="photo not loaded">
                        <div class="shadow-on-visible_image ">
                            <ul class="list-inline custom-glyphicon-icon-size">
                                <li><i class="glyphicon glyphicon-bed"></i><span> - 2 Beds</span></li>
                                <li> | 2 Bathes</span></li>
                                <li> | 520<sup>+</sup> Sq Ft</span></li>
                                <li> | Pets allowed</span></li>
                                <li style="float: right;"><i class="glyphicon glyphicon-camera"></i><span> - 2/5</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <hr/>

            <div class="row">
                <div class="col-lg-12">
                    <div>
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs nav-justified" role="tablist">
                            <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Photos</a></li>
                            <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Map s</a></li>
                            <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Street view</a></li>
                            <li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">School</a></li>
                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active" id="home">nhvjhjh jbsmdv f</div>
                            <div role="tabpanel" class="tab-pane" id="profile">dasa fsd </div>
                            <div role="tabpanel" class="tab-pane" id="messages">fsdf dsg gdf</div>
                            <div role="tabpanel" class="tab-pane" id="settings">fsd dsgdg</div>
                        </div>

                    </div>

                    <script>
                        $('#myTabs a').click(function (e) {
                            e.preventDefault()
                            $(this).tab('show')
                        })
                    </script>
                </div>
            </div>
        </div>

        <div class="col-lg-3">
            <div class="row froom_form_bg_color" style=" margin-right: 4px;">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <form role="form">
                        <h3>Tour This Home <small>Register to tour this home with a local real estate agent.</small></h3>
                        <hr class="colorgraph">
                        <div class="row">
                            <div class="col-xs-12 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <input type="text" name="first_name" id="first_name" class="form-control" placeholder="First Name" tabindex="1">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <input type="text" name="last_name" id="last_name" class="form-control" placeholder="Last Name" tabindex="2">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="email" name="email" id="email" class="form-control" placeholder="Email Address" tabindex="4">
                        </div>
                        <div class="form-group">
                            <input type="number" name="display_name" id="display_name" class="form-control" placeholder="Phone Number" tabindex="3">
                        </div>                                         
                        <div class="row">
                            <div class="col-xs-12 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <input type="password" name="password" id="password" class="form-control" placeholder="Password" tabindex="5">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" placeholder="Confirm Password" tabindex="6">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" rows="3" placeholder="Questions/Comments"></textarea>
                        </div>
                        <div class="row">
                            <div class="col-xs-4 col-sm-3 col-md-3">
                                <span class="button-checkbox">
                                    <label>I Agree
                                        <input type="checkbox" id="blankCheckbox" value="option1" aria-label="">
                                    </label>
                                </span>
                            </div>
                            <div class="col-xs-8 col-sm-9 col-md-9">
                                <strong class="label label-primary">Yes--I'd like to see this home</strong><a href="#" data-toggle="modal" data-target="#t_and_c_m">Terms and Conditions</a>.
                            </div>
                        </div>

                        <hr class="colorgraph">

                        <div class="row">
                            <div class="col-xs-12 col-md-12 contact_agent_button_place">
                                <button type="button" name="submit" class="btn btn-warning btn-block btn-lg" value="">Contact agent</button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
<?php include 'footer.php'; ?>