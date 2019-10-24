<?php

// テスト用のtsvファイルを生成する

$file_path = "./test_data.tsv";
$file = new SplFileObject($file_path, "wb");
$file->setCsvControl("\t");

$data = array();
foreach(range(0,99999) as $i){
    $data_children = array("sample");
    $data_children[1] = sprintf('%08d', $i);
    $data_children[2] = sprintf('%06d', $i);
    $data_children[3] = "99";
    $data[$i] = $data_children;
}

foreach ($data as $d) {
    $file->fputcsv($d);
}
