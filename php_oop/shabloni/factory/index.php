<?php
require "factory.php";
$buttons = array('Red', 'Green', 'Blue');
foreach ($buttons as $b) {
    echo ButtonFactory::createButton($b)->getHtml();
}

?>

<style>
    .red {
        background: red;
    }
    .green {
        background: green;
    }
    .blue {
        background: blue;
    }
</style>
