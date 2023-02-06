<?php
namespace Entity ;

class TodolistEntity
{
    private int $id;
    private string $create_at;


    public function __construct(string $todo)
    {
        $this->todolist= $todo;
//        $this->create_at= $create_at;

    }


    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    private string $todolist;

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

    /**
     * @return string
     */
    public function getCreateAt(): string
    {
        return $this->create_at;
    }

    /**
     * @param string $create_at
     */
    public function setCreateAt(string $create_at): void
    {
        $this->create_at = $create_at;
    }
}