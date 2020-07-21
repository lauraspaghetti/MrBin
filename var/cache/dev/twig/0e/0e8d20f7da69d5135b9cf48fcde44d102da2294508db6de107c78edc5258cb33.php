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

/* etablissement/showAll.html.twig */
class __TwigTemplate_84449ef4b60500da4c20c131d2d7b5ccb28ffb93b214148d6b856cd30536ba00 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "etablissement/showAll.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "etablissement/showAll.html.twig"));

        $this->parent = $this->loadTemplate("layout.html.twig", "etablissement/showAll.html.twig", 1);
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

        echo " parent() - Nos établissements";
        
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
        echo "<a href='";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mrBin_etablissement_create");
        echo "'>Ajouter un établissement</a>
<section class=\"bg-colorother2\">
    <h1 class=\"text-center toptitle3\">Détail de votre recherche</h1>
    ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["AllEtablissements"]) || array_key_exists("AllEtablissements", $context) ? $context["AllEtablissements"] : (function () { throw new RuntimeError('Variable "AllEtablissements" does not exist.', 9, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["etablissement"]) {
            // line 10
            echo "        <div class=\"container\">
                <div class=\"card w-75 carte-top shadow\">
                    <div class=\"card-body style-icon\">
                        <h5 class=\"card-title\">
                        <a href=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mrBin_etablissement_show", ["id" => twig_get_attribute($this->env, $this->source, $context["etablissement"], "id", [], "any", false, false, false, 14)]), "html", null, true);
            echo "\">  ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["etablissement"], "nomEtablissement", [], "any", false, false, false, 14), "html", null, true);
            echo "
                         </a>
                         </h5> 
                        ";
            // line 18
            echo "                        <iframe
                            src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2624.799710802239!2d2.3099545156744985!3d48.86202957928787!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66fd0b31e7555%3A0x7731a9ef78e80b89!2s1%20Rue%20Fabert%2C%2075007%20Paris!5e0!3m2!1sfr!2sfr!4v1588682806693!5m2!1sfr!2sfr\"
                            width=\"600\"
                            height=\"450\"
                            frameborder=\"0\"
                            style=\"border: 0;\"
                            allowfullscreen=\"\"
                            aria-hidden=\"false\"
                            tabindex=\"0\"
                        ></iframe>
                        <p class=\"card-text mt-3\">
                            Adresse : ";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["etablissement"], "adresse", [], "any", false, false, false, 29), "html", null, true);
            echo "
                        </p>
                        <p> Types de déchets acceptés :
                            ";
            // line 33
            echo "                            ";
            // line 34
            echo "                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["etablissement"], "categories", [], "any", false, false, false, 34));
            foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
                // line 35
                echo "                                ";
                echo twig_escape_filter($this->env, twig_lower_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categorie"], "nomCategorie", [], "any", false, false, false, 35)), "html", null, true);
                echo ", 
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorie'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 37
            echo "                        </p> 
                        <p>
                            Horaires : ";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["etablissement"], "horaires", [], "any", false, false, false, 39), "html", null, true);
            echo "
                        </p> 
                        <p>
                            <i class=\"fas fa-phone-alt\"></i> 0";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["etablissement"], "telephone", [], "any", false, false, false, 42), "html", null, true);
            echo "
                            ";
            // line 44
            echo "                        </p>
                        <a
                        href=\"'";
            // line 46
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mrBin_searchResults_DD");
            echo "\"
                        class=\"btn btn-primary\"
                        >
                        Retour
                        </a>
                    </div><!--Fin de la div class card body style icons-->
                </div><!--Fin de la div class cards 75-->
        </div><!--Fin div class container-->
                    ";
            // line 54
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
                echo "               
                        <p><a href='";
                // line 55
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mrBin_etablissement_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["etablissement"], "id", [], "any", false, false, false, 55)]), "html", null, true);
                echo "'>Supprimer</a></p>
                        <p><a href='";
                // line 56
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mrBin_etablissement_update", ["id" => twig_get_attribute($this->env, $this->source, $context["etablissement"], "id", [], "any", false, false, false, 56)]), "html", null, true);
                echo "'>Mettre à jour</a></p>     
                        ";
            } else {
                // line 58
                echo "
                    ";
            }
            // line 60
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['etablissement'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "</section>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "etablissement/showAll.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  200 => 61,  194 => 60,  190 => 58,  185 => 56,  181 => 55,  177 => 54,  166 => 46,  162 => 44,  158 => 42,  152 => 39,  148 => 37,  139 => 35,  134 => 34,  132 => 33,  126 => 29,  113 => 18,  105 => 14,  99 => 10,  95 => 9,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout.html.twig' %}

{% block title %} parent() - Nos établissements{% endblock %}

{% block content %}
<a href='{{ path(\"mrBin_etablissement_create\") }}'>Ajouter un établissement</a>
<section class=\"bg-colorother2\">
    <h1 class=\"text-center toptitle3\">Détail de votre recherche</h1>
    {% for etablissement in AllEtablissements %}
        <div class=\"container\">
                <div class=\"card w-75 carte-top shadow\">
                    <div class=\"card-body style-icon\">
                        <h5 class=\"card-title\">
                        <a href=\"{{ path(\"mrBin_etablissement_show\", {id : etablissement.id}) }}\">  {{etablissement.nomEtablissement}}
                         </a>
                         </h5> 
                        {#L'iframe doit ê dynamique, afficher la longitude et la lattitude de chaque déchett plutôt#}
                        <iframe
                            src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2624.799710802239!2d2.3099545156744985!3d48.86202957928787!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66fd0b31e7555%3A0x7731a9ef78e80b89!2s1%20Rue%20Fabert%2C%2075007%20Paris!5e0!3m2!1sfr!2sfr!4v1588682806693!5m2!1sfr!2sfr\"
                            width=\"600\"
                            height=\"450\"
                            frameborder=\"0\"
                            style=\"border: 0;\"
                            allowfullscreen=\"\"
                            aria-hidden=\"false\"
                            tabindex=\"0\"
                        ></iframe>
                        <p class=\"card-text mt-3\">
                            Adresse : {{etablissement.adresse}}
                        </p>
                        <p> Types de déchets acceptés :
                            {#Comment gérer les virgules, les points et les maj#}
                            {#Si c'est le dernier type de déchet affiché, on met un point, sinon une virgule#}
                            {% for categorie in etablissement.categories %}
                                {{categorie.nomCategorie | lower }}, 
                            {% endfor %}
                        </p> 
                        <p>
                            Horaires : {{etablissement.horaires}}
                        </p> 
                        <p>
                            <i class=\"fas fa-phone-alt\"></i> 0{{etablissement.telephone}}
                            {#Comment gérer le 0 qui n'apparaît pas sur le numéro de téléphone ?#}
                        </p>
                        <a
                        href=\"'{{ path(\"mrBin_searchResults_DD\")}}\"
                        class=\"btn btn-primary\"
                        >
                        Retour
                        </a>
                    </div><!--Fin de la div class card body style icons-->
                </div><!--Fin de la div class cards 75-->
        </div><!--Fin div class container-->
                    {% if is_granted(\"ROLE_USER\") %}               
                        <p><a href='{{ path(\"mrBin_etablissement_delete\", {id: etablissement.id}) }}'>Supprimer</a></p>
                        <p><a href='{{ path(\"mrBin_etablissement_update\", {id: etablissement.id}) }}'>Mettre à jour</a></p>     
                        {% else %}

                    {% endif %}
    {% endfor %}
</section>
{% endblock %}", "etablissement/showAll.html.twig", "/Users/laurastassi/Recherche Job/Travail_Formation/Code/Symfony/MrBin/templates/etablissement/showAll.html.twig");
    }
}
