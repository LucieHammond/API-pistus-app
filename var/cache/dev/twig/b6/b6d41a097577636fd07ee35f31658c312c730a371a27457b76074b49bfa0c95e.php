<?php

/* target/new.html.twig */
class __TwigTemplate_d4f57b2b557f8e0291950d0a2bd28857f53cf214fc86c21f2e3e8948b88883bc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "target/new.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_49919c527158864eecc865dd12e371cd426b32ed8f7ae80f99f8ceaedcf4c6f4 = $this->env->getExtension("native_profiler");
        $__internal_49919c527158864eecc865dd12e371cd426b32ed8f7ae80f99f8ceaedcf4c6f4->enter($__internal_49919c527158864eecc865dd12e371cd426b32ed8f7ae80f99f8ceaedcf4c6f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "target/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_49919c527158864eecc865dd12e371cd426b32ed8f7ae80f99f8ceaedcf4c6f4->leave($__internal_49919c527158864eecc865dd12e371cd426b32ed8f7ae80f99f8ceaedcf4c6f4_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_9b9c60bfbd3318eb1d7e75c995a234065a453ce460973217a72590b6ab357dfa = $this->env->getExtension("native_profiler");
        $__internal_9b9c60bfbd3318eb1d7e75c995a234065a453ce460973217a72590b6ab357dfa->enter($__internal_9b9c60bfbd3318eb1d7e75c995a234065a453ce460973217a72590b6ab357dfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Target creation</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("admin_target_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_9b9c60bfbd3318eb1d7e75c995a234065a453ce460973217a72590b6ab357dfa->leave($__internal_9b9c60bfbd3318eb1d7e75c995a234065a453ce460973217a72590b6ab357dfa_prof);

    }

    public function getTemplateName()
    {
        return "target/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 13,  53 => 9,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Target creation</h1>*/
/* */
/*     {{ form_start(form) }}*/
/*         {{ form_widget(form) }}*/
/*         <input type="submit" value="Create" />*/
/*     {{ form_end(form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('admin_target_index') }}">Back to the list</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
