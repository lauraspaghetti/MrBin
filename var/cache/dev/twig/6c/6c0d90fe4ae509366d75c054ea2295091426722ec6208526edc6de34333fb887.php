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
class __TwigTemplate_acb974cc46428445834f4b6d37852f15ded11d81591a1ea67bfb25d1cde5d577 extends \Twig\Template
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
        echo "<h2>Tous nos établissements de tri et de revalorisation des déchets</h2>

<a href='";
        // line 8
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mrBin_etablissement_create");
        echo "'>Ajouter un article</a>


<table>
    <thead>
        <th>Nom :</th>
        <th>Type :</th>
        <th>Adresse : </th>
        <th>Telephone : </th>
        <th>Horaires : </th>
        <th>Reconditionnement : </th>
        


    </thead>

    <tbody>
        ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["AllEtablissements"]) || array_key_exists("AllEtablissements", $context) ? $context["AllEtablissements"] : (function () { throw new RuntimeError('Variable "AllEtablissements" does not exist.', 25, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["etablissement"]) {
            // line 26
            echo "                 <tr>
                    <td>
                        ";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["etablissement"], "nomEtablissement", [], "any", false, false, false, 28), "html", null, true);
            echo "
                    </td>
                    
                    <td>
                        ";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["etablissement"], "typeEtablissement", [], "any", false, false, false, 32), "html", null, true);
            echo "
                    </td>

                    <td>
                        ";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["etablissement"], "adresse", [], "any", false, false, false, 36), "html", null, true);
            echo "
                    </td>

                    <td>
                        ";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["etablissement"], "telephone", [], "any", false, false, false, 40), "html", null, true);
            echo "
                    </td>

                    <td>
                        ";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["etablissement"], "horaires", [], "any", false, false, false, 44), "html", null, true);
            echo "
                    </td> 

                    <td>
                        ";
            // line 48
            if (twig_get_attribute($this->env, $this->source, $context["etablissement"], "reconditionnement", [], "any", false, false, false, 48)) {
                // line 49
                echo "                            <img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/check.png"), "html", null, true);
                echo "\">
                        ";
            } else {
                // line 51
                echo "                            <img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/wrong_cross.png"), "html", null, true);
                echo "\">
                        ";
            }
            // line 53
            echo "                    </td>

                    

                    <td>
                        <a href='";
            // line 58
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mrBin_etablissement_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["etablissement"], "id", [], "any", false, false, false, 58)]), "html", null, true);
            echo "'>Supprimer</a>
                    </td>  

                    <td>
                    <a href='";
            // line 62
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mrBin_etablissement_update", ["id" => twig_get_attribute($this->env, $this->source, $context["etablissement"], "id", [], "any", false, false, false, 62)]), "html", null, true);
            echo "'>Mettre à jour</a>
                    </td>   
   
                 </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['etablissement'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        echo "    </tbody>
</table>

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
        return array (  194 => 67,  183 => 62,  176 => 58,  169 => 53,  163 => 51,  157 => 49,  155 => 48,  148 => 44,  141 => 40,  134 => 36,  127 => 32,  120 => 28,  116 => 26,  112 => 25,  92 => 8,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout.html.twig' %}

{% block title %} parent() - Nos établissements{% endblock %}

{% block content %}
<h2>Tous nos établissements de tri et de revalorisation des déchets</h2>

<a href='{{ path(\"mrBin_etablissement_create\") }}'>Ajouter un article</a>


<table>
    <thead>
        <th>Nom :</th>
        <th>Type :</th>
        <th>Adresse : </th>
        <th>Telephone : </th>
        <th>Horaires : </th>
        <th>Reconditionnement : </th>
        


    </thead>

    <tbody>
        {% for etablissement in AllEtablissements %}
                 <tr>
                    <td>
                        {{etablissement.nomEtablissement}}
                    </td>
                    
                    <td>
                        {{etablissement.typeEtablissement}}
                    </td>

                    <td>
                        {{etablissement.adresse}}
                    </td>

                    <td>
                        {{etablissement.telephone}}
                    </td>

                    <td>
                        {{etablissement.horaires}}
                    </td> 

                    <td>
                        {% if etablissement.reconditionnement %}
                            <img src=\"{{ asset(\"img/check.png\") }}\">
                        {% else %}
                            <img src=\"{{ asset(\"img/wrong_cross.png\") }}\">
                        {% endif %}
                    </td>

                    

                    <td>
                        <a href='{{ path(\"mrBin_etablissement_delete\", {id: etablissement.id}) }}'>Supprimer</a>
                    </td>  

                    <td>
                    <a href='{{ path(\"mrBin_etablissement_update\", {id: etablissement.id}) }}'>Mettre à jour</a>
                    </td>   
   
                 </tr>
        {% endfor %}
    </tbody>
</table>

{% endblock %}", "etablissement/showAll.html.twig", "/Users/moussaillon/Documents/Symfony/MrBin/templates/etablissement/showAll.html.twig");
    }
}
