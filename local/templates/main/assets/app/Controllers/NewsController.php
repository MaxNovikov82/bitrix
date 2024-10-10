<?php 

namespace App\Controllers;

use App\Models\NewsModel;

class NewsController
{
	public static function actionList($pageID)
	{
		session_start();
		$code = "News";
		$news = new NewsModel;

		$amount = 4;
		$start = ($pageID - 1) * $amount;

		$_SESSION['currentPage'] = $currentPage ?? 1;
		
		$st = $news::getList($start, $amount);
		$bt = $news::getLast();

		ob_start();
		include 'views/News/List.php';
		$content = ob_get_clean();
		include 'views/Layout.php';		
	}

	public static function actionDetail($NewsId)
	{
		session_start();

		$_SESSION['pageID'] = $pageID ?? 1; 

		$newsModel = new NewsModel;
		$row = $newsModel->getItem($NewsId);
		$code = "News";

		ob_start();
		include 'views/News/Detail.php';
		$content = ob_get_clean();
		include 'views/Layout.php';
	}
}
