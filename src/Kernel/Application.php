<?php

namespace Kernel;

class Application
{
    public function through(Request $request): Response
    {
        return new Response();
    }

    public function declareRoutes(string $path)
    {
        //some include
    }
}