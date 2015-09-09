    <?php include 'header.php'; ?>
    <div id="wrap">
    <div class="container" >
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
                </form>
            </div>
            <div class="col-md-2"></div>
            <div class="col-md-5">
                <form role="form" action="insertuser.php" method="post">
                    <h2> Sign Up</h2>
                    <hr class="colorgraph">
                    <div class="input-group">
                        <input class="form-control input-lg" name="username" placeholder="Username  " type="text"
                                required autofocus/>
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                    </div>
                    <div class="input-group">
                        <input class="form-control input-lg" name="youremail" placeholder="Your Email" type="email" />
                        <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                    </div>
                    <div class="input-group">
                        <input class="form-control input-lg" name="reenteremail" placeholder="Re-enter Email" type="email" />
                        <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                    </div>
                    <div class="input-group">
                        <input class="form-control input-lg" name="password" placeholder="Enter Your Password" type="password" />
                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                    </div>
                    <div class="input-group">
                        <input class="form-control input-lg" name="password" placeholder="Re-enter Your Password" type="password" />
                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                    </div>
                    <input type="checkbox" name="terms"> <b>I agree with the <a href="#">Terms and Conditions</a>.</b>
                    <hr class="colorgraph">
                    <input type="submit" value="Sign Up" class="btn btn-warning btn-block btn-lg" tabindex="7">
                </form>
            </div>
        </div>
        </div>
        </div>
    <?php include 'footer.php'; ?>
