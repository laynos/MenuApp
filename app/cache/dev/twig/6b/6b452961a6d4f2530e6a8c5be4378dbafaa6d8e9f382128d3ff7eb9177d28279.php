<?php

/* MenuBundle:Default:index.html.twig */
class __TwigTemplate_f5121e9e7b7648b250f48bd489c1e5c5f7055262beceaba550eec1d69283f385 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("MenuBundle::layout.html.twig", "MenuBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "MenuBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5c13ac5bbf0d953edd224643a6e497c9ca99d2d432920846a6a7ea77bf3e8907 = $this->env->getExtension("native_profiler");
        $__internal_5c13ac5bbf0d953edd224643a6e497c9ca99d2d432920846a6a7ea77bf3e8907->enter($__internal_5c13ac5bbf0d953edd224643a6e497c9ca99d2d432920846a6a7ea77bf3e8907_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MenuBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5c13ac5bbf0d953edd224643a6e497c9ca99d2d432920846a6a7ea77bf3e8907->leave($__internal_5c13ac5bbf0d953edd224643a6e497c9ca99d2d432920846a6a7ea77bf3e8907_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_fc6debbd18160a55fb3a51286ba84b7f6127826c66137a68ecf2d9ac576708c3 = $this->env->getExtension("native_profiler");
        $__internal_fc6debbd18160a55fb3a51286ba84b7f6127826c66137a68ecf2d9ac576708c3->enter($__internal_fc6debbd18160a55fb3a51286ba84b7f6127826c66137a68ecf2d9ac576708c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 5
        echo "  ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_fc6debbd18160a55fb3a51286ba84b7f6127826c66137a68ecf2d9ac576708c3->leave($__internal_fc6debbd18160a55fb3a51286ba84b7f6127826c66137a68ecf2d9ac576708c3_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_c78feffacc0090e4f75098aa1cf48938fdd292d447b523dd38a65a9904e10cd1 = $this->env->getExtension("native_profiler");
        $__internal_c78feffacc0090e4f75098aa1cf48938fdd292d447b523dd38a65a9904e10cd1->enter($__internal_c78feffacc0090e4f75098aa1cf48938fdd292d447b523dd38a65a9904e10cd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "Hello World! 
";
        
        $__internal_c78feffacc0090e4f75098aa1cf48938fdd292d447b523dd38a65a9904e10cd1->leave($__internal_c78feffacc0090e4f75098aa1cf48938fdd292d447b523dd38a65a9904e10cd1_prof);

    }

    public function getTemplateName()
    {
        return "MenuBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 9,  51 => 8,  41 => 5,  35 => 4,  11 => 1,);
    }
}
/* {% extends "MenuBundle::layout.html.twig" %}*/
/* */
/* */
/* {% block title %}*/
/*   {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/* Hello World! */
/* {% endblock %}*/
