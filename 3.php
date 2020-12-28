<?php

    // 90이상 "수";
    // 80이상 "우";
    // 70이상 "미";
    // 60이상 "양";
    // 60미만 "가";
    


    $a = $_GET['a']; 

    if($a>=90){
        echo "수"; 
    }elseif($a>=80){
        echo "우";     
    }elseif($a>=70){
        echo "미"; 
    }elseif($a>=60){
        echo "양"; 
    }else{
        echo "가"; 
    }

