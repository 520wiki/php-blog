<?php

/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2017/12/21
 * Time: 13:14
 */
class dbUtil
{
    //定义数据库连接数据
    private $dbHost = "localhost";
    private $dbUser = "root";
    private $dbPass = "104207";
    //获得数据库连接对象
    public function get_connection(){
        $_mysqli = new mysqli($this->dbHost, $this->dbUser, $this->dbPass);
        if(mysqli_connect_errno()){
            echo "连接出错";
        }else{
            return $_mysqli;
        }
    }

}
?>