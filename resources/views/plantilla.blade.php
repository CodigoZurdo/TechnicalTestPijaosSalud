<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Sistema de Hospitalización</title>
	<!-- <link rel="stylesheet" href="plantilla.css"> -->
</head>

<body>

	<header>

		<a href="" id="logo">
			<!-- <img src="https://www.pijaossalud.com/wp-content/uploads/2018/05/logo.png" alt="Pijaos Salud EPS"> --> 
			<img src="./images/logo_EPS.png" alt="Pijaos Salud EPS">
		</a>
		<div class="right-header">
			<h1>Pijaos Salud EPS</h1>
			<ul id="nav-bar" class="nav-bar">
				<li><a href=" {{ route('inicio')}} ">Inicio</a></li>
				<li><a href="  {{ route('hospital')}}  ">Hospital</a></li>
				<li><a href=" {{ route('pacientes')}} ">Pacientes</a></li>
				<li><a href=" {{ route('ingresos')}} ">Ingresos</a></li>
			</ul>
		</div>
	</header>

    @yield('contenido')

    <button id="abrirModal">Abrir Modal</button>

  <!-- Ventana modal, por defecto no visiblel -->
  <div id="ventanaModal" class="modal">
    <div class="contenido-modal">
        <span class="cerrar">&times;</span>
        <h2>Ventana modal</h2>
        <p>Esto es el texto de la ventana</p>
    </div>
  </div>
</body>
<!-- <script src="plantilla.js"></script> -->
</html>
