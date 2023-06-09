<!DOCTYPE html>
<html>
   <head>
      <link rel="web seti icon" type ="jpg" href="images/logo3.png">
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Estoque</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" type="text/css" href="css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- font css -->
      <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&family=Raleway:wght@400;500;600;700;800&display=swap" rel="stylesheet">
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
   </head>
   <body>
      <!-- header section start -->
      <div class="header_section">
         <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
               <a class="navbar-brand"href="index.php"><img src="images/logo.png" width="101" height="23"></a>
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
               </button>
               <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav ml-auto">
                     <li class="nav-item">
                        <a class="nav-link" href="index.php">Inicio</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="sobre.php">Quem somos</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="estoque.php">Estoque</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="contato.php">Contato</a>
                     </li>
                  </ul>
                  <form class="form-inline my-2 my-lg-0">
                  </form>
               </div>
            </nav>
         </div>
      </div>
      <div class="search_section">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <h1 class="search_taital">Pesquise os melhores carros</h1>
                  <!-- <p class="search_text">Using 'Content here, content here', making it look like readable</p> -->
                  <!-- select box section start -->
                  <div class="container">
                     <div class="select_box_section">
                        <div class="select_box_main">
                           <div class="row">
                              <div class="col-md-3 select-outline">
                                 <select class="mdb-select md-form md-outline colorful-select dropdown-primary">
                                   <option value="" disabled selected>Carro</option>
                                   <?php
                                   $carros = array("Corolla", "Fazer", "Gol", "HB20", "Match", "Palio", "Santana");
                               
                                   foreach ($carros as $carro) {
                                       echo "<option value='$carro'>$carro</option>";
                                   }
                                   ?>
                                 </select>
                               </div>
                              <!-- <div class="col-md-3 select-outline">
                                 <select class="mdb-select md-form md-outline colorful-select dropdown-primary">
                                    <option value="" disabled selected>Tipo</option>
                                    <option value="1">Option 1</option>
                                    <option value="2">Option 2</option>
                                    <option value="3">Option 3</option>
                                 </select>
                              </div>
                              <div class="col-md-3 select-outline">
                                 <select class="mdb-select md-form md-outline colorful-select dropdown-primary">
                                    <option value="" disabled selected>Ano Fab</option>
                                    <option value="1">Option 1</option>
                                    <option value="2">Option 2</option>
                                    <option value="3">Option 3</option>
                                 </select>
                              </div> -->
                              <div class="col-md-3">
                                 <div class="search_btn"><a href="#">Procurar</a></div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- select box section end -->
               </div>
            </div>
         </div>
      </div>
      <!-- gallery section start -->
      <div class="gallery_section layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <h1 class="gallery_taital">Nossas Melhores Ofertas</h1>
               </div>
            </div>
            <div class="gallery_section_2">
               <div class="row">
                  <div class="col-md-4">
                     <div class="gallery_box">
                        <div class="gallery_img"><img src="destaques/corolla_bg.png"></div>
                        <h3 class="types_text">Corolla GLi 1.8 16v</h3>
                        <p style="text-align: center;">2016/17</p>
                          <p class="looking_text">R$ 88.800,00</p>
                        <div class="read_bt"><a href="#">Saiba mais</a></div>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="gallery_box">
                        <div class="gallery_img"><img src="destaques/hb20_bg.png"></div>
                        <h3 class="types_text">HB20 Sense 1.0 12v</h3>
                        <p style="text-align: center;">2019/20</p>
                          <p class="looking_text">R$ 59.800,00</p>
                        <div class="read_bt"><a href="#">Saiba mais</a></div>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="gallery_box">
                        <div class="gallery_img"><img src="destaques/gol_bg.png"></div>
                        <h3 class="types_text">Gol Special 1.0 4p</h3>
                        <p style="text-align: center;">2015/16</p>
                          <p class="looking_text">R$ 41.800,00</p>
                        <div class="read_bt"><a href="#">Saiba mais</a></div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="gallery_section_2">
               <div class="row">
                  <div class="col-md-4">
                     <div class="gallery_box">
                        <div class="gallery_img"><img src="destaques/march_bg.png"></div>
                        <h3 class="types_text">March S 1.0 16v</h3>
                        <p style="text-align: center;">2013/14</p>
                          <p class="looking_text">R$ 35.800,00</p>
                        <div class="read_bt"><a href="#">Saiba mais</a></div>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="gallery_box">
                        <div class="gallery_img"><img src="destaques/fazer_bg.png"></div>
                        <h3 class="types_text">Fazer 150 ED</h3>
                        <p style="text-align: center;">2013/14</p>
                          <p class="looking_text">R$ 9.800,00</p>
                        <div class="read_bt"><a href="#">Saiba mais</a></div>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="gallery_box">
                        <div class="gallery_img"><img src="destaques/palio_bg.png"></div>
                        <h3 class="types_text">Palio Celeb Economy 1.0</h3>
                        <p style="text-align: center;">2013/14</p>
                          <p class="looking_text">R$ 35.800,00</p>
                        <div class="read_bt"><a href="#">Saiba mais</a></div>
                     </div>
                  </div>
               </div>
            </div>
            <!-- <div class="gallery_section_2">
               <div class="row">                              
                  
                  <div class="col-md-4">
                     <div class="gallery_box">
                        <div class="gallery_img"><img src="destaques/fazer_bg.png"></div>
                        <h3 class="types_text">Carro Toyota</h3>
                          <p class="looking_text">Início por dia $ 4500</p>
                        <div class="read_bt"><a href="#">Agende agora</a></div>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="gallery_box">
                        <div class="gallery_img"><img src="destaques/fazer_bg.png"></div>
                        <h3 class="types_text">Fazer 150 ED</h3>
                        <p style="text-align: center;">2013/14</p>
                          <p class="looking_text">R$ 9.800,00</p>
                        <div class="read_bt"><a href="#">Saiba mais</a></div>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="gallery_box">
                        <div class="gallery_img"><img src="destaques/fazer_bg.png"></div>
                        <h3 class="types_text">Carro Toyota</h3>
                          <p class="looking_text">Início por dia $ 4500</p>
                        <div class="read_bt"><a href="#">Agende agora</a></div>
                     </div>
                  </div> -->





               </div>
            </div>
         </div>
      </div>
      <!-- gallery section end -->
      <!-- footer section start -->
      <div class="footer_section layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <!-- <div class="footeer_logo"><img src="images/logo%.png"></div> -->
               </div>
            </div>
            <div class="footer_section_2">
               <div class="row">
                  <div class="col">
                     <h4 class="footer_taital">Inscreva-se agora</h4>
                     <!-- <p class="footer_text">There are many variations of passages of Lorem Ipsum available,</p> -->
                     <div class="form-group">
                        <textarea class="update_mail" placeholder="Digite seu e-mail" rows="5" id="comment" name="Enter Your Email"></textarea>
                        <div class="subscribe_bt"><a href="">Inscrever-se</a></div>
                     </div>
                  </div>
                  <div class="col">
                     <h4 class="footer_taital">Informação</h4>
                     <p class="lorem_text">Desde junho de 2019, nossa loja de carros tem se 
                        dedicado a oferecer veículos de qualidade e procedência comprovadas, 
                        visando sempre a satisfação total dos clientes.</p>
                  </div>
                  <div class="col">
                     <h4 class="footer_taital">Links</h4>
                     <p class="lorem_text">Explore nossa seleção de carros de qualidade e procedência comprovada.</p>
                  </div>
                  <div class="col">
                     <h4 class="footer_taital">Investimentos</h4>
                     <p class="lorem_text">Descubra oportunidades de investimento sólidas e rentáveis em nosso portfólio.</p>
                  </div>
                  <div class="col">
                     <h4 class="footer_taital">Contatos</h4>
                     <div class="location_text"><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i><span class="padding_left_15">Localização</span></a></div>
                     <div class="location_text"><a href="#"><i class="fa fa-phone" aria-hidden="true"></i><span class="padding_left_15">(67) 3521-0519</span></a></div>
                     <div class="location_text"><a href="#"><i class="fa fa-envelope" aria-hidden="true"></i><span class="padding_left_15">pavanelli1975@gmail.com</span></a></div>
                     <div class="social_icon">
                        <ul>
                           <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                           <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                           <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                           <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- footer section end -->
      <!-- copyright section start -->
      <div class="copyright_section">
         <div class="container">
            <div class="row">
               <div class="col-sm-12">
                  <p class="copyright_text">Opção Veículos  -  Fundada em 21/06/2019</p>
               </div>
            </div>
         </div>
      </div>
      <!-- copyright section end -->
      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <script src="js/plugin.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
   </body>
</html>