<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
    
</head>
<body>
    <header>
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
    </header>

    <main>

        <div class="container-fluid">
                <div class="form-inline">
                    <div class="form-group">
                        <input type="text" class="form-control" id="desc" placeholder="Descrição">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="amount" placeholder="Quantidade">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="value" placeholder="Valor">
                    </div>
                    <span id="btnUpdate" style="display: none;">
                        <span id="inputIDUpdate"></span>
                        <button onclick="updateData();" class="btn btn-default">Salvar</button>
                        <button onclick="resetForm();" class="btn btn-default">Cancelar</button>
                    </span>
                    <span id="btnAdd">
                        <button onclick="addData();" class="btn btn-default">Adicionar</button>
                        
                        <button onclick="deleteList();" class="btn btn-default">Limpar</button>
                    </span>
                </div>

                <div id="errors" style="display: none;"></div>

                <table id="listTable" class="table">
                
                </table>
        </div>
        <div class="intes">
            <div class="verduras">
                <h4>
                    Verduras
                <h4>

            <div>   
                
            <div class="frutas">
            <h4>
                Frutas
            <h4>
            </div>

            <div class="molhos">
            <h4>
                Molhos
            <h4>
            <div>
            
            <div class="recheios-salgado">
            <h4>
                Recheios/Salgados
            <h4>
            </div>
            <div class="recheios-doce">
            <h4>
                Recheios/Doces
            <h4>
            </div>

            <div class="pao">
            <h4>
                Pães
            <h4>

            </div>

            <div class="bebida">
            <h4>
                Bebidas
            <h4>
            </div>

            <div class="material">
            <h4>
                Materiais
            <h4>
            </div>

            <div class="diversos">
            <h4>
                Diversos
            <h4>
            </div>
        </div>
    </main>

    
	<script type="text/javascript" src="../assets/scripts/config.js"></script>
	<script type="text/javascript" src="../assets/scripts/main.js"></script>
</body>


</html>
