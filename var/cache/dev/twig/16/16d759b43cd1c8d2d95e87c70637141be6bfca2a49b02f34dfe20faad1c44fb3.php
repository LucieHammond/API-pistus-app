<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_3c739a3da315d3adf39da09df16ef492a20738e5d46273fc35361940859b5b3f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8324ef48b732749519508b8caadf9617379462724412b0144abe2f30466ab929 = $this->env->getExtension("native_profiler");
        $__internal_8324ef48b732749519508b8caadf9617379462724412b0144abe2f30466ab929->enter($__internal_8324ef48b732749519508b8caadf9617379462724412b0144abe2f30466ab929_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8324ef48b732749519508b8caadf9617379462724412b0144abe2f30466ab929->leave($__internal_8324ef48b732749519508b8caadf9617379462724412b0144abe2f30466ab929_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_0c60fb5f28edc825af09dddb546faf037aa030d143a99973ff19baf65c67dd79 = $this->env->getExtension("native_profiler");
        $__internal_0c60fb5f28edc825af09dddb546faf037aa030d143a99973ff19baf65c67dd79->enter($__internal_0c60fb5f28edc825af09dddb546faf037aa030d143a99973ff19baf65c67dd79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_0c60fb5f28edc825af09dddb546faf037aa030d143a99973ff19baf65c67dd79->leave($__internal_0c60fb5f28edc825af09dddb546faf037aa030d143a99973ff19baf65c67dd79_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c7b22fd7348ae347fd969ea9bcdfe5f8f156dbad521c264a2a7f801bff523e5e = $this->env->getExtension("native_profiler");
        $__internal_c7b22fd7348ae347fd969ea9bcdfe5f8f156dbad521c264a2a7f801bff523e5e->enter($__internal_c7b22fd7348ae347fd969ea9bcdfe5f8f156dbad521c264a2a7f801bff523e5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_c7b22fd7348ae347fd969ea9bcdfe5f8f156dbad521c264a2a7f801bff523e5e->leave($__internal_c7b22fd7348ae347fd969ea9bcdfe5f8f156dbad521c264a2a7f801bff523e5e_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_eda72ce87da201d619153f2abeff288dd8c6206ab72bbf637fe350b8fcef4c50 = $this->env->getExtension("native_profiler");
        $__internal_eda72ce87da201d619153f2abeff288dd8c6206ab72bbf637fe350b8fcef4c50->enter($__internal_eda72ce87da201d619153f2abeff288dd8c6206ab72bbf637fe350b8fcef4c50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_eda72ce87da201d619153f2abeff288dd8c6206ab72bbf637fe350b8fcef4c50->leave($__internal_eda72ce87da201d619153f2abeff288dd8c6206ab72bbf637fe350b8fcef4c50_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
