<?php

/**
 * Extension Manager/Repository config file for ext "onepage".
 */
$EM_CONF[$_EXTKEY] = [
    'title' => 'OnePage',
    'description' => '',
    'category' => 'templates',
    'constraints' => [
        'depends' => [
            'typo3' => '8.7.0-9.5.99',
            'fluid_styled_content' => '8.7.0-9.5.99',
            'rte_ckeditor' => '8.7.0-9.5.99'
        ],
        'conflicts' => [
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'RobinFasano\\Onepage\\' => 'Classes'
        ],
    ],
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'Robin Fasano',
    'author_email' => 'robinfasano@hotmail.com',
    'author_company' => 'Robin Fasano',
    'version' => '1.0.0',
];
