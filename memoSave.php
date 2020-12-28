<?

    $fp = fopen("memo.txt","a"); 


    $now = date("Y-m-d H:i:s");
    
    $content = $_REQUEST['name']."///".$_REQUEST['email']."///".$_REQUEST['memo']."///".$now."\r\n";

    


    fwrite($fp,$content); 





    fclose($fp); 
?>
<script>
    location.href='memo.php';
</script>
