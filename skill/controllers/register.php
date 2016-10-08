<?php
if (!isset($_POST['register'])){
    include 'views/register.php';   
} else {
    require_once 'models/skill.php';
    $result= register($_POST['name'], $_POST['user'], $_POST['pass']);
    if (!empty($result)){echo $result;}
}