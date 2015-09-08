    <?php include 'header.php'; ?>
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <form id="login-form" action="http://phpoll.com/login/process" method="post" role="form" style="display: block;">
                    <h2> Login </h2>
                    <hr class="colorgraph">
                    <div class="input-group">
                        <input class="form-control input-lg" type="text" name="email" id="email" tabindex="1" class="form-control" placeholder="E-mail" value="">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                    </div>
                    <div class="input-group">
                        
                        <input class="form-control input-lg" type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                    </div>
                    <span class="help-block">Email or Password error</span>
                    <div class="form-group">
                        <input type="checkbox" tabindex="3" class="" name="remember" id="remember">
                        <label for="remember"> Remember Me</label>
                        <a href="" tabindex="" class="pull-right">Forgot Password?</a>
                    </div>
                    <hr class="colorgraph">
                    <input type="submit" value="Login" class="btn btn-warning btn-block btn-lg" tabindex="7">
                    <!-- <div class="col-sm-5 col-sm-offset-3">
                        <div class="col-xs-12 col-md-12"><input type="submit" value="Login" class="btn btn-warning btn-block btn-lg" tabindex="7"></div>
                    </div> -->
                    
                  <!--   <div class="form-group">
                        <div class="row">
                            <div class="col-sm-5 col-sm-offset-3">
                                <div class="text-center forgotpass">
                                    <a href="" tabindex="5" class="forgot-password">Forgot Password?</a>
                                </div>
                            </div>
                        </div>
                    </div> -->
                </form>

            </div>
            <div class="col-md-2">
                <!-- <div class="divider-vertical text-center"></div> -->
            </div>
            <div class="col-md-5">
                
                <form role="form" action="insertuser.php" method="post">
                    <h2> Sign Up</h2>
                    <hr class="colorgraph">
                    <input class="form-control input-lg" name="firstname" placeholder="First Name" type="text"
                                required autofocus/>
                    <input class="form-control input-lg" name="lastname" placeholder="Last Name" type="text" required />
                    <input class="form-control input-lg" name="youremail" placeholder="Your Email" type="email" />
                    <input class="form-control input-lg" name="reenteremail" placeholder="Re-enter Email" type="email" />
                    <input class="form-control input-lg" name="password" placeholder="Enter Your Password" type="password" />
                    <input class="form-control input-lg" name="password" placeholder="Re-enter Your Password" type="password" />

                   <!--  <label for="">Birth Date</label>
                    <div class="row">
                        <div class="col-xs-4 col-md-4">
                            <select class="form-control">
                                <option value="Month">Month</option>
                            </select>
                        </div>
                        <div class="col-xs-4 col-md-4">
                            <select class="form-control">
                                <option value="Day">Day</option>
                            </select>
                        </div>
                        <div class="col-xs-4 col-md-4">
                            <select class="form-control">
                                <option value="Year">Year</option>
                            </select>
                        </div>
                    </div> 
                    <label class="radio-inline">
                        <input type="radio" name="sex" id="inlineCheckbox1" value="male" />
                        Male
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="sex" id="inlineCheckbox2" value="female" />
                        Female
                    </label><br><br>-->
                    <input type="checkbox" name="terms"> <b>I agree with the <a href="#">Terms and Conditions</a>.</b>
                    <hr class="colorgraph">
                    <input type="submit" value="Sign Up" class="btn btn-warning btn-block btn-lg" tabindex="7">
                    
                  <!--   <div class="col-sm-6 ">
                        <div class="col-xs-12 col-md-12"><input type="submit" value="Sign Up" class="btn btn-warning btn-block btn-lg" tabindex="7"></div>
                    </div> -->
                </form>
            </div>
            <!-- <div class="col-md-3"></div> -->
        </div>
        </div>
    <?php include 'footer.php'; ?>
