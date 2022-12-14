<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/style.css">
    <title>Cadastro</title>
    
</head>
<body>
    <header>


        <img src="../assets/img/mini-logo.png" class="logo">
    </header> 
    <main>
            <!-- Etapa de cadastro 2-->
            <div class="etapa2">
                <h1>
                    Crie sua conta (Etapa 2)
                    </h1>
                    <p>
                        Olá, bem-vindo! Para realizar seus pedidos, crie sua conta preenchendo
                        as informações abaixo:
                    </p>
                    <form action="" method="post">
        
                        <div>
                            <label>Insira seu CEP*</label>
                            <input type="text" required="required">
                        </div>
        
                        <div>
                            <label>Insira seu endereço*</label>
                            <input type="text">  
                        </div>
        
                        <div class="two-input">
                            <div class="input-ctn">
                                <label>Insira a rua*</span>
                                <input type="text">
                            </div>
            
                            <div class="input-ctn">
                                <label>Insira o número*</span>
                                <input type="number">
                            </div>
                        </div>
        
                        <div>
                            <label>Insira seu bairro</label>
                            <input type="text">
                        </div>
                       
                        <input type="submit" value="Criar conta" class="submit2">
                      
                    </form>
        
                </div>

        <!-- Etapa de cadastro 1-->
        <div class="etapa1" >
            <h1>Crie sua conta (Etapa 1 )</h1>
            <p>
                Olá, bem-vindo! Para realizar seus pedidos, crie sua conta preenchendo
                as informações abaixo:
            </p>
            
            <form action="" method="" class="form">
                <div class="input-ctn">
                    <label>Insira seu nome*</span>
                    <input type="text" >
                </div>
                
                <div class="two-input">
                    <div class="input-ctn">
                        <label>Insira seu CPF*</span>
                        <input type="text" >
                    </div>
    
                    <div class="input-ctn">
                        <label>Insira seu telefone*</span>
                        <input type="text" >
                    </div>
                </div>

                <div class="input-ctn">
                    <label>Insira sua senha*</span>
                    <input type="text" >
                </div>

                <input type="submit" value="Continuar" class="submit1">
            </form>
        </div>

      
  

        <div>
            <img src="assets/img/modelo-de-pizza-fatiada-em-desenho-de-desenho-animado-com-uma-parte-faltando-ilustracao-vetorial_96777-1825.webp" alt="">
            <h1>Olá!</h1>

            <p>Dala´s Pizzaria, a melhor massa da região. </p>
            <p> Aqui você pode montar a sua pizza pra chamar de sua</p>
        </div>

    </main>
    <footer>
        
    </footer>
    <style>
        main {
    display: flex;
    justify-content: space-between;
    align-items: center;
}



main > div {
    width: 50%;
    min-height: 100vh;
    
    display: flex;
    justify-content: center;
    align-items: left;
    flex-direction: column;

    padding: 0 6%;
    position: relative;
}

main > div:nth-child(3) {
    align-items: center;
    background-color: #fd292f;
}
*/

.input-ctn input {
   
    width: 100%;
    border-radius: 5px;
    height: 7vh;
}

.two-input {
    display: flex;
    justify-content: space-between;
   
}

.two-input .input-ctn {
    position: relative;
    width: 49%;
}

.two-input .input-ctn input {
    width: 100%;
}

.submit1{
    width: 100%;
    height: 7vh;
    margin-top: 15px;
    align-items: center;
    background:  #fd292f;
    border-radius: 5px;
    color:  #fff6f6;
    cursor: pointer;
    border-style: none;
    

}

.etapa2{
   
    display: none ;
   
}

.form{
    margin-top: 15px;
}

    </style>
    <script src="../assets/scripts/script.js"></script>
</body>
</html>