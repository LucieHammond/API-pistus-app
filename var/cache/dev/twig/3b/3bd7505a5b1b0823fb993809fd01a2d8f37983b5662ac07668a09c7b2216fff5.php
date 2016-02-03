<?php

/* target/index.html.twig */
class __TwigTemplate_1a39f9c678489e50a9197bedf20e63241fd67a21cc2a36afd95f85e049a9b182 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "target/index.html.twig", 1);
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
        $__internal_33b7a491295a485347ec70173238ae4d0e557daeb21e866c03a8cf4ad748fa7a = $this->env->getExtension("native_profiler");
        $__internal_33b7a491295a485347ec70173238ae4d0e557daeb21e866c03a8cf4ad748fa7a->enter($__internal_33b7a491295a485347ec70173238ae4d0e557daeb21e866c03a8cf4ad748fa7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "target/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_33b7a491295a485347ec70173238ae4d0e557daeb21e866c03a8cf4ad748fa7a->leave($__internal_33b7a491295a485347ec70173238ae4d0e557daeb21e866c03a8cf4ad748fa7a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_1a464f6116bee783e4f8ed4dc9c678b00f552822e8566d742c777a2b0dce2d10 = $this->env->getExtension("native_profiler");
        $__internal_1a464f6116bee783e4f8ed4dc9c678b00f552822e8566d742c777a2b0dce2d10->enter($__internal_1a464f6116bee783e4f8ed4dc9c678b00f552822e8566d742c777a2b0dce2d10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Target list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["targets"]) ? $context["targets"] : $this->getContext($context, "targets")));
        foreach ($context['_seq'] as $context["_key"] => $context["target"]) {
            // line 16
            echo "            <tr>
                <td><a href=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_target_show", array("id" => $this->getAttribute($context["target"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["target"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["target"], "name", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_target_show", array("id" => $this->getAttribute($context["target"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_target_edit", array("id" => $this->getAttribute($context["target"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['target'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 36
        echo $this->env->getExtension('routing')->getPath("admin_target_new");
        echo "\">Create a new entry</a>
        </li>
    </ul>
";
        
        $__internal_1a464f6116bee783e4f8ed4dc9c678b00f552822e8566d742c777a2b0dce2d10->leave($__internal_1a464f6116bee783e4f8ed4dc9c678b00f552822e8566d742c777a2b0dce2d10_prof);

    }

    public function getTemplateName()
    {
        return "target/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 36,  91 => 31,  79 => 25,  73 => 22,  66 => 18,  60 => 17,  57 => 16,  53 => 15,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Target list</h1>*/
/* */
/*     <table>*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <th>Name</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for target in targets %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('admin_target_show', { 'id': target.id }) }}">{{ target.id }}</a></td>*/
/*                 <td>{{ target.name }}</td>*/
/*                 <td>*/
/*                     <ul>*/
/*                         <li>*/
/*                             <a href="{{ path('admin_target_show', { 'id': target.id }) }}">show</a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="{{ path('admin_target_edit', { 'id': target.id }) }}">edit</a>*/
/*                         </li>*/
/*                     </ul>*/
/*                 </td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('admin_target_new') }}">Create a new entry</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
