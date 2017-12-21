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
$post_title = $_POST['post-title'];
$post_content = $_POST['post-content'];
$sql = "insert into post (post_title, post_content) values ('".$post_title."'
            , '".$post_content."');";

if(mysqli_query($con, $sql)){
    Header("Location: post-add.php");
}else{
    echo "<p>出错了</p>";
}


$con->close();
?>