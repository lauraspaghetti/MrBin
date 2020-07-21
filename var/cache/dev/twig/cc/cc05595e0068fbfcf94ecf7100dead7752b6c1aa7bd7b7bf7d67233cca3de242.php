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

/* searchResults/dechetsCommuns.html.twig */
class __TwigTemplate_55f158c765270bcad4d1ca022dbf5a43d3a15d29b0a3eed5bfd4d5028001cb3f extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "searchResults/dechetsCommuns.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "searchResults/dechetsCommuns.html.twig"));

        $this->parent = $this->loadTemplate("layout.html.twig", "searchResults/dechetsCommuns.html.twig", 1);
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
            ";
        // line 19
        echo "                    <div class=\"card w-75 searchcard shadow\">
                        <div class=\"card-body\">
                            <h5 class=\"card-title\">";
        // line 21
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["typeDechet"]) || array_key_exists("typeDechet", $context) ? $context["typeDechet"] : (function () { throw new RuntimeError('Variable "typeDechet" does not exist.', 21, $this->source); })()), "nomTypeDechet", [], "any", false, false, false, 21)), "html", null, true);
        echo "</h5>
                            <p class=\"card-text\">Déchet de la catégorie : 
                                ";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["typeDechet"]) || array_key_exists("typeDechet", $context) ? $context["typeDechet"] : (function () { throw new RuntimeError('Variable "typeDechet" does not exist.', 23, $this->source); })()), "categorie", [], "any", false, false, false, 23), "nomCategorie", [], "any", false, false, false, 23), "html", null, true);
        echo " 
                            </p>
                            <p>
                                Vous pourrez trouvez trouver tous les renseignements pour savoir
                                où jeter ce déchet dans la page catégorie.
                            </p>
                            <a href=\"";
        // line 29
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mrBin_categories");
        echo "\" class=\"btn btn-primary bouton\">Détails</a>
                        </div>
                    </div>
                ";
        // line 35
        echo "
            
        </div>
   </section>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "searchResults/dechetsCommuns.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 35,  119 => 29,  110 => 23,  105 => 21,  101 => 19,  90 => 8,  80 => 7,  69 => 4,  59 => 3,  36 => 1,);
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
            {# {% for categorie in allCategories %}
                {% for dechet in categorie.typeDechets %} #}
                    <div class=\"card w-75 searchcard shadow\">
                        <div class=\"card-body\">
                            <h5 class=\"card-title\">{{typeDechet.nomTypeDechet | capitalize }}</h5>
                            <p class=\"card-text\">Déchet de la catégorie : 
                                {{typeDechet.categorie.nomCategorie}} 
                            </p>
                            <p>
                                Vous pourrez trouvez trouver tous les renseignements pour savoir
                                où jeter ce déchet dans la page catégorie.
                            </p>
                            <a href=\"{{ path(\"mrBin_categories\") }}\" class=\"btn btn-primary bouton\">Détails</a>
                        </div>
                    </div>
                {# {% endfor %}
            {% endfor %}
             #}

            
        </div>
   </section>
{% endblock %}

", "searchResults/dechetsCommuns.html.twig", "/Users/laurastassi/Recherche Job/Travail_Formation/Code/Symfony/MrBin/templates/searchResults/dechetsCommuns.html.twig");
    }
}
