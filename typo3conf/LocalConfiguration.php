<?php
return array(
	'BE' => array(
		'debug' => FALSE,
		'explicitADmode' => 'explicitAllow',
		'installToolPassword' => '$P$ClH7b5aDAwxO21kDmvDUB1.d.0cqwu1',
		'loginSecurityLevel' => 'rsa',
	),
	'DB' => array(
		'database' => 'd01f99a6',
		'host' => 'localhost',
		'password' => 'yMf5dTuUS87ht4eQ',
		'socket' => '',
		'username' => 'd01f99a6',
	),
	'EXT' => array(
		'extConf' => array(
			'rsaauth' => 'a:1:{s:18:"temporaryDirectory";s:0:"";}',
			'saltedpasswords' => 'a:2:{s:3:"BE.";a:4:{s:21:"saltedPWHashingMethod";s:41:"TYPO3\\CMS\\Saltedpasswords\\Salt\\PhpassSalt";s:11:"forceSalted";i:0;s:15:"onlyAuthService";i:0;s:12:"updatePasswd";i:1;}s:3:"FE.";a:5:{s:7:"enabled";i:1;s:21:"saltedPWHashingMethod";s:41:"TYPO3\\CMS\\Saltedpasswords\\Salt\\PhpassSalt";s:11:"forceSalted";i:0;s:15:"onlyAuthService";i:0;s:12:"updatePasswd";i:1;}}',
		),
	),
	'FE' => array(
		'debug' => FALSE,
		'loginSecurityLevel' => 'rsa',
	),
	'GFX' => array(
		'colorspace' => 'RGB',
		'im' => 1,
		'im_mask_temp_ext_gif' => 1,
		'im_path' => '/usr/bin/',
		'im_path_lzw' => '/usr/bin/',
		'im_v5effects' => -1,
		'im_version_5' => 'gm',
		'image_processing' => 1,
		'jpg_quality' => '80',
	),
	'INSTALL' => array(
		'wizardDone' => array(
			'TYPO3\CMS\Install\Updates\BackendUserStartModuleUpdate' => 1,
			'TYPO3\CMS\Install\Updates\ContentTypesToTextMediaUpdate' => 1,
			'TYPO3\CMS\Install\Updates\FileListIsStartModuleUpdate' => 1,
			'TYPO3\CMS\Install\Updates\FilesReplacePermissionUpdate' => 1,
			'TYPO3\CMS\Install\Updates\LanguageIsoCodeUpdate' => 1,
			'TYPO3\CMS\Install\Updates\MigrateShortcutUrlsAgainUpdate' => 1,
			'TYPO3\CMS\Install\Updates\PageShortcutParentUpdate' => 1,
			'TYPO3\CMS\Install\Updates\ProcessedFileChecksumUpdate' => 1,
			'TYPO3\CMS\Install\Updates\TableFlexFormToTtContentFieldsUpdate' => 1,
			'TYPO3\CMS\Rtehtmlarea\Hook\Install\DeprecatedRteProperties' => 1,
			'TYPO3\CMS\Rtehtmlarea\Hook\Install\RteAcronymButtonRenamedToAbbreviation' => 1,
		),
	),
	'MAIL' => array(
		'transport_sendmail_command' => '/usr/sbin/sendmail -t -i ',
	),
	'SYS' => array(
		'caching' => array(
			'cacheConfigurations' => array(
				'extbase_object' => array(
					'backend' => 'TYPO3\\CMS\\Core\\Cache\\Backend\\Typo3DatabaseBackend',
					'frontend' => 'TYPO3\\CMS\\Core\\Cache\\Frontend\\VariableFrontend',
					'groups' => array(
						'system',
					),
					'options' => array(
						'defaultLifetime' => 0,
					),
				),
			),
		),
		'clearCacheSystem' => FALSE,
		'devIPmask' => '',
		'displayErrors' => 0,
		'enableDeprecationLog' => FALSE,
		'encryptionKey' => 'ebb34e2b275c0038aecdd44607f8a92f41981b421e3d7d81752d28cb2edf8d96be0a55e8dd464e156347c4fc481db39f',
		'isInitialDatabaseImportDone' => TRUE,
		'isInitialInstallationInProgress' => FALSE,
		'sitename' => 'WWSP-Media',
		'sqlDebug' => 0,
		'systemLogLevel' => 2,
		't3lib_cs_convMethod' => 'mbstring',
		't3lib_cs_utils' => 'mbstring',
	),
);
?>