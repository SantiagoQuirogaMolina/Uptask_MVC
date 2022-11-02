<?php

$db = mysqli_connect('us-cdbr-east-06.cleardb.net', 'bb3d4bdb', 'b0ddaf5df8de9d', 'heroku_4886c4c015bbbca');


if (!$db) {
    echo "Error: No se pudo conectar a MySQL.";
    echo "errno de depuración: " . mysqli_connect_errno();
    echo "error de depuración: " . mysqli_connect_error();
    exit;
}



