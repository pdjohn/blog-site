<?php

/* C:\xampp\htdocs\acme/themes/acme/layouts/default.htm */
class __TwigTemplate_c2a747e73e5de124400968a2df45bc1a6370a6877f4ee93437cfe5d1ff9f44e4 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!doctype html>
<html lang=\"en\">
<head>
    <meta name=\"description\" content=\"";
        // line 4
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "meta_description", array()), "html", null, true);
        echo "\" charset=\"UTF-8\">
    <title>Acme - ";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "title", array()), "html", null, true);
        echo "</title>
    <link rel=\"stylesheet\" href=\"https://bootswatch.com/4/sandstone/bootstrap.min.css\">
    <link rel=\"stylesheet\" href=\"";
        // line 7
        echo "assets/css/theme.css|theme";
        echo "\">

    ";
        // line 9
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('css');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('styles');
        // line 10
        echo "</head>
<body>
    <header>
        ";
        // line 13
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/header"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 14
        echo "    </header>

    <div class=\"container\">
        ";
        // line 17
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 18
        echo "    </div>

    <footer>
        ";
        // line 21
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 22
        echo "    </footer>


    <script src=\"";
        // line 25
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/jquery.js");
        echo "\"></script>
    <script src=\"";
        // line 26
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/bootstrap.js");
        echo "\"></script>
    <script src=\"";
        // line 27
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/javascript/app.js");
        echo "\"></script>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\acme/themes/acme/layouts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 27,  79 => 26,  75 => 25,  70 => 22,  66 => 21,  61 => 18,  59 => 17,  54 => 14,  50 => 13,  45 => 10,  42 => 9,  37 => 7,  32 => 5,  28 => 4,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!doctype html>
<html lang=\"en\">
<head>
    <meta name=\"description\" content=\"{{this.page.meta_description}}\" charset=\"UTF-8\">
    <title>Acme - {{this.page.title}}</title>
    <link rel=\"stylesheet\" href=\"https://bootswatch.com/4/sandstone/bootstrap.min.css\">
    <link rel=\"stylesheet\" href=\"{{ 'assets/css/theme.css|theme'}}\">

    {% styles %}
</head>
<body>
    <header>
        {% partial 'site/header' %}
    </header>

    <div class=\"container\">
        {% page %}
    </div>

    <footer>
        {% partial 'site/footer' %}
    </footer>


    <script src=\"{{'assets/vendor/jquery.js'|theme}}\"></script>
    <script src=\"{{'assets/vendor/bootstrap.js'|theme}}\"></script>
    <script src=\"{{'assets/javascript/app.js'|theme}}\"></script>
</body>
</html>", "C:\\xampp\\htdocs\\acme/themes/acme/layouts/default.htm", "");
    }
}
