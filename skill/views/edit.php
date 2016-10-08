<?php
$id = 0;
?><!doctype html>
<html>
    <head>
        <title>Bootstrap Case</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <style>
            .f{
                color:white;
                text-align: center;
            }
        </style>
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <body style="background-image: url(http://localhost/skill/img/chat4.jpg); background-size: cover;">
        <div class="container" style="background: #00b294;">
            <a href="http://localhost/skill/index.php?controller=admin  "><h1 class="f">Kỹ Năng Trại - ADMIN</h1></a><br>
            <?php
            $id = $_GET['id'];
            if ($_GET['type'] == 'book') {
                ?>
                <h3 class="f">Chỉnh sách <?php echo $id; ?> </h3>
                <form action="http://localhost/skill/index.php?controller=admin&action=edit_book&id=<?php echo $SESSION['data']['book'][$id]['book_id']; ?>"method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="book">
                    <span class="f">Tên sách</span>
                    <input type="text" name="name"class="form-control" value="<?php echo $SESSION['data']['book'][$id]['name']; ?>"><br>
                    <div class="row">
                        <div class="col-md-4"></div>
                        <div class="col-md-3">
                            <span class="f">Ảnh bìa:</span><br>
                            <img src="http://localhost/skill/img/<?php echo $SESSION['data']['book'][$id]['img']; ?>" width="100%" /><br>
                            <input type="file" name="img" class="form-control">
                            <input type="hidden" name="img" value="<?php echo $SESSION['data']['book'][$id]['img']; ?>">
                        </div>
                        <div class="col-md-4">
                        </div>
                    </div>
                    <span class="f">Link: </span>
                    <input type="text" name="link" class="form-control" value="<?php echo $SESSION['data']['book'][$id]['link']; ?>"><br>
                    <button class="btn btn-primary">Edit</button>
                </form>
                <?php
            }
            if ($_GET['type'] == 'blog') {
                ?>
                <h2 class="f">Edit Blog <?php echo $id; ?> </h2>
                <form action="http://localhost/skill/index.php?controller=admin&action=edit_blog&id=<?php echo $SESSION['data']['blog'][$id]['blog_id']; ?>"method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="blog">
                    <span class="f">Tên bài viết: </span><br>
                    <input type="text" name="name"class="form-control" value="<?php echo $SESSION['data']['blog'][$id]['title']; ?>"><br>
                    <span class="f">Mô tả: </span><br>
                    <textarea class="form-control"  name="description"rows="5" cols="50"><?php echo $SESSION['data']['blog'][$id]['description']; ?></textarea><br>
                    <div class="row">
                        <div class="col-md-4"></div>
                        <div class="col-md-3">
                            <span class="f">Ảnh: </span><br>
                            <img src="http://localhost/skill/img/<?php echo $SESSION['data']['blog'][$id]['img']; ?>" width="100%" /><br>
                            <input type="file" name="img" class="form-control"><br>
                            <input type="hidden" name="img" value="<?php echo $SESSION['data']['blog'][$id]['img']; ?>">
                        </div>
                        <div class="col-md-4">
                        </div>
                    </div>
                    <span class="f"> Nội dung: </span>
                    <textarea placeholder="Nhập nội dung" name="content"class="form-control"rows="18" cols="50">
                        <?php echo $SESSION['data']['blog'][$id]['content']; ?>
                    </textarea><br>
                    <input type="submit"class="btn btn-primary"> 
                </form>
            <?php } ?>
        </div>

    </body>
</html>