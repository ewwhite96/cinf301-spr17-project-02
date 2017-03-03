<?php
namespace App\Controllers;
use App\Renderer as Renderer;


class MainController
{
	public function home()
	{
		$title = 'Twitter';
		
		$view = new Renderer('views/main/');
		$view->title = $title;
		$view->render('home.php');
	}


}
