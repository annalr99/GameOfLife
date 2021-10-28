<?php

require('connectDatabase.php');

session_start();

if (!$connectionDatabase) {
    echo "No se ha podido conectar a la base de datos";
}
else {

    $username = $_GET['username'];
    $password = $_GET['password'];
    $name = ['name'];
    $last_name = ['last_name']; 
    
    
    $queryVerification = $connectionDatabase->prepare("SELECT Nickname FROM USUARIOS WHERE Nickname = :Nickname ");
    $queryVerification->bindParam( ':Nickname' ,$username);
    $queryVerification->execute();
    $rowsQueryVerification = $queryVerification->rowCount();
    if ($rowsQueryVerification == 1){
        //$_SESSION['register']='yes';
        //header("location:register.php");
        echo "NO REGISTRE";
        }
    else{
        $instertQuery = $connectionDatabase->prepare("INSERT INTO USUARIOS VALUES (:last_name, :nickname, :name, :password)");
        $instertQuery->bindParam(':last_name', $last_name);
        $instertQuery->bindParam(':name', $name);
        $instertQuery->bindParam(':nickname', $username);
        $instertQuery->bindParam(':password', $password);
        $instertQuery->execute();
        //$_SESSION['register']='new';
        //header("location:register.php");
        echo "GOOD JOB";
        }
        
    
}




?>