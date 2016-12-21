<?php

/* OCPlatformBundle:Advert:form.html.twig */
class __TwigTemplate_0714b84444fa700f76b44a3d2b126b53d7ca986ad313fd2223733defc2a7b3fb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5b0f3843a3a06a29a33d35a666612bae99360c95e7e4b19ff405b6963a5cf6d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b0f3843a3a06a29a33d35a666612bae99360c95e7e4b19ff405b6963a5cf6d1->enter($__internal_5b0f3843a3a06a29a33d35a666612bae99360c95e7e4b19ff405b6963a5cf6d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:form.html.twig"));

        // line 1
        echo "<h3>Formulaire d'annonce</h3>


";
        // line 7
        echo "
<div class=\"well\">
    
    Ici se trouvera le formulaire.

</div>";
        
        $__internal_5b0f3843a3a06a29a33d35a666612bae99360c95e7e4b19ff405b6963a5cf6d1->leave($__internal_5b0f3843a3a06a29a33d35a666612bae99360c95e7e4b19ff405b6963a5cf6d1_prof);

    }

    public function getTemplateName()
    {
        return "OCPlatformBundle:Advert:form.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  27 => 7,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<h3>Formulaire d'annonce</h3>


{# On laisse vide la vue pour l'instant, on la comblera plus tard

   lorsqu'on saura afficher un formulaire. #}

<div class=\"well\">
    
    Ici se trouvera le formulaire.

</div>", "OCPlatformBundle:Advert:form.html.twig", "/home/bigbear/PhpstormProjects/untitled3/src/OC/PlatformBundle/Resources/views/Advert/form.html.twig");
    }
}
