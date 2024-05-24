<?php
session_start();
$classe = "bemvindo";

if((!isset($_SESSION['cpf']) == true) and (!isset($_SESSION['password']) == true)){
    unset($_SESSION['cpf']);
    unset($_SESSION['password']);
    header('Location: login.php');
    exit();
}

$nome = $_SESSION['nome'];
?>
<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./assets/css/reset.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <link rel="stylesheet" href="./assets/css/nav.css" />
    <link rel="stylesheet" href="./assets/css/swiper.css" />
    <link rel="stylesheet" href="./assets/css/plans.css" />
    <link rel="stylesheet" href="./assets/css/banners.css" />
    <link rel="stylesheet" href="./assets/css/footer.css" />
    <link rel="stylesheet" href="./assets/css/register.css" />
    <link rel="stylesheet" href="./assets/css/login.css" />
    <link rel="stylesheet" href="./assets/css/session.css" />

    <script
      src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"
      defer></script>
    <script src="./assets/script/main.js" defer></script>

    <title>LIFE Academia</title>
  </head>
  
  <body>
    <header class="header__nav-perfil">
      <div class="perfil-imagem">
        <img src="./assets/img/ellipse-6.png" alt="Perfil do Usuário">
      </div>
      <div class="perfil-usuario">
         <?php echo '<h1 class="' . $classe . '">Bem-vindo, ' . $nome . '!</h1>'; ?>
         <br>
        <h2>PERFIL DO USUÁRIO</h2>
        
      </div>
      <nav class="nav__container-perfil">
        <div class="nav__logo-perfil">
          <a href="index.html">
            <img src="./assets/img/amarela1.svg" alt="foto da logo da academia"/>
          </a>
        </div>
      </nav>
    </header>
      
    <main class="main-perfil">
      <aside class="sidebar">
        <nav>
          <ul>
            <li><a href="#" class="let_yellow">Aulas</a></li>
            <li><a href="#" class="let_yellow" id="mensalidade">Pagar mensalidade</a></li>
          </ul>
        </nav>
        <div class="contato-sair">
          <a href="#" class="let_yellow contato__alert">Contato</a>
          <a href="index.php" class="let_yellow">Sair</a>
        </div>
      </aside>

      <div class="info-aulas">
        <section class="aulas">
          <div class="aulas-card">
            <img src="./assets/img/yoga-session.png" alt="Yoga">
            <h2>Yoga</h2>
            <p>15 aulas</p>
            <button><a href="https://www.youtube.com/playlist?list=PLuNi4ANySIBK8XntF4QVTpjZX2OitdR-J">Assistir aulas</a></button>
          </div>
          <div class="aulas-card">
            <img src="./assets/img/cardio-session.png" alt="Cardio">
            <h2>Cardio</h2>
            <p>18 aulas</p>
            <button><a href="https://www.youtube.com/playlist?list=PLuNi4ANySIBK8XntF4QVTpjZX2OitdR-J">Assistir aulas</a></button>
          </div>
          <div class="aulas-card">
            <img src="./assets/img/musculacao-session.png" alt="Musculação">
            <h2>Musculação</h2>
            <p>20 aulas</p>
            <button><a href="https://www.youtube.com/playlist?list=PLuNi4ANySIBK8XntF4QVTpjZX2OitdR-J">Assistir aulas</a></button>
          </div>
        </section>
        <section class="hidratacao">
          <img src="./assets/img/hidratacao-session.png" alt="Hidratação">
          <div class="text-hidrat">
            <h2>A importância da hidratação nos resultados dos treinos</h2>
            <p>A hidratação é tão importante quanto respirar e se alimentar bem. Quando se fala em desempenho físico é preciso ser ainda mais específico e cuidadoso...</p>
            <button>Saiba mais</button>
          </div>
        </section>
      </div>
    </main>

    <footer id="footer">
      <div class="footer__container">
        <div class="footer_logos">
          <div class="footer_logo__principal">
            <img src="./assets/img/toda branca 2.svg" alt="logo footer" />
          </div>
          <div class="footer_logo__icones">
            <img src="./assets/img/_WhatsApp.png" alt="logo _WhatsApp" />
            <img src="./assets/img/_Instagram.png" alt="logo instagram" />
            <img src="assets/img/_YouTube.png" alt="logo youtube" />
          </div>
        </div>

        <ul class="footer_lista">
          <h3>Horário de funcionamento</h3>
          <li class="footer_lista__item">Segunda à Sexta: 06:00 às 22:00</li>
          <li class="footer_lista__item">Sábados: 08:30 às 14:00</li>
          <li class="footer_lista__item">Domingos e Feriados 10:00 às 13:00</li>
        </ul>

        <ul class="footer_lista">
          <h3>Entre em contato</h3>
          <li class="footer_lista__item">Life_SAC@gmail.com</li>
          <li class="footer_lista__item">
            Avenida Presidente Epitácio Pessoa, Expedicionários
          </li>
        </ul>

        <ul class="footer_lista">
          <h3>Site</h3>
          <li class="footer_lista__item">
            <a href="index.php#unidades">Unidades</a>
          </li>
          <li class="footer_lista__item">
            <a href="index.php#planos">Planos</a>
          </li>
          <li class="footer_lista__item" ><a href="#" class="contato__alert">Contatos</a></li>
          <li class="footer_lista__item">
            <a href="login.php">Área do aluno</a>
          </li>
          <li class="footer_lista__item">
            <a href="register.php">Matricule-se </a>
          </li>
        </ul>
      </div>
      <p class="copyright">
        2024 Life Academia © Todos os direitos reservados. Desenvolvido por
        Grupo Jeofton
      </p>
    </footer>
    <script src="./assets/script/script.js"></script>
  </body>
</html>
