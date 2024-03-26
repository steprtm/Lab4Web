<?php
$mod = isset($_REQUEST['mod']) ? $_REQUEST['mod'] : 'default';

switch ($mod) {
    case "home":
        require("home.php");
        break;
    case "about":
        require("about.php");
        break;
    case "kontak":
        require("contact.php");
        break;
    default:
        require("home.php");
        break;
}
?>
