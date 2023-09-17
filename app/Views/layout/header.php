<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=0, initial-scale=1.0">
    <title>Organizaciones</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body>

    <nav class="navbar navbar-expand-md navbar-light bg-light mx-3">
        <a class="navbar-brand" href="<?=site_url('home')?>">HelpDesk</a>
        <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId"
            aria-expanded="false" aria-label="Toggle navigation"></button>
        <div class="collapse navbar-collapse" id="collapsibleNavId">
            <ul class="navbar-nav me-auto mt-2 mt-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" href="<?=site_url('home')?>" aria-current="page">Home <span class="visually-hidden">(current)</span></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Organizaciones</a>
                    <div class="dropdown-menu" aria-labelledby="dropdownId">
                        <a class="dropdown-item" href="<?=site_url('/list_company')?>">Ver Listado</a>
                        <a class="dropdown-item" href="<?=site_url('/create_company')?>">Crear</a>
                    </div>
                </li>
            </ul>
            <form class="d-flex my-2 my-lg-0">
                <input class="form-control me-sm-2" type="text" placeholder="Buscar...">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
            </form>
        </div>
    </nav>

    <div class="container">
        
    <?php if (session('mensaje')) { ?>
        <div class="alert alert-danger mt-3" role="alert">
        <h4 class="alert-heading">Error</h4>
        <p>
            <?php
                echo session('mensaje');
            ?>
        </p>
        <hr>
        <p class="mb-0">Error en el ingreso de datos</p>
        </div>
    <?php } ?>