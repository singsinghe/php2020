<?

    include "dbClass.php";



    $data = array('홍길동','메모입니다1.',date("Y-m-d H:i:s"));

    $insert = $db->query('INSERT INTO memo(name, memo, regdate) VALUES (?,?,?)',$data);

    echo $db->lastInsertID();

    $db->close();