<?php
session_start();
session_destroy();
header("location:../client_pages/main_page.php");
?>