<?php
$_SESSION['url_retono'] = $_SERVER['PHP_SELF'];
if (!isset($_SESSION['login'])) {
    header('Location: login_formulario.php');
    exit;
}
