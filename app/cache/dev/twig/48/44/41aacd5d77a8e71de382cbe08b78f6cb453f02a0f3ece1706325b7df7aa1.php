<?php

/* svplocationAdminBundle:Entrepot:edit.html.twig */
class __TwigTemplate_484441aacd5d77a8e71de382cbe08b78f6cb453f02a0f3ece1706325b7df7aa1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("svplocationAdminBundle::layout.html.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "svplocationAdminBundle::layout.html.twig";
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
    <!-- BEGIN CONTENT -->
    <div class=\"page-content-wrapper\">
        <!-- BEGIN CONTENT BODY -->
        <div class=\"page-content\">
            <!-- BEGIN PAGE HEADER-->

            <!-- BEGIN PAGE TITLE-->
            <h3 class=\"page-title\"> SVP | Location

            </h3>
            <!-- END PAGE TITLE-->
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <!-- BEGIN VALIDATION STATES-->
                    <div class=\"portlet light portlet-fit portlet-form bordered\">
                        <div class=\"portlet-title\">
                            <div class=\"caption\">
                                <i class=\"icon-bubble font-green\"></i>
                                <span class=\"caption-subject font-green bold uppercase\">Modifier Entrepot</span>
                            </div>

                        </div>
                        <div class=\"portlet-body\">
                            <!-- BEGIN FORM-->
                            ";
        // line 29
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start', array("attr" => array("class" => "form-horizontal")));
        echo "
                            
                           <div>
                                <div class=\"form-body\">
                                    <div class=\"alert alert-danger display-hide\">
                                        <button class=\"close\" data-close=\"alert\"></button> You have some form errors. Please check below. </div>
                                    <div class=\"alert alert-success display-hide\">
                                        <button class=\"close\" data-close=\"alert\"></button> Your form validation is successful! </div>
                                    <div class=\"form-group  margin-top-20\">
                                        
                                        <label class=\"control-label col-md-3\">Adresse
                                            <span class=\"required\"> * </span>
                                        </label>
                                        <div class=\"col-md-4\">
                                            <div class=\"input-icon right\">
                                                <i class=\"fa\"></i>
                                                
                                                 ";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "adresse", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"form-actions\">
                                    <div class=\"row\">
                                        <div class=\"col-md-offset-3 col-md-9\">
                                            ";
        // line 54
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "Valider", array()), 'widget', array("attr" => array("class" => "btn btn-primary")));
        echo "
                                            
                                        </div>
                                    </div>
                                </div>
                         ";
        // line 59
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "
                        
                            <!-- END FORM-->
                            
                        </div>
                    </div>
                    <!-- END VALIDATION STATES-->
                </div>
            </div>

        </div>
    </div>
    <!-- END CONTENT BODY -->

    <!-- END CONTENT -->  
";
    }

    public function getTemplateName()
    {
        return "svplocationAdminBundle:Entrepot:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 59,  89 => 54,  78 => 46,  58 => 29,  31 => 4,  28 => 3,);
    }
}
