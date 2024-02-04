<?php
header("content-type: application/javascript");
if (isset($_SERVER["HTTP_X_FORWARDED_FOR"])) {
  $_SERVER['REMOTE_ADDR'] = $_SERVER["HTTP_X_FORWARDED_FOR"];
}

echo '// This will act as a JavaScript file. Note that JavaScript is client-side.' . "\n" . '// This should not be used, but it exists for those who need it, i guess..' . "\n" . 'const ip = "' . $_SERVER['REMOTE_ADDR'] . '";';
?>
