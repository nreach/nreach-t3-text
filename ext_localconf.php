<?php
defined('TYPO3_MODE') || die();

$GLOBALS['TYPO3_CONF_VARS']['SYS']['formEngine']['nodeRegistry'][] = [
    'nodeName' => 'nreach_pagekeywords',
    'class' => \Nreach\T3Text\Form\Element\PageKeywords::class,
    'priority' => 50,
];
