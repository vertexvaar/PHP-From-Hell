<?php
require_once(__DIR__ . '/../cliHelpers.php');

$array = ['primary' => ['key3' => [3, 6]], 'secondary' => ['key3' => [26, 35]]];

title('Normal operation');

foreach ($array as $name => $value) {
    output($name, $value);
}

title('Getting key3 by array_column');

function array_map_assoc(callable $cb, array $array)
{
    return array_combine(
        array_keys($array),
        array_map(
            function ($array) {
                return $array[array_keys($array)[0]];
            },
            array_map($cb, array_keys($array), $array)
        )
    );
}

$cb = function ($key, $value) {
    return array($key => $value['key3']);
};

foreach (array_map_assoc($cb, $array) as $name => $value) {
    output($name, $value);
}

title();
