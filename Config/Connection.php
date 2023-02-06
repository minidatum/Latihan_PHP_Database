<?php

namespace Config;

class Connection
{
       function getConnection ():\PDO{
           $host= "localhost";
           $port = 3306;
           $database="todolist";
           $user= "root";
           $password="";


           return New \PDO ("mysql::port=$host::$port; dbname=$database", $user, $password);



       }
}