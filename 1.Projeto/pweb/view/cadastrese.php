<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>Cadastre-se</title>


  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="../css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">

  <!--owl slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

  <!-- font awesome style -->
  <link href="../css/font-awesome.min.css" rel="stylesheet" />
  <!-- nice select -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/css/nice-select.min.css" integrity="sha256-mLBIhmBvigTFWPSCtvdu6a76T+3Xyt+K571hupeFLg4=" crossorigin="anonymous" />
  <!-- datepicker -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.css">
  <!-- Custom styles for this template -->
  <link href="../css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="../css/responsive.css" rel="stylesheet" />

</head>

<body class="sub_page">

  <div class="hero_area">

      <!-- header section strats -->
      <header class="header_section">
      <div class="header_top">
        <div class="container">
          <div class="contact_nav">
            <a href="">
              <i class="fa fa-phone" aria-hidden="true"></i>
              <span>
                Telefone : +55 8299658-9878
              </span>
            </a>
            <a href="">
              <i class="fa fa-envelope" aria-hidden="true"></i>
              <span>
                Email : saudeifal@gmail.com
              </span>
            </a>
            <a href="">
              <i class="fa fa-map-marker" aria-hidden="true"></i>
              <span>
                Arapiraca - Alagoas
              </span>
            </a>
          </div>
        </div>
      </div>
      <div class="header_bottom">
        <div class="container-fluid">
          <nav class="navbar navbar-expand-lg custom_nav-container ">
            <a class="navbar-brand" href="index.html">
              <img src="../images/logoss.png" alt="">
            </a>


            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class=""> </span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <div class="d-flex mr-auto flex-column flex-lg-row align-items-center">
                <ul class="navbar-nav  ">
                  <li class="nav-item active">
                    <a class="nav-link" href="../index.php">Home <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="about.php"> Sobre</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="treatment.php">For</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="doctor.php">Equipe</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="testimonial.php">Avisos</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="contact.php">Contato</a>
                  </li>
                </ul>
              </div>
              <div class="quote_btn-container">
                <a href="login.php">
                  <i class="fa fa-user" aria-hidden="true"></i>
                  <span>
                    Login
                  </span>
                </a>
                <a href="">
                  <i class="fa fa-user" aria-hidden="true"></i>
                  <span>
                    Cadastre-se
                  </span>
                </a>
                <form class="form-inline">
                  <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit">
                    <i class="fa fa-search" aria-hidden="true"></i>
                  </button>
                </form>
              </div>
            </div>
          </nav>
        </div>
      </div>
    </header>
    <!-- end header section -->
  </div>


  <!-- contact section -->
  <section class="contact_section layout_padding-bottom">
    <br><br><br>
    <div class="container">
      <div class="heading_container">
        <h2>
          Cadastre-se
        </h2>
      </div>
      <div class="row">
        <div class="col-md-7">
          <div class="form_container">

            <!-- In??cio de Form cadastro -->
            <form action="../index.php?classe=Profissional&acao=storeProfissional" method="POST">

              <div>
                <input type="text" name="cpf" placeholder="Digite seu CPF" autocomplete="off"/>
              </div>
              <div>
                <input type="text" name="contato" placeholder="Digite seu contato/whatsapp" autocomplete="off"/>
              </div>
              <div>
                <input type="text" name="email" placeholder="Digite seu email" autocomplete="off"/>
              </div>
              <div>
                <input type="number" name="status" placeholder="Status" value="1" autocomplete="off"/>
              </div>
              <div>
                <input type="text" name="rg" placeholder="RG" autocomplete="off"/>
              </div>
              <div>
                <input type="text" name="nome_prof" placeholder="Nome Profissional" autocomplete="off"/>
              </div>
              <div>
                <input type="password" name="password" placeholder="Password" autocomplete="off"/>
              </div>
              <div>
                <input type="password"  placeholder="Repetir a senha" autocomplete="off"/>
              </div>

              <div id="alvo">
                <label for="cargo" style="color: green">Cargo</label><br />
                <input type="cargo" name="cargo" placeholder="Tipo de Cargo" autocomplete="off"/>
                
                
                <!--<select name="tipo_cargo" class="tipo_cargo" id="tipo_cargo" >
                    <option value="T??cnico/a Enfermagem">T??cnico/a Enfermagem</option>
                    <option value="Enfermeiro/a">Enfermeiro/a</option>
                    <option value="Psicol??go/a">Psicol??go/a</option>
                    <option value="Outro">Outro</option>
                </select>

                <div id="meuDiv">
                    <input class="inputs" type="text" name="tipo_cargo" placeholder="Tipo Cargo"/>
                    <button type="button" id="cancel">Cancelar</button>
                </div>-->
              </div>
              <br/><br/>

              <div class="btn_box">
                <button>
                  Cadastre-se
                </button>
              </div>

            </form>
            <!-- Final de Form cadastro -->


          </div>
        </div>
        <div class="col-md-5">
          <div class="img-box">
            <img src="../images/contact-img.jpg" alt="">
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end contact section -->

  <!-- info section -->
  <section class="info_section ">
    <div class="container">
      <div class="info_top">
        <div class="info_logo">
          <a href="">
            <img src="../images/logo.png" alt="">
          </a>
        </div>
        <div class="info_form">
          <form action="">
            <input type="email" placeholder="Seu email">
            <button>
              Not??cias
            </button>
          </form>
        </div>
      </div>
      <div class="info_bottom layout_padding2">
        <div class="row info_main_row">
          <div class="col-md-6 col-lg-3">
            <h5>
              Endere??o
            </h5>
            <div class="info_contact">
              <a href="">
                <i class="fa fa-map-marker" aria-hidden="true"></i>
                <span>
                  Arapiraca - Alagoas
                </span>
              </a>
              <a href="">
                <i class="fa fa-phone" aria-hidden="true"></i>
                <span>
                  Ligue para +55 8299658-9878
                </span>
              </a>
              <a href="">
                <i class="fa fa-envelope"></i>
                <span>
                  ifalsaude@gmail.com
                </span>
              </a>
            </div>
            <div class="social_box">
              <a href="">
                <i class="fa fa-facebook" aria-hidden="true"></i>
              </a>
              <a href="">
                <i class="fa fa-twitter" aria-hidden="true"></i>
              </a>
              <a href="">
                <i class="fa fa-linkedin" aria-hidden="true"></i>
              </a>
              <a href="">
                <i class="fa fa-instagram" aria-hidden="true"></i>
              </a>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="info_links">
              <h5>
                Rotas 
              </h5>
              <div class="info_links_menu">
                <a class="active" href="index.php">
                  Home
                </a>
                <a href="about.php">
                  Sobre
                </a>
                <a href="treatment.php">
                  For
                </a>
                <a href="doctor.php">
                  Equipe
                </a>
                <a href="testimonial.php">
                  Avisos
                </a>
                <a href="contact.php">
                  Contato
                </a>
              </div>
            </div>
          </div>
          <!--<div class="col-md-6 col-lg-3">
            <div class="info_post">
              <h5>
                LATEST POSTS
              </h5>
              <div class="post_box">
                <div class="img-box">
                  <img src="images/post1.jpg" alt="">
                </div>
                <p>
                  Normal
                  distribution
                </p>
              </div>
              <div class="post_box">
                <div class="img-box">
                  <img src="images/post2.jpg" alt="">
                </div>
                <p>
                  Normal
                  distribution
                </p>
              </div>
            </div>
          </div> 
          <div class="col-md-6 col-lg-3">
            <div class="info_post">
              <h5>
                News
              </h5>
              <div class="post_box">
                <div class="img-box">
                  <img src="images/post3.jpg" alt="">
                </div>
                <p>
                  Normal
                  distribution
                </p>
              </div>
              <div class="post_box">
                <div class="img-box">
                  <img src="images/post4.png" alt="">
                </div>
                <p>
                  Normal
                  distribution
                </p>
              </div>
            </div>
          </div> -->

        </div>
      </div>
    </div>
  </section>
  <!-- end info_section -->


 <!-- footer section -->
 <footer class="footer_section">
    <div class="container">
      <p>
        &copy; <span id="displayYear"></span> Todos os direitos reservados
        <a href="https://html.design/">Lucas and Bruno</a>
      </p>
    </div>
  </footer>
  <!-- footer section -->

  <!-- jQery -->
  <script src="../js/jquery-3.4.1.min.js"></script>
  <!-- bootstrap js -->
  <script src="../js/bootstrap.js"></script>
  <!-- nice select -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/js/jquery.nice-select.min.js" integrity="sha256-Zr3vByTlMGQhvMfgkQ5BtWRSKBGa2QlspKYJnkjZTmo=" crossorigin="anonymous"></script>
  <!-- owl slider -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
  <!-- datepicker -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.js"></script>
  <!-- custom js -->
  <script src="../js/custom.js"></script>

  <!-- input control -->
  <script>
    $(function() {
        $('#meuDiv').hide();

        $('#select').change(function() {
            if ($(this).val() === 'outro') {
                $('#meuDiv').show();
                $('#select').hide();
            }
        });

        $('#cancel').click(function () {
            $('#select').show();
            $('#select').val('');
            $('#meuDiv').hide();
        });
    });
  </script>

</body>

</html>