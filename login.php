<?php
	session_start();
	require ("header.php");
?>

	<div id ="loginbox">
		<form method="post" action="logincheck.php">
			<table>
				<tr>

						<p>Please log in first to see this page.</p>

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
	</div> <!-- login ends -->
</div>  <!-- left ends -->



</body>
</html>
