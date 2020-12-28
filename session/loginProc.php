<?
    include "lib.php"; 

    $uid = $_POST['uid'];
    $pwd = $_POST['pwd'];


    $uid = mysqli_real_escape_string($connect,$uid); 
    $pwd = mysqli_real_escape_string($connect,$pwd); 


    $query = "select * from members where uid='$uid' and pwd=password('$pwd') ";
    $result = mysqli_query($connect, $query);
    $data = mysqli_fetch_array($result);
 
    if($data){
        $_SESSION['isLogin'] = time(); 
?>
    <script>
        location.href='list.php';
    </script>
<? 
    }else{

        echo "로그인정보가 올바르지 않습니다.";
    }


