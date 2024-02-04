<?php
header("content-type: application/json");
if (isset($_SERVER["HTTP_X_FORWARDED_FOR"])) {
  $_SERVER['REMOTE_ADDR'] = $_SERVER["HTTP_X_FORWARDED_FOR"];
}

echo '{"ip": "' . $_SERVER['REMOTE_ADDR'] . '"}';
?>
