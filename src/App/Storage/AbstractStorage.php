<?php

namespace App\Storage;

use Question;

//todo: resolve via some provider before inject to controller
class AbstractStorage
{
    /**
     * @return Question[]
     */
    public function getList(): array
    {
        return [];
    }

    public function push(Question $question): bool
    {
        return false;
    }
}