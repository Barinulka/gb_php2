<?php

namespace App\Blog;

class Post
{
    public function __construct(
        private int $id,
        private User $user,
        private string $text
    ) {
    }

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
    public function getUser(): User
    {
        return $this->user;
    }

    /**
     * @param User $user
     * @return void
     */
    public function setUser(User $user): void
    {
        $this->user = $user;
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
    public function setText(string $text): Post
    {
        $this->text = $text;
        return $this;
    }

    public function __toString()
    {
        return "$this->user пишет: $this->text" . PHP_EOL;
    }
}
