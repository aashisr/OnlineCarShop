<?php
  session_start();
  require ("header.php");
 ?>

  <div id="loginbox">
    <form method="post" action="logincheck.php">
      <table>
        <tr>
          <!--  registration and login checker   -->
          <?php
          $servername = "fdb7.biz.nf";
          $username = "2124375_sukky";
          $password = "Snowman2015";
          $database="2124375_sukky";
          // Create connection
          $conn = mysqli_connect($servername, $username, $password, $database);

          // Check connection
          if (!$conn) {
             die("Connection failed: " . mysqli_connect_error());
          }

          if (isset($_POST["register"])) {
           $uname= addslashes($_REQUEST["uname"]);
           $password =addslashes($_REQUEST["password"]);

           $sql = "SELECT UserName FROM users WHERE UserName='$uname'";
           $result =mysqli_query($conn,$sql);   //$conn-checks connection, $sql -specifies the query

              if (mysqli_num_rows($result) == 0) {   //returns the number of rows in result set
                $sql ="INSERT INTO users (UserName, Password) VALUES ('$uname','$password')";

                if (mysqli_query($conn,$sql)) {

                  echo "Registration succesful. You can now log in here.";

                 }
                   else{
                     echo "Error:" .$sql . "<br>" . mysqli_error($conn);
                   }

             }
               else{
                 echo "Username not available.";

               }

          }
          if (isset($_POST["login"])){
           $uname = mysqli_real_escape_string($conn,$_POST["uname"]);
           $password=mysqli_real_escape_string($conn,$_POST["password"]);

           $sql = "SELECT UserName, Password FROM users WHERE UserName='$uname' AND Password='$password'";
           $result = mysqli_query($conn,$sql);

             if (mysqli_num_rows($result) == 1) {


               $_SESSION["login"]="1";
               $_SESSION["uname"]=$uname;
               header("location:choosecar.php");
             }
               else{
                 echo "You need to register first.";

               }
          }

          mysqli_close($conn);
          ?>


				</tr>
        <tr>
          <td><label for="uname">Username:</label></td>
          <td><input class="form-control" type ="text" name="uname" size="15" maxlength="15" required></td>
        </tr>
        <tr>
          <td><label for="password">Password:</label></td>
          <td><input class="form-control" type="password" name ="password" size="15" maxlength="15" required></td>
        </tr>
        <tr>
          <div class ="row">
            <div class ="col-xs-6">
              <td><input class ="btn btn-block btn-primary" type="submit" name="login" value ="Login"></td>
            </div>
            <div class="col-xs-6">
              <td><button class ="btn btn-block btn-primary" type="submit" name="register"><i class="fa fa-paper-plane"></i>  Register</button></td>
            </div>
          </div>
        </tr>
      </table>
    </form>
  </div>  <!-- login box ends -->
</div>   <!--  left ends -->

</body>
</html>
