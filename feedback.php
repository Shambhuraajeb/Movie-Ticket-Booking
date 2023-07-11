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

            body {
                font-family: Arial, Helvetica, sans-serif;
            }

            * {
                box-sizing: border-box;
            }

            input[type=text],
            select,
            textarea {
                width: 100%;
                padding: 12px;
                border: 1px solid #ccc;
                border-radius: 4px;
                box-sizing: border-box;
                margin-top: 6px;
                margin-bottom: 16px;
                resize: vertical;
            }

            input[type=submit] {
                background-color: #04AA6D;
                color: white;
                padding: 12px 20px;
                border: none;
                border-radius: 4px;
                cursor: pointer;
            }

            input[type=submit]:hover {
                background-color: #45a049;
            }

            .container {
                margin-top: 10px;
                border-radius: 5px;
                background-color: #f2f2f2;
                padding: 20px;
            }
        </style>
    </head>

    <body>
        <?php
        session_start();
        include("navbar.php")
            ?>


        <div class="container">
            <form action="feedback.php" method="post">
                <label for="fname">First Name</label>
                <input type="text" name="fname" placeholder="Your Name...">

                <label for="lname">Last Name</label>
                <input type="text" name="lname" placeholder="Your Last Name...">

                <label for="email">email</label>
                <input type="text" name="email" placeholder="Your email...">

                <label for="sub">Subject</label>
                <textarea id="subject" name="sub" placeholder="Write something.." style="height:200px"></textarea>
                
                <input type="submit" name="submit" value="submit">

            </form>
        </div>







        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
            crossorigin="anonymous"></script>
    </body>

</html>