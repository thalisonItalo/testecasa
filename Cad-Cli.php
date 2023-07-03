


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css"><!-- Icons -->
    <link rel="stylesheet" href="assets/css/Cad-Cli.css"> <!-- Link CSS -->
    <title>MobilyTech</title>
</head>
<body>

    <header> <!-- Inicio Cabeçalho -->
        <div id="title">
            <h1>MobilyTech</h1>
        </div>

        <ul>
            <li><a href="Tecnicos.php">Técnicos</a></li>
            <li><a href="#">Chamados</a></li>
            <li><a href="#">Contatos</a></li>
            <li><a href="#sobre">Sobre</a></li>
            <li><a href="Login.php">Já tem uma conta?</a></li>
            <li><a href="Cad-Pj.php">Trabalhe conosco</a></li>
        </ul>
    </header> <!-- Fim Cabeçalho --> 

    <div class="container"> <!-- Inicio cadastro -->
        <div class="form-image">
            <img src="assets/images/Cad-Cli/undraw_Content_team_re_6rlg.png" alt="imagem">
        </div>

        <div class="form">
            <form method="post" action="cadastrarCliente.php">
                <div class="form-header">
                    <div class="title">
                        <h1>Cadastre-se</h1>
                    </div>
                </div>
                <div class="input-group">
                    <div class="input-box">
                        <label for="nome">Nome</label>
                        <input type="text" name="nome" id="email" placeholder="Digite seu primeiro nome">
                    </div>
                </div>
                
                <div class="input-group">
                    <div class="input-box">
                        <label for="log">Email</label>
                        <input type="email" name="email" id="email" placeholder="Digite seu email">
                    </div>
                </div>
                <div class="input-group">
                    <div class="input-box">
                        <label for="senha">Senha</label>
                        <input type="password" name="senha" id="senha" placeholder="Digite sua senha">
                    </div>
                </div>
                
                <div class="continue-button">
                    <input type="submit" value="Enviar">
                </div>
            </form>
        </div>
    </div>

</body>
</html>