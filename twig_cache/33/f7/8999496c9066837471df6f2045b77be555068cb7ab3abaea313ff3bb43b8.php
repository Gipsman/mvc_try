<?php

/* Admin/admin_layout.php */
class __TwigTemplate_33f78999496c9066837471df6f2045b77be555068cb7ab3abaea313ff3bb43b8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'navLinks' => array($this, 'block_navLinks'),
            'content' => array($this, 'block_content'),
            'asideSidebar' => array($this, 'block_asideSidebar'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<head>
\t<meta charset=\"utf-8\">
\t<title>AdminPanel</title>
\t<link media=\"all\" rel=\"stylesheet\" type=\"text/css\" href=\"/css/admin_panel.css\" />
\t<script type=\"text/javascript\" src=\"//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js\"></script>
\t<script type=\"text/javascript\">window.jQuery || document.write('<script type=\"text/javascript\" src=\"js/jquery-1.7.2.min.js\"><\\/script>');</script>
    <!--<script type=\"text/javascript\" src=\"js/jquery.main.js\"></script>-->
\t<!--[if lt IE 9]><link rel=\"stylesheet\" type=\"text/css\" href=\"css/ie.css\" /><![endif]-->
</head>
<body>
\t<div id=\"wrapper\">
\t\t<div id=\"content\">
\t\t\t<div class=\"c1\">
\t\t\t\t<div class=\"controls\">
\t\t\t\t\t";
        // line 16
        $this->displayBlock('navLinks', $context, $blocks);
        // line 25
        echo "\t\t\t\t\t<div class=\"profile-box\">
\t\t\t\t\t\t<span class=\"profile\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"section\">
\t\t\t\t\t\t\t\t<img class=\"image\" src=\"/images/img1.png\" alt=\"image description\" width=\"26\" height=\"26\" />
\t\t\t\t\t\t\t\t<span class=\"text-box\">
\t\t\t\t\t\t\t\t\tWelcome
\t\t\t\t\t\t\t\t\t<strong class=\"name\">SuperAdmin</strong>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<a href=\"#\" class=\"opener\">opener</a>
\t\t\t\t\t\t</span>
\t\t\t\t\t\t<a href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["url"]) ? $context["url"] : null), "generate", array(0 => "adminLogout"), "method"), "html", null, true);
        echo "\" class=\"btn-on\">On</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"tabs\">
\t\t\t\t\t";
        // line 40
        $this->displayBlock('content', $context, $blocks);
        // line 55
        echo "\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t";
        // line 58
        $this->displayBlock('asideSidebar', $context, $blocks);
        // line 103
        echo "\t</div>
</body>
</html>";
    }

    // line 16
    public function block_navLinks($context, array $blocks = array())
    {
        // line 17
        echo "\t\t\t\t\t<nav class=\"links\">
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li class=\"active\"><a href=\"#\" class=\"ico1\">Messages <span class=\"num\">26</span></a></li>
\t\t\t\t\t\t\t<li><a href=\"#\" class=\"ico2\">Alerts <span class=\"num\">5</span></a></li>
\t\t\t\t\t\t\t<li><a href=\"#\" class=\"ico3\">Documents <span class=\"num\">3</span></a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</nav>
\t\t\t\t\t";
    }

    // line 40
    public function block_content($context, array $blocks = array())
    {
        // line 41
        echo "\t\t\t\t\t<div id=\"tab-1\" class=\"tab\">
\t\t\t\t\t\t<article>
\t\t\t\t\t\t\t<div class=\"text-section\">
\t\t\t\t\t\t\t\t<h1>Dashboard</h1>
\t\t\t\t\t\t\t\t<p>This is a quick overview of some features</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<ul class=\"states\">
\t\t\t\t\t\t\t\t<li class=\"error\">Error : This is an error placed text message.</li>
\t\t\t\t\t\t\t\t<li class=\"warning\">Warning: This is a warning placed text message.</li>
\t\t\t\t\t\t\t\t<li class=\"succes\">Succes : This is a succes placed text message.</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</article>
\t\t\t\t\t</div>
\t\t\t\t\t";
    }

    // line 58
    public function block_asideSidebar($context, array $blocks = array())
    {
        // line 59
        echo "\t\t<aside id=\"sidebar\">
\t\t\t<strong class=\"logo\"><a href=\"#\">lg</a></strong>
\t\t\t<ul class=\"tabset buttons\">
\t\t\t\t<li ";
        // line 62
        if ((isset($context["navIndex"]) ? $context["navIndex"] : null)) {
            echo "class=\"active\" ";
        }
        echo ">
\t\t\t\t\t<a href=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["url"]) ? $context["url"] : null), "generate", array(0 => "adminMain"), "method"), "html", null, true);
        echo "\" class=\"ico1\"><span>Dashboard</span><em></em></a>
\t\t\t\t\t<span class=\"tooltip\"><span>Dashboard</span></span>
\t\t\t\t</li>
\t\t\t\t<li ";
        // line 66
        if ((isset($context["navNews"]) ? $context["navNews"] : null)) {
            echo "class=\"active\" ";
        }
        echo ">
\t\t\t\t\t<a href=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["url"]) ? $context["url"] : null), "generate", array(0 => "adminNews"), "method"), "html", null, true);
        echo "\" class=\"ico2\"><span>Новости</span><em></em></a>
\t\t\t\t\t<span class=\"tooltip\"><span>Новости</span></span>
\t\t\t\t</li>
\t\t\t\t<li ";
        // line 70
        if ((isset($context["navPages"]) ? $context["navPages"] : null)) {
            echo "class=\"active\" ";
        }
        echo ">
\t\t\t\t\t<a href=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["url"]) ? $context["url"] : null), "generate", array(0 => "adminPages"), "method"), "html", null, true);
        echo "\" class=\"ico3\"><span>Pages</span><em></em></a>
\t\t\t\t\t<span class=\"tooltip\"><span>Pages</span></span>
\t\t\t\t</li>
\t\t\t\t<div style=\"display:none;\">
\t\t\t\t<li>
\t\t\t\t\t<a href=\"#\" class=\"ico4\"><span>Widgets</span><em></em></a>
\t\t\t\t\t<span class=\"tooltip\"><span>Widgets</span></span>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"#\" class=\"ico5\"><span>Archive</span><em></em></a>
\t\t\t\t\t<span class=\"tooltip\"><span>Archive</span></span>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"#\" class=\"ico6\">
\t\t\t\t\t\t<span>Comments</span><em></em>
\t\t\t\t\t</a>
\t\t\t\t\t<span class=\"num\">11</span>
\t\t\t\t\t<span class=\"tooltip\"><span>Comments</span></span>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"#\" class=\"ico7\"><span>Plug-in</span><em></em></a>
\t\t\t\t\t<span class=\"tooltip\"><span>Plug-in</span></span>
\t\t\t\t</li>
\t\t\t\t</div>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"#\" class=\"ico8\"><span>Settings</span><em></em></a>
\t\t\t\t\t<span class=\"tooltip\"><span>Settings</span></span>
\t\t\t\t</li>
\t\t\t</ul>
\t\t\t<span class=\"shadow\"></span>
\t\t</aside>
\t\t";
    }

    public function getTemplateName()
    {
        return "Admin/admin_layout.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 71,  142 => 70,  136 => 67,  130 => 66,  124 => 63,  118 => 62,  113 => 59,  110 => 58,  93 => 41,  90 => 40,  79 => 17,  76 => 16,  70 => 103,  68 => 58,  63 => 55,  61 => 40,  54 => 36,  41 => 25,  39 => 16,  22 => 1,  58 => 12,  51 => 11,  44 => 10,  38 => 9,  31 => 4,  28 => 3,);
    }
}
