<?php

include 'autoload.php';

use App\Controllers\NewsController;
$url = $_SERVER['REQUEST_URI']; 
$controller = false;

if ($url == "/" || $url === '/news/') {
	$controller = new NewsController;
	$methodName = 'actionList';
	$args = [1];
} elseif (preg_match("{^/news/(\d+)/$}", $url, $NewsId)) {
	$controller = new NewsController;
	$methodName = "actionDetail";
	$args = [$NewsId[1]];
} elseif (preg_match("{^/news/page-(\d+)/$}", $url, $currentPage)) {
	$controller = new NewsController;
	$methodName = "actionList";
	$args = [$currentPage[1]];
} 

if ($controller) {
	call_user_func_array([$controller, $methodName], $args);
}

