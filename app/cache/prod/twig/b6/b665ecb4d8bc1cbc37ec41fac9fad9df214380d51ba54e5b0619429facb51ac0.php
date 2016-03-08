<?php

/* MenuBundle::layout.html.twig */
class __TwigTemplate_b9d5ae70f72c1e68c4c8bec8884d4311f87d16820d1b4d4078a6a89108cce3d6 extends Twig_Template
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
        $__internal_3ffd28d7accf4032c579f0a99b9b23ca3d6113789c549cf3f4bd20b643dd7ff6 = $this->env->getExtension("native_profiler");
        $__internal_3ffd28d7accf4032c579f0a99b9b23ca3d6113789c549cf3f4bd20b643dd7ff6->enter($__internal_3ffd28d7accf4032c579f0a99b9b23ca3d6113789c549cf3f4bd20b643dd7ff6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MenuBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3ffd28d7accf4032c579f0a99b9b23ca3d6113789c549cf3f4bd20b643dd7ff6->leave($__internal_3ffd28d7accf4032c579f0a99b9b23ca3d6113789c549cf3f4bd20b643dd7ff6_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_63b1dd4c359f0c5ad69437346c805326faed87db496b5737a6d0291856f398a6 = $this->env->getExtension("native_profiler");
        $__internal_63b1dd4c359f0c5ad69437346c805326faed87db496b5737a6d0291856f398a6->enter($__internal_63b1dd4c359f0c5ad69437346c805326faed87db496b5737a6d0291856f398a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Menus
";
        
        $__internal_63b1dd4c359f0c5ad69437346c805326faed87db496b5737a6d0291856f398a6->leave($__internal_63b1dd4c359f0c5ad69437346c805326faed87db496b5737a6d0291856f398a6_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_a391dd03b35297d7dc5afe3a581f2fd3f65463cb1cc98c757918679e1952e1d4 = $this->env->getExtension("native_profiler");
        $__internal_a391dd03b35297d7dc5afe3a581f2fd3f65463cb1cc98c757918679e1952e1d4->enter($__internal_a391dd03b35297d7dc5afe3a581f2fd3f65463cb1cc98c757918679e1952e1d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_a391dd03b35297d7dc5afe3a581f2fd3f65463cb1cc98c757918679e1952e1d4->leave($__internal_a391dd03b35297d7dc5afe3a581f2fd3f65463cb1cc98c757918679e1952e1d4_prof);

    }

    // line 36
    public function block_body_site($context, array $blocks = array())
    {
        $__internal_fb153813e44ffc7a41a7dcd0b7435d2749c63cc241cb3db20492427545931438 = $this->env->getExtension("native_profiler");
        $__internal_fb153813e44ffc7a41a7dcd0b7435d2749c63cc241cb3db20492427545931438->enter($__internal_fb153813e44ffc7a41a7dcd0b7435d2749c63cc241cb3db20492427545931438_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_site"));

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
        
        $__internal_fb153813e44ffc7a41a7dcd0b7435d2749c63cc241cb3db20492427545931438->leave($__internal_fb153813e44ffc7a41a7dcd0b7435d2749c63cc241cb3db20492427545931438_prof);

    }

    // line 39
    public function block_body_menuI($context, array $blocks = array())
    {
        $__internal_08e8d110b3f3c447d26c1a987ab002e16740355788d552988b4136a5ffe27ae8 = $this->env->getExtension("native_profiler");
        $__internal_08e8d110b3f3c447d26c1a987ab002e16740355788d552988b4136a5ffe27ae8->enter($__internal_08e8d110b3f3c447d26c1a987ab002e16740355788d552988b4136a5ffe27ae8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_menuI"));

        // line 40
        echo "
\t\t\t";
        
        $__internal_08e8d110b3f3c447d26c1a987ab002e16740355788d552988b4136a5ffe27ae8->leave($__internal_08e8d110b3f3c447d26c1a987ab002e16740355788d552988b4136a5ffe27ae8_prof);

    }

    // line 44
    public function block_body_menuR($context, array $blocks = array())
    {
        $__internal_2c899e479bb33a1ac529c27862b5e3816841184f501b557888e18510fedcbee4 = $this->env->getExtension("native_profiler");
        $__internal_2c899e479bb33a1ac529c27862b5e3816841184f501b557888e18510fedcbee4->enter($__internal_2c899e479bb33a1ac529c27862b5e3816841184f501b557888e18510fedcbee4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_menuR"));

        // line 45
        echo "
\t\t\t";
        
        $__internal_2c899e479bb33a1ac529c27862b5e3816841184f501b557888e18510fedcbee4->leave($__internal_2c899e479bb33a1ac529c27862b5e3816841184f501b557888e18510fedcbee4_prof);

    }

    // line 52
    public function block_footer($context, array $blocks = array())
    {
        $__internal_0b6f9ab07e9709d44425ee130dbe69076ef7a7655d36a25b0156cbe28e7ace64 = $this->env->getExtension("native_profiler");
        $__internal_0b6f9ab07e9709d44425ee130dbe69076ef7a7655d36a25b0156cbe28e7ace64->enter($__internal_0b6f9ab07e9709d44425ee130dbe69076ef7a7655d36a25b0156cbe28e7ace64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 53
        echo "\t\t";
        
        $__internal_0b6f9ab07e9709d44425ee130dbe69076ef7a7655d36a25b0156cbe28e7ace64->leave($__internal_0b6f9ab07e9709d44425ee130dbe69076ef7a7655d36a25b0156cbe28e7ace64_prof);

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
