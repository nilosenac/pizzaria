<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PizzaPrime - Website</title>

    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <!-- <script>
        setInterval(() => {
            document.location.reload(true);
        }, 1500)
    </script> -->
</head>
<body>
    <main>
        <nav>
            <div class="logo">
                <a href="index.php">
                    <img src="assets/img/logo.png" alt="PizzaPrime">
                </a>
            </div>

            <div class="links">
                <ul>
                    <li class="selected"><a href="#">Início</a></li>
                    <li><a href="#destaques">Destaques</a></li>
                    <li><a href="#process">Serviço</a></li>
                </ul>
            </div>

            <div class="buttons">
                <div class="btn icon">
                    <i class="bis bi-search"></i>
                </div>

                <div class="btn icon">
                    <i class="bi bi-bag"></i>
                </div>

                <a href="pages/login.php" class="btn auth">
                    <i class="bi bi-person-fill"></i>
                    <span>Login</span>
                </a>
            </div>
        </nav>

        <div class="f-container">
            <div class="text-frame">
                <h1 class="container-title">Com fome?<br><span class="brand-text">PizzaPrime</span></h1>
                <div class="container-description">A melhor pizzaria da região com as melhores pizzas e com sabores de dar água na boca.</div>

                <div class="container-order">
                    <a href="#">Ver cárdapio</a>
                </div>
            </div>
            <div class="container-illustration">
                <img src="assets/img/pizza-illustration.png">
            </div>
        </div>
        
        <div class="ctn-destaques" id="destaques">
            <div class="txts">
                <div class="sub-title">Produtos</div>
                <div class="title">Destaques</div>
            </div>
        
            <div class="destaques">
                <div class="destaque">
                    <img src="assets/img/destaques/calabresa.png" class="image-product">
                    <div class="txts">
                        <h3 class="name-product">Calabresa</h3>
                        
                        <p class="description-text">Acompanhamentos</p>
                        <p class="accompaniments-product">Molho de tomate, Muçarela, Calabresa, Orégano</p>
                    </div>
                    <div class="button-order">Adicionar ao carrinho</div>
                </div>
                <div class="destaque">
                    <img src="assets/img/destaques/calabresa.png" class="image-product">
                    <div class="txts">
                        <h3 class="name-product">Calabresa</h3>
                        
                        <p class="description-text">Acompanhamentos</p>
                        <p class="accompaniments-product">Molho de tomate, Muçarela, Calabresa, Orégano</p>
                    </div>
                    <div class="button-order">Adicionar ao carrinho</div>
                </div>
                <div class="destaque">
                    <img src="assets/img/destaques/calabresa.png" class="image-product">
                    <div class="txts">
                        <h3 class="name-product">Calabresa</h3>
                        
                        <p class="description-text">Acompanhamentos</p>
                        <p class="accompaniments-product">Molho de tomate, Muçarela, Calabresa, Orégano</p>
                    </div>
                    <div class="button-order">Adicionar ao carrinho</div>
                </div>
            </div>
        </div>

        <div class="process" id="process">
            <div class="txts">
                <div class="sub-title">Produtos</div>
                <div class="title">Destaques</div>
            </div>

            <div class="list">
                <div class="process-list">
                    <img src="assets/img/processo/pedido.png">
                    <h3>Escolha o pedido</h3>
                </div>
                <div class="process-list">
                    <img src="assets/img/processo/order_preparation.png">
                    <h3>Preparação do pedido</h3>
                </div>
                <div class="process-list">
                    <img src="assets/img/processo/delivery.png">
                    <h3>Seguindo ao destino</h3>
                </div>
                <div class="process-list">
                    <img src="assets/img/processo/pedido.png">
                    <h3>Pedido entregue</h3>
                </div>
            </div>
        </div>
    </main>
</body>
</html>