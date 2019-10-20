<?php

$cmd_1 = '(sleep 10; touch aaa.txt) > /dev/null &';
exec($cmd_1);
echo "aaa";

$cmd_2 = 'touch bbb.txt';
exec($cmd_2);
echo "bbb";
