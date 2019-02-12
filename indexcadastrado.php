<?php
session_start();
if(($_SESSION['pri'] == "Usuario"|| $_SESSION ['pri'] == "Comum") && $_SESSION['acesso'] ==1){
?>
<!DOCTYPE html>
<html>

<head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <link rel="stylesheet" href="css/bootstrap.min.css">

        <title>Ace Pirates</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
        <link rel="stylesheet" href="css/style.css">
        <script src="main.js"></script>
</head>
<header>
        <img src="">
</header>

<body>
        <nav class="navbar navbar-default navbar-static-top" style="background-color:#0652DD">
                <div class="container">
                        <div class="navbar-header">
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
                                        <span class="sr-only">Toggle navigation</span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                </button>
                                <a class="logo" href="#">
                                        <img src="img/LOGO.png"></img>
                                </a>
                        </div>
                        <div id="navbar" class="navbar-collapse collapse">
                                <ul class="nav navbar-nav">
                                        <li class="btn-hover">
                                                <a href="#" class=>Home</a>
                                        </li>
                                        <li>
                                                <a href="#an" class=>Animes</a>
                                        </li>
                                        <li>
                                                <a href="#ma" class=>Mangás</a>
                                        </li>
                                        <li class="dropdown" onclick="">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                                        Mais
                                                        <span class="caret"></span>
                                                </a>
                                                <ul class="dropdown-menu">
                                                        <li>
                                                                <a href="#fan">Fanarts</a>
                                                        </li>
                                                        <li>
                                                                <a href="#box1">Sobre</a>
                                                        </li>
                                                        <li>
                                                                <a href="#lojas">Fale conosco </a>
                                                        </li>
                                                        <li role="separator" class="divider"></li>
                                                        <li class="dropdown-header">Siga-nos nas Redes sociais</li>
                                                        <li>
                                                                <a href="http://facebook.com/">Facebook</a>
                                                        </li>
                                                        <li>
                                                                <a href="http://twitter.com/">Twitter</a>
                                                        </li>
                                                </ul>
                                        </li>
                                </ul>
                                <form class="navbar-form navbar-right">
                                                <li class="btn-hover">
                                                                <a href="bdd/cliente/sugestao.php" class=>Tem alguma sugestão? Nos envie uma mensagem!</a>
                                                                
                                                        </li>
							
                        </div>
                </div>
        </nav>
        <section>
                <h1 class="text-att" id="fan">Fanarts!</h1>
                <div class="slideshow-container" style="Border:5px #222 solid">

                        <div class="mySlides fade">
                                <div class="numbertext"></div>
                                <img src="img/img1.jpg" style="width:100%">
                                <div class="text">Feito por: MARIA</div>
                        </div>

                        <div class="mySlides fade">
                                <div class="numbertext"></div>
                                <img src="img/img2.jpg" style="width:100%">
                                <div class="text">Feito por: CLÉBER</div>
                        </div>

                        <div class="mySlides fade">
                                <div class="numbertext"></div>
                                <img src="img/img3.jpg" style="width:100%">
                                <div class="text">Feito por: RODOLFO</div>
                        </div>

                </div>
                <br>


        </section>

        <section class="container" id="produtos">
                <h1 class="text-att">Atualizados Recentemente!</h1>
                <div class="att">
                        <img class="imgatt" src="img/goblin.jpg" alt="produto1">
                        <h2 class="titulos">Goblin Slayer</h2>
                        <p class="resumo">Em um mundo de fantasia, aventureiros vêm de longe para se juntar a Guilda, a fim de concluir contratos
                                para os postos de trabalho que estão disponíveis. Uma sacerdotisa inexperiente, ingressa
                                em sua primeira aventura, mas se veem em perigo depois que seu primeiro contrato de aventureiros
                                que envolve goblins da errado e quase todo seu grupo é dizimado pelos goblins.</p>
                </div>
                <div class="att">
                        <img class="imgatt" src="img/boruto.jpg">
                        <h2 class="titulos">Boruto</h2>
                        <p class="resumo">Mais de 10 anos após a Quarta Grande Guerra Ninja, o mundo finalmente se encontra em paz, Naruto
                                Uzumaki realizou seu sonho de se tornar Hokage, alguns anos após seu casamento com Hinata
                                Uzumaki, com quem teve dois filhosː Boruto e Himawari.</p>
                </div>

        </section>
        <h1 class="text-att" id="an">Animes!</h1>
        <div class="container page-top" id="fotos">

                <div class="row">


                        <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                <img src="img/1.jpg" class="zoom img-fluid " alt="">
                                </a>
                        </div>
                        <div class="col-lg-3 col-md-4 col-xs-6 thumb">

                                <img src="img/2.png" class="zoom img-fluid" alt="">
                                </a>
                        </div>

                        <div class="col-lg-3 col-md-4 col-xs-6 thumb">

                                <img src="img/3.jpg" class="zoom img-fluid " alt="">
                                </a>
                        </div>

                        <div class="col-lg-3 col-md-4 col-xs-6 thumb">

                                <img src="img/4.jpg" class="zoom img-fluid " alt="">
                                </a>
                        </div>

                        <div class="col-lg-3 col-md-4 col-xs-6 thumb">

                                <img src="img/5.jpg" class="zoom img-fluid " alt="">
                                </a>
                        </div>

                        <div class="col-lg-3 col-md-4 col-xs-6 thumb">

                                <img src="img/6.jpg" class="zoom img-fluid " alt="">
                                </a>
                        </div>

                        <div class="col-lg-3 col-md-4 col-xs-6 thumb">

                                <img src="img/7.jpg" class="zoom img-fluid " alt="">
                                </a>
                        </div>

                        <div class="col-lg-3 col-md-4 col-xs-6 thumb">

                                <img src="img/8.jpg " class="zoom img-fluid " alt="">
                                </a>
                        </div>



                </div>
        
                </div>
                <h1 class="text-att" id="ma">Mangás!</h1>
                <section id="staff" class="container bg-branco clearfix">
                                <div>

                                        <div class="texto">
                                                <img class="foto" src="img/m1.jpg" alt="">
                                                <h2>One Piece</h2>
                                                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sit, reiciendis.
                                                Laborum perspiciatis temporibus quae maxime doloremque?</p>
                                        </div>

                                </div>

                                <div>
                                        <div class="texto">
                                                <img class="foto" src="img/m2.jpg" alt="">
                                                <h2>Shingeki no Kyojin</h2>
                                                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sit, reiciendis.
                                                Laborum perspiciatis temporibus quae maxime doloremque?</p>
                                        </div>

                                </div>

                                <div>
                                        <div class="texto">
                                                <img class="foto" src="img/m3.jpg" alt="">
                                                <h2>Naruto</h2>
                                                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sit, reiciendis.
                                                        Laborum perspiciatis temporibus quae maxime doloremque?</p>
                                        </div>
                                </div>


                </section>






        </section>

        <div id="box1" class="container">
                <h1>Quem somos nós?</h1>
                <p class="sqn">Somos um dos maiores e mais atualizados sites de streaming de animes e mangás do Brasil, com o maior acervo de animes
                        dublados e legendados para o português do mundo</p>
        </div>

</body>
        <section id="lojas" class="container">
                <div class="formulario">
                <h1>Fale Conosco!</h1>
                        <form action="#" method="get">
                                <p>
                                        <label>Nome</label>
                                        <input type="text" name="nome" required placeholder="Digite seu nome"/>
                                </p>


                                <p>
                                        <label>E-mail</label>
                                        <input type="email" name="email" placeholder="E-mail - ex: pedro@emial.com"/>
                                </p>

                                <p>
                                        <label>Sexo:</label>
                                        <input type="radio" name="sexo" value="M">Masculino
                                        <input type="radio" name="sexo" value="F">Feminino
                                        <input type="radio" name="sexo" value="O" checked>Outros
                                </p>

                                <p>
                                <select name="assunto">
                                        <option>Assunto</option>
                                        <option value="1">Elogios</option>
                                        <option value="2">Dúvidas</option>
                                        <option value="3">Reclamações</option>
                                </select>
                                </p>

                                <label>Digite seu texto</label>
                                <textarea name="texto" rows="3"></textarea>

                                <button class="bg-azul branco">Enviar</button>
                                <button type="reset" class="bg-azul branco">Limpar</button>
                        </form>
                

                </div>
                <div class="mapa direita">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3675.3566661219706!2d-43.56102038563488!3d-22.900211885015125!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9be15839e68c4f%3A0x588a284ae162bc38!2sSenac+Campo+Grande!5e0!3m2!1spt-BR!2sbr!4v1544495167311"
                                width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
                        <h3>Endereços</h3>
                        <p>Rua Barcelos Domingos, 58 - Campo Grande, Rio de Janeiro - RJ, 23080-020</p>
                </div>
                </section>
                <footer class="text2">

                                <div class="" >
                                <ul>
                                            <h2>ENTRE EM CONTATO</h2>
                                            <p>E-mail: acepirates@teste</p>
                                            <p>Whatsapp: (21) 99999-9999</p>
                                </ul>
                                </div>
                                <div class="">
                                    <a href="http://facebook.com"><img src="img/social/facebook.png" alt=""></a>
                                    <a href="http://instagram.com"><img src="img/social/instagram.png" alt=""></a>
                                    <a href="http://youtube.com"><img src="img/social/youtube.png" alt=""></a>
                                </div>
                        </footer>

                

</html>

<script src='http://code.jquery.com/jquery-2.1.3.min.js'></script>

<script src='js/bootstrap.min.js'></script>
<script>
        $(function () {

                $('.dropdown-toggle').dropdown();

        });
        //SLIDE
        var slideIndex = 0;
        showSlides();

        function showSlides() {
                var i;
                var slides = document.getElementsByClassName("mySlides");
                var dots = document.getElementsByClassName("dot");
                for (i = 0; i < slides.length; i++) {
                        slides[i].style.display = "none";
                }
                slideIndex++;
                if (slideIndex > slides.length) { slideIndex = 1 }
                for (i = 0; i < dots.length; i++) {
                        dots[i].className = dots[i].className.replace(" active", "");
                }
                slides[slideIndex - 1].style.display = "block";
                setTimeout(showSlides, 3000);
        } // 3 segundos
    //Acabou o slide
</Script>
<?php
}
else{
	echo "<script> window.location='bdd/loginAcePirates.php';</script>"; 
}
?>