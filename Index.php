<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css"> <!-- Icons -->
    <link rel="stylesheet" href="assets/css/Style.css"> <!-- Link CSS -->
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

/* Inicio menu lateral */
body{
    height: 100vh;
}

nav.menu-lateral{
    width: 80px;
    height: 100%;
    background-color: #22223b;
    padding: 20px 0 20px 0%;
    box-shadow: 3px 0 0 #ff6700;
    position: fixed;
    top: 0;
    left: 0;
    overflow: hidden;
    transition: .2s;
}

nav.menu-lateral:hover{
    width: 300px;
}

ul{
    height: 100%;
    list-style-type: none;
}

ul li.item-menu{
    width: 250px;
    height: 76px;
    border-radius: 10px;
    transition: .2s;
}

ul li.item-menu:hover{
    background-color: #ff7900;
}

ul li.item-menu a{  
    text-decoration: none;
    font-size: 20px;
    padding: 20px 4%;
    display: flex;
    margin-bottom: 20px;
    line-height: 40px;
}

ul li.item-menu a .txt-link{
    color: white; /* cor da letra */
    margin-left: 40px;
}

ul li.item-menu a .icon i{
    color: white;
   font-size: 25px; 
}

.item-menu{
    margin-top: 90px;
}

.title-lateral{
    margin-top: 50px;
    margin-left: 90px;
}
/* Fim menu lateral */


/* Inicio do corpo do site */
body{
    background-color: #22223b;
    color: #fff;
    max-width: 1500px;
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
    margin-left: 350px;
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

form{
    display: flex;
    flex-direction: column;
    width: 70%;
}

.cadastrar{
    height: 50px;
    width: 40%;
    background-color: #ff6700;
    color: #fff;
    font-weight: bold;
    border-radius: 20px;
    margin-top: 20px;
    border: none;
}

.cadastrar a{
    color: #FFF;
}

input{
    width: 500px;
    margin-top: 20px;
    height: 50px;
    padding: 15px;
    border-radius: 20px;
    border: none;
    font-size: 15px;
}

span{
    color: #FF6700
}

span.sobre{
    display: flex;
    margin-left: 550px;
    margin-top: 50px;
    font-size: 45px;
    line-height: 10px;
    transition: 1s;
    transition: 0.5s;
}
/* Fim do corpo do site */


/* Inicio Pedidos e Comentarios */
.is-rounded {

    width: 200px;
    display: flex;
    justify-content: center;
    margin-left: -3px;
    margin-bottom: 30px;
    border-radius: 1000px;
    
   
}
  
 ---Cards
main.cards {
    display: flex;
    padding: 32px;
    height: 100vh;
    width: 100%;

    display: flex;
    justify-content: center;
    align-items: center;

    color: #434343;

    font-size: 16px;
}

main.cards section.card {
    display: flex;
    flex-direction: column;
    align-items: center;
    text-align: center;
    background: white;
    padding: 1rem 1.5rem;
    border-radius: 8px;
    max-height: 468px;
    margin-left: 32px;
    background-color: #f4f3ee;
}

main.cards section.card:first-child {
    margin-left: 0;
}

main.cards section.card .icon {
    width: 78px;
    height: 64px;
    margin-left: 80px;
}

main.cards section.card img {
    width: 100%;
    margin-left: -88px;
}

main.cards section.card h3 {
    font-size: 150%;
    margin: 16px 0;
    color: #ff6700;
}

main.cards section.card span {
    font-weight: 500;
    max-width: 500px;
    font-size: 100%;
    margin-bottom: 16px;
    color: black;
}

main.cards section.card button {
    padding: 0.5rem 1rem;
    text-transform: uppercase;
    border-radius: 32px;
    border: 0;
    cursor: pointer;
    font-size: 100%;
    font-weight: 500;
    color: #fff;
    margin-bottom: 16px 0;
}

main.cards section.card.contact button {
    background: linear-gradient(to right, #9F66FF, #DFCBFF);
}
main.cards section.card.shop button {
    background: linear-gradient(to right, #3E8AFF, #BBDEFF);
}
main.cards section.card.about button {
    background: linear-gradient(to right, #FE5F8F, #FFC7D9);
}

main.cards section.card.contact {
    box-shadow: 20px 20px 50px -30px #DBC4FF;
}
main.cards section.card.shop {
    box-shadow: 20px 20px 50px -30px #AFD6FF;
}
main.cards section.card.about {
    box-shadow: 20px 20px 50px -30px #FFC1D5;
}

@media screen and (max-width: 720px) {
    main.cards {
        flex-direction: column;
    }

    main.cards section.card {
        margin-left: 0;
        margin-bottom: 32px;
    }

    main.cards section.card:last-child {
        margin-bottom: 0;
    }

    main.cards section.card button {
        font-size: 70%;
    }

}

.coment {

    width: 100px;
}

.card1 {

    margin-top: 35px;
    color: rgb(255, 255, 255);
    margin-left: 170px;  
}



.is-rounded {
    margin-left: 455px;
    width: 200px;
    height: 200px;
}

.title1 {
    margin-left: 505px;
}

.h2sobre {

  
    margin-bottom: 200px;
    margin-top: 200px;
}


.h2pedidos{
    margin-left: 500px;
    margin-bottom: -130px;
    margin-top: 200px;
    font-size: 50px;
}

.pedidos{
    font-weight: 250;
}
/* Fim Pedidos e Comentarios */


/* Inicio sobre o site */
.sobre{
    width: 500px;
    margin-left: 500px;
    margin-top: 20px;
    color: #ff6700;
    font-weight: 200;
}

.servicos_categorias {
    padding: 100px 60px;
    display: grid;
    grid-template-columns: 1fr 1fr;
    grid-gap: 50px;
    color: black;
    border-radius: 5px;
}

.servicos_categorias div:first-child p {
    font-size: 1.5em;
}

.servicos_categorias div p {
    font-size: 1.2em;
}

.servicos_categorias div h4 {
    font-size: 1.9em;
}

.servicos_inferior {
    grid-template-columns: 1fr 1fr;
    background: #6495ED33;
    padding: 100px 60px 70px 60px;
   
}

.servicos_categorias h3 span, .servicos_categorias a span {
    color: #04c263;
}

a.botao_uber {
    background: rgba(0,0,0,.1);
}

a.botao_uber_eats {
    background: #6BE1A7;
}

a.botao_uber_99 {
    background: #FFF013;
}

.categorias_mobile ul {
    display: grid;
    grid-template-columns: 1fr;
    grid-template-rows: 1fr;
    grid-gap: 20px;
    align-content: center;
}

.categorias_mobile ul a {
    display: block;
    font-size: 1.3em;
    max-width: 300px;
    margin: 0 auto;
}

div.botoes_uber_eats {
    display: grid;
    grid-template-columns: 1fr 1fr;
    align-content: center;
}

div.botoes_uber_eats a {
    display: block;
    font-size: 1.3em;
    max-width: 300px;
    margin: 0 auto;
}
.sobre1 {
    grid-area: content;
    padding-bottom: 30px;
    display: flex;
    flex-direction: column;  
}

.mesclar {
    grid-column: 1 / -1;
}

.alinha_x_end {
    grid-column: 2;
}

.bloco {
    display: block;
}

.bg_verde {
    background: #fff;
}


.bg_azul {
    background: #fff;
}


.bg_cinza {
    background: #fff;
}


.bg_branco {
    background: rgba(255, 0, 0, 0.3);
}

.h2sobre .sobre {

    margin-left: 580px;
    margin-bottom: -130px;
}

.tec {
    border-radius: 10px;
}

.inscreva{

    margin-bottom: 350px;
}
/* Fim sobre o site */

/* Inicio roda pé */
footer{
    display: flex;
    flex-direction: column;
    height: 90px;
    width: 100%;
    justify-content: center;
    align-items: center;
    margin-top: 200px;
}

footer img{
    width: 30px;
    display: inline-block;
    margin-left: 5px;
}

footer p{
    display: block;
}

.socials{
    display: flex;
    margin-left: -60px;
}

@media screen and (min-width: 1600px){
    footer p{
        font-size: 1.3em;
    }

    footer img{
        width: 50px;
    }

}


@media (max-width: 700px){

    footer{
        margin-top: 0;
    }

    footer p{
    margin-top: 0;
    font-size: 0.8em;
    }

}

.contat{

    margin-bottom: 100px;
    margin-left: 4%;
    margin-top: -70px;
}

.acompanhe {

    margin-bottom: 50px;
    margin-left: -20px;
}

.mobicons{

    display: flex;
    margin-left: -50px;

}

.wpp {
    margin-left: 900px; 
}
/* Fim roda pé */
    </style>
    
    <nav class="menu-lateral"> <!-- Inicio Menu Lateral -->

        <div class="title-lateral">
            <h1>MobilyTech</h1>
        </div>

        <ul>
                <li class="item-menu">
                    <a href="Servicos.php">
                        <span class="icon"><i class="bi bi-grid-1x2-fill"></i></span>
                        <span class="txt-link">Categorias</span>
                    </a>
                </li>
        
    
        
                <li class="item-menu">
                     <a href="Suporte.php">
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
       </nav> <!-- Fim Menu Lateral --> 

       
        <header> <!-- Inicio Cabeçalho -->
            <div id="title">
                <h1>MobilyTech</h1>
             </div>

            <ul>
                <li><a href="Tecnicos.php">Tecnicos</a></li>
                <li><a href="#">Chamados</a></li>
                <li><a href="#">Contatos</a></li>
                <li><a href="#h2sobre">Sobre</a></li>
                <li><a href="Login.php" id="inscreva-se-button">Já tem uma conta?</a></li>
                <li><a href="Cad-Pj.php" id="inscreva-se-button">Trabalhe conosco</a></li>
            </ul>
        </header> <!-- Fim Cabeçalho --> 


        <main> <!-- Inicio Corpo do Site -->
            <aside>
                <h2><span>Inscreva-se agora</span></h2>
                <h2>Na MOBILYTECH</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                <form>
                    <input type="text" placeholder="Nome">
                    <input type="email" placeholder="Email">
                    <button class="cadastrar" type="submit"><a href="Cad-Cli.php">Cadastrar ></a></button>
                </form>
            </aside>

            <article>
                <img src="assets/images/Inicial/Personagem tela.png" alt="Tecnico">
            </article>
        </main> <!-- Fim do corpo do site -->


        

        <main class="cards">
            <section class="card contact">
                <div class="icon">
                    <img src="assets/images/Inicial/Chat.png" alt="Hardware">
                </div>
                <h3>Suporte para Hardware</h3>
                <span>O serviço de hardware oferece soluções e assistência para questões relacionadas a equipamentos físicos, como computadores, impressoras e redes. </span>
                <button>Learn More</button>
            </section>
            <section class="card shop">
                <div class="icon">
                    <img src="assets/images/Inicial/Bag.png" alt="Redes">
                </div>
                <h3>Assistência em Redes.</h3>
                <span>Incluindo a instalação de roteadores, switches e outros dispositivos de rede necessários para estabelecer a conectividade entre computadores e outros dispositivos.</span>
                <button>Learn More</button>
            </section>
            <section class="card about">
                <div class="icon">
                    <img src="assets/images/Inicial/Play.png" alt="Software">
                </div>
                <h3>Serviços de Software.</h3>
                <span>Especialistas em software estão envolvidos no desenvolvimento, implantação e suporte contínuo de software para atender às necessidades específicas de empresas e usuários individuais.</span>
                <button>Learn More</button>
            </section>
        </main>
        
        <aside class="h2sobre">
            <span class="sobre">Comentários</span></h2>
        </aside>
        
        <main>
            <div class="card1">
                <div class="card-image">
                  <figure class="image is-4by3">
                  </figure>
                </div>
                <div class="card-content">
                  <div class="media">
                    <div class="media-left">
                        <figure class="image is-128x128">
                            <img class="is-rounded" src="assets/images/Inicial/homem-negro.jpg">
                        </figure>
                    </div>
                    <div class="media-content">
                      <p class="title1">John Smith</p>
                      <p class="subtitle is-6">@johnsmith</p>
                    </div>
                  </div>
              
                  <div class="content">
                    Excelentes profissionais, pontual e acima de tudo confiável. Foi bastante educada e atenciosa com o trabalho, recomendo.</a>.
                    <br>
                    <time datetime="2016-1-1">11:09 PM - 1 Jun 2023</time>
                  </div>
                </div>
              </div>
        </main>
        
        <br>
        
        <div class="card1">
            <div class="card-image">
              <figure class="image is-4by3">
              </figure>
            </div>
            <div class="card-content">
              <div class="media">
                <div class="media-left">
                    <figure class="image is-128x128">
                        <img class="is-rounded" src="assets/images/Inicial/mulher.png">
                    </figure>
                </div>
                <div class="media-content">
                  <p class="title1">Camila Soares</p>
                  <p class="subtitle is-6">@camisoaz</p>
                </div>
              </div>
          
              <div class="content">
                Fui muito bem atendida, o profissional foi muito educado e fez um trabalho de qualidade. Valeu a pena, orçamento grátis e não é careiro.</a>.
                <br>
                <time datetime="2016-1-1">18:15 PM - 15 Jun 2023</time>
              </div>
            </div>
          </div>
        </main>
        
        <div class="card1">
            <div class="card-image">
              <figure class="image is-4by3">
              </figure>
            </div>
            <div class="card-content">
              <div class="media">
                <div class="media-left">
                    <figure class="image is-128x128">
                        <img class="is-rounded" src="assets/images/Inicial/homem.png">
                    </figure>
                </div>
                <div class="media-content">
                  <p class="title1">Junior Lopez</p>
                  <p class="subtitle is-6">@lopezjunin</p>
                </div>
              </div>
          
              <div class="content">
                Fui muito bem atendida, o profissional foi muito educado e fez um trabalho de qualidade. Valeu a pena, orçamento grátis e não é careiro.</a>.
                <br>
                <time datetime="2016-1-1">18:15 PM - 15 Jun 2023</time>
              </div>
            </div>
          </div>
        </main>
        
       

   <footer> <!-- Inicio roda pé -->

    <p class="acompanhe">Acompanhe a MobilyTech nas Redes Sociais:</p>
    <div class="socials">
        <a href="https://instagram.com/nattagym?igshid=NTc4MTIwNjQ2YQ=="><img src="assets/images/Redes-Sociais/instagram.png" alt="instagram"></a>
        <a href=""><img src="assets/images/Redes-Sociais/facebook.png" alt="facebook"></a>
        <a href=""><img src="assets/images/Redes-Sociais/youtube .png" alt="youtube"></a>
    </div>

    <div class="wpp">
        <a href="https://api.whatsapp.com/send?phone=5511950345659&text=Ol%C3%A1,%20gostaria%20de%20obter%20suporte%20da%20MobilyTech!"
            target="_blanck"><img class="wpp" src="assets/images/Redes-Sociais/whatsapp.png"></a>

    </div>

    <p class="mobicons">©  MobilyTech 2023</p>

</footer> <!-- Fim roda pé -->


</body>
</html>