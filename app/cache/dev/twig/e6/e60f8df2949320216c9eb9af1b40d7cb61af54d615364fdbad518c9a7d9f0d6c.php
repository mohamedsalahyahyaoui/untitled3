<?php

/* OCPlatformBundle:Advert:add.html.twig */
class __TwigTemplate_31dcd600ef60af678c7c4660947544fd1610d2c4827ec201c81cc2e7a19864ec extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OCPlatformBundle::layout.html.twig", "OCPlatformBundle:Advert:add.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OCPlatformBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fbea5a26726fc96c6507d585e6ff30ed0a4835ff0fe0007e317cda4e7464fbef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fbea5a26726fc96c6507d585e6ff30ed0a4835ff0fe0007e317cda4e7464fbef->enter($__internal_fbea5a26726fc96c6507d585e6ff30ed0a4835ff0fe0007e317cda4e7464fbef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fbea5a26726fc96c6507d585e6ff30ed0a4835ff0fe0007e317cda4e7464fbef->leave($__internal_fbea5a26726fc96c6507d585e6ff30ed0a4835ff0fe0007e317cda4e7464fbef_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_1be01ec37a34e29d3706c3de87a64a5c7bec558e9044e55cd1eb5d5a9889de9b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1be01ec37a34e29d3706c3de87a64a5c7bec558e9044e55cd1eb5d5a9889de9b->enter($__internal_1be01ec37a34e29d3706c3de87a64a5c7bec558e9044e55cd1eb5d5a9889de9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "    
    
    <h2>Ajouter une annonce</h2>
    
    
    ";
        // line 10
        echo twig_include($this->env, $context, "OCPlatformBundle:Advert:form.html.twig");
        echo "
    
    
    <p>
        
        Attention : cette annonce sera ajoutée directement
        
        sur la page d'accueil après validation du formulaire.
    
    </p>


";
        
        $__internal_1be01ec37a34e29d3706c3de87a64a5c7bec558e9044e55cd1eb5d5a9889de9b->leave($__internal_1be01ec37a34e29d3706c3de87a64a5c7bec558e9044e55cd1eb5d5a9889de9b_prof);

    }

    public function getTemplateName()
    {
        return "OCPlatformBundle:Advert:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 10,  40 => 5,  34 => 4,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"OCPlatformBundle::layout.html.twig\" %}


{% block body %}
    
    
    <h2>Ajouter une annonce</h2>
    
    
    {{ include(\"OCPlatformBundle:Advert:form.html.twig\") }}
    
    
    <p>
        
        Attention : cette annonce sera ajoutée directement
        
        sur la page d'accueil après validation du formulaire.
    
    </p>


{% endblock %}", "OCPlatformBundle:Advert:add.html.twig", "/home/bigbear/PhpstormProjects/untitled3/src/OC/PlatformBundle/Resources/views/Advert/add.html.twig");
    }
}
