<?php

namespace APP\Model;

class Record
{
    public string $name;
    public ?string $address;
    public string $phone;

    public function __construct(
        string $name,
        string $phone,
        ?string $address = null
    ) {
        $this->name = $name;
        $this->address = $address;
        $this->phone = $phone;
    }
}
