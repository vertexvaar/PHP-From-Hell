<?php
require_once(__DIR__ . '/../cliHelpers.php');
require_once(__DIR__ . '/5.1_Inlcudes.php');


$array = ['primary' => ['key3' => [3, 6]], 'secondary' => ['key3' => [26, 35]]];

title('Normal operation');

foreach ($array as $name => $value) {
    output($name, $value);
}

title('Returning via ArrayAccess');

$array = new ArraySubKeyIterator($array);

foreach ($array as $name => $value) {
    output($name, $value);
}

title();
