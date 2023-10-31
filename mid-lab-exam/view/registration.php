<center>
<form  method="post" action="../controller/registrationCheck.php" enctype="">
	<table border="0" cellspacing="0" cellpadding="0">
		<tr>
			<td>
				<fieldset>
					<legend><h3>REGISTRATION</h3></legend>
					Id<br/><input type="text" name="userId" value=""><br/>
					Password<br/><input type="password" name="password" value=""><br/>
					Confirm Password<br/><input type="password" name="conPass" value=""><br/>
					Name<br/><input type="text" name="name" value=""><br/>
					User Type<hr/>
					<input type="radio" name="userType" value="user" />User
					<input type="radio" name="userType" value="admin"/>Admin
					<hr/>
					<input type="submit" value="Sign Up">
					<a href="login.php">Sign In</a>
				</fieldset>
			</td>
		</tr>                                
	</table>
</form>
</center>
		