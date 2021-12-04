<?php

$users = [
    [
        "firstName" => "Maurizio",
        "lastName" => "Pignotti",
        "payments" => [
            [
                "type" => "credit card",
                "number" => 001
            ],
            [
                "type" => "paypal",
                "number" => 002
            ],

        ],
        "cart" => [
            [
                "title"=> "pc",
                "type" => "electronics",
                "price" => 1000,
                "infoProd" => [
                    "memory" => 32,
                    "screen" => 15
                ]
            ],
            
        ],
        "prime" => true,
        "discount" => 0
    ],
    [
        "firstName" => "Gionata",
        "lastName" => "ciao",
        "payments" => [
            [
                "type" => "credit card",
                "number" => 001
            ],
            [
                "type" => "paypal",
                "number" => 002
            ],

        ],
        "cart" => [
            [
                "product"=> "pc",
                "price" => "1000"
            ],
            [
                "product"=> "smartphone",
                "price" => "500"
            ],
        ],
        "prime" => false,
        "discount" => 0
        
    ],
    [
        "firstName" => "Stefano",
        "lastName" => "Ciao",
        "payments" => [
            [
                "type" => "credit card",
                "number" => 001
            ],
            [
                "type" => "paypal",
                "number" => 002
            ],

        ],
        "cart" => [
            [
                "product"=> "pc",
                "price" => "1000"
            ],
            [
                "product"=> "smartphone",
                "price" => "500"
            ],
        ],
        "prime" => true,
        "discount" => 0
    ],
]

?>