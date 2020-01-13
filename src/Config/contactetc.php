<?php

return [

    // should we automatically load the routes.php file in /vendor/webdevetc/contactetc/src/routes.php? default: true)
    'include_default_routes' => true,

    // what should the default URL be.  (default: contact-us)
    // you can add more contact forms, but this is the default one. Only works if include_default_routes is true.
    'contact_us_slug' => 'contact-us',

    // should we show all of the $errors above the form? (default: false)
    'show_errors_above_form' => false,

    // should be show a small error message actually next to the field? (default: true)
    'show_errors_below_field' => true,

    'contact_forms' => [
        /* an array of the contact forms
         make sure to update this and include the config files.
         you can auto generate these files by running:
             php artisan make:contactetcform MainContactForm
        (and then edit the file that was created in /app/ContactEtcForms/)
        */
        app_path('ContactEtcForms/MainContactForm.php'),
    ],
];
