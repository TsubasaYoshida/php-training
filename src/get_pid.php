<?php

//バックグラウンドコマンドのプロセスIDを取得する

$cmd_1 = "sleep 30 > /dev/null & echo $!";
$output = array();
exec($cmd_1, $output);

$pid = $output[0];
echo $pid;

$cmd_2 = "wait $pid ; echo line12 > /dev/null &";
exec($cmd_2);

echo "line 14";
