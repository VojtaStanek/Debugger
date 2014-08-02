<?php
class DebuggerDefault implements \DebuggerInterface
{

    public function __construct()
    {
    }

    public function dump($value)
    {
        var_dump($value);
    }
}
