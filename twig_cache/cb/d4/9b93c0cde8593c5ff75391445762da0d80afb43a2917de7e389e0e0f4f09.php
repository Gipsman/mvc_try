<?php

/* Admin/admin_news.php */
class __TwigTemplate_cbd49b93c0cde8593c5ff75391445762da0d80afb43a2917de7e389e0e0f4f09 extends Twig_Template
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
\t\t<h1>Новости</h1>
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
<table>
Все проекты в следующей таблице являются вымышленными, поэтому даже не пытайтесь перейти по приведенным ссылкам.
<tr><td>Название</td><td>Теги</td><td>ссылка</td></tr>
\t
\t";
        // line 18
        if ((isset($context["news"]) ? $context["news"] : null)) {
            // line 19
            echo "\t\t";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["news"]) ? $context["news"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
                // line 20
                echo "\t\t\t<tr><td>";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "title", array()), "html", null, true);
                echo "</td><td></td><td><a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["url"]) ? $context["url"] : null), "generate", array(0 => "adminArticle", 1 => array("id" => $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "id", array()))), "method"), "html", null, true);
                echo "\">Edit...</a></td></tr>
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 22
            echo "\t";
        }
        // line 23
        echo "\t
</table>
</p>
</article>

";
    }

    public function getTemplateName()
    {
        return "Admin/admin_news.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 23,  84 => 22,  73 => 20,  68 => 19,  66 => 18,  58 => 12,  51 => 11,  44 => 10,  38 => 9,  31 => 4,  28 => 3,);
    }
}
