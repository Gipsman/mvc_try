<?php

/* News/article_view.php */
class __TwigTemplate_264af15be9e99c07a91a50d8412e289f4a97bd89abf141e10091920f35130cbd extends Twig_Template
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
        echo "Новости
";
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "<h1>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "title", array()), "html", null, true);
        echo "</h1>
<p>
";
        // line 10
        echo $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "content", array());
        echo "
</p>
";
    }

    public function getTemplateName()
    {
        return "News/article_view.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 10,  40 => 8,  37 => 7,  32 => 4,  29 => 3,);
    }
}
