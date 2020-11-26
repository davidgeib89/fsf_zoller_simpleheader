<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            'FREESIXTYFIVE.FsfZollerSimpleheader',
            'Zollersimpleheader',
            'Zoller Simpleheader'
        );

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile('fsf_zoller_simpleheader', 'Configuration/TypoScript', 'Zoller Simpleheader');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_fsfzollersimpleheader_domain_model_simpleheader', 'EXT:fsf_zoller_simpleheader/Resources/Private/Language/locallang_csh_tx_fsfzollersimpleheader_domain_model_simpleheader.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_fsfzollersimpleheader_domain_model_simpleheader');

    }
);
