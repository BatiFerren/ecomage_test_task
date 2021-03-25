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
            $createDt = date("Y-d-m H:i:s");
            $isFormSend = true;
        }

    }
    else{
        $firstName = '';
        $lastName = '';
        $email = '';
        $createDt = '';
    }


    include_once 'config.php';


   if ($firstName || $lastName || $email || $createDt){
       /* Connecting to database MySQL with driver */
       $dsn = 'mysql:dbname='.$dbName.';host='.$dbHost.';charset='.$charset;
       $user = $dbUser;
       $password = $dbPass;

       $dbh = new PDO($dsn, $user, $password);

       $sql = "INSERT usrs (first_name, last_name, email, create_date) VALUES (:fName, :lName, :email, :crDate)";
       $query = $dbh->prepare($sql);

       $params = [
           'fName' => $firstName,
           'lName' => $lastName,
           'email' => $email,
           'crDate' => $createDt

       ];

       $query->execute($params);
       $errInfo = $query->errorInfo();

       if ($errInfo[0] !== PDO::ERR_NONE){
           echo $errInfo[2];
           exit();
       }
   }


?>

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>

<div class="container">
    <? if($isFormSend): ?>
        <div class="alert alert-success" role="alert">
            <p>Your data is sended!</p>
        </div>
    <? else: ?>
        <form method="post">
            <div class="form-group">
                <label for="firstName1">First Name</label>
                <input class="form-control" id="firstName1" type="text" placeholder="" name="firstName" value="<?=$firstName?>">
            </div>
            <div class="form-group">
                <label for="lastName1">Last Name</label>
                <input class="form-control" id="lastName1" type="text" placeholder="" name="lastName" value="<?=$lastName?>">
            </div>
            <div class="form-group">
                <label for="inputEmail1">Email address</label>
                <input type="email" class="form-control" id="inputEmail1" aria-describedby="emailHelp" name="email" value="<?=$email?>">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        <? if ($err): ?>
            <div class="alert alert-danger" role="alert">
                <p><?=$err?></p>
            </div>
        <? endif; ?>
    <? endif; ?>
</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="js/bootstrap.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</body>
</html>
