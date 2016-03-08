<?php

/* ::layout.html.twig */
class __TwigTemplate_b881c3dc837214539f174143c7ffdb9125d2d1bc7cc9813eb42b44d87d4a3edc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_51800f566dae6d824e2c2f9d95a1074ea594f005e89b0d24984068146377b6ab = $this->env->getExtension("native_profiler");
        $__internal_51800f566dae6d824e2c2f9d95a1074ea594f005e89b0d24984068146377b6ab->enter($__internal_51800f566dae6d824e2c2f9d95a1074ea594f005e89b0d24984068146377b6ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("/css/bootstrap.min.css"), "html", null, true);
        echo "\">
\t\t";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 9
        echo "        
\t\t<link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("food.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 13
        $this->displayBlock('body', $context, $blocks);
        // line 16
        echo "        
\t\t
\t\t";
        // line 18
        $this->displayBlock('javascripts', $context, $blocks);
        // line 21
        echo "    </body>
</html>
";
        
        $__internal_51800f566dae6d824e2c2f9d95a1074ea594f005e89b0d24984068146377b6ab->leave($__internal_51800f566dae6d824e2c2f9d95a1074ea594f005e89b0d24984068146377b6ab_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_16654e3452e500e20c6dae7a736bfb044d55a6c4fc5532373d198de693379a0a = $this->env->getExtension("native_profiler");
        $__internal_16654e3452e500e20c6dae7a736bfb044d55a6c4fc5532373d198de693379a0a->enter($__internal_16654e3452e500e20c6dae7a736bfb044d55a6c4fc5532373d198de693379a0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Base";
        
        $__internal_16654e3452e500e20c6dae7a736bfb044d55a6c4fc5532373d198de693379a0a->leave($__internal_16654e3452e500e20c6dae7a736bfb044d55a6c4fc5532373d198de693379a0a_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c1b0e61015e94f71fb694c40f6b9c87f0aff82a20bc7835fb1183a125ab6ff3f = $this->env->getExtension("native_profiler");
        $__internal_c1b0e61015e94f71fb694c40f6b9c87f0aff82a20bc7835fb1183a125ab6ff3f->enter($__internal_c1b0e61015e94f71fb694c40f6b9c87f0aff82a20bc7835fb1183a125ab6ff3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "\t\t";
        
        $__internal_c1b0e61015e94f71fb694c40f6b9c87f0aff82a20bc7835fb1183a125ab6ff3f->leave($__internal_c1b0e61015e94f71fb694c40f6b9c87f0aff82a20bc7835fb1183a125ab6ff3f_prof);

    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        $__internal_d85fdb900503c1b1b196e0a2ade18755d6f7c4b3e4004fab5b3f49575c8174ce = $this->env->getExtension("native_profiler");
        $__internal_d85fdb900503c1b1b196e0a2ade18755d6f7c4b3e4004fab5b3f49575c8174ce->enter($__internal_d85fdb900503c1b1b196e0a2ade18755d6f7c4b3e4004fab5b3f49575c8174ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 14
        echo "\t\t
\t\t";
        
        $__internal_d85fdb900503c1b1b196e0a2ade18755d6f7c4b3e4004fab5b3f49575c8174ce->leave($__internal_d85fdb900503c1b1b196e0a2ade18755d6f7c4b3e4004fab5b3f49575c8174ce_prof);

    }

    // line 18
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_3f0f1865c89f38089b2cafc21f475ff2e19722a055e12b68ff643fba94fa48da = $this->env->getExtension("native_profiler");
        $__internal_3f0f1865c89f38089b2cafc21f475ff2e19722a055e12b68ff643fba94fa48da->enter($__internal_3f0f1865c89f38089b2cafc21f475ff2e19722a055e12b68ff643fba94fa48da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 19
        echo "\t\t
\t\t";
        
        $__internal_3f0f1865c89f38089b2cafc21f475ff2e19722a055e12b68ff643fba94fa48da->leave($__internal_3f0f1865c89f38089b2cafc21f475ff2e19722a055e12b68ff643fba94fa48da_prof);

    }

    public function getTemplateName()
    {
        return "::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 19,  107 => 18,  99 => 14,  93 => 13,  86 => 8,  80 => 7,  68 => 5,  59 => 21,  57 => 18,  53 => 16,  51 => 13,  45 => 10,  42 => 9,  40 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Base{% endblock %}</title>*/
/*         <link rel="stylesheet" href="{{ asset('/css/bootstrap.min.css') }}">*/
/* 		{% block stylesheets %}*/
/* 		{% endblock %}*/
/*         */
/* 		<link rel="icon" type="image/x-icon" href="{{ asset('food.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}*/
/* 		*/
/* 		{% endblock %}*/
/*         */
/* 		*/
/* 		{% block javascripts %}*/
/* 		*/
/* 		{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
