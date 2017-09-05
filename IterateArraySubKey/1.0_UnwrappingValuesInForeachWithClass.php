<?php
require_once(__DIR__ . '/../cliHelpers.php');
require_once(__DIR__ . '/1.1_Includes.php');

$array = ['primary' => ['key3' => [3, 6]], 'secondary' => ['key3' => [26, 35]]];

title('Normal operation');

foreach ($array as $name => $value) {
    output($name, $value);
}

title('with auto-unwrapping $value');

// preparation
$unWrapper = new UnWrapper('key3');
$value = new VariableObserver($unWrapper);
$unWrapper->register($value);

foreach ($array as $name => $value) {
    output($name, $value);

    // reset
    $value = new VariableObserver($unWrapper);
}

title();
