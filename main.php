<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>Main</title>
</head>
<body>
    <header style="text-align:right;">Usuario
        <button type="button" class="rounded-circle"> <img src="image/usuario.png" height ="25" width="25" /></button>
        <!--<img src="image/usuario.png" alt="usu" width="2%" height="2%"/>-->
    </header>
    <ul class="nav justify-content-center">
        <li class="nav-item">
          <a class="nav-link active" href="cancha.html">Torneo</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Usuarios</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Planillas</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Caddies</a>
        </li>
      </ul>
      <!--<div class="btn-group" role="group" aria-label="Basic outlined example">
        <button type="button" class="btn btn-outline-primary">Torneo</button>
        <button type="button" class="btn btn-outline-primary">Usuarios</button>
        <button type="button" class="btn btn-outline-primary">Planillas</button>
        <button type="button" class="btn btn-outline-primary">Caddies</button>
      </div>-->
      <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="image/1.jpg" class="d-block w-100" alt="..." width="300" height="400">
          </div>
          <div class="carousel-item">
            <img src="image/1.jpg" class="d-block w-100" alt="..."width="300" height="400">
          </div>
          <div class="carousel-item">
            <img src="image/1.jpg" class="d-block w-100" alt="..." width="300" height="400">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
      <footer style="text-align:center;">
        <img src="image/fb.png" alt="usu" width="2%" height="2%"/>
        <img src="image/wha.png" alt="usu" width="2%" height="2%"/>
        <img src="image/inst.png" alt="usu" width="2%" height="2%"/>
        <h5>Sebastian Quintero & Anderson Alviares</h5>
        <h6>Bucaramanga</h6>
      </footer>
</body>
</html>