<?php
    namespace HW\Person;

    class User {
        
        public function __construct(
            private string $firstName,
            private string $lastName
        ) {

        }

        public function __toString() {
            return $this->firstName . ' ' . $this->lastName;
        }
    }