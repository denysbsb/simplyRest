<?php
    class db{
        // Banco
        private $dbhost = 'localhost:8889';
        private $dbuser = 'simplyRest';
        private $dbpass = '';
        private $dbname = 'simplyRest';

        // Conect
        public function connect(){
            $mysql_connect_str = "mysql:host=$this->dbhost;dbname=$this->dbname";
            $dbConnection = new PDO($mysql_connect_str, $this->dbuser, $this->dbpass);
            $dbConnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $dbConnection;
        }
    }