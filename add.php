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
            $err = 'First Name and Last Name must must contains more than 2 characters';
        }
        else{
            $createDt = date("Y-m-d H:i:s");
            $isFormSend = true;
        }

    }
    else{
        $firstName = '';
        $lastName = '';
        $email = '';
        $createDt = '';
    }

   if ($firstName || $lastName || $email || $createDt){

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

include 'views/v_add.php';
?>


