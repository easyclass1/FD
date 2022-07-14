<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/login.css">
</head>
<body style="text-align: center;">
    
    <div class="login-box">
        <img class ="avatar" src="image/escudo1.png" alt="logo" />
        <img src="image/logo.png" weight="20" height="40">
   <p>
        <form method="post" action="index.php">     
            <label for="username">Correo</label>
            <input type="text" placeholder="Ingrese su Correo">
            <label for="password">Contraseña</label>
            <input type="password" placeholder="Ingrease su Contraseña">
            <input type="submit" name="Ingresar" value="Ingresar"/>
            <br>
            <a href="#">Has olvidado tu contraseña?</a><br>
            <a href="#">No tienes cuenta?</a>
        </form>
    </div>
</body>
</html>