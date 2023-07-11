<?php
session_start();
include('config.php');
if (isset($_POST['submit'])) {
  $email = $_POST['email'];
  $pw = $_POST['pw'];

  $sql = "INSERT INTO customer (email, pass) VALUES ('$email', '$pw')";
  if (mysqli_query($conn, $sql)) {
    $message = "You have been successfully registered";
    echo "<script type='text/javascript'>alert('$message');window.location.href='index.php';</script>";
  } else {
    $message = "Could not insert record";
    echo "<script type='text/javascript'>alert('$message');window.location.href='contact.php';</script>";
  }

}
?>
<HTML>

  <HEAD>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>bookYOURshow</title>

    <style>
			.formerror {
				color: red;
			}
		</style>
  </HEAD>

  <BODY class="bg-dark">

    <?php include("navbar.php") ?>

    <section class="w-100 p-4 p-xl-5" style="background-color: #9A616D; border-radius: .5rem .5rem 0 0;">
      <div class="row d-flex justify-content-center">
        <div class="col-12">
          <div class="card" style="border-radius: 1rem;">
            <div class="row g-0">
              <div class="col-md-6 col-lg-5 d-none d-md-block">
                <img src="img/logo.png" alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;">
              </div>
              <div class="col-md-6 col-lg-7 d-flex align-items-center">
                <div class="card-body p-4 p-lg-5 text-black">

                  <form action="register.php" method="post" name="myForm" onsubmit="return validateForm()">

                    <div class="d-flex align-items-center mb-3 pb-1">
                      <i class="fas fa-cubes fa-2x me-3" style="color: #ff6219;"></i>
                      <span class="h1 fw-bold mb-0">SIGN UP</span>
                    </div>

                    <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Sign into your
                      account</h5>

                    <div class="form-outline mb-4">
                    <label class="form-label" for="form2Example17" style="margin-left: 0px;">Email address</label>
                      <input type="email" id="form2Example17" class="form-control form-control-lg" name="email">
                      
                      
                    </div>

                    <div class="form-outline mb-4">
                    <label class="form-label" for="form2Example27" style="margin-left: 0px;">Password</label>
                      <input type="password" id="pw" class="form-control form-control-lg" name="pw">
                      
                      <span class="formerror"><b> </b></span>
                      
                    </div>

                    <div class="form-outline mb-4">
                    <label class="form-label" for="form2Example27" style="margin-left: 0px;">Confirm Password</label>
                      <input type="password" id="cpw" class="form-control form-control-lg" name="cpw">
                      
                      
                    </div>

                    <div class="pt-1 mb-4">
                      <button class="btn btn-dark btn-lg btn-block" type="submit" name="submit">SignUp</button>
                    </div>


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




    <?php
    include("footer.php");

    ?>
    <script>
      function seterror(id, error) {
        element = document.getElementById(id);
        element.getElementsByClassName('formerror')[0].innerHTML = error;
      }
      function validateForm() {
        
        var name = document.forms['myForm']["pw"].value;
        if (name.length < 5) {
          seterror("name", "Length is too short");
          returnval = false;
        }



        return returnval;
      }
    </script>

  </BODY>

</HTML>