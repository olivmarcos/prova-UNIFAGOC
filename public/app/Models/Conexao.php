<?php

Class Conexao
    {
        private static $con;
        private function __construct()
        {
        }
        private static function getEnv()
        {
            $envPath = __DIR__ . '/../env.ini';
            $env = parse_ini_file($envPath);
            return $env;
        }
        public static function getInstance()
        {
            $env = self::getEnv();
            if(!isset(self::$con))
            {
                try {
                    self::$con = new PDO("mysql:host=" . $env['host'] . ";dbname=" . $env['database'], $env['username'], $env['password']);
                    echo "hey ho, let's go <br>";
                } catch (PDOException $err) {
                    echo ("ERRO: " . $err->getMessage());
                }            
            }
            return self::$con;
        }
    }
?>