<?php
    $user = $_POST['user'];
    $pass = $_POST['pass'];

    if ($user == 'sophia' && $pass == '123'){

            session_start();
            $_SESSION['user'] = 'sophia';
            header('location:boasvindas.php');
            die;
    }else {
        header('location:login.php?erro=1');
      die;
    }