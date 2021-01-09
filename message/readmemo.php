<?php

    include "dbClass.php"; 


    $idx = $_GET['idx'];
    

    $query = "update uni_message set readdate=now() where idx=?"; 
    $db->query($query,$idx); 

    echo "쪽지를 읽으셨습니다.";