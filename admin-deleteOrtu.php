<?php
require "myCode/fungsi.php";
$nik = $_GET["id_ortu"];
if (delete($nik) > 0) {
    header("Location: admin-showOrtu.php");
}
