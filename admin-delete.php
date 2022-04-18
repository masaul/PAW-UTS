<?php
require "myCode/fungsi.php";
$nisn = $_GET["nisn"];
if (delete($nisn) > 0) {
    header("Location: admin-show.php");
}
