<?php
/************************************************************************
 * Extension Manager/Repository config file for ext "t8start".
 ************************************************************************/
$EM_CONF[$_EXTKEY] = array(
    'title' => 'T8start',
    'description' => 'Base extension for project "t8start"',
    'category' => 'extension',
    'constraints' => array(
        'depends' => array(
            'typo3' => '7.6.0-8.99.99',
            'fluid_styled_content' => '7.6.0-8.99.99'
        ),
        'conflicts' => array(
        ),
    ),
    'autoload' => array(
        'psr-4' => array(
            'Terminal8\\T8start\\' => 'Classes'
        ),
    ),
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'Fehmi Raqipi',
    'author_email' => 'fehmi.raqipi@terminal8.ch',
    'author_company' => 'Terminal8',
    'version' => '1.0.0',
);
