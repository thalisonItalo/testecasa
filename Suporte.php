<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css"> <!-- Icons -->
    <link rel="stylesheet" href="assets/css/Suporte.css"> <!-- Link CSS -->
    <title>MobilyTech</title>
</head>
<body>
    
    <nav class="menu-lateral"> <!-- Inicio menu lateral -->

        <div class="title-lateral">
            <h1>MobilyTech</h1>
        </div>

        <ul>
                <li class="item-menu">
                    <a href="Servicos.html">
                        <span class="icon"><i class="bi bi-grid-1x2-fill"></i></span>
                        <span class="txt-link">Categorias</span>
                    </a>
                </li>
        
    
        
                <li class="item-menu">
                     <a href="#">
                        <span class="icon"><i class="bi bi-question-circle"></i></span>
                        <span class="txt-link">Suporte</span>
                    </a>
                </li>
        
    
        
                <li class="item-menu">
                    <a href="#">
                        <span class="icon"><i class="bi bi-chat-fill"></i></span>
                        <span class="txt-link">Comentarios</span>
                    </a>
                </li>
        
    
        
                 <li class="item-menu">
                    <a href="#">
                        <span class="icon"><i class="bi bi-tools"></i></span>
                        <span class="txt-link">Configuração</span>
                    </a>
                </li>
        
            </ul>
       </nav> <!-- Fim menu lateral --> 

       
       <header> <!-- Inicio cabeçalho -->
        <div id="title">
            <h1>MobilyTech</h1>
        </div>

        <ul>
            <li><a href="#">Tecnicos</a></li>
            <li><a href="#">Chamados</a></li>
            <li><a href="#">Contatos</a></li>
            <li><a href="#h2sobre">Sobre</a></li>
        </ul>
   </header> <!-- Fim cabeçalho --> 

    <div class="contato"> <!-- Inicio Contato -->

        <div class="title-contato">
            <h2>Contatos</h2>
        </div>
         
        <div class="contatos">
                <p>Entre em contato conosco, oferecemos todo tipo de suporte aos nossos usuários, e se puder deixe seu comentário e avalie-nos.</p> 
        </div>
        <hr>
    </div><!-- Fim Contato -->

    <div class="suporte">
        <div class="title-suporte">
            <h1>Suporte</h1>
        </div>

        <div class="txt-suporte">
            Aqui você encontra nossos canais de atendimento e suporte ao usuário mobilytech
        </div>

        <div class="table">
            <div class="table-txt">
                <h1>E-mail</h1>
                <p>mobilytech@mobilytech.com</p>
            </div>
            <hr>

            <div class="table-txt">
                <h1>Endereço</h1>
                <p>mobilytech@mobilytech.com</p>
            </div>
            <hr>

            <div class="table-txt">
                <h1>Endereço</h1>
                <p>mobilytech@mobilytech.com</p>
            </div>
        </div>

        <div class="title-comentarios">
            <h1>Comentarios</h1>
        </div>

        <div class="comentarios-txt">
         Deixe aqui o seu comentário, sugestão ou problema preenchendo o formulário abaixo e nossa equipe <br> entrará em contato com você o mais rápido possível
        </div>

        <form action="#" class="form">
            <div class="form-header">
                <div class="input-form">
                    <label for="nome">Nome</label>
                    <input type="text" name="nome" id="nome">
                </div>

                <div class="input-form">
                    <label for="sobrenome">Sobrenome</label>
                    <input type="text" name="sobrenome" id="sobrenome">
                </div>

                <div class="controle">
                    <label class="radio">
                      <input type="radio" name="resposta">
                      Feminino
                    </label>
                    <label class="radio">
                      <input type="radio" name="resposta">
                      Masculino
                    </label>
                  </div>

                <div class="input-form">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email">
                </div>

                <div class="input-form">
                    <label for="cidade">Cidade</label>
                    <input type="text" name="cidade" id="cidade">
                </div>

                <div class="txt-area">
                    <textarea class="textarea" placeholder="Mensagem"></textarea>
                </div>

                <div class="checkbox">
                    <label class="checkbox">
                        <input type="checkbox">
                        Gostaria de receber a Newsletter da MobilyTech? 
                     </label>
                </div>

                <div class="btn-enviar">
                <input type="submit" name="enviar" placeholder="Enviar">
                </div>
                
            </div>
        </form>
    </div>

</body>
</html>