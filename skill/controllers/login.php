<?php
if (!isset($_POST['login'])){
    include 'views/login.php';
} else {
    require 'models/skill.php';
    $login= login($_POST['user']);
    if (!empty($login)){
        if ($_POST['pass']==$login['pass']){
            $_SESSION['user']=$_POST['user'];
            echo 'dang nhap thanh cong <br>';
            echo 'click vao day de xac nhan chuyen trang-->';
            echo '<a href="index.php?controller=admin"> Admin</a>';
        } else {
            $error['login']='e';
            include 'views/login.php';
        }
    } else {
        $error['login']='e';
        include 'views/login.php';
    }
}
