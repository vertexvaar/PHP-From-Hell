<?php

class SelfExtractingVariable
{
    protected $cb;

    public function __construct($cb)
    {
        $this->cb = $cb;
    }

    public function __destruct()
    {
        call_user_func($this->cb);
    }
}
