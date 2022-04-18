	
<?php
session_start();
$_SESSION['user'] = array(
    'id' => $user['id'],
    'nama' => $user['nama']
);
header("Location: admin.php");
exit;
// ....
?>