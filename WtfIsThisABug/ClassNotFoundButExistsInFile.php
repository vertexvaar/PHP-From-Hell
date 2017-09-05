<?php
declare(strict_types=1);
/**
 * TEST 1 class is declared after object
 */
// okay
new Existing();

class Existing
{
}

/**
 * TEST 2 class implements Iterator and is declared BEFORE object
 */
class Okay implements Iterator
{
    public function current()
    {
    }

    public function next()
    {
    }

    public function key()
    {
    }

    public function valid()
    {
    }

    public function rewind()
    {
    }
}

// obvious...
new Okay();

/**
 * TEST 2 class implements Iterator and is declared AFTER object
 */
// PHP Fatal error:  Uncaught Error: Class 'Failing' not found in [...]
new Failing();

class Failing implements Iterator
{
    public function current()
    {
    }

    public function next()
    {
    }

    public function key()
    {
    }

    public function valid()
    {
    }

    public function rewind()
    {
    }
}

