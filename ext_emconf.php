<?php

/**
 * Extension Manager/Repository config file for ext "andreas_nausner".
 */
$EM_CONF[$_EXTKEY] = [
    'title' => 'Andreas Nausner',
    'description' => '',
    'category' => 'templates',
    'constraints' => [
        'depends' => [
            'bootstrap_package' => '15.0.0-15.99.99',
        ],
        'conflicts' => [
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'HubertusGolfItServiceUndBeratung\\AndreasNausner\\' => 'Classes',
        ],
    ],
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'Hubertus Golf',
    'author_email' => 'berti@golf-net.de',
    'author_company' => 'Hubertus golf - IT-Service und Beratung',
    'version' => '1.0.0',
];
