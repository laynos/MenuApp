<?php

/* MenuBundle:Site:ilot.html.twig */
class __TwigTemplate_319944edf2c82dc9990b86ae11f1fcf29566ed46a4a60a9a38740b41cc1f0494 extends Twig_Template
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
        $__internal_dfc72d676fe1745704a85e3781f97a4514ce9cfe45e646de213c347881a64811 = $this->env->getExtension("native_profiler");
        $__internal_dfc72d676fe1745704a85e3781f97a4514ce9cfe45e646de213c347881a64811->enter($__internal_dfc72d676fe1745704a85e3781f97a4514ce9cfe45e646de213c347881a64811_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MenuBundle:Site:ilot.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dfc72d676fe1745704a85e3781f97a4514ce9cfe45e646de213c347881a64811->leave($__internal_dfc72d676fe1745704a85e3781f97a4514ce9cfe45e646de213c347881a64811_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_735c8b35bc82fc5391599aa0cc4a0c26046db40c13196ecf5292606a2d27846f = $this->env->getExtension("native_profiler");
        $__internal_735c8b35bc82fc5391599aa0cc4a0c26046db40c13196ecf5292606a2d27846f->enter($__internal_735c8b35bc82fc5391599aa0cc4a0c26046db40c13196ecf5292606a2d27846f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 5
        echo "    Ilot du régal  - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_735c8b35bc82fc5391599aa0cc4a0c26046db40c13196ecf5292606a2d27846f->leave($__internal_735c8b35bc82fc5391599aa0cc4a0c26046db40c13196ecf5292606a2d27846f_prof);

    }

    // line 8
    public function block_body_site($context, array $blocks = array())
    {
        $__internal_44463dd8edb5d22c0356c75f4bdb7ae0a1d4cdaa6e3a656df8c4cdedcdae858d = $this->env->getExtension("native_profiler");
        $__internal_44463dd8edb5d22c0356c75f4bdb7ae0a1d4cdaa6e3a656df8c4cdedcdae858d->enter($__internal_44463dd8edb5d22c0356c75f4bdb7ae0a1d4cdaa6e3a656df8c4cdedcdae858d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_site"));

        // line 9
        echo "\t<div class=\"text-center\">
\t\t";
        // line 10
        $this->displayBlock('body_menuI', $context, $blocks);
        // line 19
        echo "\t</div>
  \t";
        // line 20
        $this->displayBlock('footer', $context, $blocks);
        
        $__internal_44463dd8edb5d22c0356c75f4bdb7ae0a1d4cdaa6e3a656df8c4cdedcdae858d->leave($__internal_44463dd8edb5d22c0356c75f4bdb7ae0a1d4cdaa6e3a656df8c4cdedcdae858d_prof);

    }

    // line 10
    public function block_body_menuI($context, array $blocks = array())
    {
        $__internal_3f8471c969c9175894eb944387b092c9c814340971467a16539f7e54d176021e = $this->env->getExtension("native_profiler");
        $__internal_3f8471c969c9175894eb944387b092c9c814340971467a16539f7e54d176021e->enter($__internal_3f8471c969c9175894eb944387b092c9c814340971467a16539f7e54d176021e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_menuI"));

        // line 11
        echo "\t\t\t<h3 >Ilot du régal</h3>
\t\t\t";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["ilot"]) ? $context["ilot"] : $this->getContext($context, "ilot")));
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
        
        $__internal_3f8471c969c9175894eb944387b092c9c814340971467a16539f7e54d176021e->leave($__internal_3f8471c969c9175894eb944387b092c9c814340971467a16539f7e54d176021e_prof);

    }

    // line 20
    public function block_footer($context, array $blocks = array())
    {
        $__internal_97029cd3edcfd3dfa51609b97f85dd2ae4a13630bce0f2e52c41d7c0f99a4c1b = $this->env->getExtension("native_profiler");
        $__internal_97029cd3edcfd3dfa51609b97f85dd2ae4a13630bce0f2e52c41d7c0f99a4c1b->enter($__internal_97029cd3edcfd3dfa51609b97f85dd2ae4a13630bce0f2e52c41d7c0f99a4c1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 21
        echo "\t\t<address>
\t\t\t2 ruelle sansevieras st clotilde, 97490 Saint-Denis (La Réunion)
\t\t\t\t<br/>
\t\t\tlun-ven: 06:00 - 15:00
\t\t\t\t<br/>
\t\t\tTéléphone +262 692 58 10 10
\t\t</address>
\t";
        
        $__internal_97029cd3edcfd3dfa51609b97f85dd2ae4a13630bce0f2e52c41d7c0f99a4c1b->leave($__internal_97029cd3edcfd3dfa51609b97f85dd2ae4a13630bce0f2e52c41d7c0f99a4c1b_prof);

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
        return array (  113 => 21,  107 => 20,  100 => 18,  90 => 14,  87 => 13,  83 => 12,  80 => 11,  74 => 10,  67 => 20,  64 => 19,  62 => 10,  59 => 9,  53 => 8,  43 => 5,  37 => 4,  11 => 1,);
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
/* 			*/
/* 				{{menu |nl2br }}*/
/* 				<br/>*/
/* 				<br/>*/
/* 			{% endfor %}*/
/* 		{% endblock %}*/
/* 	</div>*/
/*   	{% block footer %}*/
/* 		<address>*/
/* 			2 ruelle sansevieras st clotilde, 97490 Saint-Denis (La Réunion)*/
/* 				<br/>*/
/* 			lun-ven: 06:00 - 15:00*/
/* 				<br/>*/
/* 			Téléphone +262 692 58 10 10*/
/* 		</address>*/
/* 	{% endblock %}*/
/* {% endblock %}*/
