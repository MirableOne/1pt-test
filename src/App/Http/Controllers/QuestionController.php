<?php

namespace App\Http\Controllers;

use App\Http\Requests\GetQuestionsRequest;
use \App\Storage\AbstractStorage;
use Kernel\Response;

final class QuestionController extends \Kernel\Controller
{
    private AbstractStorage $storage;

    public function __construct(AbstractStorage $storage)
    {
        $this->storage = $storage;
    }

    public function get(GetQuestionsRequest $request): Response
    {
        //todo: add some validation middleware
        if (!$request->valid()) {
            return new Response(); // code 429
        }

        $models = $this->storage->getList();


        $lang = $request->query('lang');

        //todo:do some translate
        //todo:add translate component

        return new Response();// code 200, body from models
    }

    public function post(PostQuestionRequest $request)
    {
        //todo: add some validation middleware
        if (!$request->valid()) {
            return new Response(); // code 429
        }

        $model = new \CheckQuestion();

        //todo: request->model hydration

        $res = $this->storage->push($model);


        if (!$res) {
            //todo: exceptions/errors
            return new Response();// code 500?
        }

        return new Response();// code 200, some text
    }
}