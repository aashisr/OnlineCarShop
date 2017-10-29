<?php
  session_start();
  require ("header.php")
?>

</div> <!-- left ends -->
<script>
function validateForm() {
  var x = document.forms["searchform"]["ccompany"].value;
  if (x == null || x = "") {
    alert("Please fill in this field.");
    return false;
  }
}
</script>
  <div id = "content">
    <form name ="searchform" action ="<?php echo htmlspecialchars( $_SERVER["PHP_SELF"]); ?>" onsubmit = "return validateForm()" method ="POST">
        <p>Please fill in the vehicle information and we will find the suitable car for you:</p>
      <table class="search">
        <tr>
          <td>Car Company (Ford etc):</td> <td> <input type ="text" name ="ccompany"><br> </td>
        </tr>
        <tr>
          <td>Model:</td><td> <input type = "text"><br></td>
        </tr>
        <tr>
          <td>Gas or Diesel? :</td><td> <input type = "text"><br></td>
        </tr>
        <tr>
          <td>Transmission:</td><td> <input type = "text"><br></td>
        </tr>
        <tr>
          <td>Price Range :</td><td><input type = "text"><br></td>
        </tr>
        <tr>
          <td>Your Email :</td><td> <input type = "email"><br></td>
        </tr>
        <tr>
          <td>Your Email Again :</td><td> <input type = "email"><br></td>
        </tr>
        <tr>
          <td><input type = "submit" value = "Send"></td>
        </tr>
      </table>
    </form>
  </div>

</body>
</html>
