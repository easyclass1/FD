<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista Caddies</title>
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/formulario.css">
    <link rel="stylesheet" href="css/lista.css">
</head>
<body style="text-align: center">
<header>
<div class="header">
			<h1>SISTEMA DE CONTROL ADMINISTRATIVO</h1>
			</div>
		<nav>
			<ul>
				<li><a href="index.php">INICIO</a></li>
				<li class="principal">
					<a href="#">CADDIES</a>
					<ul>
						<li><a href="caddie.php">Agregar caddie</a></li>
						<li><a href="listaCaddies.php">Lista de caddies</a></li>
					</ul>
				</li>
				<li class="principal">
					<a href="#">USUARIOS</a>
					<ul>
						<li><a href="agregarUsu.php">Agregar Usuraio</a></li>
						<li><a href="listaUsu.php">Lista de Usuarios</a></li>
					</ul>
				</li>
                <li class="principal">
					<a href="#">TORNEO</a>
					<ul>
						<li><a href="configurar.php">Configurar torneo</a></li>
						<li><a href="canchas.php">Canchas</a></li>
					</ul>
				</li>
				<li class="principal">
					<a href="#">PLANILLAS</a>
					<ul>
						<li><a href="listaPlanillas.php">Lista de planillas</a></li>
					</ul>
				</li>
			</ul>
		</nav>
	</header>
    <section id="container">

        <div class="tabla">
                <table>
                    <tr>
                        <th>Cedula</th>
                        <th>Nombre</th>
                        <th>Apellido</th>
                    </tr>
                    <tr>
                        <th>1005324955</th>
                        <th>Sebastian</th>
                        <th>Quintero</th>
                    </tr>
                </table>
        </div>
    </section>
</body>
</html>