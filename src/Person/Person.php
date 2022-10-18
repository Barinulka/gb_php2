<?php 
    namespace App\Person;

    use DateTimeImmutable;
    use App\Person\User;

    class Person {
        public function __construct(
            private User $name,
            private DateTimeImmutable $registeredOn
        ) {

        }

        public function __toString(){
            return $this->name .
                ' (на сайте с ' . $this->registeredOn->format('Y-m-d') . ')';
        }
    }