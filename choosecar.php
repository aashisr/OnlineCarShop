<?php                                          
	session_start();
	if(!isset($_SESSION["login"]))
		header("location:login.php");
 ?>


<?php require ("header.php") ?>
<div id="loginbox">
	<p>Logged in as <?php $vname= $_SESSION["uname"]; echo $vname;
			 						?></p>
	<a href="logout.php"><button class="btn center-block btn-danger">Logout</button></a>
</div>

</div>

<div id="content">
	<table class="ctable">
		<tr>
		<p>Please select a car that you want more information on:</p>
		<form action= "<?php echo $_SERVER['PHP_SELF']; ?>" method="get">
			<select name="cars">
				<option>--Please select--</option>
				<option value="bmw">BMW -- 12400 euros</option>
				<option value="ford">FORD -- 8900 euros</option>
				<option value="ferrari">Ferrari -- 210000 euros</option>
				<option value="merce">Merzedes -- 32000 euros</option>
				<option value="seat">Seat -- 23000 euros</option>

			</select>

			<input type="submit" value="Update" name="submit" >
		</form>
	</tr>
	<br><br>
</table>
	<!-- selection of car -->
<?php
$cars="";
if (isset($_GET["submit"])) {
	$selectedCar = $_GET["cars"];
	$myFile = fopen("cars_lab4.txt","r") or die("Error in opening the file");
	//"r" - only read file

	while (!feof($myFile)){       // !feof -Output a line of the file until the end is reached
		$line[] = fgets($myFile);  //fgets — Gets a single line from file pointer
		//Get the every line from the whole text file and store each Line as a arrary.
	}

for($i = 0; $i<count($line); $i++) {
	$indi[] = explode("|",$line[$i]);  //explode — Split a string by string
		//Break the text spearated with demiliter | and store the result in another arrray. So There indi in Two dimensional arrary now.
}

if ($selectedCar =="bmw"){
	$carFileName = $indi[0] [3];
	$carPrice = $indi[0] [1];
	$carDate = $indi[0] [2];
	$carCountry = $indi[0] [4];
	$carBrand = $indi[0] [0];
}
else if ($selectedCar =="ford") {
	$carFileName = $indi[1] [3];
	$carPrice = $indi[1] [1];
	$carDate = $indi[1] [2];
	$carCountry = $indi[1] [4];
	$carBrand = $indi[1] [0];
}
else if ($selectedCar =="ferrari") {
	$carFileName = $indi[2] [3];
	$carPrice = $indi[2] [1];
	$carDate = $indi[2] [2];
	$carCountry = $indi[2] [4];
	$carBrand = $indi[2] [0];
}
else if ($selectedCar =="merce") {
	$carFileName = $indi[3] [3];
	$carPrice = $indi[3] [1];
	$carDate = $indi[3] [2];
	$carCountry = $indi[3] [4];
	$carBrand = $indi[3] [0];
}
else if ($selectedCar =="seat") {
	$carFileName = $indi[4] [3];
	$carPrice = $indi[4] [1];
	$carDate = $indi[4] [2];
	$carCountry = $indi[4] [4];
	$carBrand = $indi[4] [0];
}
else {
								foreach ($indi as $v3) {
										foreach ($v3 as $v4) {
												echo($v4);
												echo "<br>";
										}
								}
						}
?>

<table class ="ctable">
		<tr>
								<th>Picture</th>
								<th>Model</th>
								<th>Price</th>
								<th>Year</th>
								<th>Brand</th>
		</tr>
		<tr>
								<td><a href='form.php'><img src= '<?php echo $carFileName ?>'  width='280' height='200' title='Click for more Info.' alt='Car image'></a></td>
								<td><?php echo $carBrand ?></td>
								<td><?php echo $carPrice ?></td>
								<td><?php echo $carDate ?></td>
								<td><?php echo $carCountry ?></td>
		</tr>

</table>

<?php
			}
?>
</tr>
	</div>   <!--content ends-->
	</div>   <!--container ends-->
</body>
</html>
