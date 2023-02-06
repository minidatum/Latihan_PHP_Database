<?php

namespace Repository;
use Entity\TodolistEntity;
use LDAP\Result;

interface TodolistRepository {
    function save(TodolistEntity $todolist):void;
    function update (int $id, TodolistEntity $todolist):bool;
    function delete (int $id):bool;
    function findAll():array;
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

    function update(int $id, TodolistEntity $todolist): bool
    {
        $sql = "select id from todolist where id=?";
        $pdoS= $this->connection->prepare($sql);
        $pdoS->execute([$id]);

        if($pdoS->fetch()){
            $sql= <<<SQL
                    update todolist 
                    set todolist = ?
                    where id=?
                SQL;

            $pdoS= $this->connection->prepare($sql);
            $pdoS->execute([$todolist->getTodolist(), $id]);

            return true;
        }else{
            return false;
        }

    }

    function delete(int $id): bool
    {
        // TODO: Implement delete() method.
        $sql = "select id from todolist where id=?";
        $pdoS= $this->connection->prepare($sql);
        $pdoS->execute([$id]);

        if($pdoS->fetch()){

            $sql= "delete from todolist where id = ?";
            $pdoS= $this->connection->prepare($sql);
            $pdoS->execute([$id]);
        }
        return true;

    }

    function findAll(): array
    {
        // TODO: Implement findAll() method.

        $sql = <<<SQL
        select * from todolist
        SQL;

        $pdoS= $this->connection->prepare($sql);
        $pdoS->execute();

        $result = [];

        foreach ($pdoS as $row){
            $todolist = New TodolistEntity("");
            $todolist->setId($row[0]);
            $todolist->setTodolist($row[1]);
            $todolist->setCreateAt($row[2]);
            $result[]=$todolist;
        }

        return $result;

    }


}