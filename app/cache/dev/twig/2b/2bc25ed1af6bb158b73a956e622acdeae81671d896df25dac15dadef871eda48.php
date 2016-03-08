<?php

/* MenuBundle:Site:menu.html.twig */
class __TwigTemplate_435ec6faa8e474a53116af885c5454a7ae064f6853cd0e44b739a07bf5fa0581 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("MenuBundle::layout.html.twig", "MenuBundle:Site:menu.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body_site' => array($this, 'block_body_site'),
            'body_menuI' => array($this, 'block_body_menuI'),
            'body_menuR' => array($this, 'block_body_menuR'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "MenuBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a2a980fc841d645cbe31e51d0247cb893812587904f44c5ea70b104dd281c8d6 = $this->env->getExtension("native_profiler");
        $__internal_a2a980fc841d645cbe31e51d0247cb893812587904f44c5ea70b104dd281c8d6->enter($__internal_a2a980fc841d645cbe31e51d0247cb893812587904f44c5ea70b104dd281c8d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MenuBundle:Site:menu.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a2a980fc841d645cbe31e51d0247cb893812587904f44c5ea70b104dd281c8d6->leave($__internal_a2a980fc841d645cbe31e51d0247cb893812587904f44c5ea70b104dd281c8d6_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_be8e504ac14e6fb009a90bd8615ac556e45aaf8fc6ab9a5377cc16c172373561 = $this->env->getExtension("native_profiler");
        $__internal_be8e504ac14e6fb009a90bd8615ac556e45aaf8fc6ab9a5377cc16c172373561->enter($__internal_be8e504ac14e6fb009a90bd8615ac556e45aaf8fc6ab9a5377cc16c172373561_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 5
        echo "  Accueil - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_be8e504ac14e6fb009a90bd8615ac556e45aaf8fc6ab9a5377cc16c172373561->leave($__internal_be8e504ac14e6fb009a90bd8615ac556e45aaf8fc6ab9a5377cc16c172373561_prof);

    }

    // line 8
    public function block_body_site($context, array $blocks = array())
    {
        $__internal_2141ed8205b972c7b848aed294a47af52fa3ef24d0ca7a1e0c409e7aa17f9c57 = $this->env->getExtension("native_profiler");
        $__internal_2141ed8205b972c7b848aed294a47af52fa3ef24d0ca7a1e0c409e7aa17f9c57->enter($__internal_2141ed8205b972c7b848aed294a47af52fa3ef24d0ca7a1e0c409e7aa17f9c57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_site"));

        // line 9
        echo "
\t";
        // line 10
        $context["date"] = twig_localized_date_filter($this->env, "now", "none", "none", "fr", null, "d MMMM");
        // line 11
        echo "\t
\t<section class=\"container-fluid\" id=\"section1\">
\t\t\t
\t\t<div class=\"row text-justify\">
\t\t
\t\t<div id=\"menu\" class=\"col-md-6\">
\t\t\t";
        // line 17
        $this->displayBlock('body_menuI', $context, $blocks);
        // line 42
        echo "\t\t</div>
\t\t<div id=\"menu\" class=\"col-md-6\">
\t\t\t";
        // line 44
        $this->displayBlock('body_menuR', $context, $blocks);
        // line 70
        echo "
\t\t\t\t\t
\t\t</div>
\t\t</div>\t
\t</section>
\t
";
        
        $__internal_2141ed8205b972c7b848aed294a47af52fa3ef24d0ca7a1e0c409e7aa17f9c57->leave($__internal_2141ed8205b972c7b848aed294a47af52fa3ef24d0ca7a1e0c409e7aa17f9c57_prof);

    }

    // line 17
    public function block_body_menuI($context, array $blocks = array())
    {
        $__internal_36da9bf8362b91f8810dfc26fc6a74006b53e9e54e98a975318f4864e1748a7d = $this->env->getExtension("native_profiler");
        $__internal_36da9bf8362b91f8810dfc26fc6a74006b53e9e54e98a975318f4864e1748a7d->enter($__internal_36da9bf8362b91f8810dfc26fc6a74006b53e9e54e98a975318f4864e1748a7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_menuI"));

        // line 18
        echo "\t\t\t\t<h3>Ilot du régal </h3>
\t\t\t\t";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["ilot"]) ? $context["ilot"] : $this->getContext($context, "ilot")));
        foreach ($context['_seq'] as $context["_key"] => $context["menu"]) {
            // line 20
            echo "\t\t\t
\t\t\t\t
\t\t\t\t\t";
            // line 22
            if (twig_in_filter((isset($context["date"]) ? $context["date"] : $this->getContext($context, "date")), twig_lower_filter($this->env, $context["menu"]))) {
                // line 23
                echo "\t\t\t\t\t\t
\t\t\t\t\t\t\t";
                // line 24
                echo nl2br(twig_escape_filter($this->env, $context["menu"], "html", null, true));
                echo "
\t\t\t\t\t\t
\t\t\t\t\t\t";
                // line 26
                if (twig_in_filter("rougail saucisse", twig_lower_filter($this->env, $context["menu"]))) {
                    // line 27
                    echo "\t\t\t\t\t\t\t<script type=\"text/javascript\">    
\t\t\t\t\t\t\t\tvar rougailIlot = 1;
\t\t\t\t\t\t\t\t//alert(\"rougailIlot\");
\t\t\t\t\t\t\t</script>
\t\t\t\t\t\t";
                }
                // line 32
                echo "\t\t\t\t\t\t";
                if (twig_in_filter("poulet à  la crème", twig_lower_filter($this->env, $context["menu"]))) {
                    // line 33
                    echo "\t\t\t\t\t\t\t<script type=\"text/javascript\">    
\t\t\t\t\t\t\t\tvar pouletIlot = 1;
\t\t\t\t\t\t\t\t//alert(\"pouletIlot\");
\t\t\t\t\t\t\t</script>
\t\t\t\t\t\t";
                }
                // line 38
                echo "\t\t\t\t\t";
            }
            // line 39
            echo "\t\t\t
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menu'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "\t\t\t";
        
        $__internal_36da9bf8362b91f8810dfc26fc6a74006b53e9e54e98a975318f4864e1748a7d->leave($__internal_36da9bf8362b91f8810dfc26fc6a74006b53e9e54e98a975318f4864e1748a7d_prof);

    }

    // line 44
    public function block_body_menuR($context, array $blocks = array())
    {
        $__internal_9646213115502e27dd52a64f3db2805f42489cc80492bf64bbecb3339498e092 = $this->env->getExtension("native_profiler");
        $__internal_9646213115502e27dd52a64f3db2805f42489cc80492bf64bbecb3339498e092->enter($__internal_9646213115502e27dd52a64f3db2805f42489cc80492bf64bbecb3339498e092_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_menuR"));

        // line 45
        echo "\t\t\t\t<h3>Régal du circuit</h3>
\t\t\t\t";
        // line 46
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["regal"]) ? $context["regal"] : $this->getContext($context, "regal")));
        foreach ($context['_seq'] as $context["_key"] => $context["menu"]) {
            // line 47
            echo "\t\t\t
\t\t\t\t
\t\t\t\t\t";
            // line 49
            if (twig_in_filter((isset($context["date"]) ? $context["date"] : $this->getContext($context, "date")), twig_lower_filter($this->env, $context["menu"]))) {
                // line 50
                echo "\t\t\t\t\t\t
\t\t\t\t\t\t\t";
                // line 51
                echo nl2br(twig_escape_filter($this->env, $context["menu"], "html", null, true));
                echo "
\t\t\t\t\t\t
\t\t\t\t\t\t";
                // line 53
                if (twig_in_filter("rougail saucisse", twig_lower_filter($this->env, $context["menu"]))) {
                    // line 54
                    echo "\t\t\t\t\t\t\t<script type=\"text/javascript\">    
\t\t\t\t\t\t\t\tvar rougailRegal = 1;
\t\t\t\t\t\t\t\t//alert(\"rougailRegal\");
\t\t\t\t\t\t\t</script>
\t\t\t\t\t\t";
                }
                // line 59
                echo "\t\t\t\t\t\t";
                if (twig_in_filter("poulet à  la crème", twig_lower_filter($this->env, $context["menu"]))) {
                    // line 60
                    echo "\t\t\t\t\t\t\t<script type=\"text/javascript\">    
\t\t\t\t\t\t\t\tvar pouletRegal = 1;
\t\t\t\t\t\t\t\t//alert(\"pouletRegal\");
\t\t\t\t\t\t\t</script>
\t\t\t\t\t\t";
                }
                // line 65
                echo "\t\t\t\t\t";
            }
            // line 66
            echo "\t\t\t\t
\t\t\t
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menu'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 69
        echo "\t\t\t";
        
        $__internal_9646213115502e27dd52a64f3db2805f42489cc80492bf64bbecb3339498e092->leave($__internal_9646213115502e27dd52a64f3db2805f42489cc80492bf64bbecb3339498e092_prof);

    }

    // line 78
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_878685935cc5fcaedde1059fbbd63e33f5cd185e0deca920c6ccc55e77345169 = $this->env->getExtension("native_profiler");
        $__internal_878685935cc5fcaedde1059fbbd63e33f5cd185e0deca920c6ccc55e77345169->enter($__internal_878685935cc5fcaedde1059fbbd63e33f5cd185e0deca920c6ccc55e77345169_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 79
        echo "\t<script type=\"text/javascript\">
\t\tif(typeof rougailIlot != 'undefined'){
\t\t\talert(\"Vous pouvez déguster aujourd'hui un bon rougail saucisse chez L'Ilot Régal\");
\t\t}
\t\tif(typeof rougailRegal != 'undefined'){
\t\t\tconsole.log(rougailRegal);
\t\t\talert(\"Vous pouvez déguster aujourd'hui un bon rougail saucisse chez Régal du circuit\");
\t\t}
\t\tif(typeof pouletIlot != 'undefined'){
\t\t\talert(\"Vous pouvez déguster aujourd'hui un délicieux poulet à la crème chez L'Ilot Régal\");
\t\t}
\t\tif(typeof pouletRegal != 'undefined'){
\t\t\talert(\"Vous pouvez déguster aujourd'hui un délicieux poulet à la crème chez Régal du circuit\");
\t\t}
    </script>
";
        
        $__internal_878685935cc5fcaedde1059fbbd63e33f5cd185e0deca920c6ccc55e77345169->leave($__internal_878685935cc5fcaedde1059fbbd63e33f5cd185e0deca920c6ccc55e77345169_prof);

    }

    public function getTemplateName()
    {
        return "MenuBundle:Site:menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  227 => 79,  221 => 78,  214 => 69,  206 => 66,  203 => 65,  196 => 60,  193 => 59,  186 => 54,  184 => 53,  179 => 51,  176 => 50,  174 => 49,  170 => 47,  166 => 46,  163 => 45,  157 => 44,  150 => 41,  143 => 39,  140 => 38,  133 => 33,  130 => 32,  123 => 27,  121 => 26,  116 => 24,  113 => 23,  111 => 22,  107 => 20,  103 => 19,  100 => 18,  94 => 17,  81 => 70,  79 => 44,  75 => 42,  73 => 17,  65 => 11,  63 => 10,  60 => 9,  54 => 8,  44 => 5,  38 => 4,  11 => 1,);
    }
}
/* {% extends "MenuBundle::layout.html.twig" %}*/
/* */
/* */
/* {% block title %}*/
/*   Accueil - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block body_site %}*/
/* */
/* 	{% set date =  'now'|localizeddate('none', 'none', 'fr', null, 'd MMMM') %}*/
/* 	*/
/* 	<section class="container-fluid" id="section1">*/
/* 			*/
/* 		<div class="row text-justify">*/
/* 		*/
/* 		<div id="menu" class="col-md-6">*/
/* 			{% block body_menuI %}*/
/* 				<h3>Ilot du régal </h3>*/
/* 				{% for menu in ilot %}*/
/* 			*/
/* 				*/
/* 					{% if date in (menu|lower) %}*/
/* 						*/
/* 							{{menu |nl2br }}*/
/* 						*/
/* 						{% if "rougail saucisse" in (menu|lower) %}*/
/* 							<script type="text/javascript">    */
/* 								var rougailIlot = 1;*/
/* 								//alert("rougailIlot");*/
/* 							</script>*/
/* 						{% endif %}*/
/* 						{% if "poulet à  la crème" in (menu|lower) %}*/
/* 							<script type="text/javascript">    */
/* 								var pouletIlot = 1;*/
/* 								//alert("pouletIlot");*/
/* 							</script>*/
/* 						{% endif %}*/
/* 					{% endif %}*/
/* 			*/
/* 				{% endfor %}*/
/* 			{% endblock %}*/
/* 		</div>*/
/* 		<div id="menu" class="col-md-6">*/
/* 			{% block body_menuR  %}*/
/* 				<h3>Régal du circuit</h3>*/
/* 				{% for menu in regal %}*/
/* 			*/
/* 				*/
/* 					{% if date in (menu|lower) %}*/
/* 						*/
/* 							{{ menu |nl2br }}*/
/* 						*/
/* 						{% if "rougail saucisse" in (menu|lower) %}*/
/* 							<script type="text/javascript">    */
/* 								var rougailRegal = 1;*/
/* 								//alert("rougailRegal");*/
/* 							</script>*/
/* 						{% endif %}*/
/* 						{% if "poulet à  la crème" in (menu|lower) %}*/
/* 							<script type="text/javascript">    */
/* 								var pouletRegal = 1;*/
/* 								//alert("pouletRegal");*/
/* 							</script>*/
/* 						{% endif %}*/
/* 					{% endif %}*/
/* 				*/
/* 			*/
/* 				{% endfor %}*/
/* 			{% endblock %}*/
/* */
/* 					*/
/* 		</div>*/
/* 		</div>	*/
/* 	</section>*/
/* 	*/
/* {% endblock %}*/
/* */
/* {% block javascripts %}*/
/* 	<script type="text/javascript">*/
/* 		if(typeof rougailIlot != 'undefined'){*/
/* 			alert("Vous pouvez déguster aujourd'hui un bon rougail saucisse chez L'Ilot Régal");*/
/* 		}*/
/* 		if(typeof rougailRegal != 'undefined'){*/
/* 			console.log(rougailRegal);*/
/* 			alert("Vous pouvez déguster aujourd'hui un bon rougail saucisse chez Régal du circuit");*/
/* 		}*/
/* 		if(typeof pouletIlot != 'undefined'){*/
/* 			alert("Vous pouvez déguster aujourd'hui un délicieux poulet à la crème chez L'Ilot Régal");*/
/* 		}*/
/* 		if(typeof pouletRegal != 'undefined'){*/
/* 			alert("Vous pouvez déguster aujourd'hui un délicieux poulet à la crème chez Régal du circuit");*/
/* 		}*/
/*     </script>*/
/* {% endblock %}*/
