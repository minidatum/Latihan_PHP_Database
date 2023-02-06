<?php

namespace Service;

use Entity\TodolistEntity;
use Repository\TodolistRepository;

interface TodolistService {

    function simpan(string $todolist):void;
    function ubah (int $id, string $todolist):bool;
    function hapus (int $id):bool;
    function show():void;
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

    function ubah(int $id, string $todolist): bool
    {
        $todo = New TodolistEntity($todolist);
        $this->todolistrepository->update($id, $todo);
        return true;
    }
    function hapus (int $id):bool{
        if($this->todolistrepository->delete($id)){
            return true;
        }else {
            return false;
        }
    }

    function show(): void
    {
        // TODO: Implement show() method.

        foreach ($this->todolistrepository->findAll() as $todolist){
            echo "Id : " . $todolist->getId().PHP_EOL;
            echo "Todolist : ". $todolist->getTodolist() .PHP_EOL;
            echo "Create At : " . $todolist->getCreateAt().PHP_EOL;
            echo "=========================\n";
        }


    }


}