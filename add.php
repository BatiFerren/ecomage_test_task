<?php

$isFormSend = false;
$err = '';

    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        $firstName = trim($_POST['firstName']);
        $lastName = trim($_POST['lastName']);
        $email = trim($_POST['email']);

        if($firstName === '' || $lastName === '' || $email === ''){
            $err = 'Type all data!';
        }
        elseif (mb_strlen($firstName, 'UTF8') < 3 || mb_strlen($lastName, 'UTF8') < 3){
            $err = 'First Name and Last Name must contains more than 2 characters';
        }
        else{
            $firstName = htmlspecialchars($firstName);
            $lastName = htmlspecialchars($lastName);
            $createDt = date("Y-m-d H:i:s");
            $isFormSend = true;
            include_once 'model/users.php';
            $params = [
                'fName' => $firstName,
                'lName' => $lastName,
                'email' => $email,
                'crDate' => $createDt

            ];
            usersAdd($params);

            header('Location: index.php');
            exit();
        }

    }
    else{
        $firstName = '';
        $lastName = '';
        $email = '';
        $createDt = '';
    }

include 'views/v_add.php';
?>


