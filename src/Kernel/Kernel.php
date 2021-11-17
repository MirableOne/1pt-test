<?php

namespace Kernel;

class Kernel
{
    public function makeApplication($key): Application
    {
        return new Application();
    }
}