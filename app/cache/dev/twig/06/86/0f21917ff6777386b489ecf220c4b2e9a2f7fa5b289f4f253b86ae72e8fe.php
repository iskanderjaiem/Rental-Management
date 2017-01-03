<?php

/* svplocationClientBundle:Default:index.html.twig */
class __TwigTemplate_06860f21917ff6777386b489ecf220c4b2e9a2f7fa5b289f4f253b86ae72e8fe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("svplocationClientBundle::layout.html.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "svplocationClientBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        // line 5
        echo "    <div class=\"page-content-wrapper\">
        <div class=\"page-content\">

           test
  
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "svplocationClientBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 5,  28 => 4,);
    }
}
