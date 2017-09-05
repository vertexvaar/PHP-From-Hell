<?php
require_once(__DIR__ . '/../cliHelpers.php');
require_once(__DIR__ . '/4.1_Includes.php');

$array = ['primary' => ['key3' => [3, 6]], 'secondary' => ['key3' => [26, 35]]];

title('Normal operation');

foreach ($array as $name => $value) {
    output($name, $value);
}

title('Function-applied generator');

// preparation

foreach (returnSubKey($array, 'key3') as $name => $value) {
    output($name, $value);
}

title();

