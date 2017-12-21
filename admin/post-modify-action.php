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
$post_id = $_GET['id'];
$post_title = $_POST['post-title'];
$post_content = $_POST['post-content'];
$sql = "update post set post_title = '".$post_title."',
        post_content='".$post_content."'where post_id =".$post_id.";";

if(mysqli_query($con, $sql)){

    Header("Location: post-modify.php?id=".$post_id);
}else{
    echo "<p>出错了</p>";
}


$con->close();
?>