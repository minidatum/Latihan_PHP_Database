<?php

namespace Service;

use Entity\TodolistEntity;
use Repository\TodolistRepository;

interface TodolistService {

    function simpan(string $todolist):void;
}
class TodolistServiceImpl implements TodolistService
{
    private TodolistRepository $todolistrepository;

    public function __construct(TodolistRepository $todolistrepository)
    {
        $this->todolistrepository=$todolistrepository;
    }

    function simpan(string $todolist): void
    {
        $todo= New TodolistEntity($todolist);
        $this->todolistrepository->save($todo);
    }


}