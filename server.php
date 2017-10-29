<?php require ("header.php") ?>
<div id="box">
 <?php
$servername = "localhost";
$username = "root";
$password = "";
$database="sukky_cars";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST["register"])) {
  $uname= ($_POST["uname"]);
  $password =($_POST["password"]);

  $sql = "SELECT UserName FROM users WHERE UserName='$uname'";
  $result =mysqli_query($conn,$sql);   //$conn-checks connection, $sql -specifies the query

    if (mysqli_num_rows($result) == 0) {   //returns the number of rows in result set
       $sql ="INSERT INTO users (UserName, Password) VALUES ('$uname','$password')";

        if (mysqli_query($conn,$sql)) {
          echo "Username registered in database.";
        }
          else{
            echo "Error:" .$sql . "<br>" . mysqli_error($conn);
          }

    }
      else{
        echo "Username not available!!";
      }

}
if (isset($_POST["login"])){
  $uname = ($_POST["uname"]);
  $password=($_POST["password"]);

  $sql = "SELECT UserName, Password FROM users WHERE UserName='$uname' AND Password='$password'";
  $result = mysqli_query($conn,$sql);

    if (mysqli_num_rows($result) == 1) {
      echo "Logged in as $uname";
    }
      else{
        echo "You need to register first!";
      }
}

mysqli_close($conn);
?>
</div>   <!-- content ends -->
</div>   <!--container ends-->
</body>
</html>
