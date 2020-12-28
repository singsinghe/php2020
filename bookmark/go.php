<?

    
    include "lib.php";

    $idx = $_GET['idx'];
    $idx = mysqli_real_escape_string($connect, $idx); 

    $query = "select * from  bookmark where idx='$idx' ";
    $result = mysqli_query($connect, $query); 
    $data = mysqli_fetch_array($result); 



    $tmp = $_COOKIE["url_".$idx]; 
    if(!$tmp){
        $query = "update bookmark set cnt=cnt+1 where idx='$idx' ";
        $result = mysqli_query($connect, $query);      
    }
    

    setcookie("url_".$idx,time(),time()+86400); 


    Header("Location: {$data['url']}"); 