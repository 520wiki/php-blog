<?php
    include "../util/dbUtil.php";
    //定义数据库连接数据
    $util = new dbUtil();
    $_mysqli = $util->get_connection();
    //打开数据库脚本
    $_sql = file_get_contents('mysql.sql');
    //以分号分割语句
    $_arr = explode(';', $_sql);
    if(mysqli_connect_errno()){
        echo "连接出错 请检查服务器连接等等...";
    }
    foreach ($_arr as $value){
        $_mysqli->query($value.';');
    }
    $_mysqli->close();
    $_mysqli = null;
    echo "<h1>已经执行成功</h1>"
    //已经执行成功
?>

