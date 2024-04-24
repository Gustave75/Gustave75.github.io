<?php
    if(!empty($_POST['firstname']) && !empty($_POST['surname']) $$ !empty($_POST['email']) $$ !empty($_POST['mobile']) $$ !empty($_POST['message'])){
        $firstname = htmlspecialchars($_POST['firstname']);
        $surname = htmlspecialchars($_POST['surname']);
        $email = htmlspecialchars($_POST['email']);
        $mobile = htmlspecialchars($_POST['mobile']);
        $message = htmlspecialchars($_POST['message']);

        if(filter_var($email, FILTER_VALIDATE_EMAIL)){

        }else{
            echo "Email non valide";
        }
    }else{
        header('Location:index.html');
        die();
    }