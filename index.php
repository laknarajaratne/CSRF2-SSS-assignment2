<!DOCTYPE html>
<html lang="en">
<!The first page with the login section>
<?php include 'head.php'; ?>
<body>
    <?php include 'common.php'; ?>
	<div class="container">
		<div class="row col-lg-4 col-lg-offset-4">
			<form action="handler.php" method="POST"> <!form action indicates the destination to which the method 'post' transfers the data unseen through the url>

                <div class = "jumbotron">
				<div class="form-group">
					<label for="username" class = "text-primary">Username</label>
					<input type="text" class="form-control" id="username" name="username" required value="admin"> <!the input field for the username which is identified by the id and here hardcoded as admin>
				</div>
				<div class="form-group">
					<label for="password" class = "text-success">Password</label>
					<input type="password" class="form-control" id="password" name="password" required value="admin@123"> <!input field for the password>
				</div>
				<button type="submit" class="btn btn-warning btn-lg">Login</button>
                </div>
			</form>

		</div>
	</div>

</body>

</html>