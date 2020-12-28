<?
    include "db.php"; 
?><!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="//code.jquery.com/jquery-latest.min.js"></script> 

    <script>
         function getGugun(a){
           $.get("getGugun.php?sido="+a,function(data){
                $("#areaGugun").html(data); 
                $("#areaDong").html(""); 
                $("#addr").val("");  

           }); 
         }

         function getDong(a){
           $.get("getDong.php?gugun="+a,function(data){
                $("#areaDong").html(data); 
                $("#addr").val("");  
           }); 

         }
    </script>
</head>
<body>

    <table border=1 width=600>
        <tr>
            <td> 시도 </td>
            <td> 구군 </td>
            <td> 동 </td>
            <td> 상세주소입력</td>
        </tr>
        <tr>
            <td>    
            <select name="sido" id="sido" onchange="getGugun(this.value);" >
                <option value="">시도를 선택하세요. </option> 
                <?
                    $db -> groupBy("sido");
                    $list = $db->get("dong"); 

                    foreach($list as $data){
                    ?>
                    <option value="<?=$data['sido']?>"><?=$data['sido']?></option> 
                    <? 
                    
                    }
                ?>
            </select> 

            </td>
            <td><div id="areaGugun"></div></td>
            <td><div id="areaDong"></div></td>
            <td><input type="text" name="addr" id="addr"></td>




        </tr>

    </table>
    
</body>
</html>