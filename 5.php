<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?
 
   $a[] = 1;
   $a[] = 2;
   $a[] = 3;
   $a[] = 4;
 
   $a[] = 1;
   $a[] = 2;
   $a[] = 3;
   $a[] = 4;
 
   $a[] = 1;
   $a[] = 2;
   $a[] = 3;
   $a[] = 4;
  
   
   foreach($a as $key=>$b){      
       echo $key;
       echo ":"; 
       echo $b; 
       echo "<br>"; 
   }


?>
</body>
</html>