<?
    session_start(); 

    unset($_SESSION['isLoginId']);
    
    Header("Location: index.php"); 