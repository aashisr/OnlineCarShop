<?php require ("header.php") ?>
<div class="formFill" id ="content">
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
	</div>   <!--container ends-->
</body>
</html>
