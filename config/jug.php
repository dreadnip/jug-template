<?php

return [
    'default_locale' => 'nl',
    'locales' => [
        'nl',
        'fr'
    ],
    'hash' => bin2hex(random_bytes(4)),
    'year' => (new DateTime('now'))->format('Y'),
];
