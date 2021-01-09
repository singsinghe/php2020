<?
    session_start(); 
    include "dbClass.php"; 

    
    $data = array($_POST['tid'],$_POST['memo']); 
    $data[] = date("Y-m-d H:i:s");
    $data[] = $_SESSION['isLoginId']; 



     

     $query = "insert into uni_message(tid,message,regdate,fid) values(?,?,?,?)";
     $insert  = $db->query($query,$data); 
     $cnt = $insert->affectedRows();

     if($cnt!=1){
         echo $cnt;
         exit; 
     }

     Header("Location: index.php"); 



