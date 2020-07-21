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

/* searchResults/categorieD.html.twig */
class __TwigTemplate_1e7778e7b73670c3050db8abe36421473f8856cf83c1738f591c3dde32f7a404 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "searchResults/categorieD.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "searchResults/categorieD.html.twig"));

        $this->parent = $this->loadTemplate("layout.html.twig", "searchResults/categorieD.html.twig", 1);
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

        // line 4
        $this->displayParentBlock("title", $context, $blocks);
        echo " - Résultats de recherche ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 8
        echo "    <section class=\"bg-colorother2\">
        <div class=\"container topformat\">
            <h1 class=\"formatmargin\">Résultat de la recherche</h1>
            <!--Moteur de recherche-->
                <div id='react-root'></div>
            <!--Fin du moteur de recherche-->
            <p class=\"mt-5 mb-5 sizefont\">
                Votre recherche renvoie vers le résultat suivant:
            </p>
            <h2>Décheteries prennant en charge les déchets de la catégorie ";
        // line 17
        echo twig_escape_filter($this->env, twig_lower_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["categorieD"]) || array_key_exists("categorieD", $context) ? $context["categorieD"] : (function () { throw new RuntimeError('Variable "categorieD" does not exist.', 17, $this->source); })()), "nomCategorie", [], "any", false, false, false, 17)), "html", null, true);
        echo " : </h2>  
            ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["categorieD"]) || array_key_exists("categorieD", $context) ? $context["categorieD"] : (function () { throw new RuntimeError('Variable "categorieD" does not exist.', 18, $this->source); })()), "etablissements", [], "any", false, false, false, 18));
        foreach ($context['_seq'] as $context["_key"] => $context["etablissement"]) {
            // line 19
            echo "                <div class=\"card w-75 searchcard shadow\">
                    <div class=\"card-body\">
                        <h5 class=\"card-title\">
                            ";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["etablissement"], "nomEtablissement", [], "any", false, false, false, 22), "html", null, true);
            echo "
                        </h5>
                        <p class=\"card-text\"> ";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["etablissement"], "adresse", [], "any", false, false, false, 24), "html", null, true);
            echo " </p>
                        <p> 
                            ";
            // line 27
            echo "                            ";
            // line 28
            echo "                            ";
            $context["categories"] = twig_join_filter(twig_array_map(twig_get_attribute($this->env, $this->source, $context["etablissement"], "categories", [], "any", false, false, false, 28), function ($__categorie__) use ($context, $macros) { $context["categorie"] = $__categorie__; return twig_get_attribute($this->env, $this->source, (isset($context["categorie"]) || array_key_exists("categorie", $context) ? $context["categorie"] : (function () { throw new RuntimeError('Variable "categorie" does not exist.', 28, $this->source); })()), "nomCategorie", [], "any", false, false, false, 28); }), ", ");
            // line 29
            echo "                            ";
            // line 30
            echo "                            ";
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, (isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 30, $this->source); })())), "html", null, true);
            echo ".
                        </p>
                        <a 
                            href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mrBin_searchResults_detail", ["id" => twig_get_attribute($this->env, $this->source, $context["etablissement"], "id", [], "any", false, false, false, 33)]), "html", null, true);
            echo "\" 
                            class=\"btn btn-primary bouton\"
                        >
                            Détails
                        </a>
                    </div>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['etablissement'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "        </div><!-- /.container -->
   </section>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "searchResults/categorieD.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 41,  138 => 33,  131 => 30,  129 => 29,  126 => 28,  124 => 27,  119 => 24,  114 => 22,  109 => 19,  105 => 18,  101 => 17,  90 => 8,  80 => 7,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"layout.html.twig\" %}

{% block title %}
{{parent()}} - Résultats de recherche {#parent = pour récupérer le contenu du même block qui existe déjà dans base.html.twig#}
{% endblock %}

{% block content %}
    <section class=\"bg-colorother2\">
        <div class=\"container topformat\">
            <h1 class=\"formatmargin\">Résultat de la recherche</h1>
            <!--Moteur de recherche-->
                <div id='react-root'></div>
            <!--Fin du moteur de recherche-->
            <p class=\"mt-5 mb-5 sizefont\">
                Votre recherche renvoie vers le résultat suivant:
            </p>
            <h2>Décheteries prennant en charge les déchets de la catégorie {{categorieD.nomCategorie | lower }} : </h2>  
            {% for etablissement in categorieD.etablissements %}
                <div class=\"card w-75 searchcard shadow\">
                    <div class=\"card-body\">
                        <h5 class=\"card-title\">
                            {{etablissement.nomEtablissement}}
                        </h5>
                        <p class=\"card-text\"> {{etablissement.adresse}} </p>
                        <p> 
                            {# Création de la variable intérmédiaire qui liste les catégories de l'établissement #}
                            {# https://twig.symfony.com/doc/2.x/filters/map.html #}
                            {% set categories = etablissement.categories | map((categorie) => \"#{categorie.nomCategorie}\") | join(', ') %}
                            {# Appel de la variable #}
                            {{ categories | capitalize }}.
                        </p>
                        <a 
                            href=\"{{ path(\"mrBin_searchResults_detail\", {id : etablissement.id}) }}\" 
                            class=\"btn btn-primary bouton\"
                        >
                            Détails
                        </a>
                    </div>
                </div>
            {% endfor %}
        </div><!-- /.container -->
   </section>
{% endblock %}
", "searchResults/categorieD.html.twig", "/Users/laurastassi/Recherche Job/Travail_Formation/Code/Symfony/MrBin/templates/searchResults/categorieD.html.twig");
    }
}
