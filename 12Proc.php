<?

// $_FILES['test']	
// Array
// (
//     [name] => bandicut-setup-kor.exe
//     [type] => application/x-msdownload
//     [tmp_name] => C:\xampp\tmp\php1543.tmp
//     [error] => 0
//     [size] => 22067656
// )    


//echo $_FILES['test']['name']; 


$fn = date("YmdHis"); 
move_uploaded_file($_FILES['test']['tmp_name'],"./data/".$fn); 


