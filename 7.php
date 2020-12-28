<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?

   $list = file("7.txt"); 
  

?>


<table border="1" width="800" >
  <tr>
    <th> 이름 </th> 
    <th> 제목 </th> 
    <th> 내용 </th> 
  </tr>

<? 
    foreach($list as $d){ 
       $str = explode(",",$d); 
    
?>
    <tr>
        <td> <?=$str[0]?> </td> 
        <td> <?=$str[1]?> </td> 
        <td> <?=$str[2]?> </td> 
    </tr>

<? } ?> 

</table>


</body>
</html>