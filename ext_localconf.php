<?php
defined('TYPO3') || die();

(static function() {
    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
        'WsT3Shopify',
        'T3shopifyfrontend',
        [
            
        ],
        [
            
        ],
        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::PLUGIN_TYPE_CONTENT_ELEMENT
    );

    // wizards
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
        'mod {
            wizards.newContentElement.wizardItems.ext-ws_t3_shopify {
                header = t3-shopify
                after = common
                elements {
                    t3shopifyfrontend {
                        iconIdentifier = ws_t3_shopify-plugin-t3shopifyfrontend
                        title = LLL:EXT:ws_t3_shopify/Resources/Private/Language/locallang_db.xlf:tx_ws_t3_shopify_t3shopifyfrontend.name
                        description = LLL:EXT:ws_t3_shopify/Resources/Private/Language/locallang_db.xlf:tx_ws_t3_shopify_t3shopifyfrontend.description
                        tt_content_defValues {
                            CType = t3shopifyfrontend
                        }
                    }
                }
                show = *
            }
       }'
    );
})();
