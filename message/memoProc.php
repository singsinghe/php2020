<?
    session_start();
    include "dbClass.php";


    

    if(!isset($_SESSION['isLoginId'])){
        echo "로그인 후 이용해주세요.";
        exit; 
    }


    $data[] = $_SESSION['isLoginId'];
    $data[] = $_POST['memo'];
    $data[] = date("Y-m-d H:i:s"); 

    $query = "insert into uni_memo(user_id, memo, regdate) values(?,?,?) ";
    $db->query($query,$data); 

    Header("Location: index.php"); 
