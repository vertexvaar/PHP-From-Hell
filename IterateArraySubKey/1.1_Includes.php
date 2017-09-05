<?php

class UnWrapper
{
    protected $array = [];

    protected $subKey = '';

    public function __construct($subKey)
    {
        $this->subKey = $subKey;
    }

    public function notify()
    {
        // the last call
        if (is_array($this->array)) {
            $this->array = $this->array[$this->subKey];
        }
    }

    public function register(&$array)
    {
        $this->array = &$array;
    }
}

class VariableObserver
{
    protected $unwrapper;

    public function __construct(UnWrapper $unwrapper)
    {
        $this->unwrapper = $unwrapper;
    }

    public function __destruct()
    {
        $this->unwrapper->notify();
    }
}
