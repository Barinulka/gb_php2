<?php
    namespace App\Comment;

    use App\Person\Person;

    class Comment {
        public function __construct
        (
            private Person $author,
            private string $text
        ) {

        }

        public function __toString()
        {
            return $this->author . ' оставил комментарий: "' . $this->text . '"'; 
        }
    }