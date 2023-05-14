<?php
$file_contents = file_get_contents('/home/hackme/blog/index.php');
echo base64_encode($file_contents);
?>
