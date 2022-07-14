<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">
    
    <script>
        $(function(){
            $('#cancha').click(function(){
                $(this).next('#cancha-content').slideToggle();
                $(this).toggleClass('active');
            });
        });
    </script>
    <title>Court</title>
</head>
<body>
    <header style="text-align:right;">Usuario
        <button type="button" class="rounded-circle"> <img src="image/usuario.png" height ="25" width="25" /></button>
        <!--<img src="image/usuario.png" alt="usu" width="2%" height="2%"/>-->
    </header>
    <h6>Cancha 1</h6>
    <nav class="cancha">
        <ul>
            <li>
                <a id="cancha" href="#"><img src="image/cancha.png"/></a>
                <div id="cancha-content">
                    Cancha 1
                    <form>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                            <label class="form-check-label" for="flexRadioDefault1">
                              Sencillo
                            </label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                            <label class="form-check-label" for="flexRadioDefault2">
                              Dobles
                            </label>
                          </div>
                          <input type="text" name="oponente1" value="Oponente 1">
                          <input type="text" name="oponente2" value="Oponente 2">
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="caddie" id="cadie">
                            <label class="form-check-label" for="caddie">
                              Caddie
                            </label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="juez" id="juez" checked>
                            <label class="form-check-label" for="juez">
                              Juez
                            </label>
                          </div>
                          <select >
                            <option selected>Cédula Cadie</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                          </select>
                          <input type="text" name="nomcaddie" value="Nombre Caddie">
                          <select >
                            <option selected>Cédula Juez</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                          </select>
                          <input type="text" name="nomjuez" value="Nombre Juez">
                          <br><br>
                          <button type="button" class="btn btn-secondary">Enviar</button>
                          <button type="button" class="btn btn-warning">Editar</button>
                          <button type="button" class="btn btn-danger">Terminar</button>
                    </form>
                </div>
            </li>
        </ul>
    </nav>
    
</body>
</html>