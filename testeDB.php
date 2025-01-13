<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

$mysqli = new mysqli('localhost', 'root', '', 'sig_biblioteca');

if ($mysqli->connect_error) {
    die('Erro ao conectar: ' . $mysqli->connect_error);
}
echo 'Conexão bem-sucedida!';
?>
