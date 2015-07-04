<?php

/* News/news_view.php */
class __TwigTemplate_d6cf714178a61aa76e41bd3f30d1d9f569cb1a799f5a45c31577287cd4bf9fdd extends Twig_Template
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
        echo "<h1>Новости</h1>
<p>
<table>
Все проекты в следующей таблице являются вымышленными, поэтому даже не пытайтесь перейти по приведенным ссылкам.
<tr><td>Название</td><td>Cсылка</td>";
        // line 12
        if ($this->getAttribute((isset($context["SESSION"]) ? $context["SESSION"] : null), "login_admin", array())) {
            echo "<td>edit</td>";
        }
        echo "</tr>
\t
\t";
        // line 14
        if ((isset($context["news"]) ? $context["news"] : null)) {
            // line 15
            echo "\t\t";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["news"]) ? $context["news"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
                // line 16
                echo "\t\t\t<tr><td>";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "title", array()), "html", null, true);
                echo "</td><td><a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["url"]) ? $context["url"] : null), "generate", array(0 => "article", 1 => array("slug" => $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "slug", array()))), "method"), "html", null, true);
                echo "\">Подробнее...</a></td>";
                if ($this->getAttribute((isset($context["SESSION"]) ? $context["SESSION"] : null), "login_admin", array())) {
                    echo "<td><a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["url"]) ? $context["url"] : null), "generate", array(0 => "edit_news", 1 => array("id" => $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "id", array()))), "method"), "html", null, true);
                    echo "\">Редактировать...</a></td>";
                }
                echo "</tr>
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 18
            echo "\t";
        }
        // line 19
        echo "\t
</table>

</p>
";
        // line 23
        if ($this->getAttribute((isset($context["SESSION"]) ? $context["SESSION"] : null), "login_admin", array())) {
            echo "<a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["url"]) ? $context["url"] : null), "generate", array(0 => "edit_news", 1 => array("id" => "0")), "method"), "html", null, true);
            echo "\">Добавить новость...</a>";
        }
    }

    public function getTemplateName()
    {
        return "News/news_view.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 23,  80 => 19,  77 => 18,  60 => 16,  55 => 15,  53 => 14,  46 => 12,  40 => 8,  37 => 7,  32 => 4,  29 => 3,);
    }
}
