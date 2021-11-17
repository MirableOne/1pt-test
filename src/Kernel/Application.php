<?php

namespace Kernel;

class Application
{
    public function through(Request $request): Response
    {
        //todo: add global try/catch + error rende callbck
        return new Response();
    }

    public function declareRoutes(string $path)
    {
        //some include
    }
}