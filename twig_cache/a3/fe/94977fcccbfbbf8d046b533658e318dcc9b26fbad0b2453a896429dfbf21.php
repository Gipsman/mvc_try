<?php

/* layout.php */
class __TwigTemplate_a3fe94977fcccbfbbf8d046b533658e318dcc9b26fbad0b2453a896429dfbf21 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheet' => array($this, 'block_stylesheet'),
            'content' => array($this, 'block_content'),
            'javasript' => array($this, 'block_javasript'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
  <head>
    <meta charset=\"utf-8\">
    <title>Bootstrap, from Twitter</title>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta name=\"description\" content=\"\">

    ";
        // line 9
        $this->displayBlock('stylesheet', $context, $blocks);
        // line 31
        echo "    </head>

<body>
    <div class=\"navbar navbar-inverse navbar-fixed-top\">
      <div class=\"navbar-inner\">
        <div class=\"container\">
          <a class=\"btn btn-navbar\" data-toggle=\"collapse\" data-target=\".nav-collapse\">
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
          </a>
          <a class=\"brand\" href=\"#\">Project name</a>
          <div class=\"nav-collapse collapse\">
            <ul class=\"nav\">
              <li class=\"first active\"><a href=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["url"]) ? $context["url"] : null), "generate", array(0 => "homepage"), "method"), "html", null, true);
        echo "\">Главная</a></li>
              <li><a href=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["url"]) ? $context["url"] : null), "generate", array(0 => "staticPage", 1 => array("slug" => "services")), "method"), "html", null, true);
        echo "\">Услуги</a></li>
              <li><a href=\"/news\">Новости</a></li>
              <li class=\"last\"><a href=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["url"]) ? $context["url"] : null), "generate", array(0 => "staticPage", 1 => array("slug" => "contacts")), "method"), "html", null, true);
        echo "\">Контакты</a></li>
            </ul>       
            ";
        // line 50
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "render", array(0 => "Controller_User:action_auth"), "method"), "html", null, true);
        echo " 
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>                 

    <div class=\"container\">        
        <div id=\"content\">
            ";
        // line 58
        $this->displayBlock('content', $context, $blocks);
        // line 60
        echo "        </div>
        <br class=\"clearfix\" />
        <hr>
        <footer>
          <p>&copy; Company 2012</p>
        </footer>
    </div>
    ";
        // line 67
        $this->displayBlock('javasript', $context, $blocks);
        // line 69
        echo "           
</body>
</html>";
    }

    // line 9
    public function block_stylesheet($context, array $blocks = array())
    {
        // line 10
        echo "    <link href=\"../assets/css/bootstrap.css\" rel=\"stylesheet\">
    <style type=\"text/css\">
      body {
        padding-top: 60px;
        padding-bottom: 40px;
      }
    </style>
    <link href=\"../assets/css/bootstrap-responsive.css\" rel=\"stylesheet\">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src=\"http://html5shim.googlecode.com/svn/trunk/html5.js\"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel=\"apple-touch-icon-precomposed\" sizes=\"144x144\" href=\"/assets/ico/apple-touch-icon-144-precomposed.png\">
    <link rel=\"apple-touch-icon-precomposed\" sizes=\"114x114\" href=\"/assets/ico/apple-touch-icon-114-precomposed.png\">
    <link rel=\"apple-touch-icon-precomposed\" sizes=\"72x72\" href=\"/assets/ico/apple-touch-icon-72-precomposed.png\">
    <link rel=\"apple-touch-icon-precomposed\" href=\"/assets/ico/apple-touch-icon-57-precomposed.png\">
    <link rel=\"shortcut icon\" href=\"/assets/ico/favicon.png\">
    ";
    }

    // line 58
    public function block_content($context, array $blocks = array())
    {
        // line 59
        echo "            ";
    }

    // line 67
    public function block_javasript($context, array $blocks = array())
    {
        echo "        
    <script src=\"/assets/js/jquery.js\"></script>
    ";
    }

    public function getTemplateName()
    {
        return "layout.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 67,  124 => 59,  121 => 58,  97 => 10,  94 => 9,  88 => 69,  86 => 67,  77 => 60,  75 => 58,  64 => 50,  59 => 48,  54 => 46,  50 => 45,  34 => 31,  32 => 9,  22 => 1,  31 => 4,  28 => 3,);
    }
}
