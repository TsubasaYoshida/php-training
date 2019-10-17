<?php

//バックグラウンドコマンドのプロセスIDを取得する

$cmd = "sleep 30 > /dev/null & echo $!";
$output = array();
exec($cmd, $output);
echo $output[0];
