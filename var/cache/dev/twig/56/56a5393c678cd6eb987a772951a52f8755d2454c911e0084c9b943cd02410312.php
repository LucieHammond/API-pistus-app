<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_74e54cf5e2fa11f1a3b615509bfcea4ab1284dd3a40cd17ce0cd166bf1cfbdde extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a7142fa6520a4ef659d91ca41b9438ac45653d3c09c5d6be1d4af5c4318b4f83 = $this->env->getExtension("native_profiler");
        $__internal_a7142fa6520a4ef659d91ca41b9438ac45653d3c09c5d6be1d4af5c4318b4f83->enter($__internal_a7142fa6520a4ef659d91ca41b9438ac45653d3c09c5d6be1d4af5c4318b4f83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a7142fa6520a4ef659d91ca41b9438ac45653d3c09c5d6be1d4af5c4318b4f83->leave($__internal_a7142fa6520a4ef659d91ca41b9438ac45653d3c09c5d6be1d4af5c4318b4f83_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_7d9850ee5441fb08f73aa9bcc738e12d75c52afcfc08e28ccab43e7fd727819a = $this->env->getExtension("native_profiler");
        $__internal_7d9850ee5441fb08f73aa9bcc738e12d75c52afcfc08e28ccab43e7fd727819a->enter($__internal_7d9850ee5441fb08f73aa9bcc738e12d75c52afcfc08e28ccab43e7fd727819a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_7d9850ee5441fb08f73aa9bcc738e12d75c52afcfc08e28ccab43e7fd727819a->leave($__internal_7d9850ee5441fb08f73aa9bcc738e12d75c52afcfc08e28ccab43e7fd727819a_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_8e0048972180a1c8e7f18bcf16e416638b6ac3ab6994bc966fa0d83ef29d2f49 = $this->env->getExtension("native_profiler");
        $__internal_8e0048972180a1c8e7f18bcf16e416638b6ac3ab6994bc966fa0d83ef29d2f49->enter($__internal_8e0048972180a1c8e7f18bcf16e416638b6ac3ab6994bc966fa0d83ef29d2f49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_8e0048972180a1c8e7f18bcf16e416638b6ac3ab6994bc966fa0d83ef29d2f49->leave($__internal_8e0048972180a1c8e7f18bcf16e416638b6ac3ab6994bc966fa0d83ef29d2f49_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_aa5798d9102ddc48bc32ea6d0513c371bdd61c32ce0fbd61f83a21ca9ce2e01d = $this->env->getExtension("native_profiler");
        $__internal_aa5798d9102ddc48bc32ea6d0513c371bdd61c32ce0fbd61f83a21ca9ce2e01d->enter($__internal_aa5798d9102ddc48bc32ea6d0513c371bdd61c32ce0fbd61f83a21ca9ce2e01d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_aa5798d9102ddc48bc32ea6d0513c371bdd61c32ce0fbd61f83a21ca9ce2e01d->leave($__internal_aa5798d9102ddc48bc32ea6d0513c371bdd61c32ce0fbd61f83a21ca9ce2e01d_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
