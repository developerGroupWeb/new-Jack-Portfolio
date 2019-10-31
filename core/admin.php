<?php
include '../helpers/GetMessage.php';

if(isset($_POST['nbr'])){

    $id  = $_POST['nbr'];
    $get = new GetMessage('../data/messages.json');
    $answer = $get::find($id);

    echo json_encode($answer);
}
