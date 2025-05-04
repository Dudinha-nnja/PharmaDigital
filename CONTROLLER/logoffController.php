<?php
session_start();
session_destroy();

echo "<script>";
echo "window.location.href = 'http://localhost/PharmaDigital/index.php';";
echo "</script> ";
?>
