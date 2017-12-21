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


$result = mysqli_query($con, "SELECT * FROM post WHERE post_id =" .$_GET['id'].";");



?>
<!doctype html>
<html lang="ch">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>修改</title>
    <link rel="stylesheet" href="../css/all.css">

    <style type="text/css">
        .post-modify{
            text-align: center;}
        }
        #post-title{
            text-align: center;
            margin-bottom: 25px;
        }
        #post-title input{
            text-align: center;
            height: 30px;
            width: 60%;
        }
        #post-content{
            margin-top: 10px;
        }
        h2{
            margin-left: 20%;
        }
        #post-title textarea{

            text-align: center;
    </style>
</head>
<body>
<?php
include '../header.php'
?>
<h2>修改您的文章</h2>
<?php
while($row = mysqli_fetch_array($result)) {
?>
<form method="post" action="post-modify-action.php?id=<?php echo $row['post_id']?>" class="post-modify" >
            <p name=""></p>
            <div id="post-title">
                <input type="text" name="post-title" value="<?php echo $row['post_title']?>">
            </div>
            <div id="post-content" class="text">
                <textarea name="post-content"  cols="70" rows="20" >
                    <?php echo $row['post_content']?>
                </textarea>
            </div>
    <input type="submit" value="提交修改" >
</form>
    <?php
}
?>


<?php
include '../footer.html'
?>
</body>
</html>
<?php
mysqli_close($con);
?>