<?php
session_start();
$_SESSION['attempts'] = array();

header('Location: /web-lab1/index.php');
