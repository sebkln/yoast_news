<?php
defined('TYPO3_MODE') or die();

call_user_func(function () {
    $extensionKey = 'yoast_news';

    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::registerPageTSConfigFile(
        $extensionKey,
        'Configuration/TSconfig/Page.tsconfig',
        'Yoast for EXT:news'
    );
});
