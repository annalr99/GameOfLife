<?php

require('connectDatabase.php');

session_start();

if (!$connectionDatabase) {
    echo "No se ha podido conectar a la base de datos";
}
else {

    $username = $_GET['username'];
    $password = $_GET['password'];
    
    if (!$username && !$password){
        header("location:login.html");
    }
    else{
        $queryVerification = $connectionDatabase->prepare("SELECT Nickname , Password FROM USUARIOS WHERE Nickname = :Nickname");
        $queryVerification->bindParam( ':Nickname' ,$username);
        //$queryVerification->bindParam( ':Password' ,password_verify($password, PASSWORD_DEFAULT));
        $queryVerification->execute();
        $rowsQueryVerification = $queryVerification->rowCount();
        $resultQuery = $queryVerification->fetch(PDO::FETCH_BOTH);
        
        echo "<br>";
        print_r($resultQuery);
        echo "<br>";
        print_r($resultQuery[1]);
        echo "<br>";
        if (password_verify($resultQuery[1], PASSWORD_DEFAULT)){
            /*$_SESSION['validation']='yes';
            header("location:gameoflife.html");*/
            echo "GOOD JOB";
        }
        else{
            /*$_SESSION['validation']='no';
            header("location:login.html");  */
            echo "FUCK";
        }
        
    }
}

 ?>