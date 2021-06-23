<?php

return [
    "context" => [
        "name" => "_vx"
    ],

    "modules" => [
        "hostlink/puxt-db",
        "mathsgod/puxt-vx",
    ],

    "database" => [
        "hostname" => "127.0.0.1",
        "username" => "root",
        "password" => "111111",
        "database" => "raymond",
    ],

    "VX" => [
        "jwt" => [
            "secret" => "hostlink secret key"
        ],
        "language" => [
            "en" => "English",
            "zh-hk" => "中文"
        ]
    ]
];
