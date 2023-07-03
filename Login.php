









<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/Login.css"> <!-- Link css -->
    <title>MobilyTech</title>
</head>
<body>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;400;500&display=swap'); /* Font */

*{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}

/* Inicio login */
.container{
    margin-top: 100px;
    width: 60%;
    height: 60vh;
    display: flex;
    box-shadow: 5px 5px 10px rgba(0, 0, 0, .212);
} 

.form-image{
    width: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
    background-color: #023047;
    padding: 1rem;
}
 

.form-image img{ 
    width: 30rem;
  /* tamanho da imagem */
} 
 


.form{
    width: 100%;
    display: flex;
    background-color: #FFF;
    padding: 3rem;
    align-items: center;
} 

.form-header h1{
    color: #22223b;
}

.form-header h1::after{
    content: "";
    display: block;
    width: 10rem;
    height: 0.3rem;
    background-color: #22223b;
    margin: 0 auto;
    position: absolute;
    border-radius: 10px
} 

.input-group{
    margin-top: 50px;
    padding: 1rem 0;
} 

.input-box{
    margin-right: 100px;
    display: flex;
    flex-direction: column;
    margin-bottom: 1.1rem;
} 

.input-box input{
    width: 410px;
    margin: 0.6rem 0;
    padding: 0.8rem 1.2rem;
    border: none;
    border-radius: 10px;
    box-shadow: 1px 1px 6px #0000001c;
} 

.input-box input:hover{
    background-color: #eeeeee75;
} 

.input-box input:focus-visible{
    outline: 1px solid #22223b;
}

.input-box label{
    font-size: 0.75rem;
    font-weight: 600;
    color: #000000c0;
} 

.input-box input::placeholder{
    color: #000000be;
} 

.continue-button button{
    width: 60%;
    margin-top: 100px;
    margin-left: 100px;
    border: none;
    background-color: #22223b;
    padding: 0.62rem;
    border-radius: 5px;
    cursor: pointer;
} 

.continue-button button a{
    text-decoration: none;
    font-size: 0.93rem;
    font-weight: 500;
    color: #FFF;
} 

.link a{
    font-size: 13px;
}  
/* Fim login */ 

/* Inicio cabeçalho */
body{
    width: 100%;
    height: 100vh;
    background-color: #22223b;
    color: #fff;
    max-width: 1300px;
    margin: 0 auto;
    padding: 15px;
}

header{
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    align-items: center;
}

#title{
    flex-direction: column;
    line-height: 10px;
}

li{
    display: inline-block;
    margin: 20px;
}

h1{
    font-weight: 300;
}

main{
    display: flex;
    flex-direction: row;
    margin-top: 210px;
}

h2{
    font-size: 56px;
    line-height: 75px;
    
}

span{
    color: #ff6700;
}

p{
    line-height: 30px;
    max-width: 500px;

}

img{
    width: 580px;
    margin-left: 100px;
}

a{
    color: #fff;
    text-decoration: none;
}

a:hover{
    color: #ff6700;
    transition: 0.3s all;
}

#inscreva-se-button{
    border: 2px solid #ff6700;
    padding: 10px;
    border-radius: 15px;
}

#inscreva-se-button:hover{
    background-color: #ff6700;
    color: #fff;
}
/* Fim cabeçalho */




    </style>

        
    <header> <!-- Inicio cabeçalho -->
        <div id="title">
            <h1>MobilyTech</h1>
        </div>

        <ul>
            <li><a href="Index.php">Início</a></li>
            <li><a href="#">Técnicos</a></li>
            <li><a href="#">Chamados</a></li>
            <li><a href="#h2sobre">Contatos</a></li>
        </ul>
   </header> <!-- Fim cabeçalho -->
    
    <div class="container"> <!-- Inicio login -->
        <div class="form-image">
            <img src="assets/images/Login/Cortada.png" alt="login">
        </div>

        <div class="form">
        <form action="loginSessao.php" method="POST">
    <div class="form-header">
        <div class="title">
            <h1>Login</h1>
        </div> 
        <div class="input-group">
            <div class="input-box">
                <label for="email">Email</label>
                <input type="text" name="email">
            </div>
            <div class="input-box">
                <label for="password">Senha</label>
                <input type="password" name="senha">
            </div>
        </div>
    </div>
    <div class="link">
        <a href="#">Esqueceu a senha?</a>
    </div>
    <div class="continue-button">
        <button type="submit">Entrar</button>
    </div>
</form>

        </div>
    </div> <!-- Fim login -->

</body>
</html>