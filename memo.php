<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>메모장</title>
</head>
<body>
    <form action="memoSave.php" > 
    <div style="text-align:center; ">
        <table border="1" align="center" >
          <tr>
            <td> 이름 </td>
            <td style="text-align:left;" > <input type="text" name="name" > </td>
          </tr>
          <tr>
            <td> 이메일 </td>
            <td  style="text-align:left;" > <input type="text" name="email" > </td>
          </tr>
          <tr>
            <td> 내용 </td>
            <td> <input type="text" name="memo"  style="width:400px;" > </td>
          </tr>
        </table>
            <input type="submit" value="저장" style="margin-top:10px; "> 
    </div>
    </form> 

<table border=1>
    <tr>
        <th> No  </th>
        <th> 이름 </th>
        <th> 이메일 </th>
        <th> 내용 </th> 
        <th> 저장일시 </th> 
    </tr>
<?
    $list = file("memo.txt"); 

    $a = array_reverse($list); 
 
    $i = 1; 
    foreach($a as $d){
        if($i>5) break; 
        $data = explode("///",$d); 
?>
    <tr>
      <td> <?=$i?></td>
      <td> <?=$data[0]?> </td>
      <td> <?=$data[1]?> </td>
      <td> <?=$data[2]?> </td>
      <td> <?=$data[3]?> </td>
    </tr> 
   <?
    $i++; 
        } 
?> 

</table>

copyright 
</body>
</html>