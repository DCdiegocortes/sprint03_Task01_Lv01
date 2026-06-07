<?php
declare(strict_types=1);

class Athlete
{
    private string $name;
    private string $country;

    public function __construct(string $name, string $country)
    {
        $this->inputValidation($name, $country);
        $this->name = $name;
        $this->country = $country;
    }

    private function inputValidation(string $name,string $country): void
    {
        if (empty($name)) {
            throw new InvalidArgumentException("Value name: cannot be empty");
        }
        if (empty($country)) {
            throw new InvalidArgumentException("Value country: cannot be empty");
        }
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getCountry(): string
    {
        return $this->country;
    }


}
