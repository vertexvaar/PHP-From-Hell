<?php
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
