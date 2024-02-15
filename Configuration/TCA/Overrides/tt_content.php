<?php
defined('TYPO3') || die();

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
    'WsT3Shopify',
    'T3shopifyfrontend',
    't3 Shopify frontend',
    'ws_t3_shopify-plugin-t3shopifyfrontend'
);

if (!is_array($GLOBALS['TCA']['tt_content']['types']['t3shopifyfrontend'] ?? false)) {
    $GLOBALS['TCA']['tt_content']['types']['t3shopifyfrontend'] = [];
}

// Add content element to selector list
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTcaSelectItem(
    'tt_content',
    'CType',
    [
        't3 Shopify frontend',
        't3shopifyfrontend',
        'ws_t3_shopify-plugin-t3shopifyfrontend',
        'ws_t3_shopify'
    ]
);
