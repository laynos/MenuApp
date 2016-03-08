<?php

/* MenuBundle:Site:ilot.html.twig */
class __TwigTemplate_e797c0d0ea49a9d904f02adbacd9b0d818b1f55ba795680a3341d2b1d3b175a9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("MenuBundle::layout.html.twig", "MenuBundle:Site:ilot.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body_site' => array($this, 'block_body_site'),
            'body_menuI' => array($this, 'block_body_menuI'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "MenuBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8e7e734bccfc522f3023707af2b7efa134f8792778787bab0283af4d49303362 = $this->env->getExtension("native_profiler");
        $__internal_8e7e734bccfc522f3023707af2b7efa134f8792778787bab0283af4d49303362->enter($__internal_8e7e734bccfc522f3023707af2b7efa134f8792778787bab0283af4d49303362_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MenuBundle:Site:ilot.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8e7e734bccfc522f3023707af2b7efa134f8792778787bab0283af4d49303362->leave($__internal_8e7e734bccfc522f3023707af2b7efa134f8792778787bab0283af4d49303362_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_ba6c352f1f2097d01eaddeebaa35d1030a86947478a8b9d01304ee5e41f0036a = $this->env->getExtension("native_profiler");
        $__internal_ba6c352f1f2097d01eaddeebaa35d1030a86947478a8b9d01304ee5e41f0036a->enter($__internal_ba6c352f1f2097d01eaddeebaa35d1030a86947478a8b9d01304ee5e41f0036a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 5
        echo "    Ilot du régal  - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_ba6c352f1f2097d01eaddeebaa35d1030a86947478a8b9d01304ee5e41f0036a->leave($__internal_ba6c352f1f2097d01eaddeebaa35d1030a86947478a8b9d01304ee5e41f0036a_prof);

    }

    // line 8
    public function block_body_site($context, array $blocks = array())
    {
        $__internal_f86c3c160b7e9d73bf35b00b3bfd140e3b5801af8e702be4973671fc832b46ea = $this->env->getExtension("native_profiler");
        $__internal_f86c3c160b7e9d73bf35b00b3bfd140e3b5801af8e702be4973671fc832b46ea->enter($__internal_f86c3c160b7e9d73bf35b00b3bfd140e3b5801af8e702be4973671fc832b46ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_site"));

        // line 9
        echo "\t<div class=\"text-center\">
\t\t";
        // line 10
        $this->displayBlock('body_menuI', $context, $blocks);
        // line 20
        echo "\t</div>
";
        
        $__internal_f86c3c160b7e9d73bf35b00b3bfd140e3b5801af8e702be4973671fc832b46ea->leave($__internal_f86c3c160b7e9d73bf35b00b3bfd140e3b5801af8e702be4973671fc832b46ea_prof);

    }

    // line 10
    public function block_body_menuI($context, array $blocks = array())
    {
        $__internal_515a315a0eb4ef27ae50ff9da1d31489926e1a39c0898db87db852b9be2155f1 = $this->env->getExtension("native_profiler");
        $__internal_515a315a0eb4ef27ae50ff9da1d31489926e1a39c0898db87db852b9be2155f1->enter($__internal_515a315a0eb4ef27ae50ff9da1d31489926e1a39c0898db87db852b9be2155f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_menuI"));

        // line 11
        echo "\t\t\t<h3 >Ilot du régal</h3>
\t\t\t";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["ilot"]) ? $context["ilot"] : $this->getContext($context, "ilot")));
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
        
        $__internal_515a315a0eb4ef27ae50ff9da1d31489926e1a39c0898db87db852b9be2155f1->leave($__internal_515a315a0eb4ef27ae50ff9da1d31489926e1a39c0898db87db852b9be2155f1_prof);

    }

    // line 23
    public function block_footer($context, array $blocks = array())
    {
        $__internal_e3f55ef15b47a4993a6541e2318773c24dcea69c61917e748cb76af8d494f6f1 = $this->env->getExtension("native_profiler");
        $__internal_e3f55ef15b47a4993a6541e2318773c24dcea69c61917e748cb76af8d494f6f1->enter($__internal_e3f55ef15b47a4993a6541e2318773c24dcea69c61917e748cb76af8d494f6f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 24
        echo "\t<address>
\t\t2 Ruelle sansevieras Saint-Clotilde, 97490 Saint-Denis (La Réunion)
\t\t\t<br/>
\t\tDu lundi au vendredi : de 6h à 15h
\t\t\t<br/>
\t\tTéléphone +262 692 58 10 10
\t</address>
";
        
        $__internal_e3f55ef15b47a4993a6541e2318773c24dcea69c61917e748cb76af8d494f6f1->leave($__internal_e3f55ef15b47a4993a6541e2318773c24dcea69c61917e748cb76af8d494f6f1_prof);

    }

    public function getTemplateName()
    {
        return "MenuBundle:Site:ilot.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 24,  106 => 23,  99 => 19,  88 => 14,  85 => 13,  81 => 12,  78 => 11,  72 => 10,  64 => 20,  62 => 10,  59 => 9,  53 => 8,  43 => 5,  37 => 4,  11 => 1,);
    }
}
/* {% extends "MenuBundle::layout.html.twig" %}*/
/* */
/* */
/* {% block title %}*/
/*     Ilot du régal  - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block body_site %}*/
/* 	<div class="text-center">*/
/* 		{% block body_menuI %}*/
/* 			<h3 >Ilot du régal</h3>*/
/* 			{% for menu in ilot %}*/
/* 				<div class="well">*/
/* 					{{menu |nl2br }}*/
/* 				</div>*/
/* 				<br/>*/
/* 				<br/>*/
/* 			{% endfor %}*/
/* 		{% endblock %}*/
/* 	</div>*/
/* {% endblock %}*/
/*   */
/* {% block footer %}*/
/* 	<address>*/
/* 		2 Ruelle sansevieras Saint-Clotilde, 97490 Saint-Denis (La Réunion)*/
/* 			<br/>*/
/* 		Du lundi au vendredi : de 6h à 15h*/
/* 			<br/>*/
/* 		Téléphone +262 692 58 10 10*/
/* 	</address>*/
/* {% endblock %}*/
