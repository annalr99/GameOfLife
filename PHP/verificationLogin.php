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
        $queryVerification = $connectionDatabase->prepare("SELECT Nickname , Password FROM USUARIOS WHERE Nickname = :Nickname AND Password = :Password ");
        $queryVerification->bindParam( ':Nickname' ,$username);
        $queryVerification->bindParam( ':Password' ,$password);
        $queryVerification->execute();
        $rowsQueryVerification = $queryVerification->rowCount();
        if ($rowsQueryVerification == 1){
            $_SESSION['validation']='yes';
            header("location:gameoflife.html");
        }
        else{
            $_SESSION['validation']='no';
            header("location:login.html");  
        }
        
    }
}

 ?>