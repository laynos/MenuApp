<?php

/* MenuBundle:Site:regal.html.twig */
class __TwigTemplate_71795be24b7cdb921b41222bcfbc15d183eb4c2f1535104d6c91a997d9d0e52b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("MenuBundle::layout.html.twig", "MenuBundle:Site:regal.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body_site' => array($this, 'block_body_site'),
            'body_menuR' => array($this, 'block_body_menuR'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "MenuBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9b58306757b2ec66cf5be017b63fcde0c430132a1da0dc2974d2dcb438b308e8 = $this->env->getExtension("native_profiler");
        $__internal_9b58306757b2ec66cf5be017b63fcde0c430132a1da0dc2974d2dcb438b308e8->enter($__internal_9b58306757b2ec66cf5be017b63fcde0c430132a1da0dc2974d2dcb438b308e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MenuBundle:Site:regal.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9b58306757b2ec66cf5be017b63fcde0c430132a1da0dc2974d2dcb438b308e8->leave($__internal_9b58306757b2ec66cf5be017b63fcde0c430132a1da0dc2974d2dcb438b308e8_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_8c3af8ff95f7473000ce7c166adc287a6811a28566bdb883bff407faf97c6775 = $this->env->getExtension("native_profiler");
        $__internal_8c3af8ff95f7473000ce7c166adc287a6811a28566bdb883bff407faf97c6775->enter($__internal_8c3af8ff95f7473000ce7c166adc287a6811a28566bdb883bff407faf97c6775_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 5
        echo "\tRégal du circuit - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_8c3af8ff95f7473000ce7c166adc287a6811a28566bdb883bff407faf97c6775->leave($__internal_8c3af8ff95f7473000ce7c166adc287a6811a28566bdb883bff407faf97c6775_prof);

    }

    // line 8
    public function block_body_site($context, array $blocks = array())
    {
        $__internal_b92dc33f402815c357129793056a99ab10447cd0b4baf3e35550e96a9ea62600 = $this->env->getExtension("native_profiler");
        $__internal_b92dc33f402815c357129793056a99ab10447cd0b4baf3e35550e96a9ea62600->enter($__internal_b92dc33f402815c357129793056a99ab10447cd0b4baf3e35550e96a9ea62600_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_site"));

        // line 9
        echo "\t<div class=\"text-center\">
\t\t";
        // line 10
        $this->displayBlock('body_menuR', $context, $blocks);
        // line 20
        echo "\t</div>\t

";
        
        $__internal_b92dc33f402815c357129793056a99ab10447cd0b4baf3e35550e96a9ea62600->leave($__internal_b92dc33f402815c357129793056a99ab10447cd0b4baf3e35550e96a9ea62600_prof);

    }

    // line 10
    public function block_body_menuR($context, array $blocks = array())
    {
        $__internal_0652bf506577438fbf18dc94402fbdc0ed83f29a5a9772d813cce454e7f8f72b = $this->env->getExtension("native_profiler");
        $__internal_0652bf506577438fbf18dc94402fbdc0ed83f29a5a9772d813cce454e7f8f72b->enter($__internal_0652bf506577438fbf18dc94402fbdc0ed83f29a5a9772d813cce454e7f8f72b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_menuR"));

        // line 11
        echo "\t\t\t<h3>Régal du circuit</h3>
\t\t\t";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["regal"]) ? $context["regal"] : $this->getContext($context, "regal")));
        foreach ($context['_seq'] as $context["_key"] => $context["menu"]) {
            // line 13
            echo "\t\t\t\t<div class=\"well\">
\t\t\t\t\t";
            // line 14
            echo nl2br(twig_escape_filter($this->env, $context["menu"], "html", null, true));
            echo "
\t\t\t\t</div>
\t\t\t\t<br/>
\t\t\t\t<br/>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menu'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "\t\t";
        
        $__internal_0652bf506577438fbf18dc94402fbdc0ed83f29a5a9772d813cce454e7f8f72b->leave($__internal_0652bf506577438fbf18dc94402fbdc0ed83f29a5a9772d813cce454e7f8f72b_prof);

    }

    // line 24
    public function block_footer($context, array $blocks = array())
    {
        $__internal_58960136ab8bfbaf6931cfcd44a7054a811b944ca17aa11ea12f77d08a685af2 = $this->env->getExtension("native_profiler");
        $__internal_58960136ab8bfbaf6931cfcd44a7054a811b944ca17aa11ea12f77d08a685af2->enter($__internal_58960136ab8bfbaf6931cfcd44a7054a811b944ca17aa11ea12f77d08a685af2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 25
        echo "\t<address>
\t\t91 Rue du karting la Jamaïque, 97490 Saint-Denis (La Réunion)
\t\t\t<br/>
\t\tTéléphone +262 692 85 01 50
\t</address>
";
        
        $__internal_58960136ab8bfbaf6931cfcd44a7054a811b944ca17aa11ea12f77d08a685af2->leave($__internal_58960136ab8bfbaf6931cfcd44a7054a811b944ca17aa11ea12f77d08a685af2_prof);

    }

    public function getTemplateName()
    {
        return "MenuBundle:Site:regal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 25,  107 => 24,  100 => 19,  89 => 14,  86 => 13,  82 => 12,  79 => 11,  73 => 10,  64 => 20,  62 => 10,  59 => 9,  53 => 8,  43 => 5,  37 => 4,  11 => 1,);
    }
}
/* {% extends "MenuBundle::layout.html.twig" %}*/
/* */
/* */
/* {% block title %}*/
/* 	Régal du circuit - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block body_site %}*/
/* 	<div class="text-center">*/
/* 		{% block body_menuR  %}*/
/* 			<h3>Régal du circuit</h3>*/
/* 			{% for menu in regal %}*/
/* 				<div class="well">*/
/* 					{{ menu |nl2br }}*/
/* 				</div>*/
/* 				<br/>*/
/* 				<br/>*/
/* 			{% endfor %}*/
/* 		{% endblock %}*/
/* 	</div>	*/
/* */
/* {% endblock %}*/
/* */
/* {% block footer %}*/
/* 	<address>*/
/* 		91 Rue du karting la Jamaïque, 97490 Saint-Denis (La Réunion)*/
/* 			<br/>*/
/* 		Téléphone +262 692 85 01 50*/
/* 	</address>*/
/* {% endblock %}*/
