<?php
/* Nagy János, 2020-10-19, esti */
session_start();

echo file_get_contents('templates/head.tpl');

if(isset($_SESSION['authOk'])) {
  echo file_get_contents('templates/internal.tpl');
}else {
  header('Location: login.php');
}

echo file_get_contents('templates/foot.tpl');
