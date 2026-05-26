<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'Anyrel - Mail Manager',
    'description' => 'TYPO3 Mail Manager for DMF',
    'category' => 'be',
    'author_email' => 'info@mediatis.de',
    'author_company' => 'Mediatis AG',
    'state' => 'stable',
    'version' => '3.0.0',
    'constraints' => [
        'depends' => [
            'typo3' => '12.4.0-14.99.99',
            'dmf_core' => '4.0.0-4.99.99',
        ],
        'conflicts' => [
        ],
        'suggests' => [
        ],
    ],
];
