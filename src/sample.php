<?php

$file_array = file(dirname(__FILE__) . "/../data/data.tsv", FILE_IGNORE_NEW_LINES);

$total_count = sizeof($file_array);
$first_half_count = ceil(sizeof($file_array)/2);

echo $total_count;
echo $first_half_count;

for ($i = 0; $i < $first_half_count; $i++) {
    file_put_contents(dirname(__FILE__) . "/../output/output_01.tsv", $file_array[$i] . "\n", FILE_APPEND);
}

for ($j = $first_half_count; $j < $total_count; $j++) {
    file_put_contents(dirname(__FILE__) . "/../output/output_02.tsv", $file_array[$j] . "\n", FILE_APPEND);
}
