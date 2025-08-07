<?php

namespace App\Services;

class ProduitsService
{
     protected $products = [
        [
            'id' => 1,
            'name' => 'MacBook Pro 14"',
            'price' => 1999.99,
            'description' => 'Apple M3 chip, 16GB RAM, 512GB SSD.',
        ],
        [
            'id' => 2,
            'name' => 'Samsung Galaxy S24',
            'price' => 899.99,
            'description' => '6.2" AMOLED, 128GB storage, triple camera.',
        ],
        [
            'id' => 3,
            'name' => 'Sony WH-1000XM5',
            'price' => 349.99,
            'description' => 'Noise-canceling wireless headphones.',
        ],
        [
            'id' => 4,
            'name' => 'Dell Ultrasharp Monitor',
            'price' => 499.99,
            'description' => '4K 27-inch professional display.',
        ],
        [
            'id' => 5,
            'name' => 'Logitech MX Master 3S',
            'price' => 99.99,
            'description' => 'High precision wireless mouse.',
        ],
    ];

    /**
     * Create a new class instance.
     */
    public function __construct()
    {
        //
    }

    public function all() : array
    {
        return $this->products;
    }

    public function findOne(int $idProduit) : array
    {
        return array_filter($this->products,fn($element) => $element['id'] === $idProduit);
    }

}
