<?php
//引入
include "util/dbUtil.php";
?>
<?php
$util = new dbUtil();
$con = $util->get_connection();
if (!$con)
{
    die('Could not connect: ' . mysqli_error());
}

mysqli_select_db($con,"hqweay_blog");

$result = mysqli_query($con, "SELECT * FROM post");



?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hqweay</title>
    <link rel="stylesheet" href="css/all.css" />

</head>
<body>
<?php
include 'header.php';

?>
    <main>
        <section>
            <?php
            while($row = mysqli_fetch_array($result)){
                ?>
                <article class="post-title" id="<?php echo $row['post_id']?>">
                    <h1><a href="post.php?id=<?php echo $row['post_id']?>"><?php echo $row['post_title']?></a></h1>
                </article>
                <?php
            }
            ?>
        </section>

    </main>

    <?php
    include 'footer.html';
    ?>

</body>
</html>
<?php
mysqli_close($con);
?>