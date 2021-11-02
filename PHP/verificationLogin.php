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

        
        if (password_verify($password, $resultQuery[1]) && $rowsQueryVerification==1){
            $_SESSION['validation']='yes';
            header("location:../gameoflife.html");
        }
        else{
            $_SESSION['validation']='no';
            $_SESSION['error']=1;
            header("location:errorControl.php");
            //header("location:../login.php");  

        } 
        
    }
}



 ?>
