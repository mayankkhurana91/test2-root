<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'Test2.Test2',
            'Information',
            [
                'Order' => 'list, show, new, create, edit, update, delete',
                'Dishes' => 'list, show, new, create, edit, update, delete'
            ],
            // non-cacheable actions
            [
                'Order' => 'create, update, delete',
                'Dishes' => 'create, update, delete'
            ]
        );

    // wizards
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
        'mod {
            wizards.newContentElement.wizardItems.plugins {
                elements {
                    information {
                        iconIdentifier = test2-plugin-information
                        title = LLL:EXT:test2/Resources/Private/Language/locallang_db.xlf:tx_test2_information.name
                        description = LLL:EXT:test2/Resources/Private/Language/locallang_db.xlf:tx_test2_information.description
                        tt_content_defValues {
                            CType = list
                            list_type = test2_information
                        }
                    }
                }
                show = *
            }
       }'
    );
		$iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Imaging\IconRegistry::class);
		
			$iconRegistry->registerIcon(
				'test2-plugin-information',
				\TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
				['source' => 'EXT:test2/Resources/Public/Icons/user_plugin_information.svg']
			);
		
    }
);
