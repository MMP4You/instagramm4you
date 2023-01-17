<?php
defined('TYPO3') || die();

(static function() {
    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
        'Instagramm4you',
        'Instagramfe',
        [
            \Instagramm4You\Instagramm4you\Controller\InstaFeedsController::class => 'index, show'
        ],
        // non-cacheable actions
        [
            \Instagramm4You\Instagramm4you\Controller\InstaFeedsController::class => ''
        ]
    );

    // wizards
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
        'mod {
            wizards.newContentElement.wizardItems.plugins {
                elements {
                    instagramfe {
                        iconIdentifier = instagramm4you-plugin-instagramfe
                        title = LLL:EXT:instagramm4you/Resources/Private/Language/locallang_db.xlf:tx_instagramm4you_instagramfe.name
                        description = LLL:EXT:instagramm4you/Resources/Private/Language/locallang_db.xlf:tx_instagramm4you_instagramfe.description
                        tt_content_defValues {
                            CType = list
                            list_type = instagramm4you_instagramfe
                        }
                    }
                }
                show = *
            }
       }'
    );
})();
