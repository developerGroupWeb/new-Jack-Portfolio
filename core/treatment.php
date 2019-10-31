<?php
include '../core/Book.php';
include '../core/Validator.php';


$validate = new Validator();


if($_POST['ajax'] === 'true' || isset($_POST['submit'])){

    $messages = [];

    $messages['id'] = date('dmYHis');
    $messages['first']   = $validate->text('first_name');
    $messages['last']    = $validate->text('last_name');
    $messages['email']   = $validate->email('email');
    $messages['subject'] = $validate->text('subject');
    $messages['message'] = $validate->text('message');
    $messages['date'] = date('d-m-Y H:i:s');



    if($validate->success() == true){

        //Data base name
        $base = '../data/messages.json';

        // I retrieve all messages json
        $data = file_get_contents($base);

        //I convert the Json into a table so I can add a new mew message
        $data = json_decode($data, true);
        $data[] = $messages;

        //Convert back to Json
        $data = json_encode($data);
        file_put_contents($base, $data);

        $validate->flash['message'] = "<div class='alert alert-success text-center'>Your message has been sent</div>";
    }else{
        $validate->flash['message'] = "<div class='alert alert-danger text-center'>All fields are required</div>";
    }


    if($_POST['ajax'] === 'true')
    echo json_encode($validate->flash);
}