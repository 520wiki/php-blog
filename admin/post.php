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
$result = mysqli_query($con, "SELECT * FROM post WHERE post_id =" .$_GET['id'].";");



?>
<!doctype html>
<html lang="ch">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>blogLite</title>
    <link rel="stylesheet" href="../css/all.css">

</head>
<body>
<?php
include '../header.php';
?>
<main>
    <?php
    while($row = mysqli_fetch_array($result)){
    ?>

    <article>
        <h1><?php echo $row['post_title']?></h1>
        <div class="content">
            <?php echo $row['post_content']?>
        </div>
    </article>
    <?php
         }
    ?>
</main>
<?php
include '../footer.html';
?>
</body>
</html>
<?php
mysqli_close($con);
?>