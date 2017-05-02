<?php

if (!defined('TYPO3_MODE')) {
    die('Access denied.');
}


// Default TypoScript for T8start
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
    $_EXTKEY,
    'Configuration/TypoScript',
    'T8start'
);
