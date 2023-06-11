<?php session_start(); 
 if(isset($_SESSION['msg'])){
   echo $_SESSION['msg'];
   unset($_SESSION['msg']);
  }
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Easy Learning</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta
      property="og:image"
      content="http:/www.easylearning.com.br/assets/images/alphabet-bright-conceptual-256502-min.jpg"
    />
    <meta property="og:image:type" content="image/jpeg" />
    <meta property="og:image:width" content="800" />
    <meta property="og:image:height" content="600" />
    <meta
      name="description"
      content="Easy Learning é a plataforma que está revolucionando o mundo, com o ensino de programação."
    />
    <link
      rel="stylesheet"
      type="text/css"
      media="screen"
      href="assets/css/normalize.css"
    />
    <link
      rel="stylesheet"
      type="text/css"
      media="screen"
      href="assets/css/grid.css"
    />
    <link
      rel="stylesheet"
      type="text/css"
      media="screen"
      href="assets/css/animate.css"
    />
    <link
      href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
      integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf"
      crossorigin="anonymous"
    />
    <link
      href="https://fonts.googleapis.com/css?family=Lato:100,300,400,400i"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      type="text/css"
      media="screen"
      href="assets/css/lp-main.css"
    />
    <link
      rel="stylesheet"
      type="text/css"
      media="screen"
      href="assets/css/lp-querys.css"
    />
  </head>
  <body>
    <header id="header">
      <nav>
        <div class="row">
          <div class="logo">Easy Learning</div>
          <ul class="main-nav js--main-nav">
            <li>
              <a href="#header">Home</a>
            </li>
            <li>
              <a href="#features">Quem Somos</a>
            </li>
            <li>
              <a href="#contact">Contato</a>
            </li>
            <li>
              <a href="login/">Login</a>
            </li>
          </ul>
          <a class="mobile-nav-icon js--nav-icon"
            ><i class="fas fa-bars"></i
          ></a>
        </div>
      </nav>
      <div class="hero-text-box">
        <h1 class="title">
          Chegou a hora! <br />
          Do mundo crescer programando.
        </h1>
        <a href="#" class="btn btn-full js--scroll-to-start">Quero conhecer</a>
        <a href="#" class="btn btn-ghost js--scroll-to-contact">Saiba mais</a>
        
      </div>
    </header>

    <section id="features" class="js--section-features">
      <div class="row js--wp-1">
        <h2>Não existe futuro sem programação</h2>
        <p class="long-copy">
          Hey! Somos a Easy Learning, estamos aqui para ajudar a criar um mundo
          em que todos dominam lógica de programação.
        </p>
        <div class="row">
          <div class="col span-1-of-4 box">
            <i class="fas fa-assistive-listening-systems icon-blue"></i>
            <!-- <h3>Batata</h3> -->
            <p>
              Com a utilização da lógica de programação, o aluno tende a receber
              estímulos maiores no cérebro, facilitando seu desenvolvimento em
              áreas lógicas como na matemática. Dessa forma, o aluno consegue se
              sobressair melhor em matérias de exatas na posterioridade. :)
            </p>
          </div>
          <div class="col span-1-of-4 box">
            <i class="fab fa-audible icon-red"></i>
            <!-- <h3>Batata</h3> -->
            <p>
              Com atividades especialmente criadas pela nossa equipe e pelos
              professores, é possível se divertir enquanto aprende como sistema
              de Gamificação, esse método quebra os padrões normais de ensino,
              tornando o aprendizado algo divertido e legal.
            </p>
          </div>
          <div class="col span-1-of-4 box">
            <i class="fas fa-baby icon-yellow"></i>
            <!-- <h3>Batata</h3> -->
            <p>
              A infância é a melhor fase da vida para aprender. É nessa fase que
              o cérebro ainda está em formação, ou seja, o melhor momento para
              desenvolver habilidades cognitivas básicas. A lógica é um caminho
              base para vários outros caminhos, quanto mais cedo aprender,
              melhor será no futuro.
            </p>
          </div>
          <div class="col span-1-of-4 box">
            <i class="fas fa-bezier-curve icon-green"></i>
            <!-- <h3>Batata</h3> -->
            <p>
              Mas o que a lógica de programação tem a ver com isso tudo? É muito
              simples, a lógica de programação “imita” a lógica real das coisas,
              ou seja utilizando programação é possível aprender a solucionar
              problemas reais de matemática, a forma com que os problemas serão
              resolvidos, é a mesma!
            </p>
          </div>
        </div>
      </div>
    </section>

    <!--
    <section id="events">
        <ul class="events-shocase">
            <li>
                <figure class="event-photo">
                    <img src="assets/images/imagem1.png" alt="imagem">
                </figure>
            </li>
            <li>
                <figure class="event-photo">
                    <img src="assets/images/imagem2.png" alt="imagem">
                </figure>
            </li>
            <li>
                <figure class="event-photo">
                    <img src="assets/images/imagem1.png" alt="imagem">
                </figure>
            </li>
            <li>
                <figure class="event-photo">
                    <img src="assets/images/imagem2.png" alt="imagem">
                </figure>
            </li>
        </ul>
        <ul class="events-shocase clearfix">
            <li>
                <figure class="event-photo">
                    <img src="assets/images/imagem2.png" alt="imagem">
                </figure>
            </li>
            <li>
                <figure class="event-photo">
                    <img src="assets/images/imagem1.png" alt="imagem">
                </figure>
            </li>
            <li>
                <figure class="event-photo">
                    <img src="assets/images/imagem2.png" alt="imagem">
                </figure>
            </li>
            <li>
                <figure class="event-photo">
                    <img src="assets/images/imagem1.png" alt="imagem">
                </figure>
            </li>
        </ul>
    </section>
-->
    <section id="steps">
      <div class="row">
        <h2>Como funciona &mdash; 3 simples passos</h2>
      </div>
      <div class="row">
        <div class="col span-1-of-2 step-box">
          <img
            class="app-screan js--wp-2"
            src="assets/images/gif.gif"
            alt="\easy Learning"
          />
        </div>
        <div class="col span-1-of-2 step-box">
          <div class="work-step">
            <div class="blue">1</div>
            <p>
              Com atividades pré criadas e posteriormente adicionadas pelos
              professores, os alunos devem solucionar os desafios propostos
              através da lógica de programação. Como funciona? Ligando blocos.
            </p>
          </div>
          <div class="work-step">
            <div class="red">2</div>
            <p>
              Com a ligação dos blocos, é solucionar os problemas propostos,
              cada bloco representa um comando específico ou função a ser feito.
              Esses comandos criam os códigos respectivos a eles, assim o aluno
              pode ver como a atividade funciona e entender as melhores formas
              para solucionar os problemas propostos.
            </p>
          </div>
          <div class="work-step">
            <div class="yellow">3</div>
            <p>
              Com a lógica de programação em desenvolvimento se torna possível a
              compreensão de atividades mais elaboradas que exigem mais
              raciocínio lógico. Esse desenvolvimento garante uma visão melhor
              de mundo, o aluno se torna mais apto para tomar decisões rápidas e
              precisas na hora de uma prova por exemplo
            </p>
          </div>
        </div>
      </div>
    </section>
<!--
    <section id="testimonials">
      <div class="row">
        <h2>Experiencias Com a Easy Learning</h2>
      </div>
      <div class="row">
        <div class="col span-1-of-3">
          <blockquote>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa
            excepturi nobis, repudiandae debitis nisi sed accusantium itaque
            vitae magni id? Cumque id quibusdam sunt laudantium doloremque iusto
            aliquid quidem magnam?
            <cite
              ><img src="assets/images/ebook.png" alt="Custumer" />Steve
              Jobs</cite
            >
          </blockquote>
        </div>
        <div class="col span-1-of-3">
          <blockquote>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa
            excepturi nobis, repudiandae debitis nisi sed accusantium itaque
            vitae magni id? Cumque id quibusdam sunt laudantium doloremque iusto
            aliquid quidem magnam?
            <cite
              ><img src="assets/images/ebook.png" alt="Custumer" />Steve
              Jobs</cite
            >
          </blockquote>
        </div>
        <div class="col span-1-of-3">
          <blockquote>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa
            excepturi nobis, repudiandae debitis nisi sed accusantium itaque
            vitae magni id? Cumque id quibusdam sunt laudantium doloremque iusto
            aliquid quidem magnam?
            <cite
              ><img src="assets/images/ebook.png" alt="Custumer" />Steve
              Jobs</cite
            >
          </blockquote>
        </div>
      </div>
    </section>
    -->
    <section id="contact" class="js--section-contact">
      <div class="row">
        <h2>Hora de Conhecer a Easy Learning</h2>
      </div>
      <div class="row">
        <form action="models/processa_cad_conhecer.php" method="POST" class="contact-form">
          <div class="row">
            <input
              type="text"
              name="nome"
              id="nome"
              placeholder="Seu nome"
              required
            />
          </div>
          <div class="row">
            <input
              type="email"
              name="email"
              id="email"
              placeholder="Seu email"
              required
            />
          </div>

          <div class="row">
            <textarea
              name="mensagem"
              id="mensagem"
              placeholder="Deixe sua mensagem"
            ></textarea>
          </div>
          <div class="row">
            <!-- <label for="pacoca">Gosta de paçoca de amendoim? </label> -->
            <!-- <input type="checkbox" name="pacoca" id="pacoca"> Sim, eu amo paçoca -->
            <label for="aprender">Gostaria de receber notificações? </label>
            <input type="checkbox" name="aprender" id="aprender" /> Sim, eu
            gostaria!
          </div>
          <div class="row">
            <input
              class="btn btn-green"
              type="submit"
              name="submit"
              id="submit"
              value="Enviar"
            />
          </div>
        </form>
      </div>
    </section>

    <footer>
      <div class="row">
        <div class="col span-4-of-9">
          <ul class="footer-nav">
            <li>
              <a href="#">Home</a>
            </li>
            <li>
              <a href="#">Quem Somos</a>
            </li>
            <!-- <li>
              <a href="#">Produtos</a>
            </li> -->
            <li>
              <a href="#">Contato</a>
            </li>
            <li>
              <a href="#">Login</a>
            </li>
          </ul>
        </div>
        <div class="col span-4-of-9">
          <ul class="footer-contacts">
            <li class="text-yellow">
              <i class="far fa-envelope"></i>contato@easylearning.com.br
            </li>
            <li class="text-yellow">
              <i class="fas fa-phone"></i>(31) 97359-1233
            </li>
          </ul>
        </div>
        <div class="col span-1-of-9">
          <ul class="social-links">
            <li>
              <a href="#"><i class="fab fa-linkedin-in"></i></a>
            </li>
            <li>
              <a href="#"><i class="fab fa-facebook-f"></i></a>
            </li>
            <li>
              <a href="https://www.instagram.com/_easylearning/"><i class="fab fa-instagram"></i></a>
            </li>
          </ul>
        </div>
      </div>
      <div class="row">
        <p class="copyrigth">
          Copyrigth &copy; 2019 by Easy Learning. Todos os direitos reservados.
        </p>
      </div>
    </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/selectivizr/1.0.2/selectivizr-min.js"></script>
    <script src="assets/js/jquery.waypoints.min.js"></script>
    <script src="assets/js/lp-main.js"></script>
  </body>
</html>
