<?php

/* C:\xampp\htdocs\acme/themes/responsiv-clean/layouts/fallback.htm */
class __TwigTemplate_26beb6e3e5ef2d84e6779d35ebe18e0ba8b0d1bc89d7c324ffbdc3d2ee0be7ff extends Twig_Template
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
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\acme/themes/responsiv-clean/layouts/fallback.htm";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% page %}", "C:\\xampp\\htdocs\\acme/themes/responsiv-clean/layouts/fallback.htm", "");
    }
}
