<?
    include "db.php"; 
    $gugun = $_GET['gugun']; 

?>

<select name="dong"  >
                <option value="">동을 선택하세요. </option> 
                <?
                    $db -> where ("gugun",$gugun); 
                    $db -> groupBy("dong");
                    $list = $db->get("dong"); 

                    foreach($list as $data){
                    ?>
                    <option value="<?=$data['dong']?>"><?=$data['dong']?></option> 
                    <? 
                    
                    }
                ?>
            </select> 


 