<?php

namespace Repository;
use Entity\TodolistEntity;

interface TodolistRepository {
    function save(TodolistEntity $todolist):void;
}


class TodolistRepositoryImpl implements TodolistRepository
{

    private \PDO $connection;

    public function __construct(\PDO $connection)
    {
        $this->connection= $connection;
    }

    function save(TodolistEntity $todolist): void
    {
        $sql= "insert into todolist (todolist) values (?)";

        $pdoS= $this->connection->prepare($sql);
        $pdoS->execute([$todolist->getTodolist()]);

    }

}