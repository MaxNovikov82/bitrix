<?php
$arUrlRewrite=array (
  2 => 
  array (
    'CONDITION' => '#^/online/([\\.\\-0-9a-zA-Z]+)/?$#',
    'RULE' => 'alias=$1',
    'ID' => NULL,
    'PATH' => '/desktop_app/router.php',
    'SORT' => 100,
  ),
  1 => 
  array (
    'CONDITION' => '#^/video/([\\.\\-0-9a-zA-Z]+)/?$#',
    'RULE' => 'alias=$1&videoconf',
    'ID' => NULL,
    'PATH' => '/desktop_app/router.php',
    'SORT' => 100,
  ),
  6 => 
  array (
    'CONDITION' => '#^/bitrix/services/ymarket/#',
    'RULE' => '',
    'ID' => '',
    'PATH' => '/bitrix/services/ymarket/index.php',
    'SORT' => 100,
  ),
  11 => 
  array (
    'CONDITION' => '#^/news/([a-zA-Z0-9_-]+)/?$#',
    'RULE' => 'THEME_CODE=$1',
    'ID' => '',
    'PATH' => '/news/index.php',
    'SORT' => 100,
  ),
  9 => 
  array (
    'CONDITION' => '#^/news/detail/([0-9]+)/?$#',
    'RULE' => 'ID=$1',
    'PATH' => '/news/detail.php',
    'SORT' => 100,
  ),
  10 => 
  array (
    'CONDITION' => '#^/news/page/([0-9]+)/?$#',
    'RULE' => 'PAGEN_2=$1',
    'PATH' => '/news/index.php',
    'SORT' => 100,
  ),
  4 => 
  array (
    'CONDITION' => '#^/mobileapp/jn/(.*)/?$#',
    'RULE' => 'componentName=$1',
    'ID' => NULL,
    'PATH' => '/bitrix/services/mobileapp/jn.php',
    'SORT' => 100,
  ),
  7 => 
  array (
    'CONDITION' => '#^/news/detail/([0-9]+)#',
    'RULE' => 'ID=$1',
    'PATH' => '/news/detail.php',
    'SORT' => 100,
    'ID' => '',
  ),
  3 => 
  array (
    'CONDITION' => '#^/online/?([^/]*)/?$#',
    'RULE' => '',
    'ID' => NULL,
    'PATH' => '/desktop_app/router.php',
    'SORT' => 100,
  ),
  0 => 
  array (
    'CONDITION' => '#^/stssync/calendar/#',
    'RULE' => '',
    'ID' => 'bitrix:stssync.server',
    'PATH' => '/bitrix/services/stssync/calendar/index.php',
    'SORT' => 100,
  ),
  5 => 
  array (
    'CONDITION' => '#^/rest/#',
    'RULE' => '',
    'ID' => NULL,
    'PATH' => '/bitrix/services/rest/index.php',
    'SORT' => 100,
  ),
);
