<?php
function writeCsv()
{
    $data = [
        ["Россия", "США", "Испания", "Австралия"],
        ["США", "Испания", "Австралия", "Россия"],
        ["Россия", "США", "Испания", "Австралия"],
    ];
    $fp = fopen('test.csv', 'w');
    foreach ($data as $fields){
        fputcsv($fp, $fields);
    }
    fclose($fp);
    echo 'Файл успешно записи';
}
function readCsv(){
    $csvPath = 'test.csv';
    $csvFile = fopen($csvPath, 'r');
    if($csvFile) {
        $res = array();
        while (($csvData = fgetcsv($csvFile, 100, ',')) !== false) {
            $res[] = $csvData;
        }
        echo '<pre>';
        print_r($res);
    }
}
//writeCsv();
readCsv();