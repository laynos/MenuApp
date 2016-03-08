<?php

/* MenuBundle::layout.html.twig */
class __TwigTemplate_6b3cdc53fbf492555575200d5bf580cd4571a8b31e5ad5c69615ec9c71a84620 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "MenuBundle::layout.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'body_site' => array($this, 'block_body_site'),
            'body_menuI' => array($this, 'block_body_menuI'),
            'body_menuR' => array($this, 'block_body_menuR'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b21bf8be1adb24dff62cafabbbafaacc8f859643130e898c62973252690f297a = $this->env->getExtension("native_profiler");
        $__internal_b21bf8be1adb24dff62cafabbbafaacc8f859643130e898c62973252690f297a->enter($__internal_b21bf8be1adb24dff62cafabbbafaacc8f859643130e898c62973252690f297a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MenuBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b21bf8be1adb24dff62cafabbbafaacc8f859643130e898c62973252690f297a->leave($__internal_b21bf8be1adb24dff62cafabbbafaacc8f859643130e898c62973252690f297a_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_8aee0daaa484b6b1e30c0b6b02410c28b1cf236cad1905d30d61eeac226a2f95 = $this->env->getExtension("native_profiler");
        $__internal_8aee0daaa484b6b1e30c0b6b02410c28b1cf236cad1905d30d61eeac226a2f95->enter($__internal_8aee0daaa484b6b1e30c0b6b02410c28b1cf236cad1905d30d61eeac226a2f95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Menus
";
        
        $__internal_8aee0daaa484b6b1e30c0b6b02410c28b1cf236cad1905d30d61eeac226a2f95->leave($__internal_8aee0daaa484b6b1e30c0b6b02410c28b1cf236cad1905d30d61eeac226a2f95_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_6d1527f35ac24f6710d7e0738c21b8bbe9ee352ace42d48d599e9205658be3ef = $this->env->getExtension("native_profiler");
        $__internal_6d1527f35ac24f6710d7e0738c21b8bbe9ee352ace42d48d599e9205658be3ef->enter($__internal_6d1527f35ac24f6710d7e0738c21b8bbe9ee352ace42d48d599e9205658be3ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "<nav class=\"navbar navbar-primary bg-info\" role=\"navigation\">
\t<div class=\"container-fluid\">
\t\t<div class=\"navbar-header\">
\t\t\t<button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-ex2-collapse\">
\t\t\t\t<span class=\"sr-only\">Toggle navigation</span>
\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t</button>
\t\t\t<a class=\"navbar-brand\" href=\"";
        // line 20
        echo $this->env->getExtension('routing')->getPath("menu_homepage");
        echo "\">Menus du jour</a>
\t\t</div>
\t\t<div class=\"collapse navbar-collapse navbar-ex2-collapse\">
\t\t\t<ul class=\"nav navbar-nav\">
\t\t\t\t<li class=\"active\"><a href=\"";
        // line 24
        echo $this->env->getExtension('routing')->getPath("menu_homepage");
        echo "\">Accueil</a></li>
\t\t\t\t<li class=\"active\"><a href=\"";
        // line 25
        echo $this->env->getExtension('routing')->getPath("menu_ilot");
        echo "\">Ilot du régal</a></li>
\t\t\t\t<li class=\"active\"><a href=\"";
        // line 26
        echo $this->env->getExtension('routing')->getPath("menu_regal");
        echo "\">Régal du circuit</a></li>

\t\t\t</ul>
\t\t\t<ul class=\"nav navbar-nav navbar-right\">
\t\t\t</ul>
\t\t</div>
\t</div>
</nav>


\t\t";
        // line 36
        $this->displayBlock('body_site', $context, $blocks);
        // line 49
        echo "\t
\t
\t<footer class=\"container-fluid text-center bg-info text-primary\">
\t\t";
        // line 52
        $this->displayBlock('footer', $context, $blocks);
        // line 54
        echo "\t</footer>
";
        
        $__internal_6d1527f35ac24f6710d7e0738c21b8bbe9ee352ace42d48d599e9205658be3ef->leave($__internal_6d1527f35ac24f6710d7e0738c21b8bbe9ee352ace42d48d599e9205658be3ef_prof);

    }

    // line 36
    public function block_body_site($context, array $blocks = array())
    {
        $__internal_405bc7682393d4a657f3e81024ed2fb099ea43b89de7a7f6356fc222fd3de24f = $this->env->getExtension("native_profiler");
        $__internal_405bc7682393d4a657f3e81024ed2fb099ea43b89de7a7f6356fc222fd3de24f->enter($__internal_405bc7682393d4a657f3e81024ed2fb099ea43b89de7a7f6356fc222fd3de24f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_site"));

        // line 37
        echo "\t
\t\t
\t\t\t";
        // line 39
        $this->displayBlock('body_menuI', $context, $blocks);
        // line 42
        echo "\t\t
\t\t\t
\t\t\t";
        // line 44
        $this->displayBlock('body_menuR', $context, $blocks);
        // line 47
        echo "
\t\t";
        
        $__internal_405bc7682393d4a657f3e81024ed2fb099ea43b89de7a7f6356fc222fd3de24f->leave($__internal_405bc7682393d4a657f3e81024ed2fb099ea43b89de7a7f6356fc222fd3de24f_prof);

    }

    // line 39
    public function block_body_menuI($context, array $blocks = array())
    {
        $__internal_77fb0068d921578ee3f80173e60df62e786f63d67724638328d359b6c6132a8a = $this->env->getExtension("native_profiler");
        $__internal_77fb0068d921578ee3f80173e60df62e786f63d67724638328d359b6c6132a8a->enter($__internal_77fb0068d921578ee3f80173e60df62e786f63d67724638328d359b6c6132a8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_menuI"));

        // line 40
        echo "
\t\t\t";
        
        $__internal_77fb0068d921578ee3f80173e60df62e786f63d67724638328d359b6c6132a8a->leave($__internal_77fb0068d921578ee3f80173e60df62e786f63d67724638328d359b6c6132a8a_prof);

    }

    // line 44
    public function block_body_menuR($context, array $blocks = array())
    {
        $__internal_b6ea1f1520ebef6d9b81550b2207d0d799e5427fd682379fe312b7ca9300d48c = $this->env->getExtension("native_profiler");
        $__internal_b6ea1f1520ebef6d9b81550b2207d0d799e5427fd682379fe312b7ca9300d48c->enter($__internal_b6ea1f1520ebef6d9b81550b2207d0d799e5427fd682379fe312b7ca9300d48c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_menuR"));

        // line 45
        echo "
\t\t\t";
        
        $__internal_b6ea1f1520ebef6d9b81550b2207d0d799e5427fd682379fe312b7ca9300d48c->leave($__internal_b6ea1f1520ebef6d9b81550b2207d0d799e5427fd682379fe312b7ca9300d48c_prof);

    }

    // line 52
    public function block_footer($context, array $blocks = array())
    {
        $__internal_8b65ced92e46240fbab958a0d36b122bde439df72668be291f9a5935c7712ed7 = $this->env->getExtension("native_profiler");
        $__internal_8b65ced92e46240fbab958a0d36b122bde439df72668be291f9a5935c7712ed7->enter($__internal_8b65ced92e46240fbab958a0d36b122bde439df72668be291f9a5935c7712ed7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 53
        echo "\t\t";
        
        $__internal_8b65ced92e46240fbab958a0d36b122bde439df72668be291f9a5935c7712ed7->leave($__internal_8b65ced92e46240fbab958a0d36b122bde439df72668be291f9a5935c7712ed7_prof);

    }

    public function getTemplateName()
    {
        return "MenuBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  175 => 53,  169 => 52,  161 => 45,  155 => 44,  147 => 40,  141 => 39,  133 => 47,  131 => 44,  127 => 42,  125 => 39,  121 => 37,  115 => 36,  107 => 54,  105 => 52,  100 => 49,  98 => 36,  85 => 26,  81 => 25,  77 => 24,  70 => 20,  59 => 11,  53 => 10,  45 => 4,  39 => 3,  11 => 1,);
    }
}
/* {% extends "::layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*   Menus*/
/* {% endblock %}*/
/* */
/* */
/* */
/*   */
/* {% block body %}*/
/* <nav class="navbar navbar-primary bg-info" role="navigation">*/
/* 	<div class="container-fluid">*/
/* 		<div class="navbar-header">*/
/* 			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex2-collapse">*/
/* 				<span class="sr-only">Toggle navigation</span>*/
/* 				<span class="icon-bar"></span>*/
/* 				<span class="icon-bar"></span>*/
/* 				<span class="icon-bar"></span>*/
/* 			</button>*/
/* 			<a class="navbar-brand" href="{{ path('menu_homepage') }}">Menus du jour</a>*/
/* 		</div>*/
/* 		<div class="collapse navbar-collapse navbar-ex2-collapse">*/
/* 			<ul class="nav navbar-nav">*/
/* 				<li class="active"><a href="{{ path('menu_homepage') }}">Accueil</a></li>*/
/* 				<li class="active"><a href="{{ path('menu_ilot') }}">Ilot du régal</a></li>*/
/* 				<li class="active"><a href="{{ path('menu_regal') }}">Régal du circuit</a></li>*/
/* */
/* 			</ul>*/
/* 			<ul class="nav navbar-nav navbar-right">*/
/* 			</ul>*/
/* 		</div>*/
/* 	</div>*/
/* </nav>*/
/* */
/* */
/* 		{% block body_site %}*/
/* 	*/
/* 		*/
/* 			{% block body_menuI %}*/
/* */
/* 			{% endblock %}*/
/* 		*/
/* 			*/
/* 			{% block body_menuR %}*/
/* */
/* 			{% endblock %}*/
/* */
/* 		{% endblock %}*/
/* 	*/
/* 	*/
/* 	<footer class="container-fluid text-center bg-info text-primary">*/
/* 		{% block footer %}*/
/* 		{% endblock %}*/
/* 	</footer>*/
/* {% endblock %}*/
