<?php
switch ($page) {
    case 0:
        require_once("login.php");
        break;
    case 1:
        echo "attività didattiche";
        break;
    case 2:
        echo "edit attività";
        break;
    case 3:
        echo "unità formativa";
        break;
    case 4:
        echo "edit unità";
        break;
    case 5:
        require_once("homepage.php");
        break;
    case 99:
        require_once("logout.php");
        break;
    default:
        include("content-404.php");
        break;
}
?>