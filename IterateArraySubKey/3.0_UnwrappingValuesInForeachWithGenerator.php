<?php
require_once(__DIR__ . '/../cliHelpers.php');

$array = ['primary' => ['key3' => [3, 6]], 'secondary' => ['key3' => [26, 35]]];

title('Normal operation');

foreach ($array as $name => $value) {
    output($name, $value);
}

title('Pre-extracted by generator');

$backup = $array;

// preparation
// NOTICE: This will irreversibly overwrite $array
// WARNING: Returns integer keys!

$array = (function ($array) {
    foreach ($array as $value) {
        yield $value['key3'];
    }
})(
    $array
);

foreach ($array as $name => $value) {
    output($name, $value);
}

$array = $backup;

title();
