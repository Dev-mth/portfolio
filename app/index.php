<?php 

require '../vendor/autoload.php';

$path = dirname(__FILE__,2);

$dotenv = Dotenv\Dotenv::createUnsafeImmutable($path);
$dotenv->load();

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfólio</title>
    <link rel="stylesheet" href="assets/css/style.css">
      <!-- Favicon-->
  <link rel="icon" type="image/x-icon" href="/assets/images/favicon.png" />
        <!-- contatos-->
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
</head>
<body>

    <!-- botão what -->
    <div class="button-zap">
        <a href="<?= $_ENV['ZAP']; ?>" target="_blank">
        <ion-icon name="logo-whatsapp"></ion-icon>
        </a>
    </div>
    <!------------------------ NAV ----------------->
    <div class="navbar">
       <?php require 'views/nav.php';?> 
    </div>

    <!----------HOME----------------------------->
    <section class="home" id="home">
        <?php require 'views/home.php';?>
    </section>

    <!---------- SOBRE ----------------------------------->
    <section class="about" id="about">
        <?php require 'views/sobre.php';?>
    </section>

    <!---------- PROJETOS -------------------------------->
    <section class="projects" id="projects">
        <?php require 'views/projects.php';?>
    </section>

    <!---------- ESPECIALIDADES ------------------------->
    <section class="skills" id="skills">
        <?php require 'views/skills.php';?>
    </section>

    <!--------- CONTATOS  --->
    <section class="contact" id="contact">''
        <?php require 'views/contact.php';?>
    </section>
    <!--  FOOTER-->
    <footer>
        <?php require 'views/footer.php';?>
    </footer>

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <!-- Um script de animação de digitação jQuery (https://cdnjs.com/)*/ -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.12/typed.min.js"></script>
    <script src="assets/js/script.js"></script>
</body>
</html>