<?php

namespace APP\Model;

class Composer
{
    public string $name;
    public ?int $age;
    public ?string $phone;

    public function __construct(
        string $name,
        ?int $age = null,
        ?string $phone = null
    ) {
        $this->name = $name;
        $this->age = $age;
        $this->phone = $phone;
    }
}
