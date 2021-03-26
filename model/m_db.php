<?php



    function dbConnect() : PDO{
        /* Connecting to database MySQL with driver */

        $dbHost = 'localhost';
        $dbName = 'test_encomage_db';
        $dbUser = 'root';
        $dbPass = 'root';
        $dbTable = 'users';
        $charset = 'utf8';

        $dsn = 'mysql:dbname='.$dbName.';host='.$dbHost.';charset='.$charset;
        $user = $dbUser;
        $password = $dbPass;

        $dbh = new PDO($dsn, $user, $password);
        return $dbh;
    }

    function dbQuery($sql, $params = []) : PDOStatement{
        $dbh = dbConnect();
        $query = $dbh->prepare($sql);

        $query->execute($params);
        dbCheckError($query);
        return $query;
    }

    function dbCheckError(PDOStatement $query) : bool{
        $errInfo = $query->errorInfo();

        if ($errInfo[0] !== PDO::ERR_NONE){
            echo $errInfo[2];
            exit();
        }

        return true;
    }