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
class __TwigTemplate_0c5ea68a164ce315836d9ada729a740f80a63601a70caf25238a65adba0adb70 extends \Twig\Template
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
        if (twig_get_attribute($this->env, $this->source, (isset($context["etablissement"]) || array_key_exists("etablissement", $context) ? $context["etablissement"] : (function () { throw new RuntimeError('Variable "etablissement" does not exist.', 32, $this->source); })()), "reconditionnement", [], "any", false, false, false, 32)) {
            // line 33
            echo "                            <img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/check.png"), "html", null, true);
            echo "\">
                        ";
        } else {
            // line 35
            echo "                            <img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/wrong_cross.png"), "html", null, true);
            echo "\">
                        ";
        }
        // line 37
        echo "                    </p>

                    <p>
                        ";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["etablissement"]) || array_key_exists("etablissement", $context) ? $context["etablissement"] : (function () { throw new RuntimeError('Variable "etablissement" does not exist.', 40, $this->source); })()), "typeDechet", [], "any", false, false, false, 40));
        foreach ($context['_seq'] as $context["_key"] => $context["typeDechet"]) {
            // line 41
            echo "                            ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["typeDechet"], "nomTypeDechet", [], "any", false, false, false, 41), "html", null, true);
            echo "
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['typeDechet'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "                    </p>




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
        return array (  168 => 43,  159 => 41,  155 => 40,  150 => 37,  144 => 35,  138 => 33,  136 => 32,  129 => 28,  122 => 24,  115 => 20,  108 => 16,  101 => 12,  94 => 8,  90 => 6,  80 => 5,  59 => 3,  36 => 1,);
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
                        {% if etablissement.reconditionnement %}
                            <img src=\"{{ asset(\"img/check.png\") }}\">
                        {% else %}
                            <img src=\"{{ asset(\"img/wrong_cross.png\") }}\">
                        {% endif %}
                    </p>

                    <p>
                        {% for typeDechet in etablissement.typeDechet %}
                            {{typeDechet.nomTypeDechet}}
                        {% endfor %}
                    </p>




{% endblock %}", "etablissement/show.html.twig", "/Users/moussaillon/Documents/Symfony/MrBin/templates/etablissement/show.html.twig");
    }
}
