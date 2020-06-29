<?php
//hier werden die sessions gelöscht
session_start();
session_destroy();
//------------------------------
header("location: index.php");
?>