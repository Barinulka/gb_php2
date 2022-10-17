<?php
    use HW\Person\Person;
    use HW\Person\User;
    use HW\Blog\Post;

    spl_autoload_register(function ($class) {
        $file = str_replace('\\', DIRECTORY_SEPARATOR, $class) . '.php';
        if (file_exists($file)) {
            require $file;
        }
    });

    $post = new Post(
       new Person(
        new User('Ivan', 'Ivanov'),
        new DateTimeImmutable()
       ),
       'Hello World'
    );

    echo $post . PHP_EOL;