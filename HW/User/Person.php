<?php 
    namespace HW\User;

    use DateTimeImmutable;
    // use HW\User\Name;
    use HW\User_Name\User\User_Name;

    class User_Person {
        public function __construct(
            private User_Name $name,
            private DateTimeImmutable $registeredOn
        ) {

        }

        public function __toString(){
            return $this->name .
                ' (на сайте с ' . $this->registeredOn->format('Y-m-d') . ')';
        }
    }