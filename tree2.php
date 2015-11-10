<!DOCTYPE html>
<html>
<head>
<title>jQuery Multi Nested Lists Plugin Demo</title>
<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
<link rel="stylesheet" href="css/treestyle.css">
<link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css">

<link rel="stylesheet" href="css/jquery-checktree.css">
</head>
<body>


<div class="jquery-script-clear"></div>
</div>
</div>
<h1 style="margin-top:150px;">jQuery Multi Nested Lists Plugin Demo</h1>
<div class="container">
<ul id="tree">
<li><input type="checkbox" /><a href="#">Manchester</a>
<ul>
<li><input type="checkbox" /><a href="#">Magazine</a>
<ul>
<li><input type="checkbox" /><a href="#">Spiral Scratch</a></li>
<li><input type="checkbox" /><a href="#">Real Life</a></li>
<li><input type="checkbox" /><a href="#">Secondhand Daylight</a></li>
<li><input type="checkbox" /><a href="#">The Correct Use</a></li>
</ul>
</li>
<li><input type="checkbox" /><a href="#">Buzzcocks</a>
<ul>
<li><input type="checkbox" /><a href="#">Time's Up</a></li>
<li><input type="checkbox" /><a href="#">Another Music in A Different Kitchen</a></li>
<li><input type="checkbox" /><a href="#">Love Bites</a></li>
<li><input type="checkbox" /><a href="#">A Different Kind Of Tension</a></li>
</ul>
</li>
<li><input type="checkbox" /><a href="#">Joy Division</a>
<ul>
<li><input type="checkbox" /><a href="#">Unknown Pleasures</a></li>
<li><input type="checkbox" /><a href="#">Closer</a></li>
<li><input type="checkbox" /><a href="#">Still</a></li>
</ul>
</li>
</ul>
</li>
<li><input type="checkbox" /><a href="#">Liverpool</a>
<ul>
<li><input type="checkbox" /><a href="#">OMD</a>
<ul>
<li><input type="checkbox" /><a href="#">OMD</a></li>
<li><input type="checkbox" /><a href="#">Organisation</a></li>
</ul>
</li>
<li><input type="checkbox" /><a href="#">Echo & the Bunnymen</a>
<ul>
<li><input type="checkbox" /><a href="#">Crocodiles</a></li>
<li><input type="checkbox" /><a href="#">Heaven Up Here</a></li>
<li><input type="checkbox" /><a href="#">Porcupine</a></li>
</ul>
</li>
</ul>
</li>
</ul>
</div>

</body>
</html>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="js/MultiNestedList.js"></script>
<script src="js/jquery-checktree.js"></script>
 <script>
        $('#tree').checktree();
</script>