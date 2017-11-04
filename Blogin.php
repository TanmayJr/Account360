<?php

include 'core/init.php';

/*if (user_exists('test@nomail.com') === true){
    echo "Exisits";
}else{
    echo "no";
}*/

if (empty($_POST) === false) {
    $email = $_POST['email'];
    $password = $_POST['key'];

    if (empty($email) === true || empty($password) === true){
        $errors[] = 'You need to enter a email or password';
    }else if(user_exists($email) === false){
        $errors[] = 'Cant find account';
    }else{
        $login = login($email, $password);
        if ($login === false){
            $errors[]='Login Failed';
        }else{
            //redirect to homepage
            $_SESSION['user_id'] = $login;
            $_SESSION['email'] = $email;
            echo "Open";
            header("Location:Fdash.php");
            //  exit();
        }
    }
    $_SESSION['email'] = $_SESSION['email'];

    print_r($errors);
}

?>
