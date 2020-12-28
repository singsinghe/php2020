<?

    error_reporting(1);
    ini_set("display_errors", 1);


    $connect = mysqli_connect("localhost","korea","fighting","korea"); 

    if(mysqli_connect_error()){
        echo "mysql 접속중 오류가 발생했습니다. ";
        echo mysqli_connect_error(); 
    }
    
    $query = " select * from memo "; 

    $result = mysqli_query($connect,$query); 
?>
 <table border=1> 

<? 
    while($a = mysqli_fetch_array($result)){ 
      echo "<tr>"; 
      echo "<td> "; 
        echo $a[a]; 
        echo "</td>"; 
        echo "<td> ";         
        echo $a[b]; 
        echo "</td>"; 
        echo "<td> ";         
        echo $a[c]; 
        echo "</td>"; 
        echo "<td> ";         
        echo $a[d]; 
     echo "</td>"; 
     echo "</tr>"; 
    }
 
?>


</table> 