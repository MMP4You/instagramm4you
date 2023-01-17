<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'Instagramm4You',
    'description' => 'Lädt Instagram Beiträge anhand eines Acces Tokens',
    'category' => 'plugin',
    'author' => 'Müllenborn-Pitzen@4ou Promotion GmbH',
    'author_email' => 'markus.muellenborn-pitzen@4you-werbeagentur.de',
    'state' => 'stable',
    'clearCacheOnLoad' => 0,
    'version' => '1.0.0',
    'constraints' => [
        'depends' => [
            'typo3' => '11.5.0-11.5.99',
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
];
