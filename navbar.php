<!doctype html>
<html lang="en">

  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" media="all">

      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">

    <title>bookYOURshow</title>
    

  
  </head>

  <body>

  <nav class="navbar navbar-expand-lg navbar-dark bg-black" style="background-color: black;">
  
    
      
  
  
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
          <img src="img/logo.png" alt="bookYOURshow" width="40" height="30">
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="index.php">Home<span class="sr-only"></span></a>
          </li>
          <li class="nav-item ">
            <a class="nav-link active" href="book.php">Book<span class="sr-only"></span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="feedback.php">Feedback</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="about.php">About</a>
          </li>
  


  <?php  
				if(isset($_SESSION['user_info'])){
					echo '<div id="dropdown" style="margin-left: 700px; color: white;">'.$_SESSION['user_info'].'<div id="Logout"> <a href="deact.php" style="color: red;"> Logout <a> </div>';
        }
				else
					echo '<li class="nav-item" style="margin-left: 750px;">
                    <a class="nav-link active" href="login.php" >
                      LogIn
                      </a>
                    </li>
                    <li class="nav-item" style="margin-left: 15px;">
                    <a class="nav-link active" href="register.php">
                      Sign Up
                      </a>
                    </li>';
                    
				?>
        </ul>

      </div>
    </nav>

  </body>

</html>