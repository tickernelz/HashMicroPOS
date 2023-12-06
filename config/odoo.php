<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Odoo Host
    | Must start with http:// or https:// and include port
    |--------------------------------------------------------------------------
    */
    'host' => env('ODOO_HOST',''),

    /*
    |--------------------------------------------------------------------------
    | Database name
    |--------------------------------------------------------------------------
    */
    'database' => env('ODOO_DATABASE',''),

    /*
    |--------------------------------------------------------------------------
    | User name
    |--------------------------------------------------------------------------
    */
    'username' => env('ODOO_USERNAME', ''),

    /*
    |--------------------------------------------------------------------------
    | User password
    |--------------------------------------------------------------------------
    */
    'password' => env('ODOO_PASSWORD', ''),

    'context' => [
        'lang' => env('ODOO_LANG', null),
        'timezone' => env('ODOO_TIMEZONE', null),
        'companyId' => env('ODOO_COMPANY_ID', null),
    ]
];