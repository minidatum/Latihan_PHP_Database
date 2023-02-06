<?php

require_once __DIR__ ."/../Config/Connection.php";
require_once __DIR__ ."/../Entity/TodolistEntity.php";
require_once __DIR__ ."/../Repository/TodolistRepository.php";
require_once __DIR__ ."/../Service/TodolistService.php";

use Config\Connection;
use Entity\TodolistEntity;
use Repository\TodolistRepositoryImpl;
use Service\TodolistServiceImpl;



class Test
{

    static function simpan(){
        $conn= New Connection();
        $repo= New TodolistRepositoryImpl($conn->getConnection());
        $serve = New TodolistServiceImpl($repo);

//        $serve->simpan("Belajar PHP OOP plus Database");
//        $serve->simpan("Belajar PHP OOP + PHP Database + PHP Web");
//        $serve->simpan("Belajar PHP OOP + PHP Database + PHP Web + PHP Composer");
//        $serve->simpan("Belajar PHP OOP + PHP Database + PHP Web + PHP Composer + PHP Unit Test");
//        $serve->simpan("Belajar PHP OOP + PHP Database + PHP Web + PHP Composer + PHP Unit Test + Framework Laravel");
        $serve->simpan('Contoh');
        $conn = null;
    }

    static function ubah(){
        $conn= New Connection();
        $repo= New TodolistRepositoryImpl($conn->getConnection());
        $serve = New TodolistServiceImpl($repo);

        $serve->ubah(1, "Belajar Firman Tuhan");

        $conn = null;
    }
    static function hapus(){
        $conn= New Connection();
        $repo= New TodolistRepositoryImpl($conn->getConnection());
        $serve = New TodolistServiceImpl($repo);

        $serve->hapus(6);

        $conn = null;
    }
    static function showAll(){
        $conn= New Connection();
        $repo= New TodolistRepositoryImpl($conn->getConnection());
        $serve = New TodolistServiceImpl($repo);

        $serve->show();

        $conn = null;
    }

}

//Test::simpan();

//Test::ubah();

//Test::hapus();

Test::showAll();;