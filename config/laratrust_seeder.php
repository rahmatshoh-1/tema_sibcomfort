<?php

return [
    /**
     * Control if the seeder should create a user per role while seeding the data.
     */
    'create_users' => false,

    /**
     * Control if all the laratrust tables should be truncated before running the seeder.
     */
    'truncate_tables' => true,

    'roles_structure' => [
        'superadministrator' => [
            "users"                 => "r,d",
            "admins"                => "c,r,u,d",
            "sellers"               => "c,r,u,d",
            "categories"            => "c,r,u,d",
            "colors"                => "c,r,u,d",
            "collections"           => "c,r,u,d",
            "brands"                => "c,r,u,d",
            "countries"             => "c,r,u,d",
            "materails"             => "c,r,u,d",
            "manufacturer"          => "c,r,u,d",
            "roles"                 => "c,r,u,d",
            "images"                => "c,r,u,d",
            "gallery"               => "c,r,u,d",
            "coverages"             => "c,r,u,d",
        ]
    ],

    'permissions_map' => [
        'c' => 'create',
        'r' => 'read',
        'u' => 'update',
        'd' => 'delete'
    ]
];
