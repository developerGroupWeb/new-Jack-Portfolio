<?php
$login = 'sudoroot';

if(isset($_POST['code'])){

    $code = htmlspecialchars($_POST['code'], ENT_QUOTES, 'UTF-8', false);
    $err = [];
    if($code === $login){

        $err['success'] = 'true';

        session_start();
        $_SESSION['code'] = $code;
        //header('Location:admin.php');
    }else{
        $err['error'] = "Access denied";
    }
    echo json_encode($err);
}
