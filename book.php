<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>bookYOURshow</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <link rel="icon" type="image/x-icon" href="img/logo.png">
       
    </head>


    <body class="bg-dark">
        <?php
        session_start();
        include("navbar.php");

        include "config.php";
        $sql = "SELECT * FROM movie_details";
        

        ?>
        <div class="container py-5">
            <div class="row mt-4">


                <?php
                
                 if ($result = mysqli_query($conn, $sql)) {
                    if (mysqli_num_rows($result) > 0) {
                        for ($i = 0; $i <= 29; $i++) {
                            $row = mysqli_fetch_array($result);
                ?>





                <div class="col-md-4">
                    <div class="card bg-black" style="width: 20rem;">
                        <div class="card-body">

                            <img src="<?php echo $row['img']; ?>" class="card-img-top" alt="movie" name="img">
                            <h4 class="card-title text-light" name="name">
                                <?php echo $row['name']; ?>
                            </h4>
                            <b class="text-muted" name="genre">
                                <?php echo $row['genre']; ?>
                            </b> .<b class="text-muted"><i>
                                    <?php echo $row['actor']; ?></b></i>
                            <p class="card-text text-light">
                                <?php echo $row['dis']; ?>
                            </p>
                            <?php echo '<a href="booking.php?id=' . $row['id'] . '" class="btn btn-primary btn-lg" name="submit"> Book Now</a>'; ?>

                        </div>
                    </div>
                </div>
                <?php




                        }
                        mysqli_free_result($result);
                    } else {
                        echo '<h4>No Booking to our movies right now</h4>';
                    }
                } else {
                    echo "ERROR: Could not able to execute ".$sql. "" . mysqli_error($conn);
                }

                // Close connection
                mysqli_close($conn);
                ?>
            </div>
        </div>


    </body>

</html>