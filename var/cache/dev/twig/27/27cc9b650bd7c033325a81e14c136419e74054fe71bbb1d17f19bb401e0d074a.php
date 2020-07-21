<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* searchResults/detailRecherche.html.twig */
class __TwigTemplate_19c997ce22776371b9fe616e68bf3ba985159ebaa779fc803c2b3852c2a0d89d extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "searchResults/detailRecherche.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "searchResults/detailRecherche.html.twig"));

        $this->parent = $this->loadTemplate("layout.html.twig", "searchResults/detailRecherche.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo " ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " - Détail de votre recherche ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "    <section class=\"bg-colorother2\">
        <h1 class=\"text-center toptitle3\">Détail de votre recherche</h1>
        <div class=\"container\">
            <div class=\"card w-75 carte-top shadow\">
                <div class=\"card-body style-icon\">
                    <h5 class=\"card-title\">
                        ";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["etablissement"]) || array_key_exists("etablissement", $context) ? $context["etablissement"] : (function () { throw new RuntimeError('Variable "etablissement" does not exist.', 12, $this->source); })()), "nomEtablissement", [], "any", false, false, false, 12), "html", null, true);
        echo "
                    </h5>
                        ";
        // line 15
        echo "                        ";
        echo twig_get_attribute($this->env, $this->source, (isset($context["etablissement"]) || array_key_exists("etablissement", $context) ? $context["etablissement"] : (function () { throw new RuntimeError('Variable "etablissement" does not exist.', 15, $this->source); })()), "iframe", [], "any", false, false, false, 15);
        echo "

                    <p class=\"card-text mt-3\">
                        ";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["etablissement"]) || array_key_exists("etablissement", $context) ? $context["etablissement"] : (function () { throw new RuntimeError('Variable "etablissement" does not exist.', 18, $this->source); })()), "adresse", [], "any", false, false, false, 18), "html", null, true);
        echo "
                    </p>
                    <p>Types de déchets acceptés:
                        ";
        // line 21
        $context["categories"] = twig_join_filter(twig_array_map(twig_get_attribute($this->env, $this->source, (isset($context["etablissement"]) || array_key_exists("etablissement", $context) ? $context["etablissement"] : (function () { throw new RuntimeError('Variable "etablissement" does not exist.', 21, $this->source); })()), "categories", [], "any", false, false, false, 21), function ($__categorie__) use ($context, $macros) { $context["categorie"] = $__categorie__; return twig_get_attribute($this->env, $this->source, (isset($context["categorie"]) || array_key_exists("categorie", $context) ? $context["categorie"] : (function () { throw new RuntimeError('Variable "categorie" does not exist.', 21, $this->source); })()), "nomCategorie", [], "any", false, false, false, 21); }), ", ");
        // line 22
        echo "                            ";
        // line 23
        echo "                            ";
        echo twig_escape_filter($this->env, (isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 23, $this->source); })()), "html", null, true);
        echo ".
                    </p>
                    <p>
                        Horaires : ";
        // line 26
        echo twig_escape_filter($this->env, twig_lower_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["etablissement"]) || array_key_exists("etablissement", $context) ? $context["etablissement"] : (function () { throw new RuntimeError('Variable "etablissement" does not exist.', 26, $this->source); })()), "horaires", [], "any", false, false, false, 26)), "html", null, true);
        echo "
                    </p> 
                    <p>
                        <i class=\"fas fa-phone-alt\"></i>0";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["etablissement"]) || array_key_exists("etablissement", $context) ? $context["etablissement"] : (function () { throw new RuntimeError('Variable "etablissement" does not exist.', 29, $this->source); })()), "telephone", [], "any", false, false, false, 29), "html", null, true);
        echo "
                    </p>
                </div>
            </div>
        </div>
    </section>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "searchResults/detailRecherche.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 29,  127 => 26,  120 => 23,  118 => 22,  116 => 21,  110 => 18,  103 => 15,  98 => 12,  90 => 6,  80 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout.html.twig' %}

{% block title %} {{parent()}} - Détail de votre recherche {% endblock %}

{% block content %}
    <section class=\"bg-colorother2\">
        <h1 class=\"text-center toptitle3\">Détail de votre recherche</h1>
        <div class=\"container\">
            <div class=\"card w-75 carte-top shadow\">
                <div class=\"card-body style-icon\">
                    <h5 class=\"card-title\">
                        {{etablissement.nomEtablissement}}
                    </h5>
                        {# Appel de l'iframe qui est en dur dans la bdd #}
                        {{etablissement.iframe | raw }}

                    <p class=\"card-text mt-3\">
                        {{etablissement.adresse}}
                    </p>
                    <p>Types de déchets acceptés:
                        {% set categories = etablissement.categories | map((categorie) => \"#{categorie.nomCategorie}\") | join(', ') %}
                            {# Appel de la variable #}
                            {{ categories }}.
                    </p>
                    <p>
                        Horaires : {{etablissement.horaires | lower }}
                    </p> 
                    <p>
                        <i class=\"fas fa-phone-alt\"></i>0{{etablissement.telephone}}
                    </p>
                </div>
            </div>
        </div>
    </section>
{% endblock %}", "searchResults/detailRecherche.html.twig", "/Users/laurastassi/Recherche Job/Travail_Formation/Code/Symfony/MrBin/templates/searchResults/detailRecherche.html.twig");
    }
}
