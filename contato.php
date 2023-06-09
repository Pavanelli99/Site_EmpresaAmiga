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
   <title>Contato</title>
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
   <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&family=Raleway:wght@400;500;600;700;800&display=swap"
      rel="stylesheet">
   <!-- Scrollbar Custom CSS -->
   <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
   <!-- Tweaks for older IEs-->
   <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
   <link rel="web siti icon"  type="png" href="images/logo3.png">
</head>

<body>
   <!-- header section start -->
   <div class="header_section">
      <div class="container">
         <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="index.php"><img src="images/logo.png" width="101" height="23"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
               aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
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
   <!-- header section end -->
   <div class="call_text_main">
      <div class="container">
         <div class="call_taital">
            <div class="call_text"><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i><span
                     class="padding_left_15">Localização</span></a></div>
            <div class="call_text"><a href="#"><i class="fa fa-phone" aria-hidden="true"></i><span
                     class="padding_left_15">(67) 3521-0519</span></a></div>
            <div class="call_text"><a href="#"><i class="fa fa-envelope" aria-hidden="true"></i><span
                     class="padding_left_15">pavanelli1975@gmail.com</span></a></div>
         </div>
      </div>
   </div>
    <!-- envio/ -->
    
   <div class="container">
      <div class="contact_section_2">
          <div class="row">
              <div class="col-md-12">
                  <div class="mail_section_1">
                      <form method="POST" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
                          <input type="text" class="mail_text" placeholder="Nome" name="Name">
                          <!-- <span class="error"><?php echo $nameErr; ?></span><br><br> -->

                          <input type="text" class="mail_text" placeholder="E-mail" name="Email">
                          <!-- <span class="error"><?php echo $emailErr; ?></span><br><br> -->

                          <input type="text" class="mail_text" placeholder="Telefone" name="Phone_Number">
                          <!-- <span class="error"><?php echo $phoneErr; ?></span><br><br> -->

                          <textarea class="massage-bt" placeholder="Mensagem" rows="5" id="comment" name="Message"></textarea>
                          <!-- <span class="error"><?php echo $messageErr; ?></span><br><br> -->

                          <div class="send_bt"><input type="submit" value="Enviar"></div>
                      </form>
                     
                     </div>
               </div>
          </div>
      </div>
  </div>


   <!-- fim envio -->



   <!-- contact section end -->
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
                     <textarea class="update_mail" placeholder="Digite seu e-mail" rows="5" id="comment"
                        name="Enter Your Email"></textarea>
                     <div class="subscribe_bt"><a href="#">Inscrever-se</a></div>
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
                  <p class="lorem_text">Descubra oportunidades de investimento sólidas e rentáveis em nosso portfólio.
                  </p>
               </div>
               <div class="col">
                  <h4 class="footer_taital">Contatos</h4>
                  <div class="location_text"><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i><span
                           class="padding_left_15">Localização</span></a></div>
                  <div class="location_text"><a href="#"><i class="fa fa-phone" aria-hidden="true"></i><span
                           class="padding_left_15">(67) 3521-0519</span></a></div>
                  <div class="location_text"><a href="#"><i class="fa fa-envelope" aria-hidden="true"></i><span
                           class="padding_left_15">pavanelli1975@gmail.com</span></a></div>
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
               <p class="copyright_text">Opção Veículos - Fundada em 21/06/2019</p>
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






<?php
// Define as variáveis de erro e define-as como vazias inicialmente
$nameErr = $emailErr = $phoneErr = $messageErr = "";
$name = $email = $phone = $message = "";

// Verifica se o formulário foi submetido
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validação do campo "Nome"
    if (empty($_POST["Name"])) {
        $nameErr = "O nome é obrigatório";
    } else {
        $name = test_input($_POST["Name"]);
        // Verifica se o nome contém apenas letras e espaços
        if (!preg_match("/^[a-zA-Z ]*$/", $name)) {
            $nameErr = "Apenas letras e espaços são permitidos no nome";
        }
    }

    // Validação do campo "E-mail"
    if (empty($_POST["Email"])) {
        $emailErr = "O e-mail é obrigatório";
    } else {
        $email = test_input($_POST["Email"]);
        // Verifica se o formato do e-mail é válido
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Formato de e-mail inválido";
        }
    }

    // Validação do campo "Telefone"
    if (empty($_POST["Phone_Number"])) {
        $phoneErr = "O telefone é obrigatório";
    } else {
        $phone = test_input($_POST["Phone_Number"]);
        // Verifica se o formato do telefone é válido (apenas números e hífens)
        if (!preg_match("/^[0-9\-]*$/", $phone)) {
            $phoneErr = "Formato de telefone inválido";
        }
    }

    // Validação do campo "Mensagem"
    if (empty($_POST["Message"])) {
        $messageErr = "A mensagem é obrigatória";
    } else {
        $message = test_input($_POST["Message"]);
    }

    // Se não houver erros, processa os dados do formulário
    if (empty($nameErr) && empty($emailErr) && empty($phoneErr) && empty($messageErr)) {
        // Faça algo com os dados do formulário, como enviar um e-mail ou salvar no banco de dados
        // ...
        // Exemplo: exibe uma mensagem de sucesso
        $successMessage = "O formulário foi enviado com sucesso!";
    }
}

// Função para limpar e validar os dados de entrada
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>
