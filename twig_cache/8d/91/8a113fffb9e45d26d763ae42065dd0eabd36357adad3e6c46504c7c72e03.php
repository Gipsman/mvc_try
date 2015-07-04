<?php

/* Admin/login_admin_view.php */
class __TwigTemplate_8d918a113fffb9e45d26d763ae42065dd0eabd36357adad3e6c46504c7c72e03 extends Twig_Template
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
        echo "<!DOCTYPE html>
<html xmlns=\"http://www.w3.org/1999/xhtml\">
\t<head>
\t\t<meta http-equiv=\"content-type\" content=\"text/html; charset=utf-8\" />
\t\t<meta name=\"description\" content=\"\" />
\t\t<meta name=\"keywords\" content=\"\" />
\t\t<title>ОЛОЛОША TEAM</title>
\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"/css/admin_login.css\" />
\t\t<script src=\"/js/jquery-1.6.2.js\" type=\"text/javascript\"></script>
\t</head>
<body>
<div id=\"container\">
\t<div id=\"header\"></div>
\t<div id=\"content\" style=\"padding: 0;\">
\t\t";
        // line 15
        if ((isset($context["error_mes"]) ? $context["error_mes"] : null)) {
            echo "<div class=\"warning\">";
            echo twig_escape_filter($this->env, (isset($context["error_mes"]) ? $context["error_mes"] : null), "html", null, true);
            echo "</div>";
        }
        // line 16
        echo "\t\t<div class=\"box login\">              
\t\t    <div class=\"heading\">
\t\t      <h1><img src=\"view/image/lockscreen.png\" alt=\"\"> Введите логин и пароль</h1>
\t\t    </div>
\t\t    <div class=\"content\" style=\"min-height: 150px; overflow: hidden;\">
\t\t      <form method=\"post\" id=\"form\">
\t\t        <input type=\"text\" name=\"username\" value=\"\" style=\"margin: 10px 3px;width: 178px;text-align: center;\">
\t\t        <input type=\"password\" name=\"password\" value=\"\" style=\"margin: 10px 3px;width:178px; text-align: center;\">
\t\t        <table style=\"width: 100%;\">
\t\t          <tbody><tr>  
\t\t          </tr>
\t\t          <tr>
\t\t            <td>
\t\t\t\t\t<a style=\"float: left;\" class=\"button forgotten\" href=\"/forgotpassword\">Забыли пароль?</a>
\t\t\t\t\t<a onclick=\"\$('#form').submit();\" class=\"button login\">Войти</a></td>
\t\t          </tr>
\t\t \t\t  </tbody>
\t\t \t\t</table>
\t\t \t  </form>
\t\t \t </div>
\t\t</div>
\t</div>
</div>
 <script type=\"text/javascript\">
\$('#form input').keydown(function(e) {
\tif (e.keyCode == 13) {
\t\t\$('#form').submit();
\t}
});
</script> 
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "Admin/login_admin_view.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 16,  35 => 15,  19 => 1,);
    }
}
