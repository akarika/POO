<?php
/**
 * Created by PhpStorm.
 * User: remyroux
 * Date: 25/10/2016
 * Time: 21:35
 */

namespace App;


class Database
{
    private $db_name;
    private $db_host;
    private $db_pass;
    private $db_user;
    private $pdo;
    public function __construct($db_name, $db_host = 'localhost', $db_user = 'root', $db_pass = 'root')
    {
        $this->db_name = $db_name;
        $this->db_host = $db_host;
        $this->db_pass = $db_pass;
        $this->db_user = $db_user;
    }
    private function getPDO(){
        $pdo = new PDO('mysql:host=localhost:8889;dbname=blog;charset=utf8', 'root', 'root');
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $this->PDO = $pdo;
    }
}