<?php

class Controller_User extends Controller
{
	function action_auth()
	{
        $model = $this->loadModel('Users');
		$model->check_login();
        echo $this->view->render('User/auth.php');
                
              //  передать сессию в ТВиг
	}
        
}