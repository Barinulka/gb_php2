<?php
   use App\Person\Person;
   use App\Person\User;
   use App\Blog\Post;
   use App\Comment\Comment;

   require_once __DIR__ . '/vendor/autoload.php';
   
   $faker = Faker\Factory::create();

   $param = 'default';
   
   if (isset($argv[1])) {
      $param = $argv[1];
   }

   echo 'use argv: "' . $param . '"' . PHP_EOL;

   switch($param) {
      case 'user' : 
         echo user($faker->firstName(), $faker->lastName()) . PHP_EOL;
         break;
      case 'post' : 
         echo post(user($faker->firstName(), $faker->lastName()), $faker->text()) . PHP_EOL;
         break;
      case 'comment' : 
         echo comment(user($faker->firstName(), $faker->lastName()), $faker->sentence()) . PHP_EOL;
         break;

      default : 
         echo 'Use command "user", "post", "comment"' . PHP_EOL;
   }


   function user($firstName, $lastName) {
      $user = new User(
         $firstName,
         $lastName
      );

      return $user;
   }


   function post($user, $text) {
      $post = new Post(
         new Person(
            $user,
            new DateTimeImmutable()
         ),
         $text,
      );
   
      return $post;
   }

   function comment($user, $comment) {
      $comment = new Comment(
         new Person(
            $user,
            new DateTimeImmutable()
         ),
         $comment,
      );
   
      return $comment;
   }