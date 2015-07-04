<?php

/* Admin/admin_view.php */
class __TwigTemplate_b2824173096f0963cf464fc6ef323bdcbd7a8b6ea2e9e2997703f6bad047e3e6 extends Twig_Template
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
\t\t<h1>Панель администрирования</h1>
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
Админка...

Пока что, отобразим здесь простой текст.
Далее можно добавить в админку некоторый функционал.
Например, WYSIWYG-редактор для изменения страниц сайта (видов).
Тогда, этот вид будет содержать выпадающий список для выбора страницы, поле редактора, а также кнопку
для сохранения изменений. А некоторое действие контроллера администрирования будет описывать логику редактирования страниц.

</p>
</article>

";
    }

    public function getTemplateName()
    {
        return "Admin/admin_view.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 12,  51 => 11,  44 => 10,  38 => 9,  31 => 4,  28 => 3,);
    }
}
