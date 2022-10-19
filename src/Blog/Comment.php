<?php
namespace App\Blog;

class Comment  
{
    public function __construct(
        private int $id,
        private User $user,
        private Post $post,
        private string $text
    )
    {}

    /**
     * @return integer
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param integer $id
     * @return void
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /*
    * @return User
    */
   public function getUser (): User
   {
       return $this->user;
   }

   /**
    * @param User $user
    * @return void
    */
   public function setUser (User $user): void
   {
       $this->user = $user;
   }

   /*
    * @return Post
    */
    public function getPost(): Post
    {
        return $this->post;
    }
 
    /**
     * @param Post $post
     * @return void
     */
    public function setPost(Post $post): void
    {
        $this->post = $post;
    }

    /**
     * @return string
     */ 
    public function getText(): string
    {
        return $this->text;
    }

    /**
     * @return  string
     */ 
    public function setText(string $text)
    {
        $this->text = $text;
    }

    public function __toString()
    {
        return "$this->user оставил комментарий: $this->text" . PHP_EOL;
    }
}