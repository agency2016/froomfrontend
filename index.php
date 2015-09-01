<!DOCTYPE html>
<html>
    <head>
        <title>Hello i am testsThere</title>
        <script src="js/vendor/jquery-1.11.2.min.js"></script>
        <script src="js/bootstrap.js"></script>
        <script src="js/main.js"></script>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
         <link rel="stylesheet" type="text/css" href="css/main.css">
         <script type="text/javascript">
            $( document ).ready(function() {

                      $(".container").on('click',".ofcitems", function(e){
                        e.preventDefault();
                        var dataid = $(this).attr("data-desc");
                        var data = {
                        "parent": dataid
                        };
                         $.ajax({
                          url: 'ajaxreq.php',
                          type: 'post',
                          data:data,
                          success: function(data, status) {
                            if(data) {
                              $('#officecontainer').html(data);

                            }
                          },
                          error: function(xhr, desc, err) {
                            console.log(xhr);
                            console.log("Details: " + desc + "\nError:" + err);
                          }
                        }); // end ajax call
                        

                    });
            });
         </script>
         <style>
             .portfolio-item{
                 background:#e4e4e4;
                 padding:20px;
                 height:100px;
                 border :5px solid white;
                 text-align: center;
                 text-decoration: underline;
                 font-weight: bolder;
                 font-size: 30px;
                }

         </style>
    </head>
    <body>
        <div class="container" id="officecontainer">
        <?php
          $servername = "localhost";
          $username = "root";
          $password = "";
          $dbname = "deltatest";

          // Create connection
          $conn = new mysqli($servername, $username, $password);

          // Create connection
          $conn = new mysqli($servername, $username, $password, $dbname);

          // Check connection
          if ($conn->connect_error) {
              die("Connection failed: " . $conn->connect_error);
          }
          echo "Connected successfully"; 

          /*$sql = "INSERT INTO users (uid,uname )
          VALUES ('1', 'Y')";

          if ($conn->query($sql) === TRUE) {
              echo "New record created successfully";
          } else {
              echo "Error: " . $sql . "<br>" . $conn->error;
          }
          */

          $sql = "SELECT* FROM users";
          $result = $conn->query($sql);
          if ($result->num_rows > 0) {
              // output data of each row
              while($row = $result->fetch_assoc()) {
                  echo "id: " . $row["uid"]. " - Name: " . $row["uname"]."<br>";
              }
          } else {
              echo "0 results";
          }

          $conn->close();
?>


        </div>
    </body>
</html>

