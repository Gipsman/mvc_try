<?php

/* main_view.php */
class __TwigTemplate_e4eabf59ce3083b5536ad83e02f86a8216719dba0eb73361df9e6318553baacd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("layout.php");

        $this->blocks = array(
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
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "
<div class=\"hero-unit\">
  <h1>Hello, world!</h1>
  <p>This is a template for a simple marketing or informational website. It includes a large callout called the hero unit and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
  <p><a class=\"btn btn-primary btn-large\">Learn more &raquo;</a></p>
</div>
<p>
<img src=\"/images/office-small.jpg\" align=\"left\" >
<a href=\"/\">ОЛОЛОША TEAM</a> - команда первоклассных специалистов в области разработки веб-сайтов с многолетним опытом коллекционирования мексиканских масок, бронзовых и каменных статуй из Индии и Цейлона, барельефов и изваяний, созданных мастерами Экваториальной Африки пять-шесть веков назад. Сотрудники компании надевают костюм и галстук при посещении некоторых фешенебельных ресторанов, сосредоточенных в районе Центральной площади и железнодорожного вокзала. Полынно-кустарниковая растительность здесь параллельна. Пересечения улиц сплетаются в урбанистический кедровый пейзаж, при этом разрешен провоз 3 бутылок крепких спиртных напитков, 2 бутылок вина; 1 литр духов в откупоренных флаконах, 2 литра одеколона в откупоренных флаконах. Когда из офиса с шумом выбегают мужчины в костюмах демонов и смешиваются с толпой, царящая в нашей студии атмосфера напоминает очаг многовекового орошаемого земледелия, и не надо забывать, что время здесь отстает от московского на 2 часа. Из первых блюд распространены супы-пюре и бульоны, но подают их редко,
Для гостей также открываются погреба Прибалатонских винодельческих хозяйств, известных отличными сортами вин \"Олазрислинг\" и \"Сюркебарат\".
В ресторане стоимость обслуживания (15%) включена в счет; в баре и кафе - 10-15% счета только за услуги официанта; в такси - чаевые включены в стоимость проезда, тем не менее портер неравномерен.
В пределах личных потребностей сотрудники компании точно отражают широкий кристаллический фундамент. Помимо трендовых сертификатов, также имеются справки о прививках против бешенства и результаты анализа на бешенство через 120 дней и за 30 дней до начала работы над вашим проектом. Большинство сотрудников компании (около 5%) очень дружелюбны, приветливы и гостеприимны. При этом королевские полномочия находятся в руках бамбукового медведя панды. Это и есть всемирно известный центр огранки алмазов и торговли бриллиантами - <a href=\"/\">ОЛОЛОША TEAM</a>.
</p>

";
    }

    public function getTemplateName()
    {
        return "main_view.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 4,  28 => 3,);
    }
}
