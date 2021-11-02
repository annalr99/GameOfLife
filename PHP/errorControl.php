<?php
session_start();

if (!isset($_SESSION['error'])){
    header("location:../gameoflife.html");
} 

$errorCode = $_SESSION['error'];

switch ($errorCode) {
    case 1:
        echo "error no login";
        $_SESSION['error']=0;
        break;
    case 2:
        echo "error ya registrado";
        $_SESSION['error']=0;
        break;
    case 3:
        echo "i es igual a 2";
        break;
}

?>