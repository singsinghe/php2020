<?

    $user_id = $_POST['user_id'];
    $pwd = $_POST['pwd'];

    if($user_id=="admin" && $pwd="1112"){
        setcookie("isAdmin","Ok"); 
    }else{

        echo "관리자만 접근 가능합니다.";
        exit; 
    }
?>
<script>
    location.href='memberList.php';
</script>