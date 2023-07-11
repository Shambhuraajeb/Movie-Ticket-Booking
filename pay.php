<!doctype html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>bookYOURshow</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="icon" type="image/x-icon" href="img/b.png">
    <style>
      input,
      select {

        padding: 12px;
        border: 1px solid #ccc;
        border-radius: 4px;
        resize: vertical;
      }

      b {
        color: red;
      }

      .form {
        align-items: center;
        margin: 100px 200px;
      }
    </style>
  </head>

  <body style="background-color: LightGray;">
    <nav class="navbar navbar-expand-lg" style="background-color: #e3f2fd; height: 65px;">
      <div class="container-fluid">
        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor"
          class="bi bi-credit-card-2-back-fill" viewBox="0 0 16 16">
          <path
            d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v5H0V4zm11.5 1a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h2a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-2zM0 11v1a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-1H0z" />
        </svg>


        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" style="pointer-events: none;"><b style="color: blue;"> PAY</b><i
                  style="color: blue;">details</i></a>
            </li>
          </ul>
        </div>
      </div>
    </nav>



    <form action="payment.php" method="post" class="form">
      <?php
      include "config.php";
      $amt = $_POST['amt'];
      $email = $_POST['email'];
      ?>
      <input type="hidden" value="<?php echo $amt; ?>" name="tamt" readonly>
      <input type="hidden" value="<?php echo $email; ?>" name="email" readonly>

      <div>
        CARD TYPE <b>*</b>
        <select name="card" id="card" style="margin-left: 100px;" required>
          <option value="" disabled selected>CARD</option>
          <option value="debit">DEBIT CARD</option>
          <option value="credit">CREDIT CARD</option>
        </select>
      </div>
      <br>


      <div>
        CARD HOLDER NAME <b>*</b>
        <input type="text" name="fname" placeholder="First Name" required style="margin-left: 25px;">
        <input type="text" name="mname" placeholder="Middle Name" required>
        <input type="text" name="lname" placeholder="Last Name" required>
      </div>
      <br>
      <div>
        CARD NUMBER <b>*</b> <input type="tel" placeholder="Enter your card number"
          style="width: 55%; margin-left: 70px;" required>
      </div>
      <br>
      <div>
        EXPIRY DATE <b>*</b> <input type="date" required style="margin-left: 90px;">

        <label style="margin-left: 100px;"> CVV <b>*</b> </label><input type="password" placeholder="***"
          style="margin-left: 90px;">
      </div>
      <br><br>
      <div>
        <button class="btn btn-primary btn-lg btn-block" type="submit" name="submit" style="margin-left: 35%;">Pay
        ₹<?php echo $amt; ?></button>
      </div>
    </form>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
      crossorigin="anonymous"></script>
  </body>

</html>