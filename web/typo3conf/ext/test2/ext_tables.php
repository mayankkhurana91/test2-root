<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            'Test2.Test2',
            'Information',
            'Information'
        );

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile('test2', 'Configuration/TypoScript', 'Test2');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_test2_domain_model_order', 'EXT:test2/Resources/Private/Language/locallang_csh_tx_test2_domain_model_order.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_test2_domain_model_order');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_test2_domain_model_dishes', 'EXT:test2/Resources/Private/Language/locallang_csh_tx_test2_domain_model_dishes.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_test2_domain_model_dishes');

    }
);
