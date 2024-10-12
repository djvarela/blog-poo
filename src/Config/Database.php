<?php

namespace App\Config;

use PDO;
use PDOException;

class Database
{

    protected $cnx;

    protected function Conection()
    {


        date_default_timezone_set('America/Argentina/Buenos_Aires');


        if ($_SERVER['SERVER_NAME'] == 'larocadelconsejo.test') {
            define('USER', 'root');
            define('CLAVE', '');
            define('HOST', 'localhost');
            define('DATABASE', 'roca');
        } else {
            define('USER', 'ferro_db');
            define('CLAVE', 'z@Z*mr73eL');
            define('HOST', 'localhost');
            define('DATABASE', 'ferro_empleados');
        }

        try {

            $this->cnx = new PDO("mysql:host=" . HOST . ";dbname=" . DATABASE, USER, CLAVE, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));

            $setHorario = "SET time_zone='-03:00'"; /// setea el horario de Buenos Aires
            $stm = $this->cnx->prepare($setHorario);
            $stm->execute();
        } catch (PDOException $e) {

            exit("¡OJO, Error!: " . $e->getMessage());
        }
    }
}
