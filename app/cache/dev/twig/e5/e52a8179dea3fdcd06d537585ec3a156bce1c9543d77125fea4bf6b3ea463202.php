<?php

/* OCPlatformBundle::layout.html.twig */
class __TwigTemplate_b426290ee5b5e0842d3a30118118e934a5149678189f35c1bb648185558626b2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OCCoreBundle::layout.html.twig", "OCPlatformBundle::layout.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'ocplatform_body' => array($this, 'block_ocplatform_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OCCoreBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cd054597b5d4df3e93dad77e09d26dcd29b3dd34c7e493d08ac98457bde704ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd054597b5d4df3e93dad77e09d26dcd29b3dd34c7e493d08ac98457bde704ea->enter($__internal_cd054597b5d4df3e93dad77e09d26dcd29b3dd34c7e493d08ac98457bde704ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cd054597b5d4df3e93dad77e09d26dcd29b3dd34c7e493d08ac98457bde704ea->leave($__internal_cd054597b5d4df3e93dad77e09d26dcd29b3dd34c7e493d08ac98457bde704ea_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_e8d3f11716dbeb3eae713ae0cf3eb7cf9cd740eb523355c4393a8bd7965d1bdf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8d3f11716dbeb3eae713ae0cf3eb7cf9cd740eb523355c4393a8bd7965d1bdf->enter($__internal_e8d3f11716dbeb3eae713ae0cf3eb7cf9cd740eb523355c4393a8bd7965d1bdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 5
        echo "    
    Annonces - ";
        // line 6
        $this->displayParentBlock("title", $context, $blocks);
        echo "

";
        
        $__internal_e8d3f11716dbeb3eae713ae0cf3eb7cf9cd740eb523355c4393a8bd7965d1bdf->leave($__internal_e8d3f11716dbeb3eae713ae0cf3eb7cf9cd740eb523355c4393a8bd7965d1bdf_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_fe81a76c91aa906a88f2fddc8ae22a39405ea717d3aafa5e5f444672d2b3d289 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe81a76c91aa906a88f2fddc8ae22a39405ea717d3aafa5e5f444672d2b3d289->enter($__internal_fe81a76c91aa906a88f2fddc8ae22a39405ea717d3aafa5e5f444672d2b3d289_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    
    
    ";
        // line 15
        echo "    
    <h1>Annonces</h1>
    
    
    <hr>
    
    
    ";
        // line 23
        echo "    
    ";
        // line 24
        $this->displayBlock('ocplatform_body', $context, $blocks);
        // line 27
        echo "

";
        
        $__internal_fe81a76c91aa906a88f2fddc8ae22a39405ea717d3aafa5e5f444672d2b3d289->leave($__internal_fe81a76c91aa906a88f2fddc8ae22a39405ea717d3aafa5e5f444672d2b3d289_prof);

    }

    // line 24
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_5068293aab75b7de52c301c2ee3a39f7a91890395e4eafc6412af48f838e5225 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5068293aab75b7de52c301c2ee3a39f7a91890395e4eafc6412af48f838e5225->enter($__internal_5068293aab75b7de52c301c2ee3a39f7a91890395e4eafc6412af48f838e5225_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        // line 25
        echo "    
    ";
        
        $__internal_5068293aab75b7de52c301c2ee3a39f7a91890395e4eafc6412af48f838e5225->leave($__internal_5068293aab75b7de52c301c2ee3a39f7a91890395e4eafc6412af48f838e5225_prof);

    }

    public function getTemplateName()
    {
        return "OCPlatformBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 25,  88 => 24,  79 => 27,  77 => 24,  74 => 23,  65 => 15,  61 => 12,  55 => 11,  45 => 6,  42 => 5,  36 => 4,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"OCCoreBundle::layout.html.twig\" %}


{% block title %}
    
    Annonces - {{ parent() }}

{% endblock %}


{% block body %}
    
    
    {# On définit un sous-titre commun à toutes les pages du bundle, par exemple #}
    
    <h1>Annonces</h1>
    
    
    <hr>
    
    
    {# On définit un nouveau bloc, que les vues du bundle pourront remplir #}
    
    {% block ocplatform_body %}
    
    {% endblock %}


{% endblock %}", "OCPlatformBundle::layout.html.twig", "/home/bigbear/PhpstormProjects/untitled3/src/OC/PlatformBundle/Resources/views/layout.html.twig");
    }
}
