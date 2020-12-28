<?

    // $fp = fopen("8.txt","a");

    // fwrite($fp,"동해물과 백두산이 마르고 닳도록\r\n");

    // fclose($fp); 

    $fp = fopen("8.txt","r"); 

    $a = fread($fp,1000);

    echo $a; 

    fclose($fp); 
    

