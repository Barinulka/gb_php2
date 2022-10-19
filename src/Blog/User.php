<?php

namespace App\Blog;

use App\Person\Name;

class User
{
  public function __construct(
    private int $id,
    private Name $username,
  ) {
  }

  public function __toString()
  {
    return "Пользователь  ID: $this->id, $this->username" . PHP_EOL;
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
}
