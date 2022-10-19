<?php

$connection = new PDO('sqlite:' . __DIR__ . '/blog.sqlite');

//Вставляем строку в таблицу пользователей
$connection->exec(
    "INSERT INTO users (UUID, first_name, last_name) VALUES (1, 'Ivan', 'Nikitin')"
);
