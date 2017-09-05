<?php
require_once(__DIR__ . '/../cliHelpers.php');

$array = ['primary' => ['key3' => [3, 6]], 'secondary' => ['key3' => [26, 35]]];

title('Normal operation');

foreach ($array as $name => $value) {
    output($name, $value);
}

title('Function-applied generator');

// preparation
// WARNING: Returns integer keys!
function returnSubKey($array, $key)
{
    return (function ($array) use ($key) {
        foreach ($array as $value) {
            yield $value[$key];
        }
    })(
        $array
    );
}

foreach (returnSubKey($array, 'key3') as $name => $value) {
    output($name, $value);
}

title();

