<?php

/* Admin/admin_article.php */
class __TwigTemplate_c4cfb4a18ede43c27c263225d168547890f17ead242ab9f8082d366d6a21edaf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("Admin/admin_layout.php");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "Admin/admin_layout.php";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "<article>
\t<div class=\"text-section\">
\t\t<h1>Редактирование новости</h1>
\t</div>
\t<ul class=\"states\">
\t\t";
        // line 9
        if ((isset($context["errorMess"]) ? $context["errorMess"] : null)) {
            echo "<li class=\"error\">Error: ";
            echo twig_escape_filter($this->env, (isset($context["errorMess"]) ? $context["errorMess"] : null), "html", null, true);
            echo "</li>";
        }
        // line 10
        echo "\t\t";
        if ((isset($context["warningMess"]) ? $context["warningMess"] : null)) {
            echo "<li class=\"warning\">Warning: ";
            echo twig_escape_filter($this->env, (isset($context["warningMess"]) ? $context["warningMess"] : null), "html", null, true);
            echo "</li>";
        }
        // line 11
        echo "\t\t";
        if ((isset($context["succesMess"]) ? $context["succesMess"] : null)) {
            echo "<li class=\"succes\">Succes: ";
            echo twig_escape_filter($this->env, (isset($context["succesMess"]) ? $context["succesMess"] : null), "html", null, true);
            echo "</li>";
        }
        // line 12
        echo "\t</ul>
\t<p>
<a href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["url"]) ? $context["url"] : null), "generate", array(0 => "adminNews"), "method"), "html", null, true);
        echo "\">< Назад</a>
<h1>";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "title", array()), "html", null, true);
        echo "</h1>
<div id=\"page-content\">
";
        // line 17
        echo $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "content", array());
        echo "
</div>
</p>
</article>

";
    }

    public function getTemplateName()
    {
        return "Admin/admin_article.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 17,  66 => 15,  62 => 14,  58 => 12,  51 => 11,  44 => 10,  38 => 9,  31 => 4,  28 => 3,);
    }
}
