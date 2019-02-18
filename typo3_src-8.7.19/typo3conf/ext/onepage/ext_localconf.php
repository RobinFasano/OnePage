<?php
defined('TYPO3_MODE') || die();

/***************
 * Add default RTE configuration
 */
$GLOBALS['TYPO3_CONF_VARS']['RTE']['Presets']['onepage'] = 'EXT:onepage/Configuration/RTE/Default.yaml';

call_user_func(function () {
    if (TYPO3_MODE === 'BE') {
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTypoScriptSetup(
            trim('
                module.tx_form {
                    settings {
                        yamlConfigurations {
                            100 = EXT:onepage/Configuration/Yaml/CustomFormSetup.yaml
                        }
                    }
                }
            ')
        );
    }
});
