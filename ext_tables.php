<?php
defined('TYPO3') || die();

(static function() {
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_instagramm4you_domain_model_instafeeds', 'EXT:instagramm4you/Resources/Private/Language/locallang_csh_tx_instagramm4you_domain_model_instafeeds.xlf');
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_instagramm4you_domain_model_instafeeds');
})();
