<!doctype html>
<html>
        <head>
        <meta charset="utf-8" />
        <title>jQuery Nxeed Tree Menu Plugin Demo</title>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script type="text/javascript" src="js/jquery.ntm.js"></script>
        
        <link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="css/theme.css" />
        <script type="text/javascript">
            $(document).ready(function() {
                $('.demo').ntm();
            });
        </script>
        </head>
        <body>
        <div class="wrapper">
          <div class="tree-menu demo" id="tree-menu">
            <ul>
                <li><a href="#"><i class="fa fa-home fa-2x"></i>Lorem</a></li>
                <li><a href="#"><i class="fa fa-home fa-2x"></i>Ipsum</a></li>
                <li><a href="#"><i class="fa fa-home fa-2x"></i>Dolor</a>
                <ul>
                  <li><a href="#"><i class="fa fa-user "></i>Lorem</a></li>
                  <li><a href="#"><i class="fa fa-user "></i>Ipsum</a></li>
                  <li><a href="#"><i class="fa fa-home fa-2x"></i>Lorem ipsum dolor sit amet, consectetur adipisicing elit</a>
                    <ul>
                      <li><a href="#"><i class="fa fa-user "></i>Lorem</a></li>
                      <li><a href="#"><i class="fa fa-user "></i>Ipsum</a></li>
                      <li><a href="#"><i class="fa fa-home fa-2x"></i>Dolor</a>
                        <ul>
                          <li><a href="#"><i class="fa fa-user "></i>Lorem</a></li>
                          <li><a href="#"><i class="fa fa-user "></i>Ipsum</a></li>
                          <li><a href="#"><i class="fa fa-user "></i>Dolor</a></li>
                          <li><a href="#"><i class="fa fa-user "></i>Sit</a></li>
                          <li><a href="#"><i class="fa fa-user "></i>Amet</a></li>
                        </ul>
                      </li>
                      <li><a href="#"><i class="fa fa-home fa-2x"></i>Sit</a>
                        <ul>
                          <li class="selected"><a href="#"><i class="fa fa-user "></i>Lorem</a></li>
                          <li><a href="#"><i class="fa fa-user "></i>Ipsum</a></li>
                          <li><a href="#"><i class="fa fa-user "></i>Dolor</a></li>
                          <li><a href="#"><i class="fa fa-user "></i>Sit</a></li>
                          <li><a href="#"><i class="fa fa-user "></i>Amet</a></li>
                        </ul>
                      </li>
                      <li><a href="#"><i class="fa fa-user "></i>Amet</a></li>
                    </ul>
                  </li>
                  <li><a href="#"><i class="fa fa-home fa-2x"></i>Sit</a>
                    <ul>
                      <li><a href="#"><i class="fa fa-user "></i>Lorem</a></li>
                      <li><a href="#"><i class="fa fa-user "></i>Ipsum</a></li>
                      <li><a href="#"><i class="fa fa-user "></i>Dolor</a></li>
                      <li><a href="#"><i class="fa fa-user "></i>Sit</a></li>
                      <li><a href="#"><i class="fa fa-user "></i>Amet</a></li>
                    </ul>
                  </li>
                  <li><a href="#"><i class="fa fa-user "></i>Amet</a></li>
                </ul>
              </li>
              <li><a href="#"><i class="fa fa-home fa-2x"></i>Sit</a>
                <ul>
                  <li><a href="#"><i class="fa fa-user "></i>Lorem</a></li>
                  <li><a href="#"><i class="fa fa-user "></i>Ipsum</a></li>
                  <li><a href="#"><i class="fa fa-user "></i>Dolor</a></li>
                  <li><a href="#"><i class="fa fa-user "></i>Sit</a></li>
                  <li><a href="#"><i class="fa fa-user "></i>Amet</a></li>
                </ul>
              </li>
              <li><a href="#"><i class="fa fa-home fa-2x"></i>Amet</a></li>
            </ul>
          </div>
        </div>

</body>
</html>
