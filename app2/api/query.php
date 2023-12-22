<?php
//處理查詢資料的請求
include_once "db.php";

if($_GET['do'] == 'searchAll'){
    header("Content-Type: application/json; charset=utf-8");
    echo json_encode($Students->searchAll());
}
else if($_GET['do'] == 'sex'){
    
}
else if($_GET['do'] == 'class'){
    
}
else if($_GET['do'] == 'classes'){
    
}


?>