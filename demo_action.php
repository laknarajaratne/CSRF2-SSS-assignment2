<!DOCTYPE html>
<html lang="en">

<?php include 'head.php';?>

<body>

 	<?php include 'common.php';?>

	<script> //using javascript the tokenID is obtained and assigned to token
		$(function() {
			// Get the csrf token from the cookie
			const token = getCookie('tokenID');
			console.log(token); // the token is logged into the console section of the browser
			// 3) Add a new hidden field that has the value of the received CSRF token
			document.getElementById('csrfToken').value = token;
		});
		/******
			This function gets the value from cookie
		 ******/
		function getCookie(cname) {
			var name = cname + "=";
			var decodedCookie = decodeURIComponent(document.cookie);//the cookie is decoded and assigned to variable decodedcookie
            var ca = decodedCookie.split(';');  // splitting of cookie into the sessionid and the token
			for (var i = 0; i < ca.length; i++) { //checking for each part of the cookie
				var c = ca[i];
				while (c.charAt(0) == ' ') {
					c = c.substring(1);
				}
				if (c.indexOf(name) == 0) {
					return c.substring(name.length, c.length);
				}
			}
			return "";
		}
	</script>

	<!once successfully logged in>
	<div class="container">
		<div class="row">

			<h4>Hello Admin!!!</h4>

			<form action="result.php" method="POST"><!form sent to result pg and through post method>
				<input type="hidden" name="csrfToken" id="csrfToken" value="token"><!using the hidden criteria for the token>
				<div class="form-group">
					<label for="resource_name">Resource Name</label>
					<input type="text" name="resource_name" value="Resources">
				</div>
				<button type="submit" class="btn btn-danger">Delete Resource</button>
			</form>
		</div>
	</div>

</body>

</html>
