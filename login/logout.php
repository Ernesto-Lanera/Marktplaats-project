<?php 

session_start();

session_unset();

session_destroy();

echo ("<script LANGUAGE='JavaScript'>
    window.alert('succesvol uitgelogd');
    window.location.href='../home.php';
    </script>");
?>