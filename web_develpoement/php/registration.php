<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="../css/Registration.css">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
	<form name="Login" action="./registration_query.php" onsubmit=" return validatefield(this) " method="Post">

		<div class="box">
			<h1>Sign-Up</h1>

			<div class="textbox">
				<input type="text" placeholder="First Name" name="fname" value="" required="Invaild Username">
			</div>
			<div class="textbox">
				<input type="text" placeholder="Last Name" name="lname" value="" required="Invaild Username">
			</div>
			<div class="textbox">
				<input type="Email" placeholder="Email" name="email" value="" required="Invaild Email">
			</div>
			<div class="textbox">
				<input type="Contact" name="contact" value="" required="" placeholder="Contact Number">
			</div>

			<div class="textbox">

				<input type="Password" placeholder="Password" name="pass" value="" required="Enter Password">
			</div>
			<div class="textbox">

				<input type="Password" placeholder="Confirm-Password" name="PAS" value="" required="Enter Password">

			</div>

			<div id="c_pass">
				<p style="color: red"></p>
			</div>
			<div>
				<a href="" style="color: white"><input type="checkbox" name="" required="">Terms & Conditions</input></a>
			</div>

			<input class="btn" type="submit" name="btn" value="Register">

			<a href="./loginf.php" style="color: white; text-align: center;">
				<h4 class="sign">Login Page </h4>
			</a>
		</div>

	</form>

</body>

<script type="text/javascript">
	function validatefield(this_form) {
		var password = this_form.pass.value;
		var c_password = this_form.PAS.value;
		var Con = this_form.Cont.value;
		var regex_password = /^[a-zA-Z0-9!@#$%^&*]{8,16}$/;
		errors = [];
		if (password.length < 8) {
			errors.push("Your password must be at least 8 characters");
		}

		if (password.search(/[a-z]/i) < 0) {
			errors.push("Your password must contain at least one letter.");
		}

		if (password.search(/[0-9]/) < 0) {
			errors.push("Your password must contain at least one digit.");
		}
		if (password.search(/[!@#$%^&*]/) < 0) {
			errors.push("Your password must contain at least special character.");
		}
		if (errors.length > 0) {
			alert(errors.join("\n"));
			return false;
		}
		if (password != c_password) {
			document.getElementById("c_pass").innerHTML = "Password did not match: Please try again";
			this_form.PAS.focus();
			return false;
		}
		return true;
	}
</script>

</html>