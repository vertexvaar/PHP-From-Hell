# WHAT?

The purpose of these files to provide a PoC of iterating over an array
but actually getting the values from another predefined key.

The tested array is always:
```php

$array = [
    'primary' => [
        'key3' => [3, 6]
    ],
    'secondary' => [
        'key3' => [26, 35]
    ]
];
```

A normal foreach is used to demonstrate the default behaviour:
```php
foreach ($array as $name => $value) {
    output($name, $value);
}
```

This would print:

```
Key: primary
Value: Array
(
    [key3] => Array
        (
            [0] => 3
            [1] => 6
        )

)
Key: secondary
Value: Array
(
    [key3] => Array
        (
            [0] => 26
            [1] => 35
        )

)
```

The goal is to omit the index "key3" in the variable `$value`.
The result which has to be achieved must therefore look like this:

```
Key: primary
Value: Array
(
    [0] => 3
    [1] => 6
)
Key: secondary
Value: Array
(
    [0] => 26
    [1] => 35
)
```
