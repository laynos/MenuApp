<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_76873b479bb7409d54fb3811c97eb4ecb2741c25aba4796f32efdd313ad197dc extends Twig_Template
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
        $__internal_0624f5dfb103daad4a773f4e80f08ef348ad618222768d7206314b91289bc88f = $this->env->getExtension("native_profiler");
        $__internal_0624f5dfb103daad4a773f4e80f08ef348ad618222768d7206314b91289bc88f->enter($__internal_0624f5dfb103daad4a773f4e80f08ef348ad618222768d7206314b91289bc88f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0624f5dfb103daad4a773f4e80f08ef348ad618222768d7206314b91289bc88f->leave($__internal_0624f5dfb103daad4a773f4e80f08ef348ad618222768d7206314b91289bc88f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_18aaaf07f18f828cfd8fa1559febb27aea3bfe0ddc5cf06531282011cee9fa06 = $this->env->getExtension("native_profiler");
        $__internal_18aaaf07f18f828cfd8fa1559febb27aea3bfe0ddc5cf06531282011cee9fa06->enter($__internal_18aaaf07f18f828cfd8fa1559febb27aea3bfe0ddc5cf06531282011cee9fa06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_18aaaf07f18f828cfd8fa1559febb27aea3bfe0ddc5cf06531282011cee9fa06->leave($__internal_18aaaf07f18f828cfd8fa1559febb27aea3bfe0ddc5cf06531282011cee9fa06_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_9b47b6a181b66ed404286348bb266bb858e156b477d616b19d5bad60f896fe8e = $this->env->getExtension("native_profiler");
        $__internal_9b47b6a181b66ed404286348bb266bb858e156b477d616b19d5bad60f896fe8e->enter($__internal_9b47b6a181b66ed404286348bb266bb858e156b477d616b19d5bad60f896fe8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_9b47b6a181b66ed404286348bb266bb858e156b477d616b19d5bad60f896fe8e->leave($__internal_9b47b6a181b66ed404286348bb266bb858e156b477d616b19d5bad60f896fe8e_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_496df78a1b089b3a11a4c8f01fd2ad9ba5d4f94b9771c823887e0ab71c2f53bf = $this->env->getExtension("native_profiler");
        $__internal_496df78a1b089b3a11a4c8f01fd2ad9ba5d4f94b9771c823887e0ab71c2f53bf->enter($__internal_496df78a1b089b3a11a4c8f01fd2ad9ba5d4f94b9771c823887e0ab71c2f53bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_496df78a1b089b3a11a4c8f01fd2ad9ba5d4f94b9771c823887e0ab71c2f53bf->leave($__internal_496df78a1b089b3a11a4c8f01fd2ad9ba5d4f94b9771c823887e0ab71c2f53bf_prof);

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
