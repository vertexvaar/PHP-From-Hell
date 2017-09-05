<?php
function title($label = '')
{
    echo PHP_EOL;
    echo '--------------------------------';
    echo PHP_EOL;
    echo $label . PHP_EOL;
}

function output($name, $value) {
    echo 'Key: ' . $name . PHP_EOL;
    echo 'Value: ';
    print_r($value);
}
