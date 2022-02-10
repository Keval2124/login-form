<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>PHP login page</title>
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="style.css" />
		<link
			href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
			rel="stylesheet"
		/>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
	</head>
	<body style="background-color: transparent">
		<div class="container mt-3 bg-dark" id="hm" >
			<form action="registration.php" method="post" class="was-validated">
				<div class="form-floating mb-3 mt-3">
					<input
					type="text"
					class="form-control"
					id="user"
					placeholder="user"
					name="user"
					required>
					<label for="User">User name</label>
				</div>
				<div class="form-floating mt-3 mb-3">
					<input
					type="text"
					class="form-control"
					id="pwd"
					placeholder="password"
					name="password"
					required>
					<label for="Password">Password</label>
				</div>
				<button type="submit" class="btn btn-primary">Registration</button>
			</form>
		</div>
	</body>
</html>
