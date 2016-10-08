<?php
include 'models/skill.php';
$SESSION['blog']['content'] = select_content_admin();
$id=0;
if (isset($_GET['id'])){
    $id = $_GET['id'];
}
echo '<h2>'.$SESSION['blog']['content'][$id]['title'].'</h2><br>';
echo $SESSION['blog']['content'][$id]['content'];
