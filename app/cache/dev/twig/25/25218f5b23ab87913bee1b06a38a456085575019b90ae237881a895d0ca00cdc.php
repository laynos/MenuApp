<?php

/* MenuBundle:Site:regal.html.twig */
class __TwigTemplate_aaa0979f5ca2e623125cc9bf2c2208a311fe5c34ab02fd550941cdb044d260b4 extends Twig_Template
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
        $__internal_620fa1c7fdbac2d4c8994c491a62f62fc3ba46a230447bd30c52d4c5664c0e0a = $this->env->getExtension("native_profiler");
        $__internal_620fa1c7fdbac2d4c8994c491a62f62fc3ba46a230447bd30c52d4c5664c0e0a->enter($__internal_620fa1c7fdbac2d4c8994c491a62f62fc3ba46a230447bd30c52d4c5664c0e0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MenuBundle:Site:regal.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_620fa1c7fdbac2d4c8994c491a62f62fc3ba46a230447bd30c52d4c5664c0e0a->leave($__internal_620fa1c7fdbac2d4c8994c491a62f62fc3ba46a230447bd30c52d4c5664c0e0a_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_8596b7279844eb26262e6bb974776ff6406dbded72ba869ed6d91b74be213419 = $this->env->getExtension("native_profiler");
        $__internal_8596b7279844eb26262e6bb974776ff6406dbded72ba869ed6d91b74be213419->enter($__internal_8596b7279844eb26262e6bb974776ff6406dbded72ba869ed6d91b74be213419_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 5
        echo "\tRégal du circuit - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_8596b7279844eb26262e6bb974776ff6406dbded72ba869ed6d91b74be213419->leave($__internal_8596b7279844eb26262e6bb974776ff6406dbded72ba869ed6d91b74be213419_prof);

    }

    // line 8
    public function block_body_site($context, array $blocks = array())
    {
        $__internal_4f8644049dbba9e901862dec6a4cecf8ca70591be5f725de3a336bf51671b6e5 = $this->env->getExtension("native_profiler");
        $__internal_4f8644049dbba9e901862dec6a4cecf8ca70591be5f725de3a336bf51671b6e5->enter($__internal_4f8644049dbba9e901862dec6a4cecf8ca70591be5f725de3a336bf51671b6e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_site"));

        // line 9
        echo "\t<div class=\"text-center\">
\t\t";
        // line 10
        $this->displayBlock('body_menuR', $context, $blocks);
        // line 19
        echo "\t</div>\t

";
        
        $__internal_4f8644049dbba9e901862dec6a4cecf8ca70591be5f725de3a336bf51671b6e5->leave($__internal_4f8644049dbba9e901862dec6a4cecf8ca70591be5f725de3a336bf51671b6e5_prof);

    }

    // line 10
    public function block_body_menuR($context, array $blocks = array())
    {
        $__internal_80c6acdaa24f4206e85360b746ae9de29b683380e275a8612cae7cdd8cafeb46 = $this->env->getExtension("native_profiler");
        $__internal_80c6acdaa24f4206e85360b746ae9de29b683380e275a8612cae7cdd8cafeb46->enter($__internal_80c6acdaa24f4206e85360b746ae9de29b683380e275a8612cae7cdd8cafeb46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_menuR"));

        // line 11
        echo "\t\t\t<h3>Régal du circuit</h3>
\t\t\t";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["regal"]) ? $context["regal"] : $this->getContext($context, "regal")));
        foreach ($context['_seq'] as $context["_key"] => $context["menu"]) {
            // line 13
            echo "\t\t\t
\t\t\t\t";
            // line 14
            echo nl2br(twig_escape_filter($this->env, $context["menu"], "html", null, true));
            echo "
\t\t\t\t<br/>
\t\t\t\t<br/>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menu'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "\t\t";
        
        $__internal_80c6acdaa24f4206e85360b746ae9de29b683380e275a8612cae7cdd8cafeb46->leave($__internal_80c6acdaa24f4206e85360b746ae9de29b683380e275a8612cae7cdd8cafeb46_prof);

    }

    // line 23
    public function block_footer($context, array $blocks = array())
    {
        $__internal_650a3d7ee487e8d378818c5c643074ea99d969c776bb90c65462d9477eaad545 = $this->env->getExtension("native_profiler");
        $__internal_650a3d7ee487e8d378818c5c643074ea99d969c776bb90c65462d9477eaad545->enter($__internal_650a3d7ee487e8d378818c5c643074ea99d969c776bb90c65462d9477eaad545_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 24
        echo "\t<address>
\t\t91 rue du karting la Jamaïque, 97490 Saint-Denis (La Réunion)
\t\t\t<br/>
\t\tTéléphone +262 692 85 01 50
\t</address>
";
        
        $__internal_650a3d7ee487e8d378818c5c643074ea99d969c776bb90c65462d9477eaad545->leave($__internal_650a3d7ee487e8d378818c5c643074ea99d969c776bb90c65462d9477eaad545_prof);

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
        return array (  112 => 24,  106 => 23,  99 => 18,  89 => 14,  86 => 13,  82 => 12,  79 => 11,  73 => 10,  64 => 19,  62 => 10,  59 => 9,  53 => 8,  43 => 5,  37 => 4,  11 => 1,);
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
/* 			*/
/* 				{{ menu |nl2br }}*/
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
/* 		91 rue du karting la Jamaïque, 97490 Saint-Denis (La Réunion)*/
/* 			<br/>*/
/* 		Téléphone +262 692 85 01 50*/
/* 	</address>*/
/* {% endblock %}*/
