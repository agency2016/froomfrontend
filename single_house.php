<?php include 'header.php'; ?>

<style>
    .image { 
        position: relative; 
        width: 100%; /* for IE 6 */
    }

    .shadow-on-image { 
        position: absolute; 
        bottom: 0px; 
        left: 0; 
        width: 100%;
        height: 50px;
        background-color: rgba(0, 0, 0, 0.7);
        color: #FFF;
        padding: 5px;
    }

    .custom-glyphicon-icon-size{
        font-size: 20px;
    }

</style>

<div class="container">
    <div class="row" style="margin-top: 30px;">
        <div class="col-lg-8">
            <div class="row">
                <div class="col-lg-12">
                    <div class="image">
                        <img src="assets/house photo/myhome.jpg" class="img-responsive" alt="photo not loaded">
                        <div class="shadow-on-image">
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
        <div class="col-lg-4">
            <div>

            </div>
        </div>
    </div>
</div>
<?php include 'footer.php'; ?>