<?php

namespace App\DTOs\Category;

class UpdateCategoryDTO 
{

    public function __construct(
        public readonly string $name,
    )
    {}

    public static function fromArray(array $data)
    {
        return new self(
            name: trim($data['name'] ?? ''),
        );
    }  

    public function toArray()
    {
        return [
            'name' => $this->name,
        ];
    }
}