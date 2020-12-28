<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?

    $list = array();

    $data['name'] = "홍길동"; 
    $data['subject'] = "문의 드립니다. ";
    $data['memo'] = "동해물과 백두산이 마르고 닳도록 하는님이 보우하사";

    $list[] = $data;


    $data['name'] = "박문수"; 
    $data['subject'] = "이 제품 완전 좋아요 ";
    $data['memo'] = "동해물과 백두산이 마르고 닳도록 하는님이 보우하사";

    $list[] = $data;


    $data['name'] = "박문수1"; 
    $data['subject'] = "이 제품 완전 좋아요1 ";
    $data['memo'] = "동해물과 백두산이 마르고 닳도록 하는님이 보우하사1";

    $list[] = $data;

    $data['name'] = "홍길동"; 
    $data['subject'] = "문의 드립니다. ";
    $data['memo'] = "동해물과 백두산이 마르고 닳도록 하는님이 보우하사";

    $list[] = $data;


    $data['name'] = "박문수"; 
    $data['subject'] = "이 제품 완전 좋아요 ";
    $data['memo'] = "동해물과 백두산이 마르고 닳도록 하는님이 보우하사";

    $list[] = $data;


    $data['name'] = "박문수1"; 
    $data['subject'] = "이 제품 완전 좋아요1 ";
    $data['memo'] = "동해물과 백두산이 마르고 닳도록 하는님이 보우하사1";

    $list[] = $data;

?>

<table border="1" width="800" >
  <tr>
    <th> 이름 </th> 
    <th> 제목 </th> 
    <th> 내용 </th> 
  </tr>

<? 
    foreach($list as $d){ 
?>

  <tr>
    <td> <? echo $d['name']; ?>  </td> 
    <td> <?=$d['subject']?> </td> 
    <td> <?=$d['memo']?> </td> 
     
  </tr>     
<?
    }
?>
 
</table>   


</body>
</html>