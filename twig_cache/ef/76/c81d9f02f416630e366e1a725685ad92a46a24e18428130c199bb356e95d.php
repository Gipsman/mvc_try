<?php

/* Main/error404.php */
class __TwigTemplate_ef76c81d9f02f416630e366e1a725685ad92a46a24e18428130c199bb356e95d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("layout.php");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.php";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo "Страница не найдена
";
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "<h1>404</h1>
<p>
<img src=\"/images/404.png\">
</p>
";
    }

    public function getTemplateName()
    {
        return "Main/error404.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 8,  37 => 7,  32 => 4,  29 => 3,);
    }
}
