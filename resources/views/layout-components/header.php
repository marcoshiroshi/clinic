<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <title>CLÍNICA</title>
    </head>

    <body style="background-color: #FFF3E4">

        <nav class="navbar navbar-expand-lg navbar-dark bg-success">

            <a class="navbar-brand" href="#"><i class="fa fa-car fa-2x"></i></a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNavDropdown">

                <ul class="navbar-nav">

                    <li class="nav-item active">
                        <a class="nav-link" href="/">Início</a>
                    </li>
                    <li class="nav-item dropdown">

                        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Pacientes 
                        </a>

                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="/patient/">Consultar</a>
                            <a class="dropdown-item" href="/patient/new">Cadastrar</a>
                        </div>

                    </li>

                    <li class="nav-item dropdown">

                        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Doutores
                        </a>

                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="/doctor/">Consultar</a>
                            <a class="dropdown-item" href="/doctor/new">Cadastrar</a>
                        </div>

                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Consultas
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="/appointment/">Consultar</a>
                            <a class="dropdown-item" href="/appointment/new">Cadastrar</a>
                        </div>
                    </li>

                    <li class="nav-item dropdown">

                        <a class="nav-link disabled" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Tomografia <i class="fab fa-apple"></i>
                        </a>

                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="?page=compra-consultar">Consultar</a>
                            <a class="dropdown-item" href="?page=compra-cadastrar">Cadastrar</a>
                        </div>

                    </li>
                </ul>

            </div>
            
        </nav>
        

        <br>

        <div class="container" style="background-color: white; border-radius: 10px">
