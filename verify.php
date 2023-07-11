<?php
include "config.php";
session_start();

$mid = $_POST['mid'];
$ticket = $_POST['ticket'];
$fname = $_POST['fName'];
$lname = $_POST['lName'];
$email = $_POST['email'];
$mobile = $_POST['pNumber'];
$theatre = $_POST['theatre'];
$type = $_POST['type'];
$date = $_POST['date'];
$time = $_POST['hour'];

 if (isset($_POST['submit'])) {

  $qry = "INSERT INTO `bookingtable`(`mid`, `ticket`, `fname`, `lname`, `email`, `mobile`, `theatre`, `type`, `date`, `time`) VALUES ('$mid', '$ticket', '$fname', '$lname', '$email', '$mobile', '$theatre', '$type', '$date', '$time')";
  $result = mysqli_query($conn, $qry);
  echo $result;

  if ($result != 0) {
    $message = "You seat has been successfully registered!";

  } else {
    $message = "Could not insert record";
  }
  echo "<script type='text/javascript'>alert('$message');</script>";
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
    <link rel="icon" type="image/x-icon" href="img/logo.png">
    <style>
      .row {
        display: flex;
        justify-content: center;
        text-align: center;
      }

      table {
        border: 0;
        text-align: center;
      }

      table td,
      table th {
        border: 1px solid black;
        padding: 10px;
        width: 5%;
      }
    </style>

  </head>

  <body>
    <center>
      <form action="pay.php" method="post">
      <table>
        <tbody>
          <tr>
            <th>No</th>
            <th>Label</th>
            <th>Values</th>
          </tr>

          <tr>
            <td>1</td>
            <td>ORDER ID</td>
            <td>JS1101427</td>
          </tr>

          <tr>
            <td>2</td>
            <td>Name</td>
            <td>
              <?php echo $_POST['fName'] . " " . $_POST['lName']; ?>
            </td>
          </tr>

          <tr>
            <td>3</td>
            <td>Theatre</td>
            <td>
              <?php echo $_POST['theatre']; ?>
            </td>
          </tr>

          <tr>
            <td>4</td>
            <td>Type</td>
            <td>
              <?php echo $_POST['type']; ?>
            </td>
          </tr>

          <tr>
            <td>5</td>
            <td>Seats</td>
            <td>
              <?php echo $_POST['ticket']; ?>
            </td>
          </tr>

          <tr>
            <td>6</td>
            <td>Total</td>
            <td>
              <?php

            if ($theatre == "main-hall") {
              $amt = 200;
              $tamt = $amt * ($_POST['ticket']);
            }
            if ($theatre == "vip-hall") {
              $amt = 500;
              $tamt = $amt * ($_POST['ticket']);
            }
            if ($theatre == "private-hall") {
              $amt = 800;
              $tamt = $amt * ($_POST['ticket']);
            }
            
            ?>
            <input type="number" name="amt" value="<?php echo $tamt; ?>" readonly>
            </td>
          </tr>
        
        </tbody>
      </table>
      <br><br>

      <input type="hidden" value="<?php $eamil = $_POST['email']; echo $email;?>" name="email">
      <a href="pay.php"><button type="submit" class="btn btn-info"> Pay Now</button></a>
      </form>
    </center>


  </body>

</html>