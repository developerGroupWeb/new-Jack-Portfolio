<?$title = 'Home'?>
<? include 'helpers/Helpers.php' ?>
<? Helpers::counter();?>

<? include 'layouts/template.php'?>

<div id="content-wrapper">
  <header class="header header--bg">
    <div class="container">
      <nav class="navbar navbar-expand-lg navbar-dark sticky-top">
        <a class="navbar-brand" href="">Jack Web</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#myNavbar" aria-controls="myNavbar" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"><i class="fa fa-bars" class="text-white" aria-hidden="true"></i></span>
        </button>
        
        <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item"><a class="nav-link font-weight-bold" href="#aboutMe">ABOUT</a></li>
            <!--<li class="nav-item"><a class="nav-link" href="#">SKILL</a></li>-->
            <li class="nav-item"><a class="nav-link font-weight-bold text-uppercase" href="#myprojects">My projects</a></li> 
            <li class="nav-item"><a class="nav-link font-weight-bold" href="/contact.php">CONTACT</a></li> 
          </ul>
        </div>
      </nav>
      <div class="header__content text-center">
        <span class="header__content__block">HELLO</span>
        <h1 class="header__content__title">I'm Mathias, <span class="font-weight-bold">PHP Web Developer</h1>
        <ul class="header__content__sub-title">
          <li class="font-weight-bold">MVC Friendly <span class="padding">&#45;</span></li>
          <li class="font-weight-bold">LARAVEL <span class="padding">&#45;</span></li>
          <li class="font-weight-bold">SYMPHONY</li>
        </ul>
        <a class="header__button" href="#myprojects">Discover my projects</a>
      </div>
    </div>
  </header>
  

  <section class="about" id="aboutMe">
    <div class="container about__container--narrow">
      <div class="page-section">
        <h2 class="page-section__title">ABOUT ME</h2>
          <img class="page-section__title-style" src="public/images/title-style.png" alt="">
          <p class="page-section__paragraph"></p>
          <div class="row gutters-80">
            <div class="col-md-4">
              <div class="about__image">
                <img src="public/images/avatar-3637561_960_720.png" class="img-fluid" alt="">
              </div>
            </div>
            <div class="col-md-8 about__content">
              <p class="about__description text-center">5 years of experience with passion for the code, I like what I do. I have a strong foundation in php, laravel experiences, and a global knowledge of symphony framework.
                        Mastery of development in POO in a MVC architecture.
                        Html, CSS, Bootstrap, Jquery and Javascript, i'm here</p>
              <div class="row row--margin-top">
                <div class="col-md-4">
                  <p class="about__bio"><strong>NAME :</strong> Mathias</p>
                  <p class="about__bio"><strong>AGE :</strong> 30</p>
                </div>
                <div class="col-md-4">
                  <p class="about__bio"><strong>JOB TITLE :</strong> Back-end Developer</p>
                  <p class="about__bio"><strong>LOCATION :</strong> Dnipro, UKRAINE</p>
                </div>
              </div>
              <div class="row">
                <div class="col-md-4">
                  <a class="button button--colorful button--margin" href="#">DOWNLOAD CV</a>
                </div>
                <div class="col-md-4">
                  <a class="button button--colorful button--margin" href="/contact.php">Touch ME</a>
                </div>
              </div>
            </div>
          </div>
      </div>
    </div>
  </section>

  <section class="" id="myprojects">
    <div class="container">
        <div class="row vertical-center">
            <div class="col-12">
                <div class="row mb-5">
                    <h2 class="mx-auto text-uppercase font-weight-bold mb-5 text-white">My projects</h2>
                </div>

                <div class="card-columns my-4">

                    <div class="card animated zoomIn">
                        <div class="imgcard">
                            <a href="http://managementconsultingint.hol.es/main.php" target="_blank"">
                            <img src="/public/images/management-consulting-int.png" class="card-img-top" alt="...">

                            <div class="overlay">
                                <h5 class="text">Management Consulting Int</h5>
                            </div>
                            </a>
                        </div>

                        <div class="card-body">
                            <a href="https://github.com/JackDarkWeb/management.com" target="_blank" class="btn btn-dark mr-3">In PHP on git</a>
                            <a href="https://github.com/developerGroupWeb/Management-Consulting-Int" target="_blank" class="btn btn-dark mr-3">In Laravel on git</a>
                        </div>
                    </div>

                    <div class="card animated zoomIn">
                        <div class="imgcard">
                            <a href="http://babor.hol.es" target="_blank"">
                            <img src="/public/images/babor.png" class="card-img-top" alt="...">

                            <div class="overlay">
                                <h5 class="text">Babor Meeting</h5>
                            </div>
                            </a>
                        </div>

                        <div class="card-body">
                            <a href="https://github.com/JackDarkWeb/babor.com" target="_blank" class="btn btn-dark mr-3">In PHP on git</a>
                            <a href="https://github.com/developerGroupWeb/Management-Consulting-Int" target="_blank" class="btn btn-dark mr-3">In Laravel on git</a>
                        </div>
                    </div>

                    <div class="card animated zoomIn">
                        <div class="imgcard">
                            <a href="http://cedric-blog.hol.es" target="_blank"">
                            <img src="/public/images/cedric.png" class="card-img-top" alt="...">

                            <div class="overlay">
                                <h5 class="text">CEDRIC Blog</h5>
                            </div>
                            </a>
                        </div>

                        <div class="card-body">
                            <a href="https://github.com/JackDarkWeb/cedric.com" target="_blank" class="btn btn-dark mr-3">In PHP on git</a>
                            <a href="https://github.com/developerGroupWeb/Management-Consulting-Int" target="_blank" class="btn btn-dark mr-3">In Laravel on git</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

</div>

<!--<section class="" id="mathead">
    <div class="container">
        <div class="row vertical-center">
            <div class="col-12">
                <div class="row">
                    <div class="img-profil mx-auto"></div>
                </div>

                <div class="row my-4">
                    <h1 class="mx-auto text-center text-uppercase text-white animated fadeInUp ">Hello i'm Mathias, <span class="font-weight-bold">PHP Web Developer</span></h1>
                </div>

                <div class="row">
                    <div class="mx-auto text-center">
                        <a href="/about-me.php" class="btn btn-outline-light mr-2 px-5 py-2 font-weight-bold text-uppercase mt-3 animated  fadeInUp delay-2s">About me</a>
                        <a href="myprojects.php" class="btn btn-outline-warning mr-2 px-5 py-2 font-weight-bold text-uppercase mt-3 animated  fadeInUp delay-3s">My projects</a>
                        <a href="/contact.php" class="btn btn-outline-light px-5 py-2 font-weight-bold text-uppercase mt-3 animated  fadeInUp delay-4s">Contact me</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>-->

<? include 'layouts/footer.php'?>


