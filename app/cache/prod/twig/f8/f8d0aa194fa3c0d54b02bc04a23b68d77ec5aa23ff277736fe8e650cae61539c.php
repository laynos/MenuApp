<?php

/* ::layout.html.twig */
class __TwigTemplate_79a20038d8325ce2a33ca41d5ff91e481a4a40feafcfe9a2b8a44b952277c647 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a91526c1794c45ffa2f46be7ed8acd20bb85de3cfbcc3b2f1432a67bfee271da = $this->env->getExtension("native_profiler");
        $__internal_a91526c1794c45ffa2f46be7ed8acd20bb85de3cfbcc3b2f1432a67bfee271da->enter($__internal_a91526c1794c45ffa2f46be7ed8acd20bb85de3cfbcc3b2f1432a67bfee271da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("/css/bootstrap.min.css"), "html", null, true);
        echo "\">
\t\t";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 9
        echo "        
\t\t<link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("food.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
\t\t<div id=\"wrapper\">
        ";
        // line 14
        $this->displayBlock('body', $context, $blocks);
        // line 17
        echo "        
\t\t
\t\t";
        // line 19
        $this->displayBlock('javascripts', $context, $blocks);
        // line 22
        echo "\t\t</div>
    </body>
</html>
";
        
        $__internal_a91526c1794c45ffa2f46be7ed8acd20bb85de3cfbcc3b2f1432a67bfee271da->leave($__internal_a91526c1794c45ffa2f46be7ed8acd20bb85de3cfbcc3b2f1432a67bfee271da_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_d3901c88c48b00b6c20bb614fa3d8695bb7f56b7c03c1a687b696df131c43bc7 = $this->env->getExtension("native_profiler");
        $__internal_d3901c88c48b00b6c20bb614fa3d8695bb7f56b7c03c1a687b696df131c43bc7->enter($__internal_d3901c88c48b00b6c20bb614fa3d8695bb7f56b7c03c1a687b696df131c43bc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Base";
        
        $__internal_d3901c88c48b00b6c20bb614fa3d8695bb7f56b7c03c1a687b696df131c43bc7->leave($__internal_d3901c88c48b00b6c20bb614fa3d8695bb7f56b7c03c1a687b696df131c43bc7_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_84e70193cb7d7aef8541d4a233ff5360e72e8cdc6b9b67376017f60da6ed3d22 = $this->env->getExtension("native_profiler");
        $__internal_84e70193cb7d7aef8541d4a233ff5360e72e8cdc6b9b67376017f60da6ed3d22->enter($__internal_84e70193cb7d7aef8541d4a233ff5360e72e8cdc6b9b67376017f60da6ed3d22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "\t\t";
        
        $__internal_84e70193cb7d7aef8541d4a233ff5360e72e8cdc6b9b67376017f60da6ed3d22->leave($__internal_84e70193cb7d7aef8541d4a233ff5360e72e8cdc6b9b67376017f60da6ed3d22_prof);

    }

    // line 14
    public function block_body($context, array $blocks = array())
    {
        $__internal_1fa1f8bcc9f6af28c71d38b838e1e9684bb110b7552b94af80fbeffc7500d0ff = $this->env->getExtension("native_profiler");
        $__internal_1fa1f8bcc9f6af28c71d38b838e1e9684bb110b7552b94af80fbeffc7500d0ff->enter($__internal_1fa1f8bcc9f6af28c71d38b838e1e9684bb110b7552b94af80fbeffc7500d0ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 15
        echo "\t\t
\t\t";
        
        $__internal_1fa1f8bcc9f6af28c71d38b838e1e9684bb110b7552b94af80fbeffc7500d0ff->leave($__internal_1fa1f8bcc9f6af28c71d38b838e1e9684bb110b7552b94af80fbeffc7500d0ff_prof);

    }

    // line 19
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_71a753df387b8e4115bdb098fd1353311d08f828cb26f4253ce10bfed0a1d37b = $this->env->getExtension("native_profiler");
        $__internal_71a753df387b8e4115bdb098fd1353311d08f828cb26f4253ce10bfed0a1d37b->enter($__internal_71a753df387b8e4115bdb098fd1353311d08f828cb26f4253ce10bfed0a1d37b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 20
        echo "\t\t
\t\t";
        
        $__internal_71a753df387b8e4115bdb098fd1353311d08f828cb26f4253ce10bfed0a1d37b->leave($__internal_71a753df387b8e4115bdb098fd1353311d08f828cb26f4253ce10bfed0a1d37b_prof);

    }

    public function getTemplateName()
    {
        return "::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 20,  109 => 19,  101 => 15,  95 => 14,  88 => 8,  82 => 7,  70 => 5,  60 => 22,  58 => 19,  54 => 17,  52 => 14,  45 => 10,  42 => 9,  40 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Base{% endblock %}</title>*/
/*         <link rel="stylesheet" href="{{ asset('/css/bootstrap.min.css') }}">*/
/* 		{% block stylesheets %}*/
/* 		{% endblock %}*/
/*         */
/* 		<link rel="icon" type="image/x-icon" href="{{ asset('food.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/* 		<div id="wrapper">*/
/*         {% block body %}*/
/* 		*/
/* 		{% endblock %}*/
/*         */
/* 		*/
/* 		{% block javascripts %}*/
/* 		*/
/* 		{% endblock %}*/
/* 		</div>*/
/*     </body>*/
/* </html>*/
/* */
