<?php
session_start();
if (isset($_POST['submit'])) {
	include('config.php');

	$email = $_POST['email'];
	$pw = $_POST['pw'];
	$sql = "SELECT * FROM customer WHERE email = '$email' AND pass = '$pw';";
	$sql_result = mysqli_query($conn, $sql) or die('request "Could not execute SQL query" ' . $sql);
	$user = mysqli_fetch_assoc($sql_result);
	if (!empty($user)) {
		$_SESSION['user_info'] = $user['email'];
		$message = 'Logged in successfully';
		echo "<script type='text/javascript'>alert('$message');window.location.href='index.php';</script>";
	} else {
		$message = 'Wrong email or password.';
		echo "<script type='text/javascript'>alert('$message');window.location.href='login.php';</script>";
	}

}
?>
<!DOCTYPE html>
<html>

	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
			integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

		<link rel="stylesheet" href="admin/style.css">
		<title>bookYOURshow</title>

		<meta name="viewport" content="width=device-width, initial-scale=1">

		<style>
			.formerror {
				color: red;
			}
		</style>
	</head>

	<body class="bg-dark">
		<?php
        include("navbar.php")
        	?>


		<section class="w-100 p-4 p-xl-5" style="background-color: #9A616D; border-radius: .5rem .5rem 0 0;">
			<div class="row d-flex justify-content-center">
				<div class="col-12">
					<div class="card" style="border-radius: 1rem;">
						<div class="row g-0">
							<div class="col-md-6 col-lg-5 d-none d-md-block">
								<img src="img/logo.png" alt="login form" class="img-fluid"
									style="border-radius: 1rem 0 0 1rem;">
							</div>
							<div class="col-md-6 col-lg-7 d-flex align-items-center">
								<div class="card-body p-4 p-lg-5 text-black">

									<form action="login.php" method="post" name="myForm"
										onsubmit="return validateForn()">

										<div class="d-flex align-items-center mb-3 pb-1">
											<i class="fas fa-cubes fa-2x me-3" style="color: #ff6219;"></i>
											<span class="h1 fw-bold mb-0">LOG IN</span>
										</div>

										<h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Sign into your
											account</h5>

										<div class="form-outline mb-4">
											<label class="form-label" for="form2Example17"
												style="margin-left: 0px;">Email address</label>
											<input type="email" id="form2Example17" class="form-control form-control-lg"
												name="email">
											<span class="formerror"><b> </b></span>
											<div class="form-notch">
												<div class="form-notch-leading" style="width: 9px;"></div>
												<div class="form-notch-middle" style="width: 88.8px;"></div>
												<div class="form-notch-trailing"></div>
											</div>
										</div>

										<div class="form-outline mb-4">
											<label class="form-label" for="form2Example27"
												style="margin-left: 0px;">Password</label>
											<input type="password" id="form2Example27"
												class="form-control form-control-lg" name="pw">
											<span class="formerror"><b> </b></span>
											<div class="form-notch">
												<div class="form-notch-leading" style="width: 9px;"></div>
												<div class="form-notch-middle" style="width: 64.8px;"></div>
												<div class="form-notch-trailing"></div>
											</div>
										</div>

										<div class="pt-1 mb-4">
											<button class="btn btn-dark btn-lg btn-block" type="submit"
												name="submit">Login</button>
										</div>

										<a class="small text-muted" href="#!">Forgot password?</a>
										<p class="mb-5 pb-lg-2" style="color: #393f81;">Don't have an account? <a
												href="register.php" style="color: #393f81;">Register here</a></p>
										<a href="#!" class="small text-muted">Terms of use.</a>
										<a href="#!" class="small text-muted">Privacy policy</a>
									</form>

								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		
	</body>

</html>