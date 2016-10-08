<?php
    require 'models/skill.php';
    $SESSION['list']['blog']= select_all_blog();
    $SESSION['list']['book']= select_all_book();
    if (isset($_GET['action'])){
        switch ($_GET['action']){
            case 'blog':
                include 'views/blog.php';
                break;
            case 'book':
                include 'views/book.php';
        }
    } else {
        include 'views/homepage.php';
    }

