<?php

if (isset($_GET['action'])) {
    if ($_GET['action'] == 'xuat') {
        unset($_SESSION['user']);
    }
}
if (!isset($_SESSION['user'])) {

    include 'login.php';
} else {
    require 'models/skill.php';
    $SESSION['data']['blog'] = select_blog_admin();
    $SESSION['data']['book'] = select_all_book();
    if (isset($_GET['action'])) {

        switch ($_GET['action']) {
            case 'post':
                $return = POST($_POST['title'], $_POST['content'], $_POST['img'], $_POST['description']);
                echo $return;
                break;
            case 'post_book':
                $return = book($_POST['name'], $_FILES['img']['name'], $_POST['link']);
                $tmp_name = $_FILES['img']['tmp_name'];
                $path = getcwd() . DIRECTORY_SEPARATOR . 'img';
                $name = $path . DIRECTORY_SEPARATOR . $_FILES['img']['name'];
                $success = move_uploaded_file($tmp_name, $name);
                if ($success) {
                    echo $return;
                    echo 'up thanh cong';
                }
                break;
            case 'delete':
                $xoa = xoa_blog($_GET['id']);
                if ($xoa == 'xong') {
                    echo 'da xoa xong';
                }
                break;
            case 'edit_book':
                if (isset($_POST['book'])) {
                    $success = TRUE;
                    if (empty($_FILES['img']['name'])) {
                        $img = $_POST['img'];
                    } else {
                        $img = $_FILES['img']['name'];
                        $tmp_name = $_FILES['img']['tmp_name'];
                        $path = getcwd() . DIRECTORY_SEPARATOR . 'img';
                        $name = $path . DIRECTORY_SEPARATOR . $_FILES['img']['name'];
                        $success = move_uploaded_file($tmp_name, $name);
                    }
                    if ($success) {
                        $kq = edit_book($_POST['name'], $img, $_POST['link'], $_GET['id']);
                        if ($kq == 'xong') {
                            echo 'thanh cong';
                        } else { echo 'khong the cap nhat...';}
                    } else {
                        echo 'loi up anh';
                    }
                } else {
                    include 'views/edit.php';
                }
                break;
            case 'delete_book':
                $kq = xoa_book($_GET['id']);
                if ($kq = 'xong') {
                    echo 'Xóa thành công';
                }
                break;
            case 'edit_blog':
                if (isset($_POST['blog'])) {
                    $success = TRUE;
                    if (empty($_FILES['img']['name'])) {
                        $img = $_POST['img'];
                    } else {
                        $img = $_FILES['img']['name'];
                        $tmp_name = $_FILES['img']['tmp_name'];
                        $path = getcwd() . DIRECTORY_SEPARATOR . 'img';
                        $name = $path . DIRECTORY_SEPARATOR . $_FILES['img']['name'];
                        $success = move_uploaded_file($tmp_name, $name);
                    }
                    if ($success) {
                        $kq = edit_blog($_POST['name'], $img, $_POST['description'], $_POST['content'],$_GET['id']);
                        if ($kq == 'xong') {
                            echo 'thanh cong --> <a href="http://localhost/skill/index.php?controller=admin"> Admin</a>';
                        }
                    } else {
                        echo 'upload không thành công';
                    }
                } else {
                    include 'views/edit.php';
                }
                break;
        }
    } else {
        include 'views/admin.php';
    }
}

    