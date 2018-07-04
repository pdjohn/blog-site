<?php

/* C:\xampp\htdocs\acme/themes/acme/pages/about.htm */
class __TwigTemplate_ed845e910b22353e59bcde4453d4af5b8ab5154d50c54cb43b93d98907c631c7 extends Twig_Template
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
        echo "<h1>About Us</h1>
<p>This is about page</p>
<hr>
";
        // line 4
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("resourcesLinks"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\acme/themes/acme/pages/about.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 4,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<h1>About Us</h1>
<p>This is about page</p>
<hr>
{% component 'resourcesLinks' %}", "C:\\xampp\\htdocs\\acme/themes/acme/pages/about.htm", "");
    }
}
