<?php
include 'Conexao.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Suporte GatoNet</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="css/cadastro.css">

</head>
<body>
    
<header class="header">

    <a href="#" class="logo">
        <img src="images/logo.png" alt="">
    </a>

    <nav class="navbar">
        <a href="#home">home</a>
        <a href="#planos">planos</a>       
        <a href="#projetos">Produtos</a>
        <a href="#review">review</a>
        <a href="#contato">contato</a>
        <a href="#blogs">Links Úteis</a>
    </nav>
    <div class="search-form">
        <input type="search" id="search-box" placeholder="search here...">
        <label for="search-box" class="fas fa-search"></label>
    </div>

    
</header>


<section class="contato" id="contato">
    <h1 class="heading"> <span>SOLICITE</span> CONTATO </h1>
    <div class="row">
        <form action="validar_cadastro.php" method="POST">
            <h3>PREENCHA SEUS DADOS</h3>
            <div class="inputBox">
                <span class="fas fa-envelope"></span>
                <input type="text" name="nome" placeholder="NOME">
            </div>
            <div class="inputBox">
                <span class="fas fa-key"></span>
                <input type="password" name="senha" placeholder="SENHA">
            </div>
            <div class="inputBox">
                <span class="fas fa-key"></span>
                <input type="password" name="confirmacao_da_senha" placeholder="CONFIRME SUA SENHA">
            </div>
            <div class="inputBox">
                <span class="fas fa-key"></span>
                <input type="number" name="cpf_cnpj" placeholder="CPF ou CNPJ">
            </div>
            <div class="inputBox">
                <span class="fas fa-key"></span>
                <input type="text" name="contato" placeholder="EMAIL ou TELEFONE">
            </div>

            <div class="inputBox">
                <span class="fas fa-key"></span>
                <input type="text" name="plano" placeholder="Digite seu plano">
            </div>

            <input type="submit" value="Criar cadastro" class="btn">
            <button><a href="suporte.php"class="btn">Retornar a Tela de Login</a> </a></button>
        </form>
    </div>
</section>



<section class="footer">

    <div class="share">
        <a href="https://www.facebook.com/eduardo.rocha.3557/" class="fab fa-facebook-f"></a>
        <a href="https://www.linkedin.com/in/eduardo-sampaio-05b4ab247/" class="fab fa-github"></a>
        <a href="https://www.instagram.com/du_sampaio/" class="fab fa-instagram"></a>
        <a href="https://www.linkedin.com/in/eduardo-sampaio-05b4ab247/" class="fab fa-linkedin"></a>
    </div>

    <div class="links">
        <a href="#home">home</a>
        <a href="#planos">planos</a>       
        <a href="#projetos">Produtos</a>
        <a href="#review">review</a>
        <a href="#contato">contato</a>
        <a href="#blogs">Links Úteis</a>
    </div>

    <div class="credit">created by <span>Alisson, Eduardo, Yarlley, Matheus e Joely</span> | all rights reserved</div>

</section>






<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>