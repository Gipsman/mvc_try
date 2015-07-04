<?php
class Controller_News extends Controller
{
	public function action_index()

	{
		$model_news = $this->loadModel('News');
		$news = $model_news->getNews();
		echo $this->view->render('News/news_view.php', array('news' => $news));
	}

	public function action_article($slug)
	{
		$model_news = $this->loadModel('News');
		$article = $model_news->getArticleBySlug($slug);	
		echo $this->view->render('News/article_view.php', array('article' => $article));
	}

	public function action_edit($id=null)
	{	
		if(!$_SESSION['login_admin']){
			$this->stopAndRedirect('/news');	
		}
		$model_news = $this->loadModel('News');
		if(isset($_POST['save_news'])){
			$model_news->saveNews();	
		}
		$article = $model_news->getArticleById($id);	
		echo $this->view->render('News/article_edit.php', array('article' => $article));
	}
}