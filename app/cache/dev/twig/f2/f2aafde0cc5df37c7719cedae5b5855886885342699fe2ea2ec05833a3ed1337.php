<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_fd1c24af5fea05c17e135ec90e30b0e791e34b4ea6875296dae84c7114b91d72 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b1ac2665a3e011b982ff2b0eba86f93526c8393d272c59ef9c23aa0a644834ab = $this->env->getExtension("native_profiler");
        $__internal_b1ac2665a3e011b982ff2b0eba86f93526c8393d272c59ef9c23aa0a644834ab->enter($__internal_b1ac2665a3e011b982ff2b0eba86f93526c8393d272c59ef9c23aa0a644834ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b1ac2665a3e011b982ff2b0eba86f93526c8393d272c59ef9c23aa0a644834ab->leave($__internal_b1ac2665a3e011b982ff2b0eba86f93526c8393d272c59ef9c23aa0a644834ab_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_d9e85a59e601855978954d4249ff203de6c02c49ab2e91bd5e4929f60e526c07 = $this->env->getExtension("native_profiler");
        $__internal_d9e85a59e601855978954d4249ff203de6c02c49ab2e91bd5e4929f60e526c07->enter($__internal_d9e85a59e601855978954d4249ff203de6c02c49ab2e91bd5e4929f60e526c07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_d9e85a59e601855978954d4249ff203de6c02c49ab2e91bd5e4929f60e526c07->leave($__internal_d9e85a59e601855978954d4249ff203de6c02c49ab2e91bd5e4929f60e526c07_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_60304e1d3320285a937059d442dd87ffa2a20ea4e282f1430ecc90d084894451 = $this->env->getExtension("native_profiler");
        $__internal_60304e1d3320285a937059d442dd87ffa2a20ea4e282f1430ecc90d084894451->enter($__internal_60304e1d3320285a937059d442dd87ffa2a20ea4e282f1430ecc90d084894451_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_60304e1d3320285a937059d442dd87ffa2a20ea4e282f1430ecc90d084894451->leave($__internal_60304e1d3320285a937059d442dd87ffa2a20ea4e282f1430ecc90d084894451_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_4152a4f29edd397b05fc0de64fecf6cc17d2763ca7f142e8ba957077a0a3a3af = $this->env->getExtension("native_profiler");
        $__internal_4152a4f29edd397b05fc0de64fecf6cc17d2763ca7f142e8ba957077a0a3a3af->enter($__internal_4152a4f29edd397b05fc0de64fecf6cc17d2763ca7f142e8ba957077a0a3a3af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_4152a4f29edd397b05fc0de64fecf6cc17d2763ca7f142e8ba957077a0a3a3af->leave($__internal_4152a4f29edd397b05fc0de64fecf6cc17d2763ca7f142e8ba957077a0a3a3af_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
