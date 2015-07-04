<?php
use Routing\UrlGenerator;

class Controller {
	
	protected $view;
	protected $router;
	
	function __construct()
	{	
		global $router;
		$this->router = $router;
		$loader = new Twig_Loader_Filesystem(DIR_VIEW);
		$this->view = new Twig_Environment($loader, array(
		    'cache'       => 'twig_cache',
		    'auto_reload' => true,
		    'debug' => true
		));
		$this->view->addGlobal('url', $this->router);
        $this->view->addGlobal('this', $this);
//		$this->view->addGlobal('SESSION', $_SESSION);
		$this->view->addExtension(new Twig_Extension_Debug());
	}
	
	// действие (action), вызываемое по умолчанию
	function action_index()
	{
		// todo	
	}

	public function loadModel($model) {
	$file  = 'application/Model/Model_' . $model . '.php';
	$class = 'Model_' . ucfirst(preg_replace('/[^a-zA-Z0-9]/', '', $model));

	if (file_exists($file)) { 
		include_once($file);
		}
	else{
			var_dump($file);  
			echo '<br>';
			var_dump($class);
		die('Не удалось подключить модель');				
		}
	return new $class;
	}

	protected function stopAndRedirect($url)
	{
	    header('Location: ' . $url);

	    $content = sprintf(
	        '<!DOCTYPE html><html><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8" /><meta http-equiv="refresh" content="1;url=%1$s" /><title>Redirecting to %1$s</title></head><body>Redirecting to <a href="%1$s">%1$s</a>.</body></html>',
	        htmlspecialchars($url, ENT_QUOTES, 'UTF-8')
	    );

	    echo $content;

	    exit;
	}

        // вызов экшена
	function render($aC, $data = [])
	{
            list($class, $action) = explode(':', $aC, 2);
             call_user_func_array(array(new $class, $action), $data);
	}

	function getSession()
	{
		return $_SESSION;
	}
	
}
