<?php
//引入
include "../util/dbUtil.php";
?>
<?php
$util = new dbUtil();
$con = $util->get_connection();
if (!$con)
{
    die('Could not connect: ' . mysqli_error());
}
mysqli_select_db($con,"hqweay_blog");

if(mysqli_query($con, "DELETE FROM post WHERE post_id = ". $_POST['id'] .";")){

    $msg = "删除成功";

}else {
    $msg = "删除失败";
}
echo json_encode($msg);
$con->close();
?>