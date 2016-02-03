<?php

/* slope/index.html.twig */
class __TwigTemplate_947dc2c377310883841736b4df08d3b254aef0ef342c7b413f3fa0ccbaaada7c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "slope/index.html.twig", 1);
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
        $__internal_e12c72b1cc8c9597ec731071c471da48c140c3ea02413f3326d3399bb2910d3e = $this->env->getExtension("native_profiler");
        $__internal_e12c72b1cc8c9597ec731071c471da48c140c3ea02413f3326d3399bb2910d3e->enter($__internal_e12c72b1cc8c9597ec731071c471da48c140c3ea02413f3326d3399bb2910d3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "slope/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e12c72b1cc8c9597ec731071c471da48c140c3ea02413f3326d3399bb2910d3e->leave($__internal_e12c72b1cc8c9597ec731071c471da48c140c3ea02413f3326d3399bb2910d3e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_0e1dab58a6b2f2c340997ccb2a521c3ec8980231b308b2d4e466d553cdfea6da = $this->env->getExtension("native_profiler");
        $__internal_0e1dab58a6b2f2c340997ccb2a521c3ec8980231b308b2d4e466d553cdfea6da->enter($__internal_0e1dab58a6b2f2c340997ccb2a521c3ec8980231b308b2d4e466d553cdfea6da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Slope list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Status</th>
                <th>Name</th>
                <th>Comment</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["slopes"]) ? $context["slopes"] : $this->getContext($context, "slopes")));
        foreach ($context['_seq'] as $context["_key"] => $context["slope"]) {
            // line 18
            echo "            <tr>
                <td><a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("slope_show", array("id" => $this->getAttribute($context["slope"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["slope"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 20
            if ($this->getAttribute($context["slope"], "status", array())) {
                echo "Yes";
            } else {
                echo "No";
            }
            echo "</td>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["slope"], "name", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["slope"], "comment", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("slope_show", array("id" => $this->getAttribute($context["slope"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['slope'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "        </tbody>
    </table>

    
";
        
        $__internal_0e1dab58a6b2f2c340997ccb2a521c3ec8980231b308b2d4e466d553cdfea6da->leave($__internal_0e1dab58a6b2f2c340997ccb2a521c3ec8980231b308b2d4e466d553cdfea6da_prof);

    }

    public function getTemplateName()
    {
        return "slope/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 32,  87 => 26,  80 => 22,  76 => 21,  68 => 20,  62 => 19,  59 => 18,  55 => 17,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Slope list</h1>*/
/* */
/*     <table>*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <th>Status</th>*/
/*                 <th>Name</th>*/
/*                 <th>Comment</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for slope in slopes %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('slope_show', { 'id': slope.id }) }}">{{ slope.id }}</a></td>*/
/*                 <td>{% if slope.status %}Yes{% else %}No{% endif %}</td>*/
/*                 <td>{{ slope.name }}</td>*/
/*                 <td>{{ slope.comment }}</td>*/
/*                 <td>*/
/*                     <ul>*/
/*                         <li>*/
/*                             <a href="{{ path('slope_show', { 'id': slope.id }) }}">show</a>*/
/*                         </li>*/
/*                     </ul>*/
/*                 </td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     */
/* {% endblock %}*/
/* */
