<?php

/* MenuBundle:Site:menu.html.twig */
class __TwigTemplate_7994d3c90bd517b8e7a426747250d3fd6ea539496770e5a1d762dfea0b36feca extends Twig_Template
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
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "MenuBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_54ef57b726e07278341bbac4ebf422be14f57a3e9ae2bd85c5f3c0448b08343b = $this->env->getExtension("native_profiler");
        $__internal_54ef57b726e07278341bbac4ebf422be14f57a3e9ae2bd85c5f3c0448b08343b->enter($__internal_54ef57b726e07278341bbac4ebf422be14f57a3e9ae2bd85c5f3c0448b08343b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MenuBundle:Site:menu.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_54ef57b726e07278341bbac4ebf422be14f57a3e9ae2bd85c5f3c0448b08343b->leave($__internal_54ef57b726e07278341bbac4ebf422be14f57a3e9ae2bd85c5f3c0448b08343b_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_964c25b1674fab409419052491ebc486198be0438cec858060d0ff819dedecc8 = $this->env->getExtension("native_profiler");
        $__internal_964c25b1674fab409419052491ebc486198be0438cec858060d0ff819dedecc8->enter($__internal_964c25b1674fab409419052491ebc486198be0438cec858060d0ff819dedecc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 5
        echo "  Accueil - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_964c25b1674fab409419052491ebc486198be0438cec858060d0ff819dedecc8->leave($__internal_964c25b1674fab409419052491ebc486198be0438cec858060d0ff819dedecc8_prof);

    }

    // line 8
    public function block_body_site($context, array $blocks = array())
    {
        $__internal_b5f06232ef8a57db47cb207a7e21a36aa886f83e6ec51727a47d5c3ec8de9f63 = $this->env->getExtension("native_profiler");
        $__internal_b5f06232ef8a57db47cb207a7e21a36aa886f83e6ec51727a47d5c3ec8de9f63->enter($__internal_b5f06232ef8a57db47cb207a7e21a36aa886f83e6ec51727a47d5c3ec8de9f63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_site"));

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
        
        $__internal_b5f06232ef8a57db47cb207a7e21a36aa886f83e6ec51727a47d5c3ec8de9f63->leave($__internal_b5f06232ef8a57db47cb207a7e21a36aa886f83e6ec51727a47d5c3ec8de9f63_prof);

    }

    // line 17
    public function block_body_menuI($context, array $blocks = array())
    {
        $__internal_77964a88666c7c7ee7878a05c9b51640e26771f3468f6ca24dad79dc350558cb = $this->env->getExtension("native_profiler");
        $__internal_77964a88666c7c7ee7878a05c9b51640e26771f3468f6ca24dad79dc350558cb->enter($__internal_77964a88666c7c7ee7878a05c9b51640e26771f3468f6ca24dad79dc350558cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_menuI"));

        // line 18
        echo "\t\t\t\t<h3 class=\"well well-lg\">Ilot du régal </h3>
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
                echo "\t\t\t\t\t\t<div class=\"well\">
\t\t\t\t\t\t\t";
                // line 24
                echo nl2br(twig_escape_filter($this->env, $context["menu"], "html", null, true));
                echo "
\t\t\t\t\t\t</div>
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
        
        $__internal_77964a88666c7c7ee7878a05c9b51640e26771f3468f6ca24dad79dc350558cb->leave($__internal_77964a88666c7c7ee7878a05c9b51640e26771f3468f6ca24dad79dc350558cb_prof);

    }

    // line 44
    public function block_body_menuR($context, array $blocks = array())
    {
        $__internal_f2253c13f9b5cc9c8639cba3d19d55b3b052a9c22e21c000ce34c25df208ea1e = $this->env->getExtension("native_profiler");
        $__internal_f2253c13f9b5cc9c8639cba3d19d55b3b052a9c22e21c000ce34c25df208ea1e->enter($__internal_f2253c13f9b5cc9c8639cba3d19d55b3b052a9c22e21c000ce34c25df208ea1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_menuR"));

        // line 45
        echo "\t\t\t\t<h3 class=\"well well-lg\">Régal du circuit</h3>
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
                echo "\t\t\t\t\t\t<div class=\"well\">
\t\t\t\t\t\t\t";
                // line 51
                echo nl2br(twig_escape_filter($this->env, $context["menu"], "html", null, true));
                echo "
\t\t\t\t\t\t</div
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
        
        $__internal_f2253c13f9b5cc9c8639cba3d19d55b3b052a9c22e21c000ce34c25df208ea1e->leave($__internal_f2253c13f9b5cc9c8639cba3d19d55b3b052a9c22e21c000ce34c25df208ea1e_prof);

    }

    // line 79
    public function block_footer($context, array $blocks = array())
    {
        $__internal_80630fcc9f49c45779982d7fff6969f6ef13d30c79769f9b13176edb667c5665 = $this->env->getExtension("native_profiler");
        $__internal_80630fcc9f49c45779982d7fff6969f6ef13d30c79769f9b13176edb667c5665->enter($__internal_80630fcc9f49c45779982d7fff6969f6ef13d30c79769f9b13176edb667c5665_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 80
        echo "<nav class=\"navbar navbar-primary navbar-fixed-bottom bg-info\">

</nav>
";
        
        $__internal_80630fcc9f49c45779982d7fff6969f6ef13d30c79769f9b13176edb667c5665->leave($__internal_80630fcc9f49c45779982d7fff6969f6ef13d30c79769f9b13176edb667c5665_prof);

    }

    // line 85
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_af1a4462b371a263c2d60cf2d04c79d0f9cec30e84f8ae493f1abc4a55b67314 = $this->env->getExtension("native_profiler");
        $__internal_af1a4462b371a263c2d60cf2d04c79d0f9cec30e84f8ae493f1abc4a55b67314->enter($__internal_af1a4462b371a263c2d60cf2d04c79d0f9cec30e84f8ae493f1abc4a55b67314_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 86
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
        
        $__internal_af1a4462b371a263c2d60cf2d04c79d0f9cec30e84f8ae493f1abc4a55b67314->leave($__internal_af1a4462b371a263c2d60cf2d04c79d0f9cec30e84f8ae493f1abc4a55b67314_prof);

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
        return array (  244 => 86,  238 => 85,  228 => 80,  222 => 79,  215 => 69,  207 => 66,  204 => 65,  197 => 60,  194 => 59,  187 => 54,  185 => 53,  180 => 51,  177 => 50,  175 => 49,  171 => 47,  167 => 46,  164 => 45,  158 => 44,  151 => 41,  144 => 39,  141 => 38,  134 => 33,  131 => 32,  124 => 27,  122 => 26,  117 => 24,  114 => 23,  112 => 22,  108 => 20,  104 => 19,  101 => 18,  95 => 17,  82 => 70,  80 => 44,  76 => 42,  74 => 17,  66 => 11,  64 => 10,  61 => 9,  55 => 8,  45 => 5,  39 => 4,  11 => 1,);
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
/* 				<h3 class="well well-lg">Ilot du régal </h3>*/
/* 				{% for menu in ilot %}*/
/* 			*/
/* 				*/
/* 					{% if date in (menu|lower) %}*/
/* 						<div class="well">*/
/* 							{{menu |nl2br }}*/
/* 						</div>*/
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
/* 				<h3 class="well well-lg">Régal du circuit</h3>*/
/* 				{% for menu in regal %}*/
/* 			*/
/* 				*/
/* 					{% if date in (menu|lower) %}*/
/* 						<div class="well">*/
/* 							{{ menu |nl2br }}*/
/* 						</div*/
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
/* 	*/
/* */
/* {% block footer %}*/
/* <nav class="navbar navbar-primary navbar-fixed-bottom bg-info">*/
/* */
/* </nav>*/
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
