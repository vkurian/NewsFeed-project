<?php
session_start();
session_destroy();
// Redirect to the login page:
header('Location: ../Landing_page/index.html');
?>