<?php

if (isset($_GET['action'])) {
    switch ($_GET['action']) {
        case 'se1':
            if (isset($_POST['inp'])) {
                $b = $_POST['inp'];
                $level = $_POST['level'];
                $i = 0;
                while ($i < strlen($b)) {
                    if (ord($b[$i]) > 122) {
                        chop($b, $b[$i]);
                    }
                    $i++;
                }
            }
            include 'views/se_play.php';
            break;
    }
} else {
    include 'views/se_ip.php';
}