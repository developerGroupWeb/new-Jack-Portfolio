<?php
session_start();
if(isset($_SESSION['code'])){


include 'helpers/Helpers.php';
include 'helpers/GetMessage.php';
include 'core/Book.php';
include 'core/Validator.php';

$validate = new Validator();

$get = new GetMessage('data/messages.json');
$messages = $get::findAll();

//$answer = GetMessage::find('26102019112607');
?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Admin</title>
</head>
<body>


<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Admin</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
                <button type="button" class="btn btn-primary">
                    Visitors <span class="badge badge-light"><?=Helpers::get_visitor()?></span>
                </button>
            </li>

            <li class="nav-item ml-3">
                <button type="button" class="btn btn-warning">
                    Messages <span class="badge badge-light"><?=GetMessage::count()?></span>
                </button>
            </li>
        </ul>
    </div>
</nav>

<div class="container" style='margin-bottom: 150px;'>

    <?foreach ($messages as $message):?>
    <div class=" mt-5 row">

        <div class='col-lg-6 offset-lg-3 '>
            <div class='bg-light p-sm-5 p-4'>
                <img src="/public/images/profile.jpg" style="width:30px; height: 30px; border-radius: 50%">
                <strong><?=$message['first'].' '.$message['last'].' '.'('.$message['email'].')'?></strong>
                <span class="text-info row" style="font-size: 20px"><?=$message['subject']?></span>
                <span class='row'><?=$message['message']?></span><br/>
                <i class="text-primary row"><?=$message['date']?></i>
                <span class="row btn btn-success" style="font-size: medium; cursor: pointer" id="answer" value="<?=$message['id']?>">Repondre</span>
            </div>

        </div>
    
        <!-- Form answer message -->
        <div class='col-lg-6 offset-lg-3 d-none mt-4 form-<?=$message['id']?>'>

            <div class="result"></div>

            <?= ($validate->message_flash('message')) ? $validate->message_flash('message') : ''?>
            <div class='row '>
                <form method="post" class='col-12' action='' id="form-contact">
                    <div class="row">
                        <div class="col">
                            <input type="text" name="first_name" id="first-name" class="form-control first-name-<?=$message['id']?>" placeholder="Votre Prenom" value="">
                            <span class="text-danger error-first-name font-italic font-"><?= $validate->error("first_name")?></span>
                        </div>
                        <div class="col">
                            <input type="text" name="last_name" id="last-name" class="form-control last-name-<?=$message['id']?>" placeholder="Votre Nom" value="">
                            <span class="text-danger error-last-name font-italic"><?= $validate->error("last_name")?></span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label ></label>
                        <input type="email" name="email" class="form-control email-<?=$message['id']?>" id="email" placeholder="name@example.com" value="">
                        <span class="text-danger error-email font-italic"><?= $validate->error("email")?></span>
                    </div>

                    <div class="form-group">
                        <input type="text" name="subject" class="form-control subject-<?=$message['id']?>" id="subject" placeholder="Quel est le sujet du message?" value="">
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
    <?endforeach;?>

</div>


<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
    $(function () {
        $(document).on('click', '#answer', function (e) {
            let nbr = $(this).attr('value');
            $('.form-'+nbr).removeClass('d-none');

            $.ajax({
                url:'../core/admin.php',
                method:'POST',
                dataType:'json',
                async: true,
                cache:false,
                data:{nbr:nbr},
                success:function (response) {

                    if(response){

                        $('.first-name-'+nbr).val(response.first);
                        $('.last-name-'+nbr).val(response.last);
                        $('.email-'+nbr).val(response.email);
                        $('.subject-'+nbr).val(response.subject);
                    }
                }
            });
        })
    });
</script>



<section id='footer' class='py-5' style='margin-top: 100px; background: #070719;'>
    <footer class='container text-white'>
        <div class='row'>
            <div class='col-md-6 text-center text-md-left'>
                <p class=''>Copyright © <?=date('Y')?> - JackWebDeveloper.   Tous droits réservés</p>
            </div>

        </div>
    </footer>
</section>
</body>
</html>
<?
}else{
    header('Location:pop.php');
}
?>