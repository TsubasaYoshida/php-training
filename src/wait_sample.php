<?php

// 呼び方：ターミナルを2つ開いて順番に実行する

exec("ps aux | grep wait_sample.php | grep -v grep", $output);
echo "実行中のプロセス数：".count($output)."\n";

while(count($output) > 1){
    echo "多重起動はできません\n";
    sleep(5);

    $output = [];
    exec("ps aux | grep wait_sample.php | grep -v grep", $output);
    echo "sleep中...(実行中のプロセス数：".count($output).")\n";
}

echo "起動します\n";
sleep(20);
