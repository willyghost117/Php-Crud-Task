<?php

// iniciando session para guardar los mensajes

session_start();
$conn = mysqli_connect(
    'localhost',
    'root',
    '',
    'php_mysql_crud'
);
