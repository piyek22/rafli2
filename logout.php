<?php
session_start();
session_destroy();
header("location:INDEX.php?pesan=logout");

?>