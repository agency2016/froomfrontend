<?php include 'header.php'; ?>
<style>

    .carousel-control.right {
        right: 0;
        left: auto;
        background-image: none !important;
        background-repeat: repeat-x;
    }
    .carousel-control.left {
        left: 0;
        right: auto;
        background-image: none !important;
        background-repeat: repeat-x;
    }
</style>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-7">
            <!--            <button onclick="myFunction()">Try it</button>
            
                        <p id="demo"></p>-->

        </div>
        <div class="col-md-5">
            <div id="display_image">
                <img src="assets/sld/01.jpg" class="img-responsive" alt="Responsive image" style="width: 700px;height: 300px;">
            </div>
            <a class='left carousel-control' href='#carousel-custom' data-slide='prev' id="prev">
                <span class='glyphicon glyphicon-chevron-left'></span>
            </a>
            <a class='right carousel-control' href='#carousel-custom' data-slide='next' id="next">
                <span class='glyphicon glyphicon-chevron-right'></span>
            </a>

        </div>
    </div>
</div>

<?php include 'footer.php'; ?>

<script>

    var image_name = ["01.jpg", "02.jpg", "03.jpg", "04.jpg"];
    var image_index = 0;
    $(document).ready(function () {
        $("a#next").click(function () {
            if (image_index == image_name.length - 1)
                image_index = 0;
            else
                image_index++;
            getfilename(image_name[image_index]);
        });
        $("a#prev").click(function () {
            if (image_index == 0)
                image_index = image_name.length-1;
            else
                image_index--;
            getfilename(image_name[image_index]);
        });

        function getfilename(image_index) {
            $.ajax({
                type: 'POST',
                url: 'image_changer.php',
                data: {image_name: image_index},
                async: false,
                success: function (html) {
                    $("#display_image").replaceWith(html);
                }
            });
        }
    });


</script>


<!--<script>
    function myFunction() {
        var fruits = ["Banana", "Orange", "Apple", "Mango"];
        fruits.toString();
        document.getElementById("demo").innerHTML = fruits;
    }
</script>-->
