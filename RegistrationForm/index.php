<!DOCTYPE html>
<html>
	<head>
		<title>User Registration</title>
		<meta charset="UTF-8">
		<style>
			input {
				width: 200px;
			}
			input:required:valid {
				border-color: mediumspringgreen;
			}
			input:required:invalid {
				border-color: lightcoral;
			}
		</style>
	</head>
	<body>
		<h3>Register new account</h3>
		<form onsubmit="return validatePasswords(this);">
			Username:
			<br/>
			<input type="text" name="userName" required/>
			<br/>
			Password:
			<br/>
			<input type="password" name="password"/>
			<br/>
			Confirm:
			<br/>
			<input type="password" name="confirm"/>
			<br/>
			Email Address:
			<br/>
			<input type="email" name="email" required placeholder="A Valid Email Address"/>
			<br/>
			Website:
			<br/>
			<input type="url" name="website" required pattern="https?://.+"/>
			<br/>
			<input type="submit" name="register" value="Register">
		</form>
	</body>
</html>

<script>
	function validatePasswords(form) {
		if (form.password.value !== form.confirm.value) {
			alert("Passwords do not match");
			return false;
		}
		return true;
	}

</script>