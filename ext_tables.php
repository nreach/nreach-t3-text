<?php
if (!defined('TYPO3_MODE'))
	die('Access denied.');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($_EXTKEY, 'Configuration/TypoScript', 'Nreach T3 Text');


$GLOBALS['TCA']['pages']['columns']['keywords']['config']['fieldControl']['nreach'] = [
    'renderType' => 'nreach_pagekeywords'
];
