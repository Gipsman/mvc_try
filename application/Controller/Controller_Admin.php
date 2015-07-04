<?php
class Controller_Admin extends Controller
{	
	public $er = "Админка находиться в стадии разработки!";
	function __construct()
	{   parent::__construct();
		$this->check_login();

	}
	
	function action_index()
	{
		echo $this->view->render('Admin/admin_view.php',  array('navIndex' => true, 'warningMess' => $this->er));
	}
	
	function action_pages()
	{	$model_pages = $this->loadModel('Pages');
		$result = $model_pages->getAllPages();
		echo $this->view->render('Admin/admin_pages.php',  array('pages' => $result , 'navPages' => true, 'warningMess' => $this->er));
	}

	function action_onepage($id)
	{	$model_pages = $this->loadModel('Pages');
		$result = $model_pages->getPageById($id);
		echo $this->view->render('Admin/admin_onepage.php',  array('page' => $result , 'navPages' => true, 'warningMess' => $this->er));
	}

	function action_news()
	{	
		$model_news = $this->loadModel('News');
		$news = $model_news->getNews();
		echo $this->view->render('Admin/admin_news.php', array('news' => $news , 'navNews' => true, 'warningMess' => $this->er));
	}

	function action_article($id)
	{	
		$model_news = $this->loadModel('News');
		$article = $model_news->getArticleById($id);
		echo $this->view->render('Admin/admin_article.php', array('article' => $article , 'navNews' => true, 'warningMess' => $this->er));
	}

	// Действие для разлогинивания администратора
	function action_logout()
	{	unset($_SESSION['login_admin']);
		header('Location:/');
	}

	function action_login($error_mes = null)
	{
	echo $this->view->render('Admin/login_admin_view.php', array('error_mes' => $error_mes));
	}


	function check_login()
	{ 
		if(isset($_SESSION['login_admin']) && $_SESSION['login_admin'] == 'admin' )
			{return true;}
		else{
			 if(isset($_POST['username']) && isset($_POST['password'])){
				if($_POST['username'] =='' || $_POST['password'] == '')
					{$this->action_login('Введите логин и пароль!');
					 exit;
					}
				$model_users = $this->loadModel('Users');
				$result = $model_users->checkLoginAndPassword();
				if(!$result)
					return true;
				else
					{
					$this->action_login($result);
					exit;
					}
				}
			  $this->action_login();
		      exit;
		  }
	}
}