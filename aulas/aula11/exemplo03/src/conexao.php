<?php

    class Conexao{
        
        public static function getConexao()
        {
            try {
                return new PDO("mysql:host=localhost;dbname=conquestgo", "root", "");
            } catch(\PDOException $e) {
                echo 'Error ao conectar com banco de dados. ' . $e->getMessage();
                return null;
            }
        }
    }