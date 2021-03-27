<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/style.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Main Page</title>
</head>
<body>

<div class="container">
    <a id="addUserButton" class="btn btn-info" href="add.php" role="button">Add user</a>
    <table class="table table-bordered table-hover">
        <thead class="thead-dark">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">First Name</th>
            <th scope="col">Last Name</th>
            <th scope="col">Email</th>
            <th scope="col">Create Date</th>
            <th scope="col">Update Date</th>
            <th scope="col">Edited link</th>
        </tr>
        </thead>
        <tbody>
            <tr class="table-secondary">
                <form>
                    <td class="align-middle"><input type="text" style="width: 50px;" id="idSearchForm" name="idSearchForm"></td>
                    <td class="align-middle"><input type="text" id="fNameSearchForm" name="fNameSearchForm"></td>
                    <td class="align-middle"><input type="text" id="lNameSearchForm" name="lNameSearchForm"></td>
                    <td class="align-middle"><input type="email" id="emailSearchForm" aria-describedby="emailHelp" name="emailSearchForm"></td>
                    <td>
                        <label for="crDateFrom">From:</label>
                        <input type="date" id="crDateFrom" name="crDateFrom">
                        <label for="crDateTo">To:</label>
                        <input type="date" id="crDateTo" name="crDateTo">
                    </td>
                    <td>
                        <label for="edDateFrom">From:</label>
                        <input type="date" id="edDateFrom" name="edDateFrom">
                        <label for="edDateTo">To:</label>
                        <input type="date" id="edDateTo" name="edDateTo">
                    </td>
                    <td class="align-middle">
                        <div class="container">
                            <div class="row">
                                <button id="serchButton" type="submit" class="btn btn-primary btn-sm">Search</button>
                                <a id="resetButton" class="btn btn-primary btn-sm" href="index.php" role="button">Reset</a>
                            </div>
                        </div>
                    </td>
                </form>
            </tr>
        <? foreach ($users as $user): ?>
            <tr>
                <th scope="row"><?=$user['id']?></th>
                <td><?=$user['first_name']?></td>
                <td><?=$user['last_name']?></td>
                <td><?=$user['email']?></td>
                <td><?=$user['create_date']?></td>
                <td><?=$user['update_date']?></td>
                <td><a class="btn btn-info" href="edit.php?id=<?=$user['id']?>" role="button">Edit</a></td>
            </tr>
        <? endforeach; ?>
        </tbody>
    </table>
</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="js/bootstrap.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</body>
</html>
