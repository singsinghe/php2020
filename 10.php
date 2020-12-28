<?

    echo "동해물과 백두산이";

   

    $a = 123456; 

    $b = multi($a); 
    $c = number_format($b); 

    echo $c; 


    $z = loopPart(); 
    echo $z; 


    function multi($x){
       $y = $x * 100; 
       return $y; 

    }

    
    function loopPart(){    
        
        return "<div>무궁화 삼천리 화려강산 대한사람 대한으로</div>"; 

     
    }



 


