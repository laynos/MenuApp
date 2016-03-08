<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_b5fd7f18bc4c4ea0da943940c0bfcb3a48520bd5207b3c1104b324237d49ff50 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_edd5c0d57e75abe641613d12eed51396f2bf9189a1d4b8b078edc6e42a73b4e4 = $this->env->getExtension("native_profiler");
        $__internal_edd5c0d57e75abe641613d12eed51396f2bf9189a1d4b8b078edc6e42a73b4e4->enter($__internal_edd5c0d57e75abe641613d12eed51396f2bf9189a1d4b8b078edc6e42a73b4e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_edd5c0d57e75abe641613d12eed51396f2bf9189a1d4b8b078edc6e42a73b4e4->leave($__internal_edd5c0d57e75abe641613d12eed51396f2bf9189a1d4b8b078edc6e42a73b4e4_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_b0486ba9abdeb105a9c7f6f903d10573ae61040199a0e154bbea7357e99f4938 = $this->env->getExtension("native_profiler");
        $__internal_b0486ba9abdeb105a9c7f6f903d10573ae61040199a0e154bbea7357e99f4938->enter($__internal_b0486ba9abdeb105a9c7f6f903d10573ae61040199a0e154bbea7357e99f4938_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_b0486ba9abdeb105a9c7f6f903d10573ae61040199a0e154bbea7357e99f4938->leave($__internal_b0486ba9abdeb105a9c7f6f903d10573ae61040199a0e154bbea7357e99f4938_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_0cf7574aa5526726bc6d7e3ee6820eb87ff5a374ee937cd59f613f8921369549 = $this->env->getExtension("native_profiler");
        $__internal_0cf7574aa5526726bc6d7e3ee6820eb87ff5a374ee937cd59f613f8921369549->enter($__internal_0cf7574aa5526726bc6d7e3ee6820eb87ff5a374ee937cd59f613f8921369549_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_0cf7574aa5526726bc6d7e3ee6820eb87ff5a374ee937cd59f613f8921369549->leave($__internal_0cf7574aa5526726bc6d7e3ee6820eb87ff5a374ee937cd59f613f8921369549_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_6e2aa76d1e24cc8286a72755b4991681cf94272930aee14f3488fbc23431d087 = $this->env->getExtension("native_profiler");
        $__internal_6e2aa76d1e24cc8286a72755b4991681cf94272930aee14f3488fbc23431d087->enter($__internal_6e2aa76d1e24cc8286a72755b4991681cf94272930aee14f3488fbc23431d087_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_6e2aa76d1e24cc8286a72755b4991681cf94272930aee14f3488fbc23431d087->leave($__internal_6e2aa76d1e24cc8286a72755b4991681cf94272930aee14f3488fbc23431d087_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
