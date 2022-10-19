<?php

use App\Blog\Comment;
use App\Blog\Post;
use App\Blog\User;
use App\Person\Name;

   require_once __DIR__ . '/vendor/autoload.php';
   
   $faker = Faker\Factory::create();

   $param = 'default';
   
   if (isset($argv[1])) {
      $param = $argv[1];
   }

   echo 'use argv: "' . $param . '"' . PHP_EOL;

   $name = new Name(
      $faker->firstName(),
      $faker->lastName()
   );

   $user = new User(
      $faker->randomDigitNotNull(),
      $name
   ); 

   switch($param) {
      case 'user' : 
         echo $user;
         break;
      case 'post' : 
         $post = new Post(
            $faker->randomDigitNotNull(),
            $user,
            $faker->text()
         );
         echo $post;
         break;
      case 'comment' : 
         $post = new Post(
            $faker->randomDigitNotNull(),
            $user,
            $faker->text()
         );
         $comment = new Comment(
            $faker->randomDigitNotNull(),
            $user,
            $post,
            $faker->sentence()
         );

         echo $comment;
         break;

      default : 
         echo 'Use command "user", "post", "comment"' . PHP_EOL;
   }