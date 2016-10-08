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
                color:#003333;
                text-align: center;
            }
        </style>
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <body style="background-image: url(http://localhost/skill/img/chat4.jpg); background-size: cover; color: black;">;
        <div class="container" style="background-color: #00b245;">
            <h1 class="f">Kỹ Năng Trại - ADMIN</h1>
            <ul class="nav nav-tabs">
                <li class="active" class="f"><a data-toggle="tab" href="#page">Quản lí trang</a></li>
                <li class="f"><a data-toggle="tab" href="#post">POST</a></li>
            </ul>

            <div class="tab-content">
                <div id="page" class="tab-pane fade in active">
                    <div class="container" >
                        <h2 class="f">Admin</h2>
                        <ul class="nav nav-tabs">
                            <li class="active"class="f"><a data-toggle="tab" href="#stt">Bài viết</a></li>
                            <li class="f"><a data-toggle="tab" href="#book">Sách</a></li>
                        </ul>
                        <div>
                            <!-- Modal -->
                            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog" style="width:70%">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                            <h4 class="modal-title" id="tt"></h4>
                                        </div>
                                        <div class="modal-body" id="result">

                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-content">
                            <div id="stt" class="tab-pane fade in active">
                                <div class="row container-fluid">
                                    <table class="table table-bordered table-hover">
                                            <tr style="opacity: 0.98; color: #FF6B6B;" class="active">
                                                <th colspan="6">
                                            <center>
                                                <div style="width:50%">
                                                    <h2 >Trình quản lý bài viết</h2><hr>
                                                </div>
                                            </center></th>
                                            </tr>
                                            <tr class="info">
                                                <th>Image</th>
                                                <th>Name</th>
                                                <th>Description</th>
                                                <th>Date_up</th>
                                                <th></th>
                                                <th></th>
                                            </tr>
                                            <?php foreach ($SESSION['data']['blog'] as $key => $val) { ?>
                                                <tr>
                                                    <td class="active"><img src="http://localhost/skill/img/<?php echo $val['img']; ?>"width="100%" height="auto"/></td>
                                                    <td class="success"><h3><?php echo $val['title']; ?></h3></td>
                                                    <td class="danger"><?php echo $val['description'] . '...'; ?>
                                                        <a href="#" data-toggle="modal" data-target="#myModal" id="text-click" onclick="giatri('<?php echo $id; ?>')">xem tiếp</a>
                                                    </td>
                                                    <td class="info"><?php echo $val['date_up']; ?></td>
                                                    <td class="active"><a href="http://localhost/skill/index.php?controller=admin&action=edit_blog&type=blog&id=<?php echo $key;?>"><input type="submit" value="Edit" class="btn btn-primary"></a></td>
                                                    <td class="active"><a href="http://localhost/skill/index.php?controller=admin&action=delete&id=<?php echo $val['blog_id']; ?>">Delete</a></td>
                                                </tr>
                                                <?php
                                                $id++;
                                            }
                                            ?>
                                        </table>
                                </div>
                            </div>
                            <div id="book" class="tab-pane fade container-fluid">
                                <table class="table table-bordered table-hover">
                                    <tr style="opacity: 0.98; color: #FF6B6B;" class="active" >
                                        <th colspan="5">
                                    <center>
                                        <div style="width:50%">
                                            <h2 >Trình quản lý sách</h2><hr>
                                        </div>
                                    </center></th>
                                    </tr>
                                    <tr class="danger">
                                        <th>Image</th>
                                        <th>Name</th>
                                        <th>Link</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                    <?php foreach ($SESSION['data']['book'] as $key => $val) { ?>
                                        <tr class="info">
                                            <td>
                                                <div class="row container-fluid">
                                                    <img src="http://localhost/skill/img/<?php echo $val['img'];?>" style="width:50%;"/>
                                                </div>
                                            </td>
                                            <td><p><?php echo $val['name']; ?></p></td>
                                            <td><p><?php echo $val['link']; ?></p></td>
                                            <td><a href="http://localhost/skill/index.php?controller=admin&action=edit_book&type=book&id=<?php echo $key; ?>"><input type="submit" value="Edit" class="btn btn-primary"></a></td>
                                            <td><a href="http://localhost/skill/index.php?controller=admin&action=delete_book&id=<?php echo $val['book_id']; ?>">Delete</a></td>
                                        </tr>
                                    <?php } ?>
                                </table>
                            </div>

                        </div>
                    </div>
                </div>
                <div id="post" class="tab-pane fade">
                    <div class="container-fluid" >
                        <h2 class="f">Dynamic Tabs</h2>
                        <ul class="nav nav-tabs">
                            <li class="active"class="f"><a data-toggle="tab" href="#home">Post Blog</a></li>
                            <li class="f"><a data-toggle="tab" href="#menu1">Đăng sách</a></li>
                        </ul>

                        <div class="tab-content">
                            <div id="home" class="tab-pane fade in active">
                                <h2 class="f">Post Blog </h2>
                                <form action="index.php?controller=admin&action=post"method="POST">
                                    <input type="hidden" name="blog">
                                    <span class="f">Tên bài viết</span><br>
                                    <input type="text" name="title"class="form-control"><br>
                                    <span class="f">Mô tả</span><br>
                                    <input type="text" name="description"class="form-control"><br>
                                    <span class="f"> Đăng ảnh</span><br>
                                    <input type="file" name="img" class="form-control"><br>
                                    <textarea placeholder="Nhập nội dung" name="content"class="form-control"rows="10" cols="50"></textarea><br>
                                    <input type="submit"class="btn btn-primary"> 
                                </form>
                            </div>
                            <div id="menu1" class="tab-pane fade" >
                                <h3 class="f">Đăng sách</h3>
                                <form action="index.php?controller=admin&action=post_book"method="POST" enctype="multipart/form-data">
                                    <input type="hidden" name="book">
                                    <span class="f">Tên sách</span>
                                    <input type="text" name="name"class="form-control">
                                    <span class="f">Ảnh bìa:</span>
                                    <input type="file" name="img" class="form-control">
                                    <span class="f">Link: </span>
                                    <input type="text" name="link" class="form-control">
                                    <button class="btn btn-primary">Post</button>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>

        <script language="javascript">
            function giatri(a) {
                $.ajax({
                                        url: 'http://localhost/skill/index.php?controller=load_content&id=' + a,
                                        type: 'get',
                                        dataType: 'text',
                                        success: function (result) {
                                                $('#result').html(result);
                                        }                                 });
                            
            }
        </script>
    </body>
</html>