<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_5bc846351da93dbd5ba5849e357519b7bced19ba4ac9a17f19375ea72a5f35dd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_8fb8b45769ca77ebe6b8a0c828ba9dab9cde23493c6e83cb6c769d4afc852fa8 = $this->env->getExtension("native_profiler");
        $__internal_8fb8b45769ca77ebe6b8a0c828ba9dab9cde23493c6e83cb6c769d4afc852fa8->enter($__internal_8fb8b45769ca77ebe6b8a0c828ba9dab9cde23493c6e83cb6c769d4afc852fa8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8fb8b45769ca77ebe6b8a0c828ba9dab9cde23493c6e83cb6c769d4afc852fa8->leave($__internal_8fb8b45769ca77ebe6b8a0c828ba9dab9cde23493c6e83cb6c769d4afc852fa8_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_6334c9c328110c35ed095764d87fbc39d6d62af2a198ab8df4396ec5252202ac = $this->env->getExtension("native_profiler");
        $__internal_6334c9c328110c35ed095764d87fbc39d6d62af2a198ab8df4396ec5252202ac->enter($__internal_6334c9c328110c35ed095764d87fbc39d6d62af2a198ab8df4396ec5252202ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_6334c9c328110c35ed095764d87fbc39d6d62af2a198ab8df4396ec5252202ac->leave($__internal_6334c9c328110c35ed095764d87fbc39d6d62af2a198ab8df4396ec5252202ac_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_16ecece2dd62da7d588c228651fce643c86de0e4113449f6417b69231ead3a00 = $this->env->getExtension("native_profiler");
        $__internal_16ecece2dd62da7d588c228651fce643c86de0e4113449f6417b69231ead3a00->enter($__internal_16ecece2dd62da7d588c228651fce643c86de0e4113449f6417b69231ead3a00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_16ecece2dd62da7d588c228651fce643c86de0e4113449f6417b69231ead3a00->leave($__internal_16ecece2dd62da7d588c228651fce643c86de0e4113449f6417b69231ead3a00_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_0e29db9f34a8d4ce7acf547f03a47ba508d86118c064a3f56436a0e2157bdf44 = $this->env->getExtension("native_profiler");
        $__internal_0e29db9f34a8d4ce7acf547f03a47ba508d86118c064a3f56436a0e2157bdf44->enter($__internal_0e29db9f34a8d4ce7acf547f03a47ba508d86118c064a3f56436a0e2157bdf44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_0e29db9f34a8d4ce7acf547f03a47ba508d86118c064a3f56436a0e2157bdf44->leave($__internal_0e29db9f34a8d4ce7acf547f03a47ba508d86118c064a3f56436a0e2157bdf44_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     {% if collector.hasexception %}*/
/*         <style>*/
/*             {{ render(path('_profiler_exception_css', { token: token })) }}*/
/*         </style>*/
/*     {% endif %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block menu %}*/
/*     <span class="label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}">*/
/*         <span class="icon">{{ include('@WebProfiler/Icon/exception.svg') }}</span>*/
/*         <strong>Exception</strong>*/
/*         {% if collector.hasexception %}*/
/*             <span class="count">*/
/*                 <span>1</span>*/
/*             </span>*/
/*         {% endif %}*/
/*     </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     <h2>Exceptions</h2>*/
/* */
/*     {% if not collector.hasexception %}*/
/*         <div class="empty">*/
/*             <p>No exception was thrown and caught during the request.</p>*/
/*         </div>*/
/*     {% else %}*/
/*         <div class="sf-reset">*/
/*             {{ render(path('_profiler_exception', { token: token })) }}*/
/*         </div>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
