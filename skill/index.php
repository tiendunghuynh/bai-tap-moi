<?php
session_start();
require_once 'models/database.php';
$controller = isset($_GET['controller']) ? $_GET['controller'] : 'homepage';
if (is_file('controllers/' . $controller . '.php')) {
    include('controllers/' . $controller . '.php');
} else {
    echo 'PAGE NOT FOUND';
}