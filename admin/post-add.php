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
            h2{
                margin-left: 20%;
            }
            #post-content{
                margin-top: 10px;
            }
            #post-title textarea{

                text-align: center;
        </style>
    </head>
    <body>
    <?php
    include '../header.php'
    ?>
    <h2>添加文章</h2>

        <form method="post" action="post-add-action.php" class="post-modify" >
            <p name=""></p>
            <div id="post-title">
                <input type="text" name="post-title" placeholder="这里添加标题">
            </div>
            <div id="post-content" class="text">
                <textarea name="post-content"  cols="70" rows="20" >这里写文章即可</textarea>
            </div>
            <input type="submit" value="添加文章" >
        </form>



    <?php
    include '../footer.html'
    ?>
    </body>
    </html>
