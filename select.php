<html>

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>bookYOURshow</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="icon" type="image/x-icon" href="img/b.png">
  
  </head>

  <body class="bg-dark">


    <?php


    include("config.php");
    

    if (isset($_POST['sup'])) {
        $sql = "SELECT * FROM movie_details where genre='superhero'";
        include("category.php");
      
    } else if (isset($_POST['hor'])) {
      $sql = "SELECT * FROM movie_details where genre='horrer'";
      include("category.php");
    } else if (isset($_POST['act'])) {
      $sql = "SELECT * FROM movie_details where genre='action'";
      include("category.php");
    }
    if (isset($_POST['thri'])) {
      $sql = "SELECT * FROM movie_details where genre='thriller'";
      include("category.php");
    } else if (isset($_POST['com'])) {
      $sql = "SELECT * FROM movie_details where genre='comedy'";
      include("category.php");
    } else if (isset($_POST['love'])) {
      $sql = "SELECT * FROM movie_details where genre='love'";
      include("category.php");
    } else if (isset($_POST['ani'])) {
      $sql = "SELECT * FROM movie_details where genre='aniamation";
      include("category.php");
    } 
    
      
    ?>
  </body>

</html>