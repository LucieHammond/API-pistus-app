<?php

/* base.html.twig */
class __TwigTemplate_c05652b44f1cd2aeede098ac1fcd47daf61fe82c7a287f2a57ecefab965d5365 extends Twig_Template
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
        $__internal_59edfa20ee830c5eab816f8b48b1834f10cfa4c84a38a44e2be140c0a1da0c9d = $this->env->getExtension("native_profiler");
        $__internal_59edfa20ee830c5eab816f8b48b1834f10cfa4c84a38a44e2be140c0a1da0c9d->enter($__internal_59edfa20ee830c5eab816f8b48b1834f10cfa4c84a38a44e2be140c0a1da0c9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_59edfa20ee830c5eab816f8b48b1834f10cfa4c84a38a44e2be140c0a1da0c9d->leave($__internal_59edfa20ee830c5eab816f8b48b1834f10cfa4c84a38a44e2be140c0a1da0c9d_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_c97134322526a2dae1e5f21206ba6737885363c9b9a04d68035737c8861d45f7 = $this->env->getExtension("native_profiler");
        $__internal_c97134322526a2dae1e5f21206ba6737885363c9b9a04d68035737c8861d45f7->enter($__internal_c97134322526a2dae1e5f21206ba6737885363c9b9a04d68035737c8861d45f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_c97134322526a2dae1e5f21206ba6737885363c9b9a04d68035737c8861d45f7->leave($__internal_c97134322526a2dae1e5f21206ba6737885363c9b9a04d68035737c8861d45f7_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_efaf5bb9b79dd06e5ebd8c6c7805a54cfa151b2d17dae9d3bc5337ce72c771c2 = $this->env->getExtension("native_profiler");
        $__internal_efaf5bb9b79dd06e5ebd8c6c7805a54cfa151b2d17dae9d3bc5337ce72c771c2->enter($__internal_efaf5bb9b79dd06e5ebd8c6c7805a54cfa151b2d17dae9d3bc5337ce72c771c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_efaf5bb9b79dd06e5ebd8c6c7805a54cfa151b2d17dae9d3bc5337ce72c771c2->leave($__internal_efaf5bb9b79dd06e5ebd8c6c7805a54cfa151b2d17dae9d3bc5337ce72c771c2_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_adb6f2a7d6121ffa30b24ca3379277f1aa46d01169d1482dc3861351988c5253 = $this->env->getExtension("native_profiler");
        $__internal_adb6f2a7d6121ffa30b24ca3379277f1aa46d01169d1482dc3861351988c5253->enter($__internal_adb6f2a7d6121ffa30b24ca3379277f1aa46d01169d1482dc3861351988c5253_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_adb6f2a7d6121ffa30b24ca3379277f1aa46d01169d1482dc3861351988c5253->leave($__internal_adb6f2a7d6121ffa30b24ca3379277f1aa46d01169d1482dc3861351988c5253_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_c42a2e993542382cc73fa369d4c565e04000cc3d28180c4bf4ab2fcb330cf9b4 = $this->env->getExtension("native_profiler");
        $__internal_c42a2e993542382cc73fa369d4c565e04000cc3d28180c4bf4ab2fcb330cf9b4->enter($__internal_c42a2e993542382cc73fa369d4c565e04000cc3d28180c4bf4ab2fcb330cf9b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_c42a2e993542382cc73fa369d4c565e04000cc3d28180c4bf4ab2fcb330cf9b4->leave($__internal_c42a2e993542382cc73fa369d4c565e04000cc3d28180c4bf4ab2fcb330cf9b4_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
