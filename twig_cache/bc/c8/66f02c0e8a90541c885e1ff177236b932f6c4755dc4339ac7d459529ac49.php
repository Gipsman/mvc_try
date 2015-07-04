<?php

/* User/auth.php */
class __TwigTemplate_bcc866f02c0e8a90541c885e1ff177236b932f6c4755dc4339ac7d459529ac49 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        if ($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getSession", array()), "login_admin", array())) {
            // line 2
            echo "Вы вошли как ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getSession", array()), "login_admin", array()), "html", null, true);
            echo ".  <a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["url"]) ? $context["url"] : null), "generate", array(0 => "adminLogout"), "method"), "html", null, true);
            echo "\">Выйти.</a>
";
        } else {
            // line 4
            echo "<form class=\"navbar-form pull-right\" method=\"post\">
    <input class=\"span2\" type=\"text\" name=\"username\" placeholder=\"username\">
    <input class=\"span2\" type=\"password\" name=\"password\" placeholder=\"password\">
    <button type=\"submit\" class=\"btn\">Войти</button>
</form>
";
        }
        // line 10
        echo "
";
    }

    public function getTemplateName()
    {
        return "User/auth.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 10,  29 => 4,  21 => 2,  19 => 1,);
    }
}
