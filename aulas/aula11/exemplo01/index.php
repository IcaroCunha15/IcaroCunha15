<?php
$dbh= new PDO("mysql:host=localhost;dbname=conquestgo", "root", "");
echo 'Conexão com sucesso!';
$dbh = null;