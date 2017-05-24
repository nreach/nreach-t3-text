<?php
defined('TYPO3_MODE') || die();

$GLOBALS['TYPO3_CONF_VARS']['SYS']['formEngine']['nodeRegistry'][] = [
    'nodeName' => 'nreach_pagekeywords',
    'class' => \Nreach\T3Text\Form\Element\PageKeywords::class,
    'priority' => 50,
];

$GLOBALS['TYPO3_CONF_VARS']['RTE']['Presets']['default'] = 'EXT:nreach_t3_text/Configuration/RTE/Default.yaml';
$GLOBALS['TYPO3_CONF_VARS']['RTE']['Presets']['t3kit_default'] = 'EXT:nreach_t3_text/Configuration/RTE/T3Kit.yaml';
