<?

    include "21Lib.php";


    $query = "insert into memo(name,memo,regdate) 
             values('서기','안녕하세요','2020-11-10 20:55:00') ";

    mysqli_query($connect, $query); 