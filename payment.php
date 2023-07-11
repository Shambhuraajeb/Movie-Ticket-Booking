<?php
session_start();
include('config.php');
if (isset($_POST['submit'])) {
  $tamt = $_POST['tamt'];
  $email = $_POST['email'];
  $fname = $_POST['fname'];
  $mname = $_POST['mname'];
  $lname = $_POST['lname'];


  $sql = "INSERT INTO pay (email, tamt, fname, mname, lname) VALUES ('$email', '$tamt', '$fname', '$mname', '$lname')";
  if (mysqli_query($conn, $sql)) {

  } else {
    $message = "Could not insert record";
    echo "<script type='text/javascript'>alert('$message');</script>";
  }

}
?>

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
      .row {
        display: flex;
        justify-content: center;
        text-align: center;
      }

      .box {
        border: 1px solid;
        padding: 10px;
        box-shadow: 5px 10px 8px 10px #888888;
        margin: 5px 150px;
      }
    </style>
  </head>

  <body>

    <audio src="img/pay.mp3" autoplay></audio>

    <div style="margin-top: 50px;">
      <center>
        <img src="img/ap.png" alt="">
        <br>
        <b>
          <h2> Thank for your payment!</h2>
        </b>
        <br>
        <p>
          Thank you, your payment has been succesful and your booking is now confirmed. <br>
          A confirmation email has been sent to
          <?php echo $email; ?>
        </p>
        <br>
        <b>Order summary</b>
        <div class="box">
          <p>
            <b class="name"> Date of purchase :</b>
            <b class="value">
              <script> document.write(new Date().toLocaleDateString()); </script>
            </b>
            <br>
            <b class="name">Order ID :</b><b class="value"> JS1101427</b>
            <br>
            <b class="name">Items :</b> <b class="value">Movie Ticket</b>
            <br>
            <b class="name">Payment Method :</b> <b class="value">Debit Card</b>
            <br>
            <b class="name">Total :</b>
            <b class="value">
              <?php echo $tamt; ?>
            </b>

          </p>
        </div>
        <br><br><br>
        <a href="index.php"><button class="btn btn-primary btn-lg btn-block">Book More</button></a>
      </center>
    </div>
    <br><br><br><br>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
      crossorigin="anonymous"></script>
  </body>

</html>