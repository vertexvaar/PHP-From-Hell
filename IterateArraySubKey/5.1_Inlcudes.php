<?php

class ArraySubKeyIterator implements Iterator
{
    protected $array;

    protected $subKey = 'key3';

    public function __construct($array)
    {
        $this->array = $array;
    }

    public function current()
    {
        return current($this->array)[$this->subKey];
    }

    public function next()
    {
        return next($this->array)[$this->subKey];
    }

    public function key()
    {
        return key($this->array);
    }

    public function valid()
    {
        return array_key_exists($this->key(), $this->array);
    }

    public function rewind()
    {
        reset($this->array);
    }
}
