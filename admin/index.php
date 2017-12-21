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
//文章倒序输出
$result = mysqli_query($con, "SELECT * FROM post ORDER by post_id desc");



?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>blogLite</title>
    <link rel="stylesheet" href="../css/all.css">
    <style type="text/css">
        #input-search{
            width: 50%;
            height: 25px;
        }
    </style>

</head>
<body>
<?php
include '../header.php';
?>
<div class="search">
    <input id="input-search" type="text" placeholder="输入你想搜索的文章标题" />
    <input id="button-search" type="submit" value="搜索" />

</div>
<main>
    <section class="archives-page">

        <?php
        while($row = mysqli_fetch_array($result)){
        ?>
            <article class="post-title" id="<?php echo $row['post_id']?>">
                <h1><a id="post" href="post.php?id=<?php echo $row['post_id']?>"><?php echo $row['post_title']?></a></h1>
                操作 : <a class="post-set" href="#" id="post-delete">删除</a>
                <a class="post-set" href="post-modify.php?id=<?php echo $row['post_id']?>" id="post-modify">修改</a>
            </article>
        <?php
        }
        ?>

    </section>

</main>
<aside class="add">
    <img id="img-add" src="../img/add.png" alt="增加"/>
</aside>
<?php
include '../footer.html';
?>

<script src="../js/jquery-3.2.1.js"></script>

<script>
    $("article > #post-delete").click(function () {
        var $delete = $(this);
        var $id = $delete.parent().attr("id");
        //用ajax传数据
            //var postId = 'id = ' + $id;
        $.ajax({
            url:"post-delete.php",
            type:"post",
            //data:{'id':$id},
            data:{"id":$id},
           // dataType:"json",
            success: function(msg){//如果调用php成功
                if(msg){
                    //返回来的值转换为json对象
                    var msgJson = eval(msg);
                    alert(msgJson);
                    window.location.href = "index.php";
                }else{
                    alert("删除失败啦！！");
                    return ;
                }

            },

        });
        return false;
    });
    //增加文章
    $("#img-add").bind("click", function(){
        window.location.href = "post-add.php";
    });
    //搜索 用js实现
    $("#button-search").click(function () {
        $("a[id='post']").each(function () {
                $(this).parent().parent().show();
        });
        var $title = $("#input-search").val();

        if($title == ""){
            $("#input-search").attr("placeholder", "请输入再搜索");
            return;
        }
        $("a[id='post']").each(function () {
            if($(this).text() != $title){
                $(this).parent().parent().hide();
            }
        });


    });
</script>
</body>
</html>

<?php
    mysqli_close($con);
?>