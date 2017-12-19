<?php

return [
	'components' => [
		'urlManager' => [
			'class' => 'yii\web\UrlManager',
			'baseUrl' => 'https://demo.cmsgears.com/templates/shop'
		],
		// CMG Modules - Core
		'migration' => [
			'class' => 'cmsgears\core\common\components\Migration',
			'cmgPrefix' => 'cmg_',
			'appPrefix' => 'cmg_',
			'siteName' => 'CMSGears',
			'siteTitle' => 'Shop Demo',
			'siteMaster' => 'demomaster',
			'primaryDomain' => 'cmsgears.com',
			'defaultSite' => 'https://demo.cmsgears.com/templates/shop',
			'defaultAdmin' => 'https://demo.cmsgears.com/templates/shop/admin',
			'uploadsUrl' => 'https://demo.cmsgears.com/templates/shop/uploads'
		]
	]
];
