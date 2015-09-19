<!DOCTYPE html>
<html>
    <head>
    </head>

    <body>

        <h2>Image Upload Form</h2>
        <form enctype="multipart/form-data" action="" method="post">
            <div>
                <input name="file" type="file" id="file"/>
            </div>
            <input type="submit" value="Upload File" name="submit">
        </form>                

    </body>

</html
<?php
if (isset($_POST['submit'])) {
    $uploads_dir = 'dir';
    if (!$_FILES["file"]["error"]) {
        $tmp_name = $_FILES["file"]["tmp_name"];
        $name = $_FILES["file"]["name"];
        move_uploaded_file($tmp_name, 'dir/'.$name);
    } else {
        echo "Developer error <br/>";
        print_r($_FILES["file"]["error"]);
    }
}
?>







