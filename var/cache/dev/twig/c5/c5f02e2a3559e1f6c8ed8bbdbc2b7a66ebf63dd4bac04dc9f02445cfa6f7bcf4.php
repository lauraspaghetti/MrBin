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
class __TwigTemplate_a328f289047f2adfa9c94628668be11f380fcb5b72a24dc600d5138528bce361 extends \Twig\Template
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
        <th>Types de déchets pris en charge : </th>
        <th>Reconditionnement : </th>
        


    </thead>

    <tbody>
        ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["AllEtablissements"]) || array_key_exists("AllEtablissements", $context) ? $context["AllEtablissements"] : (function () { throw new RuntimeError('Variable "AllEtablissements" does not exist.', 26, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["etablissement"]) {
            // line 27
            echo "                 <tr>
                    <td>
                        <a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mrBin_etablissement_show", ["id" => twig_get_attribute($this->env, $this->source, $context["etablissement"], "id", [], "any", false, false, false, 29)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["etablissement"], "nomEtablissement", [], "any", false, false, false, 29), "html", null, true);
            echo "</a>
                    </td>
                    
                    <td>
                        ";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["etablissement"], "typeEtablissement", [], "any", false, false, false, 33), "html", null, true);
            echo "
                    </td>

                    <td>
                        ";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["etablissement"], "adresse", [], "any", false, false, false, 37), "html", null, true);
            echo "
                    </td>

                    <td>
                        ";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["etablissement"], "telephone", [], "any", false, false, false, 41), "html", null, true);
            echo "
                    </td>

                    <td>
                        ";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["etablissement"], "horaires", [], "any", false, false, false, 45), "html", null, true);
            echo "
                    </td> 

                    <td>
                        ";
            // line 49
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["etablissement"], "typeDechet", [], "any", false, false, false, 49));
            foreach ($context['_seq'] as $context["_key"] => $context["typeDechet"]) {
                // line 50
                echo "                            ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["typeDechet"], "nomTypeDechet", [], "any", false, false, false, 50), "html", null, true);
                echo "
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['typeDechet'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 52
            echo "                    </td> 

                    <td>
                        ";
            // line 55
            if (twig_get_attribute($this->env, $this->source, $context["etablissement"], "reconditionnement", [], "any", false, false, false, 55)) {
                // line 56
                echo "                            <img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/check.png"), "html", null, true);
                echo "\">
                        ";
            } else {
                // line 58
                echo "                            <img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/wrong_cross.png"), "html", null, true);
                echo "\">
                        ";
            }
            // line 60
            echo "                    </td>

                    ";
            // line 62
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
                // line 63
                echo "                          
                         <td><a href='";
                // line 64
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mrBin_etablissement_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["etablissement"], "id", [], "any", false, false, false, 64)]), "html", null, true);
                echo "'>Supprimer</a></td>
                         <td><a href='";
                // line 65
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mrBin_etablissement_update", ["id" => twig_get_attribute($this->env, $this->source, $context["etablissement"], "id", [], "any", false, false, false, 65)]), "html", null, true);
                echo "'>Mettre à jour</a></td>
                
                     ";
            } else {
                // line 68
                echo "        
                        ";
            }
            // line 70
            echo "

   
                 </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['etablissement'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 75
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
        return array (  223 => 75,  213 => 70,  209 => 68,  203 => 65,  199 => 64,  196 => 63,  194 => 62,  190 => 60,  184 => 58,  178 => 56,  176 => 55,  171 => 52,  162 => 50,  158 => 49,  151 => 45,  144 => 41,  137 => 37,  130 => 33,  121 => 29,  117 => 27,  113 => 26,  92 => 8,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
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
        <th>Types de déchets pris en charge : </th>
        <th>Reconditionnement : </th>
        


    </thead>

    <tbody>
        {% for etablissement in AllEtablissements %}
                 <tr>
                    <td>
                        <a href=\"{{ path(\"mrBin_etablissement_show\", {id : etablissement.id}) }}\">{{etablissement.nomEtablissement}}</a>
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
                        {% for typeDechet in etablissement.typeDechet %}
                            {{typeDechet.nomTypeDechet}}
                        {% endfor %}
                    </td> 

                    <td>
                        {% if etablissement.reconditionnement %}
                            <img src=\"{{ asset(\"img/check.png\") }}\">
                        {% else %}
                            <img src=\"{{ asset(\"img/wrong_cross.png\") }}\">
                        {% endif %}
                    </td>

                    {% if is_granted(\"ROLE_USER\") %}
                          
                         <td><a href='{{ path(\"mrBin_etablissement_delete\", {id: etablissement.id}) }}'>Supprimer</a></td>
                         <td><a href='{{ path(\"mrBin_etablissement_update\", {id: etablissement.id}) }}'>Mettre à jour</a></td>
                
                     {% else %}
        
                        {% endif %}


   
                 </tr>
        {% endfor %}
    </tbody>
</table>

{% endblock %}", "etablissement/showAll.html.twig", "/Users/moussaillon/Documents/Symfony/MrBin/templates/etablissement/showAll.html.twig");
    }
}
