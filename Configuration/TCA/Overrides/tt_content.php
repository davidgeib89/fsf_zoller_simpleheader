<?php
defined('TYPO3_MODE') or die();

call_user_func(function () {
    // Add the FlexForm
    $GLOBALS['TCA']['tt_content']['types']['list']['subtypes_excludelist']['fsfzollersimpleheader_zollersimpleheader'] = 'recursive,select_key,pages';
    $GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist']['fsfzollersimpleheader_zollersimpleheader'] = 'pi_flexform';
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue(
        'fsfzollersimpleheader_zollersimpleheader',
        'FILE:EXT:fsf_zoller_simpleheader/Configuration/FlexForms/flexform.xml'
    );
});
