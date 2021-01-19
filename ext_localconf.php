<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'FREESIXTYFIVE.FsfZollerSimpleheader',
            'Zollersimpleheader',
            [
                'Simpleheader' => 'list'
            ],
            // non-cacheable actions
            [
                'Simpleheader' => ''
            ]
        );

        // wizards
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
            'mod {
                wizards.newContentElement.wizardItems.plugins {
                    elements {
                        zollersimpleheader {
                            iconIdentifier = fsf_zoller_simpleheader-plugin-zollersimpleheader
                            title = Simpleheader
                            description = LLL:EXT:fsf_zoller_simpleheader/Resources/Private/Language/locallang_db.xlf:tx_fsf_zoller_simpleheader_zollersimpleheader.description
                            tt_content_defValues {
                                CType = list
                                list_type = fsfzollersimpleheader_zollersimpleheader
                            }
                        }
                    }
                    show = *
                }
           }'
        );
		$iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Imaging\IconRegistry::class);
		
			$iconRegistry->registerIcon(
				'fsf_zoller_simpleheader-plugin-zollersimpleheader',
				\TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
				['source' => 'EXT:fsf_zoller_simpleheader/Resources/Public/Icons/zoller_z.svg']
			);
		
    }
);
