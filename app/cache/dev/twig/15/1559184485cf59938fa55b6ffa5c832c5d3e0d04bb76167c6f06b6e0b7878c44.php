<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_d926b749ad97eaeda184223959b6f97edcf09aecebfc241eb4d9b38e260913eb extends Twig_Template
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
        $__internal_795b2fd897ec0492f02040c386f7e64e34162ff1916602a796597dc88202d365 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_795b2fd897ec0492f02040c386f7e64e34162ff1916602a796597dc88202d365->enter($__internal_795b2fd897ec0492f02040c386f7e64e34162ff1916602a796597dc88202d365_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_795b2fd897ec0492f02040c386f7e64e34162ff1916602a796597dc88202d365->leave($__internal_795b2fd897ec0492f02040c386f7e64e34162ff1916602a796597dc88202d365_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_e679cc86503cd85635c017bfa47a5f0d043f26d4c33eb99148de6bbf2ad86f03 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e679cc86503cd85635c017bfa47a5f0d043f26d4c33eb99148de6bbf2ad86f03->enter($__internal_e679cc86503cd85635c017bfa47a5f0d043f26d4c33eb99148de6bbf2ad86f03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_e679cc86503cd85635c017bfa47a5f0d043f26d4c33eb99148de6bbf2ad86f03->leave($__internal_e679cc86503cd85635c017bfa47a5f0d043f26d4c33eb99148de6bbf2ad86f03_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_fc2a2f5427b4a3e392ffaa00d0a9abc1abdee252894bf72e1a16bb833528cf34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc2a2f5427b4a3e392ffaa00d0a9abc1abdee252894bf72e1a16bb833528cf34->enter($__internal_fc2a2f5427b4a3e392ffaa00d0a9abc1abdee252894bf72e1a16bb833528cf34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_fc2a2f5427b4a3e392ffaa00d0a9abc1abdee252894bf72e1a16bb833528cf34->leave($__internal_fc2a2f5427b4a3e392ffaa00d0a9abc1abdee252894bf72e1a16bb833528cf34_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_0f9c724ee35f3042e60ab000d8254c84c038dd6b58078e0ef18f881d426a994b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f9c724ee35f3042e60ab000d8254c84c038dd6b58078e0ef18f881d426a994b->enter($__internal_0f9c724ee35f3042e60ab000d8254c84c038dd6b58078e0ef18f881d426a994b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_0f9c724ee35f3042e60ab000d8254c84c038dd6b58078e0ef18f881d426a994b->leave($__internal_0f9c724ee35f3042e60ab000d8254c84c038dd6b58078e0ef18f881d426a994b_prof);

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

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/home/bigbear/PhpstormProjects/untitled3/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
