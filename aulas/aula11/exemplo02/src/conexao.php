<?php
    header('Content-Type: text/html; charset=utf-8;');

    try {
        $dbh = new PDO("mysql:host=localhost;dbname=conquestgo", "root", "");
        echo 'Conexão com sucesso!';
    } catch(\PDOException $e) {
        echo 'Error ao conectar com banco de dados. ' . $e->getMessage();
    }
       