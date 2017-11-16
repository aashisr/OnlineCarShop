

<?php
	session_start();
	 require ("header.php");
?>


		<div id="loginbox">
			<?php
				if (isset($_SESSION["login"])){
			 ?>
					<p>Logged in as <?php $vname= $_SESSION["uname"]; echo $vname;
							 						?></p>
					<a href="logout.php"><button class="btn center-block btn-danger">Logout</button></a>
			<?php
			} else {
			?>
			<form method="post" action="logincheck.php">
				<table>
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
		<?php
	 }
		?>
		</div>
</div>   <!-- left ends here -->

	<div class="table-responsive" id="content" style="padding:0%">
			<table class="ctable">
				<tr>
					<th>Photo</th>
					<th>Model</th>
					<th>Year of Manufacture</th>
					<th>Mileage</th>
					<th>Price</th>
					<th>Contact</th>
				</tr>
				<tr>
					<td><a href="forms/form.php"><img class ="img-responsive" id="bmw650" height="200" width="280" src="Images/bmw650.jpg"  alt="BMW 650" title="Click for more info" ></a></td>
					<td>BMW 650 <br/> (4.4) iA xDrive M Sport,<br/> Panorama, Bang & Olufsen,<br/> uuden hinta 220.000eur!</td>
					<td>2012</td>
					<td>12 000</td>
					<td>169 800 €</td>
					<td>AUTOLIIKE <br/> Autoliike Marko <br/> Sipilä <br/> Raisio</td>
				</tr>

				<tr>
					<td><a href="forms/form.php"><img id="bmw740" height="200" width="280" src="Images/bmw740.jpg"  alt="BMW 740" title="Click for more info"></a></td>
					<td>BMW 740 <br/> (3.0) d TwinPower Turbo A <br/> xDrive F01 Sedan</td>
					<td>2012</td>
					<td>1 000</td>
					<td>168 044 €</td>
					<td>AUTOLIIKE <br/> Käyttöauto Oy <br/> Seinäjoki <br/> Seinäjoki</td>
				</tr>

				<tr>
					<td><a href="forms/form.php"> <img id="bmwm5" src="Images/bmwm5.jpg" height="200" width="280" alt="BMW M5" title="Click for more info"></a></td>
					<td>BMW M5 <br/> (4.4) Sedan F10 M5 4.4 L- <br/> V8-560hv/680Nm Twinturbo</td>
					<td>2012</td>
					<td>13 500</td>
					<td>162 900 €</td>
					<td>AUTOLIIKE <br/> Rami's Auto <br/> ESpoo </td>
				</tr>

				<tr>
					<td><a href="forms/form.php"><img id="bmw740h" src="Images/bmw740h.jpg" height="200" width="280" alt="BMW 740" title="Click for more info"></a></td>
					<td>BMW 740 <br/> (3.0) d TwinPower Turbo A <br/> xDrive F01 Sedan</td>
					<td>2012</td>
					<td>3 000</td>
					<td>149 900 €</td>
					<td>AUTOLIIKE <br/> Laakkonen <br/> Helsinki <br/> Helsinki</td>
				</tr>

			</table>


			<div class="formFill">
				<p><strong>Please fill in to receive our weekly newsletters:</strong></p>
				<form method="post" action="formsubmit.php">
					<table class="ftable">
						<tr>
							<td><label for="fname">First name:</label></td>
							<td><input type="text" name="fname" required></td>
		   			</tr>
						<tr>
							<td><label for="sname">Surname:</label></td>
							<td><input type="text" name="sname" required></td>
						</tr>
						<tr>
							<td><label for="email">Email:</label></td>
							<td><input type="email" name="email" required></td>
						</tr>
						<tr>
							<td><input type="submit" value="Submit" name ="submit"></td>
						</tr>
					</table>
				</form>
			</div>   <!--formFill ends-->
		</div>    <!-- content ends -->

</div>   <!--container ends-->
</body>
</html>
