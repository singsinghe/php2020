<?php

    include "lib.php";

    $lat = $_POST['lat'];
    $lng = $_POST['lng'];
    $title = $_POST['title'];

    $lat = mysqli_real_escape_string($connect, $lat); 
    $lng = mysqli_real_escape_string($connect, $lng); 
    $title = mysqli_real_escape_string($connect, $title); 

    if(trim(!$lat)){
        echo "자료를 입력하셔야 합니다.";
        exit; 
    }

    $query = "insert into map(lat, lng, title) values('$lat','$lng','$title') ";
    $result = mysqli_query($connect, $query); 
    
    Header("Location: index.php"); 