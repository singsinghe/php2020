<?
    session_start(); 
    include "dbClass.php";

?><!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>    
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script> 

<style>
        .text-right{text-align:right; }
    </style>
</head>
<body>

<div class="text-right">
    <? if(isset($_SESSION['isLoginId'])){ ?> 
        <a href="#"  data-bs-toggle="modal" data-bs-target="#memoModal">쪽지함</a>
        <a href="#"  data-bs-toggle="modal" data-bs-target="#sendMemo">쪽지발송</a>


        <a href="logOut.php">로그아웃 </a>
        
    <? }else{ ?>
        <a href="join.php">회원가입</a>
        <a href="login.php">로그인</a>
    
    <? } ?> 
</div>    





<? if(isset($_SESSION['isLoginId'])){ ?>
    
    
    <div class="p-3"> 
<form action="memoProc.php" method="post">


<div class="input-group">
  <span class="input-group-text">메모 </span>
  <textarea class="form-control" aria-label="With textarea" name="memo"></textarea>
  <button type="submit" class="btn btn-primary">저장</button> 
  
</div>

</form>
</div> 

<div class="p-3"> 
<table class="table table-striped table-hover" >
    <thead>
        <tr>
            <th> 아이디
            <th> 메모 
            <th> 등록일 
    </thead> 
        <?
            $query = "select * from uni_memo where user_id=? order by idx desc ";
            $list = $db->query($query, $_SESSION['isLoginId'])->fetchAll(); 
            foreach($list as $data){ 
        ?>
        <tr>
            <td> <?=$data['user_id']?>
            <td> <?=nl2br($data['memo'])?>
            <td> <?=$data['regdate']?> 
        <? } ?>

</table>
            </div> 

<? } ?> 











<!-- Modal -->
<div class="modal fade" id="sendMemo" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">쪽지발송</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
    <form action="memoSend.php" method="post"> 
      <table class="table table-striped table-hover" >
          <thead>
                <tr>
                    <th> 받는사람 
                    <th> 내용 
            </thead>
            <tr>
                    <td> 

                        <select name="tid">
                        <option value=""> 받는사람선택 

        <?php
            $query = "select * from uni_member";
            $list = $db->query($query)->fetchAll(); 
            foreach($list as $data){ 
        ?>                
                        <option value="<?=$data['user_id']?>"> <?=$data['name']?>
        <? } ?> 

            </select>


                    <td><textarea name="memo"></textarea>

                    
          
            </table>
            <button type="submit" class="btn btn-primary">저장</button> 
      </div>
            </form> 
    </div>
  </div>
</div>





<!-- Modal -->
<div class="modal fade" id="memoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">쪽지함</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <table class="table table-striped table-hover" >
          <thead>
                <tr>
                    <th> 발송자
                    <th> 발송시간 
                    <th> 내용 
        </thead>
        <?php
            $query = "select * from uni_message where tid=? order by idx desc ";
            $list = $db->query($query, $_SESSION['isLoginId'])->fetchAll(); 
            foreach($list as $data){ 
        ?>  
                <tr>
                        <td> <?=$data['fid']?> </td>
                        <td><?=$data['regdate']?> </td>                        
                        <td>
                            <div style="height:25px; overflow:hidden;  "  id="article_<?=$data['idx']?>" onclick="readData(<?=$data['idx']?>)">
                               <?=nl2br($data['message'])?> 
                            </div>
                        </td>
                        
            </tr>


        <? } ?> 

            </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<script>
    function readData(idx){
       $('#article_'+idx).height('auto'); 
       $.get("readmemo.php?idx="+idx,function(data){
            alert(data);
       });
     
    }
</script>


</body>
</html>

