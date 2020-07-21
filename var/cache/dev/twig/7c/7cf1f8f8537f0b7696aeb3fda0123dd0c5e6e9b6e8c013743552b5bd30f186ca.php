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

/* mairie/showAll.html.twig */
class __TwigTemplate_05aa1a9d32a87fffec6b7af25407e4295028cf2451a75da1f528670746b0b8c9 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "mairie/showAll.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "mairie/showAll.html.twig"));

        $this->parent = $this->loadTemplate("layout.html.twig", "mairie/showAll.html.twig", 1);
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
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mrBin_mairie_create");
        echo "'>Ajouter une mairie</a>


<table>
    <thead>
        <th>Nom :</th>
        <th>Commune :</th>
        <th>Adresse : </th>
        <th>Horaires : </th>
    </thead>

    <tbody>
        ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["AllMairies"]) || array_key_exists("AllMairies", $context) ? $context["AllMairies"] : (function () { throw new RuntimeError('Variable "AllMairies" does not exist.', 20, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["mairie"]) {
            // line 21
            echo "                 <tr>
                    <td>
                        <a href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mrBin_mairie_show", ["id" => twig_get_attribute($this->env, $this->source, $context["mairie"], "id", [], "any", false, false, false, 23)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["mairie"], "nomMairie", [], "any", false, false, false, 23), "html", null, true);
            echo "
                    </td>
                    
                    <td>
                        ";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["mairie"], "commune", [], "any", false, false, false, 27), "html", null, true);
            echo "
                    </td>

                    <td>
                        ";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["mairie"], "adresse", [], "any", false, false, false, 31), "html", null, true);
            echo "
                    </td>


                    <td>
                        ";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["mairie"], "horaires", [], "any", false, false, false, 36), "html", null, true);
            echo "
                    </td>

                   

                    ";
            // line 41
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
                // line 42
                echo "                          
                         <td><a href='";
                // line 43
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mrBin_mairie_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["mairie"], "id", [], "any", false, false, false, 43)]), "html", null, true);
                echo "'>Supprimer</a></td>
                         <td><a href='";
                // line 44
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mrBin_mairie_update", ["id" => twig_get_attribute($this->env, $this->source, $context["mairie"], "id", [], "any", false, false, false, 44)]), "html", null, true);
                echo "'>Mettre à jour</a></td>
                
                     ";
            } else {
                // line 47
                echo "        
                        ";
            }
            // line 49
            echo "

   
                 </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mairie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "    </tbody>
</table>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "mairie/showAll.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  176 => 54,  166 => 49,  162 => 47,  156 => 44,  152 => 43,  149 => 42,  147 => 41,  139 => 36,  131 => 31,  124 => 27,  115 => 23,  111 => 21,  107 => 20,  92 => 8,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout.html.twig' %}

{% block title %} parent() - Nos établissements{% endblock %}

{% block content %}
<h2>Tous nos établissements de tri et de revalorisation des déchets</h2>

<a href='{{ path(\"mrBin_mairie_create\") }}'>Ajouter une mairie</a>


<table>
    <thead>
        <th>Nom :</th>
        <th>Commune :</th>
        <th>Adresse : </th>
        <th>Horaires : </th>
    </thead>

    <tbody>
        {% for mairie in AllMairies %}
                 <tr>
                    <td>
                        <a href=\"{{ path(\"mrBin_mairie_show\", {id : mairie.id}) }}\">{{mairie.nomMairie}}
                    </td>
                    
                    <td>
                        {{mairie.commune}}
                    </td>

                    <td>
                        {{mairie.adresse}}
                    </td>


                    <td>
                        {{mairie.horaires}}
                    </td>

                   

                    {% if is_granted(\"ROLE_USER\") %}
                          
                         <td><a href='{{ path(\"mrBin_mairie_delete\", {id: mairie.id}) }}'>Supprimer</a></td>
                         <td><a href='{{ path(\"mrBin_mairie_update\", {id: mairie.id}) }}'>Mettre à jour</a></td>
                
                     {% else %}
        
                        {% endif %}


   
                 </tr>
        {% endfor %}
    </tbody>
</table>

{% endblock %}", "mairie/showAll.html.twig", "/Users/laurastassi/Symfony/MrBin/templates/mairie/showAll.html.twig");
    }
}
