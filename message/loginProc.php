<?
    session_start(); 

    include "dbClass.php";

    $user_id = $_POST['user_id'];
    $pwd = $_POST['pwd'];




    $q = ' select * from uni_member where user_id=? '; 
    $data = $db->query($q,$user_id)->fetchArray(); 

    if(!$data[idx]){
        echo "존재하지 않는 회원입니다.";
        exit; 
    }


    $q = 'select password(?) as pwd ';
    $tmp = $db->query($q, $pwd)->fetchArray(); 
 
    if($data['pwd']!=$tmp['pwd']){
        echo "로그인정보가 잘못되었습니다.";
        exit; 
    }


    $_SESSION['isLoginId'] = $user_id; 
    
    Header("Location: index.php"); 