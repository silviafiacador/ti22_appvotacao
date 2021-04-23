<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- css Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <!-- nosso css -->
    <link rel="stylesheet" href="assets/css/estilo.css">
    <!-- arquivo de manifesto -->
    <link rel="manifest" href="manifest.json">

</head>

<body>
    <main>
        <section id="header">
            <?php
            include 'header.html';
            ?>
        </section>
        <br>
        <section id="login_imagem">
            <h3>Login</h3>
            <div id="silhueta">
                <img src="assets/imagens/login_icon.png" class="img-thumbnail" alt="Imagem de uma silhueta de uma pessoa">
            </div>
        </section>
        <!-- início do formulário -->
        <form method="post" action="login.php" class="mt-5 container">
            <div class="mb-3">
                <input type="email" name="nome" class="form-control" placeholder="Email" maxlength="80" required>
            </div>
            <div class="mb-3">
                <input type="password" name="senha" class="form-control" placeholder="Senha" maxlength="12" required>
            </div>
            <!-- botões pronto e cadastre-se -->
            <div id="botoes">
                <button type="submit" class="btn btn-outline-primary">Pronto</button>
                <a href="cadastro.php"><button type="button" class="btn btn-outline-success">Cadastre-se</button></a>
            </div>

        </form>
        <!-- fim do formulário -->

    </main>


    <!-- js Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
</body>

</html>