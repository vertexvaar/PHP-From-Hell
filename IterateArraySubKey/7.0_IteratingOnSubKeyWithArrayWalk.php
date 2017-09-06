<?php
require_once(__DIR__ . '/../cliHelpers.php');

$array = ['primary' => ['key3' => [3, 6]], 'secondary' => ['key3' => [26, 35]]];

title('Normal operation');

foreach ($array as $name => $value) {
    output($name, $value);
}

title('Getting key3 by array_walk');

$cb = function (&$value) {
    $value = $value['key3'];
};
array_walk($array, $cb);

foreach ($array as $name => $value) {
    output($name, $value);
}

title();
