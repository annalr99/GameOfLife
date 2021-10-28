<?php

require('connectDatabase.php');

session_start();

if (!$connectionDatabase) {
    echo "No se ha podido conectar a la base de datos";
}
else {
    $name = $_GET['name'];
    $last_name = $_GET['last_name']; 
    $password = $_GET['password'];
    $username = $_GET['username'];
    $email = $_GET['email'];
    
    
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
        $insertQuery = $connectionDatabase->prepare("INSERT INTO USUARIOS  VALUES (:nickname, :password, :name, :last_name, :email)");
        $insertQuery->bindParam( ':nickname' , $username) ;
        $insertQuery->bindParam( ':password' , $password );
        $insertQuery->bindParam( ':name' , $name );
        $insertQuery->bindParam( ':last_name' , $last_name );
        $insertQuery->bindParam( ':email' , $email );
        $insertQuery->execute();
        //$_SESSION['register']='new';
        //header("location:register.php");
        echo "GOOD JOB";
        }
        
    
}




?>