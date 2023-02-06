<?php
namespace Entity ;

class TodolistEntity
{

    private string $todolist;

    public function __construct(string $todo)
    {
        $this->todolist= $todo;
    }

    /**
     * @return string
     */
    public function getTodolist(): string
    {
        return $this->todolist;
    }

    /**
     * @param string $todolist
     */
    public function setTodolist(string $todolist): void
    {
        $this->todolist = $todolist;
    }

}