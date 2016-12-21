<?php

/* OCCoreBundle::layout.html.twig */
class __TwigTemplate_faf383d7f0bc788eace19965df2be6028e4082fa486625326de36186f110f906 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_db84066e02addf4b5b643611671cbe414cfccbc879c0eef72df73a228f620594 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db84066e02addf4b5b643611671cbe414cfccbc879c0eef72df73a228f620594->enter($__internal_db84066e02addf4b5b643611671cbe414cfccbc879c0eef72df73a228f620594_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCCoreBundle::layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>

<html>

<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <title>";
        // line 8
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    
    ";
        // line 10
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 13
        echo "</head>

<body>
<div class=\"container\">
    <div id=\"header\" class=\"jumbotron\">
        <h1>Ma plateforme d'annonces</h1>
        <p>
            Ce projet est propulsé par Symfony2,
            et construit grâce au MOOC OpenClassrooms et SensioLabs.
        </p>
        <p>
            <a class=\"btn btn-primary btn-lg\" href=\"http://fr.openclassrooms.com/informatique/cours/developpez-votre-site-web-avec-le-framework-symfony2\">
                Participer au MOOC »
            </a>
        </p>
    </div>
    <div class=\"row\">
        <div id=\"menu\" class=\"col-md-3\">
            <h3>Les annonces</h3>
            <ul class=\"nav nav-pills nav-stacked\">
                <li><a href=\"";
        // line 33
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_platform_home");
        echo "\" id=\"index\">Accueil</a></li>
                <li><a href=\"";
        // line 34
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_platform_add");
        echo "\">Ajouter une annonce</a></li>
            </ul>
            <h4>Dernières annonces</h4>
            ";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("OCPlatformBundle:Advert:menu", array("limit" => 3)));
        echo "
        </div>
        <div id=\"content\" class=\"col-md-9\">
            ";
        // line 40
        $this->displayBlock('body', $context, $blocks);
        // line 42
        echo "        </div>
    </div>
    <hr>
    <footer>
        <p>The sky's the limit © ";
        // line 46
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " and beyond.</p>
    </footer>
</div>
";
        // line 49
        $this->displayBlock('javascripts', $context, $blocks);
        // line 53
        echo "

</body>

</html>";
        
        $__internal_db84066e02addf4b5b643611671cbe414cfccbc879c0eef72df73a228f620594->leave($__internal_db84066e02addf4b5b643611671cbe414cfccbc879c0eef72df73a228f620594_prof);

    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        $__internal_8ca6767b961b172ff2bc93bc1ad8210b31461e14e48b9e4dfca5fcae042223ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ca6767b961b172ff2bc93bc1ad8210b31461e14e48b9e4dfca5fcae042223ad->enter($__internal_8ca6767b961b172ff2bc93bc1ad8210b31461e14e48b9e4dfca5fcae042223ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "OC Plateforme";
        
        $__internal_8ca6767b961b172ff2bc93bc1ad8210b31461e14e48b9e4dfca5fcae042223ad->leave($__internal_8ca6767b961b172ff2bc93bc1ad8210b31461e14e48b9e4dfca5fcae042223ad_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c57a6eb0b6791d81c24a5ea427285d26e0756ad25990fffe178e6a7a62dd0243 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c57a6eb0b6791d81c24a5ea427285d26e0756ad25990fffe178e6a7a62dd0243->enter($__internal_c57a6eb0b6791d81c24a5ea427285d26e0756ad25990fffe178e6a7a62dd0243_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 11
        echo "        <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">
    ";
        
        $__internal_c57a6eb0b6791d81c24a5ea427285d26e0756ad25990fffe178e6a7a62dd0243->leave($__internal_c57a6eb0b6791d81c24a5ea427285d26e0756ad25990fffe178e6a7a62dd0243_prof);

    }

    // line 40
    public function block_body($context, array $blocks = array())
    {
        $__internal_7b6d660b82658c141f1344552eeeab9628f9915c78951521ebc2ce39c659fd5b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b6d660b82658c141f1344552eeeab9628f9915c78951521ebc2ce39c659fd5b->enter($__internal_7b6d660b82658c141f1344552eeeab9628f9915c78951521ebc2ce39c659fd5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 41
        echo "            ";
        
        $__internal_7b6d660b82658c141f1344552eeeab9628f9915c78951521ebc2ce39c659fd5b->leave($__internal_7b6d660b82658c141f1344552eeeab9628f9915c78951521ebc2ce39c659fd5b_prof);

    }

    // line 49
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e09caf3d3022605721eeb73053be73c768fb1f0013079be64287b40e4dc2a6cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e09caf3d3022605721eeb73053be73c768fb1f0013079be64287b40e4dc2a6cf->enter($__internal_e09caf3d3022605721eeb73053be73c768fb1f0013079be64287b40e4dc2a6cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 50
        echo "    <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
    <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>
";
        
        $__internal_e09caf3d3022605721eeb73053be73c768fb1f0013079be64287b40e4dc2a6cf->leave($__internal_e09caf3d3022605721eeb73053be73c768fb1f0013079be64287b40e4dc2a6cf_prof);

    }

    public function getTemplateName()
    {
        return "OCCoreBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 50,  146 => 49,  139 => 41,  133 => 40,  125 => 11,  119 => 10,  107 => 8,  96 => 53,  94 => 49,  88 => 46,  82 => 42,  80 => 40,  74 => 37,  68 => 34,  64 => 33,  42 => 13,  40 => 10,  35 => 8,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>

<html>

<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <title>{% block title %}OC Plateforme{% endblock %}</title>
    
    {% block stylesheets %}
        <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">
    {% endblock %}
</head>

<body>
<div class=\"container\">
    <div id=\"header\" class=\"jumbotron\">
        <h1>Ma plateforme d'annonces</h1>
        <p>
            Ce projet est propulsé par Symfony2,
            et construit grâce au MOOC OpenClassrooms et SensioLabs.
        </p>
        <p>
            <a class=\"btn btn-primary btn-lg\" href=\"http://fr.openclassrooms.com/informatique/cours/developpez-votre-site-web-avec-le-framework-symfony2\">
                Participer au MOOC »
            </a>
        </p>
    </div>
    <div class=\"row\">
        <div id=\"menu\" class=\"col-md-3\">
            <h3>Les annonces</h3>
            <ul class=\"nav nav-pills nav-stacked\">
                <li><a href=\"{{ path('oc_platform_home') }}\" id=\"index\">Accueil</a></li>
                <li><a href=\"{{ path('oc_platform_add') }}\">Ajouter une annonce</a></li>
            </ul>
            <h4>Dernières annonces</h4>
            {{ render(controller(\"OCPlatformBundle:Advert:menu\", {'limit': 3})) }}
        </div>
        <div id=\"content\" class=\"col-md-9\">
            {% block body %}
            {% endblock %}
        </div>
    </div>
    <hr>
    <footer>
        <p>The sky's the limit © {{ 'now'|date('Y') }} and beyond.</p>
    </footer>
</div>
{% block javascripts %}
    <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
    <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>
{% endblock %}


</body>

</html>", "OCCoreBundle::layout.html.twig", "/home/bigbear/PhpstormProjects/untitled3/src/OC/CoreBundle/Resources/views/layout.html.twig");
    }
}
