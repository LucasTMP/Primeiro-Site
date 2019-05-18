<!doctype html>
<html class="no-js" lang="pt-BR">
<?php include("include/head.php");?>

<body class="body-resposivo2">
    <header>

        <div class="hrow">
            <div class="col-md-3">
                <div class="htexttop">
                    Entre em contato conosco:
                </div>
                <a style="font-size: 10pt; color: #fff; margin-left:10.3%;" href="mailto:primuzburger@gmail.com">primuzburger@gmail.com</a>
            </div>



            <div class="col-md-3">
                <div class="htexttop">
                    Ligue para nós:
                </div>
                <font style="font-size: 10pt; color: white; margin-left:15%;">(11) 4968-2582</font>
            </div>



            <div class="col-md-3">
                <div class="htexttop">
                    Siga nossa Fan Page:
                </div>
                <a style="font-size: 10pt; color: #fff; margin-left:15%;" href="https://www.facebook.com/Primuz-Burgers-1856057058043147">Primuz Burgers</a>
            </div>



            <!--<div class="coluna">-->
<div style="margin-left: 75%">
                <button onclick="document.getElementById('id01').style.display='block'" style="width:auto;" class="buttonteste">Login</button>
                <!--formulario pop-up gay-->

                <div id="id01" class="modalpop">

                  <form class="modal-contentpop animate" action="ROLAGROSSA">
                    <div class="imgcontainerpop">
                      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
                      <img src="images/rola.jpeg" alt="Avatar" class="avatar">
                  </div>

                  <div class="containerpop">
                      <label for="uname"><b>Nome</b></label>
                      <input type="text" placeholder="Nome" name="uname" required>

                      <label for="psw"><b>Senha</b></label>
                      <input type="password" placeholder="Senha" name="psw" required>

                      <button type="submit">Login</button>
                      <label>
                        <input type="checkbox" checked="checked" name="remember">Permanecer logado
                    </label>
                </div>

                <div class="containerpop" style="background-color:#f1f1f1">
                  <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtnpop">Cancel</button>
                  <span class="psw">Esqueceu <a href="#">senha ?</a></span>
              </div>
          </form>
      </div>
      <!--</div>-->



      <!--inicion pop-up cadastrar-->
      <button onclick="document.getElementById('id02').style.display='block'" style="width:auto;" class="buttonteste">Cadastrar</button>
      <div id="id02" class="modalpop">

                  <form class="modal-contentpop animate" action="ROLAGROSSA">
                    <div class="imgcontainerpop1">
                      <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
                      <img src="images/cadastro.png" alt="Avatar" class="avatar1">
                  </div>

                  <div class="containerpop1">
                      <label for="uname"><b>Nome</b></label>
                      <input type="text" placeholder="Nome" name="uname" required>

                      <label for="psw"><b>Email</b></label>
                      <input type="password" placeholder="Email" name="psw" required>

                       <label for="psw"><b>CPF</b></label>
                      <input type="password" placeholder="CPF" name="psw" required>

                      <label for="psw"><b>Senha</b></label>
                      <input type="password" placeholder="Senha" name="psw" required>

                      <button type="submit">Login</button>
                      <label>
                        <input type="checkbox" checked="checked" name="remember">Permanecer logado
                    </label>
                </div>

                <div class="containerpop" style="background-color:#f1f1f1">
                  <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtnpop1">Cancel</button>
                  <span class="psw">Esqueceu <a href="#">senha ?</a></span>
              </div>
          </form>
      </div>
      <!--</div>-->


      <!--POP-UP BOTÃO CONSULTAR-->
      <button onclick="document.getElementById('id03').style.display='block'" style="width:auto;" class="buttonteste">Consultar</button>
      <div id="id03" class="modalpop">       

                  <form class="modal-contentpop animate" action="ROLAGROSSA">
                    <div class="imgcontainerpop2">
                      <span onclick="document.getElementById('id03').style.display='none'" class="close" title="Close Modal">&times;</span>
                      <img src="images/consultar.png" alt="Avatar" class="avatar2">
                  </div>

                  <div class="containerpop2">
                      <label for="uname"><b>CPF</b></label>
                      <input type="text" placeholder="CPF" name="uname" required>

                      <label for="psw"><b>Senha</b></label>
                      <input type="password" placeholder="Senha" name="psw" required>

                      <button type="submit">Login</button>
                      <label>
                        <input type="checkbox" checked="checked" name="remember">Permanecer logado
                    </label>
                </div>

                <div class="containerpop" style="background-color:#f1f1f1">
                  <button type="button" onclick="document.getElementById('id03').style.display='none'" class="cancelbtnpop2">Cancel</button>
                  <span class="psw">Esqueceu <a href="#">senha ?</a></span>
              </div>
          </form>
      </div>
      <!--</div>-->
      </div>

</div>
</header>
<div class="container">
    <div class="row">
      <div class="menu-top">
        <nav class="navbar navbar-default">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class=" small-10 small-centered medium-uncentered  medium-4 column">
              <a href="index.html"><img src="images/logo_header.jpg" alt="Primuz Burger & Chickens" class="img-logo"></a>
          </div>
          <div class="navbar-header">



              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false" style="width: 90%">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
              </div>
              <!-- Collect the nav links, forms, and other content for toggling -->
              <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1"><br><br><br>
                  <ul class="nav navbar-nav navbar-right list-menu">
                    <li><a href="index.html" style="color: #000;font-family: montserrat;font-weight: bold;">Início</a></li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="hambu.html" style="color: #000;font-family: montserrat;font-weight: bold;">Produtos<i class="fa fa-sort-desc" aria-hidden="true"></i></a>
                        <ul class="dropdown-menu">
                            <li  class="menu-item"><a href="hambu.html">hambúrgueres</a></li>
                            <li class="menu-item"><a href="molhos.html">Molhos</a></li>
                            <li  class="menu-item"><a href="frangos.html">Frangos</a></li>
                        </ul>
                    </li>
                    <li  class="menu-item"><a href="quem-somos.html" style="color: #000;font-family: montserrat;font-weight: bold;">Quem Somos</a></li>



                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </div>
</div>
</div>




<div class="linha"> </div>
</header>
<div class="popup2">
    <a href="https://api.whatsapp.com/send?1=pt_BR&phone=5511958015612&text= Olá, gostaria de fazer um pedido">
        <div class="text" style="padding-right:10px">
            <p>Entre em contato pelo Whatsapp <br> (11)95801-5612</p>
            <i class="fa fa-whatsapp whatsappopup" aria-hidden="true"></i>
        </div>
    </a>
</div>
            </br>
            </br>
            </br>

            <div>
                <h1 style="font-size:20pt; text-align: center; font-family: Arial;"><b>História</b></h1>
                <hr width="60%" align="center" size="4" style="border:1px dashed grey; margin: auto; margin-bottom: 10px;">
                    <span class="vc_sep_holder vc_sep_holder_l"><span  style="border-color:#a3ad73;" class="vc_sep_line"></span></span>
                    <span class="vc_sep_holder vc_sep_holder_r">
                     <span  style="border-color:#a3ad73;" class="vc_sep_line"></span>
                 </span>
                 <p style="font-family: script; margin-left: 20%; margin-right:20%; font-size: 16pt;">A Primuz Burger & Chicken’s foi criada em 2017, a partir da idéia de servir hambúrgueres artesanais de qualidade com um sabor irresistível para as pessoas.</p>
                 <p style="font-family: script; margin-left: 20%; margin-right:20%; font-size: 16pt;">No começo a organização possuía apenas os dois primos como funcionários, porém com o grande reconhecimento por parte dos clientes o negócio começou a crescer e assim exigir uma demanda maior, de modo que atualmente a equipe é formada por cerca de 9 colaboradores e houve a necessidade de uma mudança na estrutura e localização.</p>
                 <p style="font-family: script; margin-left: 20%; margin-right:20%; font-size: 16pt;">O reconhecimento do cliente é um resultado do constante desenvolvimento na qualidade do produto e no treinamento dos colaboradores, fato sustentado e direcionado pelo feedback do público. </p>
            </div>


            <div>
                <h1 style="font-size:20pt; text-align: center; font-family: Arial;"><b>Missão</b></h1>
                <hr width="60%" align="center" size="4" style="border:1px dashed grey; margin: auto; margin-bottom: 10px;">
                    <span class="vc_sep_holder vc_sep_holder_l"><span  style="border-color:#a3ad73;" class="vc_sep_line"></span></span>
                    <span class="vc_sep_holder vc_sep_holder_r">
                     <span  style="border-color:#a3ad73;" class="vc_sep_line"></span>
                 </span>
                 <p style="font-family: script; margin-left: 20%; margin-right:20%; font-size: 16pt;">Oferecer hambúrgueres artesanais e frangos fritos, feitos com equipamentos especializados e produtos de qualidade para agradar os mais sofisticados paladares.</p>
            </div>


            <div>
                <h1 style="font-size:20pt; text-align: center; font-family: Arial;"><b>Visão</b></h1>
                <hr width="60%" align="center" size="4" style="border:1px dashed grey; margin: auto; margin-bottom: 10px;">
                    <span class="vc_sep_holder vc_sep_holder_l"><span  style="border-color:#a3ad73;" class="vc_sep_line"></span></span>
                    <span class="vc_sep_holder vc_sep_holder_r">
                     <span  style="border-color:#a3ad73;" class="vc_sep_line"></span>
                 </span>
                 <p style="font-family: script; margin-left: 20%; margin-right:20%; font-size: 16pt;">Ser referência em sabor e atendimento, possuindo os melhores profissionais e tornando-se uma hamburgueria de luxo, com a formação de filiais para atender diversas regiões de Guarulhos e São Paulo.</p>
            </div>



            <div>
                <h1 style="font-size:20pt; text-align: center; font-family: Arial;"><b>Valores</b></h1>
                <hr width="60%" align="center" size="4" style="border:1px dashed grey; margin: auto; margin-bottom: 10px;">
                    <span class="vc_sep_holder vc_sep_holder_l"><span  style="border-color:#a3ad73;" class="vc_sep_line"></span></span>
                    <span class="vc_sep_holder vc_sep_holder_r">
                     <span  style="border-color:#a3ad73;" class="vc_sep_line"></span>
                 </span>
                 <p style="font-family: script; margin-left: 20%; margin-right:20%; font-size: 16pt;">Respeito, excelência no atendimento, qualidade, higiene e dedicação.</p>
            </div>


            </br>
            </br>

                    <script src="js/jquery.js"></script>
                    <?php include("include/footer.php");?>

                </body>

                </html>
