<?$title = 'Contact me'?>

    <?
    include 'core/Book.php';
    include 'core/Validator.php';


    $validate = new Validator();
    ?>


<? include 'layouts/template.php'?>

<header class="header header--bg">
    <div class="container">
      <nav class="navbar navbar-expand-lg navbar-dark sticky-top">
        <a class="navbar-brand" href="">Jack Web</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#myNavbar" aria-controls="myNavbar" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"><i class="fa fa-bars" class="text-white" aria-hidden="true"></i></span>
        </button>
        
        <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item"><a class="nav-link font-weight-bold" href="/home.php">HOME</a></li>
          </ul>
        </div>
      </nav>

      <div class="container">
        <div class="row vertical-center">
            <div class="col-12">
                <div class="row">
                    <h2 class="mx-auto text-uppercase font-weight-bold mb-5 text-white">Touch me</h2>
                </div>

                <div class='row'>
                    <div class='col-md-6 offset-md-3'>

                        <div class="result"></div>
                        <?= ($validate->message_flash('message')) ? $validate->message_flash('message') : ''?>

                        <div class='row px-4 px-md-0'>
                            <form method="post" class='col-12' action='tra' id="form-contact">
                                <div class="row">
                                    <div class="col">
                                        <input type="text" name="first_name" id="first-name" class="form-control" placeholder="Votre Prenom" value="<?= $validate->post('first_name')?>">
                                        <span class="text-danger error-first-name font-italic font-"><?= $validate->error("first_name")?></span>
                                    </div>
                                    <div class="col">
                                        <input type="text" name="last_name" id="last-name" class="form-control" placeholder="Votre Nom" value="<?= $validate->post('last_name')?>">
                                        <span class="text-danger error-last-name font-italic"><?= $validate->error("last_name")?></span>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label ></label>
                                    <input type="email" name="email" class="form-control" id="email" placeholder="name@example.com" value="<?= $validate->post('email')?>">
                                    <span class="text-danger error-email font-italic"><?= $validate->error("email")?></span>
                                </div>

                                <div class="form-group">
                                    <input type="text" name="subject" class="form-control" id="subject" placeholder="Quel est le sujet du message?" value="<?= $validate->post('subject')?>">
                                    <span class="text-danger error-subject font-italic"><?= $validate->error("subject")?></span>
                                </div>

                                <div class="form-group">
                                    <textarea name="message" class="form-control" placeholder='Votre Message' id="message" rows="3" style="<?= ($validate->error('message')) ? "border-color : red" : ''?>"></textarea>
                                </div>

                                <button type="submit"  name="submit" class='btn btn-dark text-uppercase px-4'>Envoyer</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

  </header>

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="/public/js/contact.js"></script>
<? include 'layouts/footer.php' ?>