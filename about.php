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
            .container {
                margin-top: 100px;
            }

            #name {
                color: aliceblue;
                font-family: sans-serif;
                font-size: 350%;
            }

            #p1,
            #p2 {
                color: aliceblue;
            }
        </style>
    </head>

    <body style="background-color: gray;">
        <?php
        session_start();
        include("navbar.php")
            ?>
        <center>
            <div class="container">
                <h2 id="name">About Us</h2>
                <b>
                    <p id="p1">Here we give you all type of movie that you want in your locality. If you have query
                        contact with us
                    </p>
                </b>
                <p id="p2">Thank you for visiting us</p>
                <a href="mailto:shambhurajeb19@gmail.com"><button class="btn btn-primary btn-lg btn-block" style="width: 150px;">Contact Us</button></a>
            </div>
        </center>

        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
            crossorigin="anonymous"></script>
    </body>

</html>