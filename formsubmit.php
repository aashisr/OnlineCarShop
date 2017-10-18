<?php require ("header.php") ?>

</div>  <!-- Left ends -->
<div id="content">

<?php
$fname ="";
date_default_timezone_set('Europe/Helsinki');
if (isset ($_POST["submit"])) {
	$fname=$_POST["fname"];
	echo "Thank you $fname for subscribing !!";
	echo "<br>";
 echo date('h:i:s a, l F jS Y e');
 }
?>

	</div>     <!--content ends-->
	</div>   <!--container ends-->
</body>
</html>
