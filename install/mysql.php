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
        echo "连接出错";
    }
    foreach ($_arr as $value){
        $_mysqli->query($value.';');
    }
    $_mysqli->close();
    $_mysqli = null;
    //已经执行成功
?>
<!doctype html>
<html lang="ch">
<head>
    <title>配置</title>
</head>
<body>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <input type="text" >
</form>
</body>
</html>
