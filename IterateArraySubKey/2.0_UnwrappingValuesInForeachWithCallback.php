<?php
require_once(__DIR__ . '/../cliHelpers.php');
require_once(__DIR__ . '/2.1_Includes.php');

$array = ['primary' => ['key3' => [3, 6]], 'secondary' => ['key3' => [26, 35]]];

title('Normal operation');

foreach ($array as $name => $value) {
    output($name, $value);
}

title('Self extracting variable');

// preparation
$cb = function () use (&$value) {
    !is_array($value) ?: $value = $value['key3'];
};
$value = new SelfExtractingVariable($cb);

foreach ($array as $name => $value) {
    output($name, $value);

    // reset
    $value = new SelfExtractingVariable($cb);
}

title();
