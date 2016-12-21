<?php

/* OCPlatformBundle:Advert:menu.html.twig */
class __TwigTemplate_68588fa4a89d1008150814f3be4a33f20f73983ae3f7e973c11c37477e24e73d extends Twig_Template
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
        $__internal_ecc8b6703bec6eedff37135c86dc3f18834942165d1afda5cf454d610c8588a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ecc8b6703bec6eedff37135c86dc3f18834942165d1afda5cf454d610c8588a1->enter($__internal_ecc8b6703bec6eedff37135c86dc3f18834942165d1afda5cf454d610c8588a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:menu.html.twig"));

        // line 1
        echo "<ul class=\"nav nav-pills nav-stacked\">
    
    ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["listAdverts"] ?? $this->getContext($context, "listAdverts")));
        foreach ($context['_seq'] as $context["_key"] => $context["advert"]) {
            // line 4
            echo "        
        <li>
            
            <a href=\"";
            // line 7
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_platform_view", array("id" => $this->getAttribute($context["advert"], "id", array()))), "html", null, true);
            echo "\">
                
                ";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute($context["advert"], "title", array()), "html", null, true);
            echo "
            
            </a>
        
        </li>
    
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['advert'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "
</ul>";
        
        $__internal_ecc8b6703bec6eedff37135c86dc3f18834942165d1afda5cf454d610c8588a1->leave($__internal_ecc8b6703bec6eedff37135c86dc3f18834942165d1afda5cf454d610c8588a1_prof);

    }

    public function getTemplateName()
    {
        return "OCPlatformBundle:Advert:menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 16,  40 => 9,  35 => 7,  30 => 4,  26 => 3,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<ul class=\"nav nav-pills nav-stacked\">
    
    {% for advert in listAdverts %}
        
        <li>
            
            <a href=\"{{ path('oc_platform_view', {'id': advert.id}) }}\">
                
                {{ advert.title }}
            
            </a>
        
        </li>
    
    {% endfor %}

</ul>", "OCPlatformBundle:Advert:menu.html.twig", "/home/bigbear/PhpstormProjects/untitled3/src/OC/PlatformBundle/Resources/views/Advert/menu.html.twig");
    }
}
