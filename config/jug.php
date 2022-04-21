<?php

return [
    'default_locale' => 'en',
    'hash' => bin2hex(random_bytes(4)),
    'year' => (new DateTime('now'))->format('Y'),
    'image_cache' => 'images.json',
];
