<?php

namespace Kernel;

class Request
{
    public function valid(): bool
    {
        return false;
    }

    public function query(string $key): string
    {
        return '1';
    }

    public static function fromGlobals(): Request
    {
        return new static();
    }
}