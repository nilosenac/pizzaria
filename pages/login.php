<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../assets/css/style.css">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>


<div id="display">
    <div id="logomenu">
        <a href="../index.php">
            <img src="../assets/img/mini-logo.png" alt="">
        </a>
    </div>
    
    <div id="esquerda">
            <h1><p class="form bold">Entre em sua conta</p></h1>
            <p class="form">Olá, bem-vindo de volta! Para acessar  sua conta, preencha as informações abaixo:</p>
            <form action="" method="post">
                <input type="text" placeholder="email@exemplo.com" class="form"> <br> <br>
                <input type="text" placeholder="insira sua senha" class="form"> <br> <br>
                <input type="button" value="Entrar na sua conta" class="form submit"> </br> <br>
            </form>

    </div>
    <div id="direita">
        <img src="img/banner-pizza.png" alt="" id="banner-login"> <br>
        <h1><p class="form bold">Olá</p></h1>
        <p class="form">SISB é uma empresa de sistemas para Discord, tem como intuito garantir proteção e diversão para seu servidor.</p>

        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="img/avatar-login.png" class="d-block w-300" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        
                        <p>Melhor ponto de lanches da cidade!.</p>
                        <h5>Rafael</h5>
                    </div>

                </div>
                <div class="carousel-item">
                    <img src="img/avatar-login.png" class="d-block w-100" alt="...">
                    <p> Melhor ponto de lanches da cidade! </p>
                </div>
                <div class="carousel-item">
                    <img src="img/avatar-login.png" class="d-block w-100" alt="...">
                    <p> Melhor ponto de lanches da cidade! </p>
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
</div>

</body>
</html>