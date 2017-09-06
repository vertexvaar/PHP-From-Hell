<?php
require_once(__DIR__ . '/../cliHelpers.php');

$array = ['primary' => ['key3' => [3, 6]], 'secondary' => ['key3' => [26, 35]]];

title('Normal operation');

foreach ($array as $name => $value) {
    output($name, $value);
}

title('Getting key3 by array_column');

// use array_combine & array_keys for having the key in $name.
// if key is not needed just use array_column
foreach (array_combine(array_keys($array), array_column($array, 'key3')) as $name => $value) {
    output($name, $value);
}

title();
