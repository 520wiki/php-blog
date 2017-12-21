<?php

    //定义数据库连接数据
    $dbHost = "localhost";
    $dbUser = "root";
    $dbPass = "104207";
    //打开数据库脚本
    $_sql = file_get_contents('mysql.sql');
    //以分号分割语句
    $_arr = explode(';', $_sql);

    $_mysqli = new mysqli("localhost", "root", "104207");
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

