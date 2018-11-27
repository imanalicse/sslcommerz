<?php

$_REQUEST = array(
    'hello'=> 'world'
);

$logFile = 'logs/debug.log';
$logFile = fopen($logFile, "a");
$logData = date('Y-m-d h:i:s') . ':  ' . json_encode($_REQUEST) . "\n\n";
fwrite($logFile, $logData);
fclose($logFile);