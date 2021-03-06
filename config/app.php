<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Application Debug Mode
    |--------------------------------------------------------------------------
    |
    | When your application is in debug mode, detailed error messages with
    | stack traces will be shown on every error that occurs within your
    | application. If disabled, a simple generic error page is shown.
    |
    */

    'debug' => env('WP_DEBUG', false),

    /*
    |--------------------------------------------------------------------------
    | Application Timezone
    |--------------------------------------------------------------------------
    |
    | Here you may specify the default timezone for your application, which
    | will be used by the PHP date and date-time functions. We have gone
    | ahead and set this to a sensible default for you out of the box.
    |
    */

    'timezone' => 'UTC',

    /*
    |--------------------------------------------------------------------------
    | WordPress Updates
    |--------------------------------------------------------------------------
    |
    | Enable or disable WordPress core, plugins and themes updates.
    |
    */

    'updates' => false,

    /*
    |--------------------------------------------------------------------------
    | GZIP
    |--------------------------------------------------------------------------
    |
    | Enable Gzip if available. Set this to false if you want to remove GZIP
    | support from your theme.
    |
    */

    'gzip' => true,

    /*
    |--------------------------------------------------------------------------
    | Disallow File Edit
    |--------------------------------------------------------------------------
    |
    | Occasionally you may wish to disable the plugin or theme editor to
    | prevent overzealous users from being able to edit sensitive files and
    | potentially crash the site.
    |
    */

    'disallow_file_edit' => true,

];
