<?php

/* room/index.html.twig */
class __TwigTemplate_70e0485fbc2fddd9089f731ddd15ad05e37d16533431e9e5fa662de519ee018d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "room/index.html.twig", 1);
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
        $__internal_55b2bc21ac0e81173de753811ea93eb0f7b9c340f4af5e986ba9de6387c28e41 = $this->env->getExtension("native_profiler");
        $__internal_55b2bc21ac0e81173de753811ea93eb0f7b9c340f4af5e986ba9de6387c28e41->enter($__internal_55b2bc21ac0e81173de753811ea93eb0f7b9c340f4af5e986ba9de6387c28e41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "room/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_55b2bc21ac0e81173de753811ea93eb0f7b9c340f4af5e986ba9de6387c28e41->leave($__internal_55b2bc21ac0e81173de753811ea93eb0f7b9c340f4af5e986ba9de6387c28e41_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_9f331eaf0ecfa09b2379a0331e3f309066517104f7f5e34ae1ebbecab8497781 = $this->env->getExtension("native_profiler");
        $__internal_9f331eaf0ecfa09b2379a0331e3f309066517104f7f5e34ae1ebbecab8497781->enter($__internal_9f331eaf0ecfa09b2379a0331e3f309066517104f7f5e34ae1ebbecab8497781_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Room list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Number</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["rooms"]) ? $context["rooms"] : $this->getContext($context, "rooms")));
        foreach ($context['_seq'] as $context["_key"] => $context["room"]) {
            // line 16
            echo "            <tr>
                <td><a href=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("room_show", array("id" => $this->getAttribute($context["room"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["room"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["room"], "number", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("room_show", array("id" => $this->getAttribute($context["room"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['room'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "        </tbody>
    </table>

    
";
        
        $__internal_9f331eaf0ecfa09b2379a0331e3f309066517104f7f5e34ae1ebbecab8497781->leave($__internal_9f331eaf0ecfa09b2379a0331e3f309066517104f7f5e34ae1ebbecab8497781_prof);

    }

    public function getTemplateName()
    {
        return "room/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 28,  73 => 22,  66 => 18,  60 => 17,  57 => 16,  53 => 15,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Room list</h1>*/
/* */
/*     <table>*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <th>Number</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for room in rooms %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('room_show', { 'id': room.id }) }}">{{ room.id }}</a></td>*/
/*                 <td>{{ room.number }}</td>*/
/*                 <td>*/
/*                     <ul>*/
/*                         <li>*/
/*                             <a href="{{ path('room_show', { 'id': room.id }) }}">show</a>*/
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
