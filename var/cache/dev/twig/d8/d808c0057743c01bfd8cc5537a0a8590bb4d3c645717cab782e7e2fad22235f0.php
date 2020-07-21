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

/* etablissement/show.html.twig */
class __TwigTemplate_528148179be1153a276ca672f147ad6760e306e027d511cd3836411063e1dc69 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "etablissement/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "etablissement/show.html.twig"));

        $this->parent = $this->loadTemplate("layout.html.twig", "etablissement/show.html.twig", 1);
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
        echo " - Nos auteurs";
        
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
        echo "<h2>Tous nos auteurs</h2>

<a href='";
        // line 8
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mrBin_etablissement_showall");
        echo "'>Voir tous nos établissements</a>


                    <h3>
                        ";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["etablissement"]) || array_key_exists("etablissement", $context) ? $context["etablissement"] : (function () { throw new RuntimeError('Variable "etablissement" does not exist.', 12, $this->source); })()), "nomEtablissement", [], "any", false, false, false, 12), "html", null, true);
        echo "
                    </h3>
                    
                    <p>
                        ";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["etablissement"]) || array_key_exists("etablissement", $context) ? $context["etablissement"] : (function () { throw new RuntimeError('Variable "etablissement" does not exist.', 16, $this->source); })()), "typeEtablissement", [], "any", false, false, false, 16), "html", null, true);
        echo "
                    </p>

                    <p>
                        ";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["etablissement"]) || array_key_exists("etablissement", $context) ? $context["etablissement"] : (function () { throw new RuntimeError('Variable "etablissement" does not exist.', 20, $this->source); })()), "adresse", [], "any", false, false, false, 20), "html", null, true);
        echo "
                    </p>

                    <p>
                        ";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["etablissement"]) || array_key_exists("etablissement", $context) ? $context["etablissement"] : (function () { throw new RuntimeError('Variable "etablissement" does not exist.', 24, $this->source); })()), "telephone", [], "any", false, false, false, 24), "html", null, true);
        echo "
                    </p>

                    <p>
                        ";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["etablissement"]) || array_key_exists("etablissement", $context) ? $context["etablissement"] : (function () { throw new RuntimeError('Variable "etablissement" does not exist.', 28, $this->source); })()), "horaires", [], "any", false, false, false, 28), "html", null, true);
        echo "
                    </p> 

                    <p>
                        ";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["etablissement"]) || array_key_exists("etablissement", $context) ? $context["etablissement"] : (function () { throw new RuntimeError('Variable "etablissement" does not exist.', 32, $this->source); })()), "reconditionnement", [], "any", false, false, false, 32), "html", null, true);
        echo "
                    </p>

                    <p> Gravats : 
                        ";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["etablissement"]) || array_key_exists("etablissement", $context) ? $context["etablissement"] : (function () { throw new RuntimeError('Variable "etablissement" does not exist.', 36, $this->source); })()), "gravats", [], "any", false, false, false, 36), "html", null, true);
        echo "
                    </p>

                    <p>Métaux : 
                        ";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["etablissement"]) || array_key_exists("etablissement", $context) ? $context["etablissement"] : (function () { throw new RuntimeError('Variable "etablissement" does not exist.', 40, $this->source); })()), "metaux", [], "any", false, false, false, 40), "html", null, true);
        echo "
                    </p>

                    <p>Bois : 
                        ";
        // line 44
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["etablissement"]) || array_key_exists("etablissement", $context) ? $context["etablissement"] : (function () { throw new RuntimeError('Variable "etablissement" does not exist.', 44, $this->source); })()), "bois", [], "any", false, false, false, 44), "html", null, true);
        echo "
                    </p> 

                    <p>Encombrants : 
                        ";
        // line 48
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["etablissement"]) || array_key_exists("etablissement", $context) ? $context["etablissement"] : (function () { throw new RuntimeError('Variable "etablissement" does not exist.', 48, $this->source); })()), "encombrants", [], "any", false, false, false, 48), "html", null, true);
        echo "
                    </p>  

                    <p>Chimique : 
                        ";
        // line 52
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["etablissement"]) || array_key_exists("etablissement", $context) ? $context["etablissement"] : (function () { throw new RuntimeError('Variable "etablissement" does not exist.', 52, $this->source); })()), "chimique", [], "any", false, false, false, 52), "html", null, true);
        echo "
                    </p>  

                    <p>Mobilier : 
                        ";
        // line 56
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["etablissement"]) || array_key_exists("etablissement", $context) ? $context["etablissement"] : (function () { throw new RuntimeError('Variable "etablissement" does not exist.', 56, $this->source); })()), "mobilier", [], "any", false, false, false, 56), "html", null, true);
        echo "
                    </p>     

                    <p>Batterie : 
                        ";
        // line 60
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["etablissement"]) || array_key_exists("etablissement", $context) ? $context["etablissement"] : (function () { throw new RuntimeError('Variable "etablissement" does not exist.', 60, $this->source); })()), "batterie", [], "any", false, false, false, 60), "html", null, true);
        echo "
                    </p>    

                    <p>Plastique : 
                        ";
        // line 64
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["etablissement"]) || array_key_exists("etablissement", $context) ? $context["etablissement"] : (function () { throw new RuntimeError('Variable "etablissement" does not exist.', 64, $this->source); })()), "plastique", [], "any", false, false, false, 64), "html", null, true);
        echo "
                    </p>   

                    <p>Electroménager :
                        ";
        // line 68
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["etablissement"]) || array_key_exists("etablissement", $context) ? $context["etablissement"] : (function () { throw new RuntimeError('Variable "etablissement" does not exist.', 68, $this->source); })()), "electromenager", [], "any", false, false, false, 68), "html", null, true);
        echo "
                    </p>   

                    <p>Textile : 
                        ";
        // line 72
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["etablissement"]) || array_key_exists("etablissement", $context) ? $context["etablissement"] : (function () { throw new RuntimeError('Variable "etablissement" does not exist.', 72, $this->source); })()), "textile", [], "any", false, false, false, 72), "html", null, true);
        echo "
                    </p>   

                    <p>Papier et carton : 
                        ";
        // line 76
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["etablissement"]) || array_key_exists("etablissement", $context) ? $context["etablissement"] : (function () { throw new RuntimeError('Variable "etablissement" does not exist.', 76, $this->source); })()), "papierEtCarton", [], "any", false, false, false, 76), "html", null, true);
        echo "
                    </p>   

                    <p>Verre : 
                        ";
        // line 80
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["etablissement"]) || array_key_exists("etablissement", $context) ? $context["etablissement"] : (function () { throw new RuntimeError('Variable "etablissement" does not exist.', 80, $this->source); })()), "verre", [], "any", false, false, false, 80), "html", null, true);
        echo "
                    </p>    



";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "etablissement/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  220 => 80,  213 => 76,  206 => 72,  199 => 68,  192 => 64,  185 => 60,  178 => 56,  171 => 52,  164 => 48,  157 => 44,  150 => 40,  143 => 36,  136 => 32,  129 => 28,  122 => 24,  115 => 20,  108 => 16,  101 => 12,  94 => 8,  90 => 6,  80 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout.html.twig' %}

{% block title %} {{parent()}} - Nos auteurs{% endblock %}

{% block content %}
<h2>Tous nos auteurs</h2>

<a href='{{ path(\"mrBin_etablissement_showall\") }}'>Voir tous nos établissements</a>


                    <h3>
                        {{etablissement.nomEtablissement}}
                    </h3>
                    
                    <p>
                        {{etablissement.typeEtablissement}}
                    </p>

                    <p>
                        {{etablissement.adresse}}
                    </p>

                    <p>
                        {{etablissement.telephone}}
                    </p>

                    <p>
                        {{etablissement.horaires}}
                    </p> 

                    <p>
                        {{etablissement.reconditionnement}}
                    </p>

                    <p> Gravats : 
                        {{etablissement.gravats}}
                    </p>

                    <p>Métaux : 
                        {{etablissement.metaux}}
                    </p>

                    <p>Bois : 
                        {{etablissement.bois}}
                    </p> 

                    <p>Encombrants : 
                        {{etablissement.encombrants}}
                    </p>  

                    <p>Chimique : 
                        {{etablissement.chimique}}
                    </p>  

                    <p>Mobilier : 
                        {{etablissement.mobilier}}
                    </p>     

                    <p>Batterie : 
                        {{etablissement.batterie}}
                    </p>    

                    <p>Plastique : 
                        {{etablissement.plastique}}
                    </p>   

                    <p>Electroménager :
                        {{etablissement.electromenager}}
                    </p>   

                    <p>Textile : 
                        {{etablissement.textile}}
                    </p>   

                    <p>Papier et carton : 
                        {{etablissement.papierEtCarton}}
                    </p>   

                    <p>Verre : 
                        {{etablissement.verre}}
                    </p>    



{% endblock %}", "etablissement/show.html.twig", "/Users/moussaillon/Documents/Symfony/MrBin/templates/etablissement/show.html.twig");
    }
}
