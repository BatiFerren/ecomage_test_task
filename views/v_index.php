<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/style.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="css/datetable.css">
    <title>Main Page</title>
</head>
<body>

<div class="container">
    <a id="addUserButton" class="btn btn-info" href="add.php" role="button">Add user</a>
    <table class="table table-bordered table-hover" id="myTable">
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
<script src="js/jquery.js"></script>
<script src="js/datetable.js"></script>
<script>
    $(document).ready( function () {
        $('#myTable').DataTable({
            searching: false
        });
    } );
</script>
</body>
</html>
