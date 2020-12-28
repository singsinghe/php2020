<?
    include "lib.php"; 
?><!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border=1>
        <tr>
            <th> idx </th> 
            <th> 북마크 </th> 
            <th> 등록일 </th> 
            <th> 방문숫자 </th> 
            <th> 삭제 </th> 
        </tr>
    <?
        $query = "select * from bookmark  order by regdate  desc ";
        $result = mysqli_query($connect, $query); 
        while($data = mysqli_fetch_array($result)){
    ?>
        <tr>
            <td> <?=$data['idx']?> 
            <td> <a href="go.php?idx=<?=$data['idx']?>" target="_blank" > 
                    <?=$data['url']?>
                </a>
            <td> <?=$data['regdate']?> 
            <td> <?=$data['cnt']?> 
            <td> <a href="del.php?idx=<?=$data['idx']?>" onclick="return confirm('정말 삭제할까요?');">삭제</a>


    <? } ?> 

    </table>
    <a href="add.php"> 북마크 추가</a> 
</body>
</html>