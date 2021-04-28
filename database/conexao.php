<?php

//declaramos os informações de conexão
const HOST = "localhost";
const USER = "root";
const PASSWORD = "361345gumi";
const DATABASE = "tasklist";

//fazemos a conexão com o mysql
$conexao = mysqli_connect(HOST, USER, PASSWORD, DATABASE);

$minhaNovaVariável = "Abobrinha";
