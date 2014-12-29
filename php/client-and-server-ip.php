<?php
// client ip.
print_r($_SERVER['REMOTE_ADDR']);

// server ip.
$host= gethostname();
$ip = gethostbyname($host);
var_dump($host);
var_dump($ip);
