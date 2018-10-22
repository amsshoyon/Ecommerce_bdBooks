
<?php
session_start();
session_unset();
session_destroy();

header('location: ../admin_login/admin_login.php');
exit();

?>

