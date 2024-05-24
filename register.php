<?php
if(isset($_POST['submit'])){
 
include_once('database.php');

$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$email = $_POST['email'];
$cpf = $_POST['cpf'];
$datanasc =  $_POST['nascimento'];
$celular = $_POST['celular'];
$password = $_POST['password'];
$plano = $_POST['plano'];

$result = mysqli_query($conexao, "INSERT INTO alunos(nome,sobrenome,email,cpf,data_nasc,celular,password,plano) 
VALUES ('$nome','$sobrenome','$email','$cpf','$datanasc','$celular','$password','$plano')");
}



?>

<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./assets/css/reset.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
    />
    <link rel="stylesheet" href="./assets/css/nav.css" />
    <link rel="stylesheet" href="./assets/css/register.css" />
    <link rel="stylesheet" href="./assets/css/swiper.css" />
    <link rel="stylesheet" href="./assets/css/plans.css" />
    <link rel="stylesheet" href="./assets/css/login.css" />
    <link rel="stylesheet" href="./assets/css/banners.css" />
    <link rel="stylesheet" href="./assets/css/footer.css" />

    <script
      src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"
      defer
    ></script>
    <script src="./assets/script/main.js" defer></script>

    <title>LIFE Academia</title>
  </head>
  <body>
    <header class="header__nav">
      <nav class="login__nav__container">
        <div class="nav__logo">
          <a href="index.php">
            <img src="./assets/img/amarela1.svg" alt="foto da logo da academia"
          /></a>
        </div>

        <div class="login__nav__func">
          <h2 class="login__nav__subtitle">Matricule-se</h2>
        </div>
      </nav>
    </header>

    <main class="main___register">
      <section class="login__principal">
        <div class="info__content__register">
          <div class="register__content">
            <h2>Cadastro</h2>
          </div>
          <form action="register.php" method="POST" class="register__form">
            <label for="idname" class="label__form" >Nome</label>
            <input type="text" name="nome" id="idname" class="login__dados" required/>
            <label for="idsobrenome" class="label__form">Sobrenome</label>
            <input
              type="text"
              name="sobrenome"
              id="idsobrenome"
              class="login__dados"
              required
            />
            <div class="divisa__dados">
              <div class="register__form__mini__um">
                <label for="idemail" class="label__form">Email</label>
                <label for="idcpf" class="label__form">CPF</label>
              </div>
              <div class="register__form__mini__dois">
                <input
                  type="email"
                  name="email"
                  id="idemail"
                  class="login__dados mini"
                  required
                />

                <input
                  type="text"
                  name="cpf"
                  id="idcpf"
                  class="login__dados mini"
                  required
                />
              </div>
            </div>
            <div class="divisa__dados">
              <div class="register__form__mini__um">
                <label for="idnascimento" class="label__form"
                  >Data de Nascimento</label
                >
                <label for="idcelular" class="label__form">Celular</label>
              </div>
              <div class="register__form__mini__dois">
                <input
                  type="date"
                  name="nascimento"
                  id="idnascimento"
                  class="login__dados mini-date"
                  required
                />

                <input
                  type="text"
                  name="celular"
                  id="idcelular"
                  class="login__dados mini"
                  required
                />
              </div>
            </div>
            <label for="idpassword" class="label__form">Senha</label>
            <input
              type="password"
              name="password"
              id="idpassword"
              class="login__dados"
              required
            />
            <label for="idplano" class="label__form">Plano</label>
            <select name="plano" id="idplano" class="login__dados select">
              <option
              name="plano"
                value="void"
                class="login__dados select"
                selected
              ></option>
              <option value="vip" class="login__dados select"  name="plano">Plano VIP</option>
              <option value="gold"  name="plano">Plano GOLD</option>
              <option value="dobro"  name="plano">Plano EM DOBRO</option>
            </select>
            <input type="submit" value="criar conta" name="submit" />
          </form>

          <p class="register__done">
            Já tem cadastro? <a href="login.php">Clique aqui</a> para fazer o
            login.
          </p>
        </div>
      </section>
    </main>
    <!---------------------------------------------------------- footer -------------------------------------------------------------------------------------------------------------------------->
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
