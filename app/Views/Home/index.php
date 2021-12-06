<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>CSS - Inicio</title>
</head>

<body>
    <!-- //Navbar de logo -->
    <nav class="navbar navbar-dark" style="background-color: #005C8F;">
        <a class="navbar-brand" href="index.php">
            <img src="/app/Assets/Images/logo.png" width="100%" height="50" alt="" class="img-thumbnail"
                style="background-color: #005C8F; border: #005C8F;">
        </a>
    </nav>
    <!-- //Navbar de opciones -->
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: black; width: 100%;">
        <div class="navbar py-lg-0" id="navbarSupportedContent" style="padding-left: 0; width: 100%;">
            <ul class="navbar-nav mr-auto" style="width: 100%;">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Programar Cita Médica
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="../Paciente/cita-nueva.php">Cita nueva</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="../Paciente/cita-control.php">Cita de control</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Citas Programadass
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="../Paciente/consultar-estado.php">Consultar estado de cita</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../Paciente/ayuda.php">Ayuda</a>
                </li>
            </ul>
        </div>
        <div class="navbar py-lg-0" id="navbarSupportedContent"
            style="padding-left: 0; justify-content: left; white-space: nowrap;">
            <ul class="navbar-nav mr-auto" style="width: 100%;">
                <li class="nav-item">
                    <a class="nav-link" href="../Medico/medico-login.php">Sitio para médicos</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- // El breadcrumb cambia en cda página. OJO CON ESTO. -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page">Inicio</li>
        </ol>
    </nav>

    <!-- Sección de inicio -->
    <section class="py-5">
        <div class="container px-4 px-lg-5 my-5">
            <div class="row gx-4 gx-lg-5 align-items-center">
                <div class="col-md-6"><img class="card-img-top mb-5 mb-md-0" src="/app/Assets/Images/policlinica-inicio.jpeg"
                        alt="..." /></div>
                <div class="col-md-6">
                    <h1 class="display-4 fw-bolder">Prioriza tu salud.</h1>
                    <hr>
                    <p class="lead" style="color: #005C8F;">La Caja de Seguro Social es el órgano encargado ser primero
                        en velar por la salud de los ciudadanos panameños. Una organización fundada para brindar la
                        atención de mayor calidad, siendo una entidad transparente y al servicio de nuestro país. Al día
                        de hoy, contamos con la capacidad de poder brindar un espacio en línea para realizar todos los
                        trámites necesarios para obtener tu cita, desde nuestro sitio web.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- //Scripts Boostrap -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"
        integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s"
        crossorigin="anonymous"></script>
</body>

</html>