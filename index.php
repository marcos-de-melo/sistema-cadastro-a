<?php
include('./db/conexao.php');
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="./favicon.ico">
    <title>Sistema Cadastro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
        <link rel="stylesheet" href="./css/estilo.css">

</head>

<body>
    <header class="bg-dark">
        <div class="container">

            <nav class="navbar  navbar-expand-lg" data-bs-theme="dark">
                <a class="navbar-brand" href="#">SIS LF</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item"><a class="nav-link active" href="index.php?menu=home">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="index.php?menu=cadastro">Cadastro</a></li>
                        <li class="nav-item"><a class="nav-link" href="index.php?menu=lista">Lista de Cadastro</a></li>
                    </ul>
                </div>

            </nav>
        </div>

    </header>
    <main>
        <div class="container">
            <?php
            $menu = $_GET['menu'] ?? 'home';
            include($menu . '.php');
            ?>
        </div>

    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"></script>
</body>

</html>