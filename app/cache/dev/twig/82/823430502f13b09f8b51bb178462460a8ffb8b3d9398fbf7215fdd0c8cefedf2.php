<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_bb5c0d3896523845a9e249d1466c7ff260bee0c7823a159375927fa035525608 extends Twig_Template
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
        $__internal_66fa37b0d86b62c08d08b860849bea6015aa3c81fc6f0733a69e62d63e374ac4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66fa37b0d86b62c08d08b860849bea6015aa3c81fc6f0733a69e62d63e374ac4->enter($__internal_66fa37b0d86b62c08d08b860849bea6015aa3c81fc6f0733a69e62d63e374ac4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_66fa37b0d86b62c08d08b860849bea6015aa3c81fc6f0733a69e62d63e374ac4->leave($__internal_66fa37b0d86b62c08d08b860849bea6015aa3c81fc6f0733a69e62d63e374ac4_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f3fe9c8486fedc58950fde0bfc15493e0ad1e336b8b0ee14020a9a4a74d45f1a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3fe9c8486fedc58950fde0bfc15493e0ad1e336b8b0ee14020a9a4a74d45f1a->enter($__internal_f3fe9c8486fedc58950fde0bfc15493e0ad1e336b8b0ee14020a9a4a74d45f1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_f3fe9c8486fedc58950fde0bfc15493e0ad1e336b8b0ee14020a9a4a74d45f1a->leave($__internal_f3fe9c8486fedc58950fde0bfc15493e0ad1e336b8b0ee14020a9a4a74d45f1a_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_a3b3ca36399cdcb2b53fdf826f25c6e84565c4962f25028b87ffb18c07dbab05 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3b3ca36399cdcb2b53fdf826f25c6e84565c4962f25028b87ffb18c07dbab05->enter($__internal_a3b3ca36399cdcb2b53fdf826f25c6e84565c4962f25028b87ffb18c07dbab05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_a3b3ca36399cdcb2b53fdf826f25c6e84565c4962f25028b87ffb18c07dbab05->leave($__internal_a3b3ca36399cdcb2b53fdf826f25c6e84565c4962f25028b87ffb18c07dbab05_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_aa1b1434349c2c62b78c3a4f875873a9e668909aa74a3a6f0fc9e0075af59094 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa1b1434349c2c62b78c3a4f875873a9e668909aa74a3a6f0fc9e0075af59094->enter($__internal_aa1b1434349c2c62b78c3a4f875873a9e668909aa74a3a6f0fc9e0075af59094_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_aa1b1434349c2c62b78c3a4f875873a9e668909aa74a3a6f0fc9e0075af59094->leave($__internal_aa1b1434349c2c62b78c3a4f875873a9e668909aa74a3a6f0fc9e0075af59094_prof);

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

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/home/bigbear/PhpstormProjects/untitled3/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
