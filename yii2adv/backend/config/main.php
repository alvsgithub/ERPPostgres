<?php
$params = array_merge(
    require(__DIR__ . '/../../common/config/params.php'),
    require(__DIR__ . '/../../common/config/params-local.php'),
    require(__DIR__ . '/params.php'),
    require(__DIR__ . '/params-local.php')
);

return [
    'id' => 'app-backend',
    'basePath' => dirname(__DIR__),
    'controllerNamespace' => 'backend\controllers',
    'bootstrap' => ['log'],
    'modules' => [],
	//'homeUrl' => '/yii2adv/administrator',
    'components' => [
	
		/* 'urlManager' => [
			'class' => 'yii\web\UrlManager',
			'enablePrettyUrl' => true,
			'showScriptName' => false,
			'rules'=>array(
					'web//'=>'web/view',
					'webs/'=>'web/index' 
					),
        ], */
		
		/* 'request' => [
            'baseUrl' => '/yii2adv/administrator',
        ], */
		
        'user' => [
            'identityClass' => 'common\models\User',
            'enableAutoLogin' => true,
        ],
	
		
		'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
    ],
    'params' => $params,
];
