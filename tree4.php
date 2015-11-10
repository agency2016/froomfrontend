<!doctype html>
<html>
        <head>
        <meta charset="utf-8" />
        <title>jQuery Nxeed Tree Menu Plugin Demo</title>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script type="text/javascript" src="js/jquery.ntm.js"></script>
     
        <link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="css/theme.css" />
         <script src="js/jquery-checktree.js"></script>
        <script type="text/javascript">
            
            $(document).ready(function() {
                $('.demo').ntm();
                $('#tree').checktree();
                $('#tree li').children('ul').hide();
            });
        </script>
       
        
        </head>
        <body>
      
        <div class="wrapper">
          <div class="tree-menu demo" id="tree-menu">
            <ul id="tree">
                <li><a href="#"><input type="checkbox" />Lorem</a></li>
              <li><a href="#"><input type="checkbox" />˙Ipsum</a></li>
              <li><a href="#"><input type="checkbox" />Dolor</a>
                <ul>
                  <li><a href="#"><input type="checkbox" />Lorem</a></li>
                  <li><a href="#"><input type="checkbox" />Ipsum</a></li>
                  <li><a href="#"><input type="checkbox" />Lorem ipsum dolor sit amet, consectetur adipisicing elit</a>
                    <ul>
                      <li><a href="#"><input type="checkbox" />Lorem</a></li>
                      <li><a href="#"><input type="checkbox" />Ipsum</a></li>
                      <li><a href="#"><input type="checkbox" />Dolor</a>
                        <ul>
                          <li><a href="#"><input type="checkbox" />Lorem</a></li>
                          <li><a href="#"><input type="checkbox" />Ipsum</a></li>
                          <li><a href="#"><input type="checkbox" />Dolor</a></li>
                          <li><a href="#"><input type="checkbox" />Sit</a></li>
                          <li><a href="#"><input type="checkbox" />Amet</a></li>
                        </ul>
                      </li>
                      <li><a href="#"><input type="checkbox" />Sit</a>
                        <ul>
                          <li class="selected"><a href="#"><input type="checkbox" />Lorem</a></li>
                          <li><a href="#"><input type="checkbox" />Ipsum</a></li>
                          <li><a href="#"><input type="checkbox" />Dolor</a></li>
                          <li><a href="#"><input type="checkbox" />Sit</a></li>
                          <li><a href="#"><input type="checkbox" />Amet</a></li>
                        </ul>
                      </li>
                      <li><a href="#"><input type="checkbox" />Amet</a></li>
                    </ul>
                  </li>
                  <li><a href="#"><input type="checkbox" />Sit</a>
                    <ul>
                      <li><a href="#"><input type="checkbox" />Lorem</a></li>
                      <li><a href="#"><input type="checkbox" />Ipsum</a></li>
                      <li><a href="#"><input type="checkbox" />Dolor</a></li>
                      <li><a href="#"><input type="checkbox" />Sit</a></li>
                      <li><a href="#"><input type="checkbox" />Amet</a></li>
                    </ul>
                  </li>
                  <li><a href="#"><input type="checkbox" />Amet</a></li>
                </ul>
              </li>
              <li><a href="#"><input type="checkbox" />Sit</a>
                <ul>
                  <li><a href="#"><input type="checkbox" />Lorem</a></li>
                  <li><a href="#"><input type="checkbox" />Ipsum</a></li>
                  <li><a href="#"><input type="checkbox" />Dolor</a></li>
                  <li><a href="#"><input type="checkbox" />Sit</a></li>
                  <li><a href="#"><input type="checkbox" />Amet</a></li>
                </ul>
              </li>
              <li><a href="#"><input type="checkbox" />Amet</a></li>
            </ul>
          </div>
        </div>

</body>
</html>
