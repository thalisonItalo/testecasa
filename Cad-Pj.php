
<meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet"  href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
        <link rel="stylesheet" href="assets/css/Cad-Pj1.css">
        <link rel="stylesheet" href="assets/css/Cad-Pj2.css">
        
        
        
    </head>
    <body>
            <div class="container">
                <form action="cadastrarEmpresa.php" method="post">
                    <div class="form first">
                        <div class="details personal">
                            <span class="title"><h3>Informações de cadastro</h3></span>
        
                            <div class="fields">
                                <div class="input-field">
                                    <label>Nome Completo</label>
                                    <input type="text" placeholder="Informe o nome completo" name="nome" >
                                </div>
        
                                <div class="input-field">
                                    <label>Data de Nascimento</label>
                                    <input type="date" placeholder="Insira a data de nascimento" name="data_de_nascimento">
                                </div>
        
                                <div class="input-field">
                                    <label>Email</label>
                                    <input type="email" placeholder="Informe seu e-mail" name="email" required>
                                </div>
        
                                <div class="input-field">
                                    <label>Número de telefone</label>
                                    <input type="tel" placeholder="Informe seu telefone" name="telefone">
                                </div>
        
                                <div class="input-field">
                                    <label>Sexo</label>
                                    <select name="sexo">
                                        <option>Selecione o seu sexo</option>
                                        <option>Masculino</option>
                                        <option>Feminino</option>
                                    </select>
                                </div>
        
                                <div class="input-field">
                                    <label>Nº do CPF</label>
                                    <input type="text" placeholder="Informe o seu CPF" name="cpf">
                                </div>
                            </div>
                        </div>
                        <div class="details ID">

                            <span class="title"><h3>Informações de endereço</h3></span>
                            
        
                            <div class="fields">
                                <div class="input-field">
                                    <label> Endereco</label>
                                    <input type="text" placeholder="Insira o seu endereço"  name="endereco">
                                </div>
        
                                <div class="input-field">
                                    <label>N° de Endereço</label>
                                    <input type="text" placeholder=" Número do seu endereço" name="n_endereco">
                                </div>
        
                                <div class="input-field">
                                    <label>CEP</label>
                                    <input type="text" placeholder=" CEP do seu endereço"  name="cep">
                                </div>
        
                                <div class="input-field">
                                    <label>Bairro</label>
                                    <input type="text" placeholder="Bairro onde recide" name="bairro">
                                </div>
        
                                <div class="input-field">
                                    <label>Cidade</label>
                                    <input type="text" placeholder="Informe a cidade onde mora" name = "cidade">
                                </div>
        
                                <div class="input-field">
                                    <label>Estado</label>
                                    <input type="text" placeholder="Informe o estado de onde mora" name="estado">
                                </div>

                               

                                

                               
                             
                                
                                
                            </div>
                        </div>

                        <div class="details ID">

                            <span class="title"><h3>Informações de Login</h3></span>
                            
        
                            <div class="fields">
                                <div class="input-field">
                                    <label> Senha</label>
                                    <input type="text" placeholder="crie a senha do seu usuário"  name="senha">
                                </div>

                                <div class="input-field">
                                    <label> Confirmar senha</label>
                                    <input type="text" placeholder="Confirme a sua senha"  name="c_senha">
                                </div>

                            </div>
                        </div>
                                <div class="fields">
                                    <input class="editar_dados" type="submit" value="editar" name="editar">
                                </div>
                            </div>
                        </div>
                        <button type="submit">Enviar</button>
                    </form>

                </body>
                </html>                               

                                

                               
                             
                                
                                
                          

                        
 
