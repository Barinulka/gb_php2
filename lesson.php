<?php

use App\Blog\Comment;
use App\Blog\Post;
use App\Blog\User;
use App\Person\Name;
use App\Blog\Exceptions\UserNotFoundException;
use App\Blog\Repositories\UsersRepository\InMemoryUsersRepository;

require_once __DIR__ . '/vendor/autoload.php';

$faker = Faker\Factory::create();


$name1 = new Name(
   $faker->firstName(),
   $faker->lastName()
);
$name2 = new Name(
   $faker->firstName(),
   $faker->lastName()
);

$user1 = new User(
   $faker->randomDigitNotNull(),
   $name1
);

$user2 = new User(
   $faker->randomDigitNotNull(),
   $name2
);

$userRepository = new InMemoryUsersRepository();

try {
   $userRepository->save($user1);
   $userRepository->save($user2);

   echo $userRepository->get($user1->getId());
   echo $userRepository->get($user2->getId());
   echo $userRepository->get($faker->randomDigitNotNull());
} catch (UserNotFoundException $e) {
   echo $e->getMessage() . PHP_EOL;
}
