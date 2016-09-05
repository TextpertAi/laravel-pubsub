<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Default
    |--------------------------------------------------------------------------
    |
    | The default pub-sub connection to use.
    |
    | Supported: "null", "local", "redis", "kafka", "gcloud"
    |
    */

    'default' => env('PUBSUB_CONNECTION', 'redis'),

    /*
    |--------------------------------------------------------------------------
    | Pub-Sub Connections
    |--------------------------------------------------------------------------
    |
    | The available pub-sub connections to use.
    |
    | A default configuration has been provided for all adapters shipped with
    | the package.
    |
    */

    'connections' => [

        'null' => [
            'driver' => 'null',
        ],

        'local' => [
            'driver' => 'local',
        ],

        'redis' => [
            'driver' => 'redis',
            'scheme' => 'tcp',
            'host' => env('REDIS_HOST', 'localhost'),
            'password' => env('REDIS_PASSWORD', null),
            'port' => env('REDIS_PORT', 6379),
            'database' => 0,
            'read_write_timeout' => 0,
        ],

        'kafka' => [
            'driver' => 'kafka',
            'brokers' => env('KAFKA_BROKERS', 'localhost')
        ],

        'gcloud' => [
            'driver' => 'gcloud',
            'project_id' => env('GOOGLE_CLOUD_PROJECT_ID'),
            'key_file' => env('GOOGLE_CLOUD_CREDENTIALS_FILE'),
        ],

    ],

];