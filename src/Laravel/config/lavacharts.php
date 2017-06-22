<?php

/*
|--------------------------------------------------------------------------
| Default Lavacharts Configuration
|--------------------------------------------------------------------------
|
| Here is where you can customize some of the default values that lavacharts
| uses when creating charts.
|
*/
return [

    /*
    |--------------------------------------------------------------------------
    | Auto Run
    |--------------------------------------------------------------------------
    |
    | Toggle for whether or not the lava.js module will run on page load. This
    | can be set to false for the user to manually call lava.run() when ready.
    |
    */
    'auto_run' => true,

    /*
    |--------------------------------------------------------------------------
    | Locale
    |--------------------------------------------------------------------------
    |
    | When aspects of the chart have writing generated by google, it will be in
    | this language.
    |
    */
    'locale' => 'en',


    /*
    |--------------------------------------------------------------------------
    | Timezone
    |--------------------------------------------------------------------------
    |
    | When date, time, and datetime columns are used, they will be based upon
    | this timezone.
    |
    */
    'timezone' => 'America/Los_Angeles',


    /*
    |--------------------------------------------------------------------------
    | DateTime Format
    |--------------------------------------------------------------------------
    |
    | This is the format string that Carbon will use to try and parse datetime
    | strings. Only applies to date, time, and datetime columns.
    |
    */
    'dateTimeFormat' => 'Y-m-d H:i:s',
];
