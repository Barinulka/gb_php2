<?php
namespace App\Person;

class Name
{
    public function __construct(
        private string $firtName,
        private string $lastName
    )
    {}

    /**
     * @return string
     */
    public function firtName(): string
    {
        return $this->firtName;
    }

    /**
     * @param string $firtName
     * @return void
     */   
    public function setFirtName(string $firtName): void
    {
        $this->firtName = $firtName;
    }

    /**
     * @return string
     */
    public function lastName(): string
    {
        return $this->lastName;
    }

    /**
     * @param string $LastName
     * @return void
     */   
    public function setLastName(string $lastName): void
    {
        $this->lastName = $lastName;
    }

    public function __toString()
    {
        return $this->firtName . ' ' . $this->lastName; 
    }

}
