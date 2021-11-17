<?php

namespace Kernel;

class Route
{
    public function through(Request $request): Response
    {
        return new Response();
    }
}