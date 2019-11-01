<?$title = 'Home'?>
<? include 'helpers/Helpers.php' ?>
<? Helpers::counter();?>

<? include 'layouts/template.php'?>

<div>
  <header class="header">
    <div class="container">
      <nav class="navbar navbar-expand-lg navbar-dark">
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
  </header>

  <section class="header-hero containers header--bg">
    <div class="header__content text-center">
        <span class="header__content__block wow fadeInDown" data-wow-delay="0.2s">HELLO</span>
        <h1 class="header__content__title wow fadeInDown" data-wow-delay="0.5s">I'm Mathias, <span class="font-weight-bold">PHP Web Developer</h1>
        <ul class="header__content__sub-title">
          <li class="font-weight-bold wow fadeInDown" data-wow-delay="1s">MVC Friendly <span class="padding">&#45;</span></li>
          <li class="font-weight-bold wow fadeInDown" data-wow-delay="1.4s">LARAVEL <span class="padding">&#45;</span></li>
          <li class="font-weight-bold wow fadeInDown" data-wow-delay="1.8s">SYMPHONY</li>
        </ul>
        <a class="header__button wow fadeInUp" data-wow-delay="2s" href="#myprojects">Discover my projects</a>
      </div>
    </div>
  </section>
  

  <section class="about" id="aboutMe">
    <div class="container">
      <div class="page-section">
        <h2 class="page-section__title">ABOUT ME</h2>
          <img class="page-section__title-style" src="public/images/title-style.png" alt="">
          <div class="row">
            <div class="col-md-4">
              <div class="about__image row wow fadeInLeft" data-wow-delay="0.8s">
                <div class="mx-auto">
                  <img src="public/images/avatar-3637561_960_720.png" class="img-fluid" alt="avatar">
                </div>
              </div>
            </div>
            <div class="col-md-8 about__content">
              <p class="about__description text-center wow fadeInDown" data-wow-delay="0.5s">5 years of experience with passion for the code, I like what I do. I have a strong foundation in php, laravel experiences, and a global knowledge of symphony framework.
                        Mastery of development in POO in a MVC architecture.
                        Html, CSS, Bootstrap, Jquery and Javascript, i'm here</p>
              <div class="row row--margin-top">
                <div class="col-md-6">
                  <p class="about__bio text-center wow fadeInDown" data-wow-delay="0.8s"><strong>NAME :</strong> Mathias</p>
                  <p class="about__bio text-center wow fadeInDown" data-wow-delay="1s"><strong>AGE :</strong> 30</p>
                </div>
                <div class="col-md-6">
                  <p class="about__bio text-center wow fadeInDown" data-wow-delay="0.8s"><strong>JOB TITLE :</strong> Back-end Developer</p>
                  <p class="about__bio text-center wow fadeInDown" data-wow-delay="1s"><strong>LOCATION :</strong> Dnipro, UKRAINE</p>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="row">
                    <a class="button button--colorful mx-auto mb-4 wow fadeInUp" data-wow-delay="2s" href="#">DOWNLOAD CV</a>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="row">
                    <a class="button button--colorful mx-auto mb-4 wow fadeInUp" data-wow-delay="2s" href="/contact.php">Touch ME</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
      </div>
    </div>
  </section>

  <section class="portfolio" id="myprojects">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="row mb-5">
                    <h2 class="mx-auto text-uppercase font-weight-bold mb-5 text-white">My projects</h2>
                </div>

                <div class="card-deck my-4">

                    <div class="card mb-5 wow fadeInDown" data-wow-delay="0s">
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

                    <div class="w-100 d-block d-lg-none"></div>

                    <div class="card mb-5 wow fadeInDown" data-wow-delay="0.5s">
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

                    <div class="w-100 d-block d-xl-none"></div>

                    <div class="card mb-5 wow fadeInDown" data-wow-delay="1s">
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
                    <h1 class="mx-auto text-center text-uppercase text-white wow fadeInUp ">Hello i'm Mathias, <span class="font-weight-bold">PHP Web Developer</span></h1>
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


