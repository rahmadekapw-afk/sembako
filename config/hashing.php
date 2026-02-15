<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Default Hash Driver
    |--------------------------------------------------------------------------
    |
    | This option controls the default hash driver that will be used to hash
    | passwords for your application. By default, the bcrypt algorithm
    | is used; however, you remain free to modify this option here.
    |
    | Supported: "bcrypt", "argon", "argon2id", "sha1"
    |
    */

    'driver' => env('HASH_DRIVER', 'sha1'),

    /*
    |--------------------------------------------------------------------------
    | Bcrypt Options
    |--------------------------------------------------------------------------
    |
    | Here you may specify the configuration options for the bcrypt algorithm.
    | These options control the complexity of the hash and the number of
    | rounds that will be used to generate the hash.
    |
    */

    'bcrypt' => [
        'rounds' => env('BCRYPT_ROUNDS', 12),
        'verify' => true,
    ],

    /*
    |--------------------------------------------------------------------------
    | Argon Options
    |--------------------------------------------------------------------------
    |
    | Here you may specify the configuration options for the argon algorithm.
    | These options control the complexity of the hash and the resources
    | that will be used to generate the hash.
    |
    */

    'argon' => [
        'memory' => 65536,
        'threads' => 1,
        'time' => 4,
        'verify' => true,
    ],

    'sha1' => [
        'driver' => 'sha1',
    ],

];
