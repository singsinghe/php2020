<?
    include "lib.php";
 
    
    $name = $_POST['name'];
    $idx = $_POST['idx'];
    $subject = $_POST['subject'];
    $memo = $_POST['memo'];
    $pwd = $_POST['pwd'];

    $idx = mysqli_real_escape_string($connect, $idx); 
    $name = mysqli_real_escape_string($connect, $name); 
    $subject = mysqli_real_escape_string($connect, $subject); 
    $memo = mysqli_real_escape_string($connect, $memo); 
    $pwd = mysqli_real_escape_string($connect, $pwd); 

 
    

    if($idx){  // 수정 



        $query = "select * from sing_board where idx='$idx' and pwd=password('$pwd') ";
        $result = mysqli_query($connect, $query);
        $data = mysqli_fetch_array($result); 

        if(!$data[idx]){
            echo "
            <script>
            alert('비밀번호가 달라 수정이 불가능합니다.');
            history.back(1); 
            </script>            
            ";
            exit; 
        }
        

        $query = "update sing_board set name='$name',
        subject='$subject',
        memo='$memo'
        where idx='$idx' "; 
        
        mysqli_query($connect, $query); 




    }else{ 


        $regdate = date("Y-m-d H:i:s"); 
        $ip = $_SERVER[REMOTE_ADDR]; 

        $query = "insert into sing_board(name, subject, memo, regdate, ip, pwd)
            values('$name','$subject','$memo','$regdate','$ip',password('$pwd')  ) ";


        mysqli_query($connect, $query); 

    }

?>
<script>
    location.href='list.php';
</script>