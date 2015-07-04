<?php

class Controller_Main extends Controller
{

	function action_index()
	{	
		echo $this->view->render('main_view.php');
	}

	function action_error404()

	{
		echo $this->view->render('Main/error404.php');
	}

	function action_staticPage($slug)
	{	
		$model_pages = $this->loadModel('Pages');
		$result = $model_pages->getPage($slug);
		if(!$result)
			$this->stopAndRedirect($this->router->generate('error404'));
		echo $this->view->render('Main/static_page.php',  array('page' => $result));
	}
}