<?php

include_once '/var/www/html/mm.loc/models/News.php';

class NewsController {

	public function actionIndex()
		{
		    echo 'Несколько новостей';
		    $newsList = array();
		    $newsList = News::getNewsList();

		    echo '<pre>';
		    print_r($newsList);
		    echo '</pre>';
			return true;
		}

    public function actionView($id)
        {
            echo 'Одна новость';
            if ($id) {
                $newsItem = News::getNewsItemById($id);
                echo '<pre>';
                print_r($newsItem);
                echo '</pre>';
            }
        }


}

