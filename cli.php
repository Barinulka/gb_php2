<?php
    use App\Person\Person;
    use App\Person\User;
    use App\Blog\Post;

    require_once __DIR__ . '/vendor/autoload.php';

    $post = new Post(
       new Person(
        new User('Ivan', 'Ivanov'),
        new DateTimeImmutable()
       ),
       'Hello World'
    );

    echo $post . PHP_EOL;