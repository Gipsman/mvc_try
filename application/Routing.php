<?php
use Routing\Router;
use Routing\MatchedRoute;
use Routing\RouterTrait;

try {
    $router = new Router(RouterTrait::GET_HTTP_HOST());

    //Admin
    $router->add('adminMain', '/admin', 'Controller_Admin:action_index' , 'GET|POST');
    $router->add('adminLogin', '/admin/login', 'Controller_Admin:action_login');
    $router->add('adminLogout', '/admin/logout', 'Controller_Admin:action_logout');

    //Main
    $router->add('homepage', '/', 'Controller_Main:action_index', 'GET|POST');
    $router->add('error404', '/404', 'Controller_Main:action_error404' , 'GET|POST');
    $router->add('staticPage', '/(slug:str).html', 'Controller_Main:action_staticPage' , 'GET|POST');

    //News
    $router->add('news', '/news', 'Controller_News:action_index', 'GET|POST');
    $router->add('article', '/article/(slug:str)', 'Controller_News:action_article' , 'GET|POST');
    $router->add('edit_news', '/edit/(id:num)', 'Controller_News:action_edit' , 'GET|POST');
    
    //Admin
    $router->add('adminMain', '/admin', 'Controller_Admin:action_index' , 'GET|POST');
    $router->add('adminLogin', '/admin/login', 'Controller_Admin:action_login');
    $router->add('adminLogout', '/admin/logout', 'Controller_Admin:action_logout');
    $router->add('adminNews', '/admin/news', 'Controller_Admin:action_news' , 'GET|POST');
    $router->add('adminArticle', '/admin/article/id(id:num)', 'Controller_Admin:action_article' , 'GET|POST');
    $router->add('adminPages', '/admin/pages', 'Controller_Admin:action_pages' , 'GET|POST');
    $router->add('adminOnePage', '/admin/page/id(id:num)', 'Controller_Admin:action_onepage' , 'GET|POST');
    

    $route = $router->match(RouterTrait::GET_METHOD(), RouterTrait::GET_PATH_INFO());

    if (null == $route) {
        $route = new MatchedRoute('Controller_Main:action_error404');
    }

    list($class, $action) = explode(':', $route->getController(), 2);

    call_user_func_array(array(new $class($router), $action), $route->getParameters());

} catch (Exception $e) {

    header($_SERVER['SERVER_PROTOCOL'] . ' 500 Internal Server Error', true, 500);

    echo $e->getMessage();
    echo $e->getTraceAsString();
    exit;
}
