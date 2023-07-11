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
    </style>
  </head>

  <body class="bg-dark">
    <?php
    session_start();
    include("navbar.php")
      ?>

    <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active" data-bs-interval="2000">
          <img src="img/avengers.jpg" height="400px" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item" data-bs-interval="2000">
          <img src="img/harry.jpg" height="400px" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item" data-bs-interval="2000">
          <img src="img/shiva.jpg" height="400px" class="d-block w-100" alt="...">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval"
        data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval"
        data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
    <div style="margin-top: 5PX; text-align: center; color: white;">
      <hr style=" border: 1px solid white;">
      <h3>
        <b>Select Categories</b>
      </h3>
    </div>
    <br><br>








    <form action="select.php" method="post">
      <div>

        <button type="submit" class="btn btn-info btn-lg" name="sup" style="margin-left: 15%;">Superhero</button>
        <button type="submit" class="btn btn-secondary btn-lg" value="hor" name="hor"
          style="margin-left: 3%;">Horror</button></a>
        <button type="submit" class="btn btn-primary btn-lg" value="act" name="act"
          style="margin-left: 3%;">Action</button></a>
        <button type="submit" class="btn btn-success btn-lg" value="thri" name="thri"
          style="margin-left: 3%;">Thriller</button></a>
        <button type="submit" class="btn btn-light btn-lg" value="com" name="com"
          style="margin-left: 3%;">Comedy</button></a>
        <button type="submit" class="btn btn-danger btn-lg" vlaue="love" name="love"
          style="margin-left: 3%;">Love</button></a>
        <button type="submit" class="btn btn-warning btn-lg" vlaue="ani" name="ani"
          style="margin-left: 3%;">Animation</button></a>

      </div>
    </form>







    <br><br>
    <hr style=" border: 1px solid white;">
    <div style="margin-top: 5PX; text-align: center; color: white;">
      <h3>
        <b>Trending Movies</b>
      </h3>
    </div>


    <div class="album py-5 bg-dark">
      <div class="container">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">


          <div class="col">
            <div class="card bg-black" style="width: 18rem;">
              <img src="img/drstrange.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title text-light">Doctor Strange in the Multiverse of Madness</h5>

                <a href="https://youtu.be/aWzlQ2N6qqg" class="btn btn-primary">Watch Trailer</a>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card bg-black" style="width: 18rem;">
              <img src="img/wakanda.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title text-light">Black Panther: Wakanda Forever</h5>

                <a href="https://youtu.be/_Z3QKkl1WyM" class="btn btn-primary">Watch Trailer</a>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card bg-black" style="width: 18rem;">
              <img src="img/antman.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title text-light">Ant-Man and the Wasp:Quantumania</h5>

                <a href="https://youtu.be/vmp9hOJPZaY" class="btn btn-primary">Watch Trailer</a>
              </div>
            </div>
          </div>
          
          <div class="col">
            <div class="card bg-black" style="width: 18rem;">
              <img src="img/dagadi.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title text-light">Daagadi Chawl 2</h5>

                <a href="https://youtu.be/ZIbeEwdpJdk" class="btn btn-primary">Watch Trailer</a>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card bg-black" style="width: 18rem;">
              <img src="img/bullet.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title text-light">Bullet Train</h5>

                <a href="https://youtu.be/0IOsk2Vlc4o" class="btn btn-primary">Watch Trailer</a>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card bg-black" style="width: 18rem;">
              <img src="img/incredible.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title text-light">Incredibles 2</h5>

                <a href="https://youtu.be/i5qOzqD9Rms" class="btn btn-primary">Watch Trailer</a>
              </div>
            </div>



        </div>
      </div>
    </div>
    


    <hr>

    <?php
    include("footer.php")
      ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
      crossorigin="anonymous"></script>
  </body>

</html>