<?php

namespace App\DTOs\Film;

class UpdateFilmDTO 
{


    public function __construct(
        public readonly string $name,
        public readonly ?string $image,
        public readonly ?int $category
    )
    {
    }

    public static function fromArray(array $data)
    {
        return new self(
            name: trim($data['name'] ?? ''),
            image: trim($data['image'] ?? ''),
            category: $data['category'] ?? null
        );
    }

    public function toArray()
    {
        return [ 
            'name' => $this->name,
            'image' => $this->image,
            'category' => $this->category
        ];
    }

}