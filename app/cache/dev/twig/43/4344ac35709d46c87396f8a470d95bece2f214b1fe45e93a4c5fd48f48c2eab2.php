<?php

/* OCPlatformBundle:Advert:index.html.twig */
class __TwigTemplate_f12c6db44edbe10036e8f6691d9b0fc415d46db8d4b2ada9d91b8c20dc3503c4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OCPlatformBundle::layout.html.twig", "OCPlatformBundle:Advert:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'ocplatform_body' => array($this, 'block_ocplatform_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OCPlatformBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_96330091a6b4643f70156e659badfdbdd38ca0c1b6f470de904d5680b12a4b4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96330091a6b4643f70156e659badfdbdd38ca0c1b6f470de904d5680b12a4b4e->enter($__internal_96330091a6b4643f70156e659badfdbdd38ca0c1b6f470de904d5680b12a4b4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_96330091a6b4643f70156e659badfdbdd38ca0c1b6f470de904d5680b12a4b4e->leave($__internal_96330091a6b4643f70156e659badfdbdd38ca0c1b6f470de904d5680b12a4b4e_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_a23dc7453d87dcb964e680278eafa9006b00f60c1d296c005e5bb9b27cebc13b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a23dc7453d87dcb964e680278eafa9006b00f60c1d296c005e5bb9b27cebc13b->enter($__internal_a23dc7453d87dcb964e680278eafa9006b00f60c1d296c005e5bb9b27cebc13b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 5
        echo "    
    Accueil - ";
        // line 6
        $this->displayParentBlock("title", $context, $blocks);
        echo "

";
        
        $__internal_a23dc7453d87dcb964e680278eafa9006b00f60c1d296c005e5bb9b27cebc13b->leave($__internal_a23dc7453d87dcb964e680278eafa9006b00f60c1d296c005e5bb9b27cebc13b_prof);

    }

    // line 11
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_8c5204e18a1110065cc6bea64dca2d78b4bdd37510249bb8c3704c53391f453e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c5204e18a1110065cc6bea64dca2d78b4bdd37510249bb8c3704c53391f453e->enter($__internal_8c5204e18a1110065cc6bea64dca2d78b4bdd37510249bb8c3704c53391f453e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        // line 12
        echo "    
    
    <h2>Liste des annonces</h2>
    
    
    <ul>
        
        ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["listAdverts"] ?? $this->getContext($context, "listAdverts")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["advert"]) {
            // line 20
            echo "            
            <li>
    
                <a href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_platform_view", array("id" => $this->getAttribute($context["advert"], "id", array()))), "html", null, true);
            echo "\">
        
                    ";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["advert"], "title", array()), "html", null, true);
            echo "
    
                </a>
    
                par ";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["advert"], "author", array()), "html", null, true);
            echo ",
    
                le ";
            // line 31
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["advert"], "date", array()), "d/m/Y"), "html", null, true);
            echo "
            
            </li>
        
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 36
            echo "            
            <li>Pas (encore !) d'annonces</li>
        
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['advert'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "    </ul>


";
        
        $__internal_8c5204e18a1110065cc6bea64dca2d78b4bdd37510249bb8c3704c53391f453e->leave($__internal_8c5204e18a1110065cc6bea64dca2d78b4bdd37510249bb8c3704c53391f453e_prof);

    }

    public function getTemplateName()
    {
        return "OCPlatformBundle:Advert:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 40,  106 => 36,  96 => 31,  91 => 29,  84 => 25,  79 => 23,  74 => 20,  69 => 19,  60 => 12,  54 => 11,  44 => 6,  41 => 5,  35 => 4,  11 => 1,);
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


{% block title %}
    
    Accueil - {{ parent() }}

{% endblock %}


{% block ocplatform_body %}
    
    
    <h2>Liste des annonces</h2>
    
    
    <ul>
        
        {% for advert in listAdverts %}
            
            <li>
    
                <a href=\"{{ path('oc_platform_view', {'id': advert.id}) }}\">
        
                    {{ advert.title }}
    
                </a>
    
                par {{ advert.author }},
    
                le {{ advert.date|date('d/m/Y') }}
            
            </li>
        
        {% else %}
            
            <li>Pas (encore !) d'annonces</li>
        
        {% endfor %}
    </ul>


{% endblock %}", "OCPlatformBundle:Advert:index.html.twig", "/home/bigbear/PhpstormProjects/untitled3/src/OC/PlatformBundle/Resources/views/Advert/index.html.twig");
    }
}
