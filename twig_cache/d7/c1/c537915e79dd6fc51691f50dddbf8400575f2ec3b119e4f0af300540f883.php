<?php

/* News/article_edit.php */
class __TwigTemplate_d7c1c537915e79dd6fc51691f50dddbf8400575f2ec3b119e4f0af300540f883 extends Twig_Template
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
        echo "<form method=\"post\">
<p>
Название <br />
<textarea rows=\"2\" cols=\"60\" name=\"title\">";
        // line 11
        if ($this->getAttribute((isset($context["article"]) ? $context["article"] : null), "title", array())) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "title", array()), "html", null, true);
        }
        echo "</textarea>
</p>
<br />
<p>
Slug <br />
<input type=\"text\" name=\"slug\" value=\"";
        // line 16
        if ($this->getAttribute((isset($context["article"]) ? $context["article"] : null), "slug", array())) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "slug", array()), "html", null, true);
        }
        echo "\"/>
</p>
<br />
<p>
Контент <br />
<textarea rows=\"25\" cols=\"60\" name=\"content\">";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "content", array()), "html", null, true);
        echo "</textarea>
</p>
";
        // line 23
        if ($this->getAttribute((isset($context["article"]) ? $context["article"] : null), "id", array())) {
            echo "<input type=\"hidden\" name=\"news_id\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "id", array()), "html", null, true);
            echo "\"/>";
        }
        // line 24
        echo " <input type=\"submit\" name=\"save_news\" value=\"Сохранить\"/>
</form>
";
    }

    public function getTemplateName()
    {
        return "News/article_edit.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 24,  70 => 23,  65 => 21,  55 => 16,  45 => 11,  40 => 8,  37 => 7,  32 => 4,  29 => 3,);
    }
}
