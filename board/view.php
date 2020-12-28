<?
    include "lib.php";

    $idx = $_GET['idx']; 
    $idx = mysqli_real_escape_string($connect, $idx); 

    $query = "select * from sing_board where idx='$idx' ";
    $result = mysqli_query($connect, $query);
    $data = mysqli_fetch_array($result); 
     
?>


<form action="writePost.php" method="post"> 
    <table width=800 border="1" cellpadding=5 >
    <tr>
            <th> 이름 </th> 
            <td> <?=$data[name]?>  </td>
        </tr>
    <tr>
            <th> 제목 </th> 
            <td> <?=$data[subject]?>  </td>
        </tr>
        
    <tr>
            <th> 내용 </th> 
            <td> <?=nl2br($data[memo])?>
                 
            </td>
        </tr>

        <tr>
            <td colspan="2">
                <div style="float:right; "> 
                    <a href="confirmDel.php?idx=<?=$idx?>">삭제</a>
                    <a href="write.php?idx=<?=$idx?>">수정</a>
                </div>


                <a href="list.php">목록</a>



            </td>
        </tr>
    </table>
</form> 
 