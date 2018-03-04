<?php
function writeJson($show = false)
{
    $data = [
        ["Россия", "США", "Испания", "Австралия"],
        ["США", "Испания", "Австралия", "Россия"],
        ["Россия", "США", "Испания", "Австралия"],
    ];
    $encoded = json_encode($data, JSON_UNESCAPED_UNICODE);
    if ($show) {
        echo $encoded;
    }
    file_put_contents('countries.json', $encoded);

}

function readJson()
{
    $data = file_get_contents('countries.json');
    echo $data;
    $decoded = json_decode($data);
    print_r($decoded);
}
//writeJson(true);
readJson();