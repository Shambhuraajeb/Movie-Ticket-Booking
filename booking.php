<!DOCTYPE html>
<html lang="en">
  <?php
  $id = $_GET['id'];
  //conditions
  if ((!$_GET['id'])) {
    echo "<script>alert('You are Not Suppose to come Here Directly');window.location.href='index.php';</script>";
  }
  include "config.php";
  $movieQuery = "SELECT * FROM movie_details WHERE id = $id";
  $movieImageById = mysqli_query($conn, $movieQuery);
  $row = mysqli_fetch_array($movieImageById);
  ?>



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

      .input {
        width: 40%;
      }

      .block {
        display: flex;
        justify-content: center;
      }

      .img {
        height: 20%;
        width: 20%;
        margin: 20px 100px;
      }

      .imf {
        margin-top: 200px;
      }
    </style>
  </head>

  <body class="bg-dark">

    <?php
    session_start();
    include("navbar.php")
      ?>


    <div class="block">
      <div class="img">
        <img src="<?php echo $row['img']; ?>" class="card-img-top" alt="movie" name="img">
      </div>

      <div class="imf">
        <h4 class="card-title text-light" name="name">
          <?php echo $row['name']; ?>
        </h4>
        <b class="text-muted" name="genre">
          <?php echo $row['genre']; ?>
        </b> <br>
        <b class="card-text text-light">
          <?php echo $row['actor']; ?>
        </b>
      </div>
    </div>

    <br><br><br>

    <div>
      <form action="verify.php" method="post">
        <input type="hidden" name="mid" value="<?php echo $id; ?>">
        <div class="container" style="margin-left: 15%;">
          <div class="form-1">
            <ul class="row">
              <li class="row" style="margin-left: 150px;">
                <div style="text-align: center;" class="btn-group">
                  <select name="theatre" class="form-select" aria-label="Default select example"
                    style="width: 150px; margin-right: 40px;" required>
                    <option value="" disabled selected>THEATRE</option>
                    <option value="main-hall">Main Hall</option>
                    <option value="vip-hall">VIP Hall</option>
                    <option value="private-hall">Private Hall</option>
                  </select>

                  <select name="type" class="form-select" aria-label="Default select example"
                    style="width: 150px; margin-right: 40px;" required>
                    <option value="" disabled selected>TYPE</option>
                    <option value="3d">3D</option>
                    <option value="2d">2D</option>
                    <option value="imax">IMAX</option>
                    <option value="7d">7D</option>
                  </select>

                  <input placeholder="Number of Ticket" type="number" name="ticket"
                    class="form-input" style="width: 150px; margin-left: 10px;" required>

                  <br><br>

              </li>
            </ul>
            <ul class="row">
              <li class="row" style="margin-right: 350px;">



                <select name="date" class="form-select" aria-label="Default select example"
                  style="width: 150px; margin-right: 40px;" required>
                  <option value="" disabled selected>DATE</option>
                  <option value="21-12">December 21,2022</option>
                  <option value="22-12">December 22,2022</option>
                  <option value="23-12">December 23,2022</option>
                  <option value="24-12">December 24,2022</option>
                  <option value="25-12">December 25,2022</option>
                </select>

                <select name="hour" class="form-select" aria-label="Default select example"
                  style="width: 150px; margin-right: 40px;" required>
                  <option value="" disabled selected>TIME</option>
                  <option value="09-00">09:00 AM</option>
                  <option value="12-00">12:00 AM</option>
                  <option value="15-00">03:00 PM</option>
                  <option value="18-00">06:00 PM</option>
                  <option value="21-00">09:00 PM</option>
                  <option value="24-00">12:00 PM</option>
                </select>
              </li>
            </ul>


            <br>


            <input class="input" placeholder="First Name" type="text" name="fName" class="form-control"
              id="exampleFormControlInput1" required>


            <input class="input" placeholder="Last Name" type="text" name="lName">
            <br><br>
            <input class="input" placeholder="Phone Number" type="text" name="pNumber" required>
            <input class="input" placeholder="email" type="email" name="email" required>



            <br><br>
            <button type="submit" autocomplete="off" style="margin-bottom: 6px; margin-left: 35%;"
              class="btn btn-primary" name="submit" value="save"> Book a Seat <br>
            </button>


          </div>
        </div>
    </div>
    </form>
    </div>
    <br><br><br><br><br>
    <?php
    include("footer.php")
      ?>

  </body>

</html>