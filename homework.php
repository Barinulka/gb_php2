<?php
    // use HW\User\Name;
    use HW\User\User_Person;
    use HW\Blog\Post;
    use HW\User_Name\User\User_Name;

    spl_autoload_register(function ($class) {
        
        $file = str_replace('\\', DIRECTORY_SEPARATOR, $class) . '.php';
        $path = explode('/', $file);
        $newPath = array();

        foreach ($path as $k => $v) {
            if (strpos($v, '.php') && strpos($v, '_')) {
                $newPath = explode('_', $v);
                unset($path[$k]);
            }
        }

        $result = array_merge($path, $newPath);

        $actualFile = implode(DIRECTORY_SEPARATOR, array_unique($result));

        if (file_exists($actualFile)) {
            echo 'File: ' . $actualFile . ' - loaded' . PHP_EOL;
            require $actualFile;
        }
    });

    $post = new Post(
       new User_Person(
        new User_Name('Ivan', 'Ivanov'),
        new DateTimeImmutable()
       ),
       'Hello World'
    );

    echo $post . PHP_EOL;