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

/* categories/main.html.twig */
class __TwigTemplate_419d504cb6de0bc618858f63840d9c4eec1f657ed56fdeb63d72c9097e994494 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "categories/main.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "categories/main.html.twig"));

        $this->parent = $this->loadTemplate("layout.html.twig", "categories/main.html.twig", 1);
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
        echo " - Accueil ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 8
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 9
        echo "<!--section avec les catégories de déchets principaux-->
    <section class=\"topsection\">
        <h1>les catégories de déchets</h1>
        <p class=\"text-center\">
          trouver facilement une catégorie de déchets pour un tri simplifié
        </p>
    </section>
    <section class=\"bg-colorfirst\">
        <div class=\"container\">
            <h2 id=\"topmargin\" class=\"text-center font-weight-bolder\">Les déchets communs</h2>
            <p class=\"text-center\" id=\"dechetsCommun\">
                    Sur cette partie vous trouverez les déchets les plus courants, ceux
                    de notre vie quotidienne
            </p>
            <!-- partie avec les flip card -->
            <div class=\"row\">
              ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["dechetsCommuns"]) || array_key_exists("dechetsCommuns", $context) ? $context["dechetsCommuns"] : (function () { throw new RuntimeError('Variable "dechetsCommuns" does not exist.', 25, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["dechetCommun"]) {
            // line 26
            echo "                <div class=\"card-container mt-5 col-sm-4\">
                    <div class=\"card cardfront flipcard\">
                      <img
                        src=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/"), "html", null, true);
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dechetCommun"], "urlPicto", [], "any", false, false, false, 29), "html", null, true);
            echo "\"
                        class=\"card-img-top\"
                        alt=\"dechets papier\"
                      />
                      <div class=\"card-body\">
                      <h5 class=\"card-title\">";
            // line 34
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dechetCommun"], "nomCategorie", [], "any", false, false, false, 34)), "html", null, true);
            echo "</h5>
                      </div>
                    </div>
                    <div class=\"card cardback flipcard\">
                        <div class=\"card-body\">
                              <h5 class=\"card-title\">";
            // line 39
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dechetCommun"], "nomCategorie", [], "any", false, false, false, 39)), "html", null, true);
            echo "</h5>
                              <ul class=\"card-text\">
                                  ";
            // line 41
            echo twig_get_attribute($this->env, $this->source, $context["dechetCommun"], "description", [], "any", false, false, false, 41);
            echo "
                              </ul>
                        </div>
                    </div>
                </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dechetCommun'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "              </div>
        </div>
    </section>
      <!-- partie avec les autres catégories de déchets -->
    <section class=\"bg-colorother\">
        <div class=\"fontcolor\">
              <h2 class=\"text-center margehaute\">Autre types de déchet</h2>
              <p class=\"text-center\">
                    Ces déchets ont un traitements particuliers et necessitent une prise
                    en charge spécifique. Ils peuvent être traités en déchèterie. 
              </p>
             <div class=\"container\">
                  <div class=\"row\">
                        ";
        // line 60
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["autresCategories"]) || array_key_exists("autresCategories", $context) ? $context["autresCategories"] : (function () { throw new RuntimeError('Variable "autresCategories" does not exist.', 60, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["autreCategorie"]) {
            // line 61
            echo "                            <div class=\"col-3 margehaute\">
                                <img
                                  class=\"img-thumbnail angle\"
                                  src=\"";
            // line 64
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/"), "html", null, true);
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["autreCategorie"], "urlPicto", [], "any", false, false, false, 64), "html", null, true);
            echo "\"
                                  alt=\"icône de la catégorie\"
                                 />
                            </div>
                            <div class=\"col-9 margehaute\">
                                <h2 class=\"titlemargin\">";
            // line 69
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, $context["autreCategorie"], "nomCategorie", [], "any", false, false, false, 69)), "html", null, true);
            echo "</h2>
                                 <p>
                                  ";
            // line 71
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["autreCategorie"], "description", [], "any", false, false, false, 71), "html", null, true);
            echo "
                                </p>
                            </div>
                          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['autreCategorie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 75
        echo "                    </div>
              </div>
          </div>
      </section>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "categories/main.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  199 => 75,  189 => 71,  184 => 69,  175 => 64,  170 => 61,  166 => 60,  151 => 47,  139 => 41,  134 => 39,  126 => 34,  117 => 29,  112 => 26,  108 => 25,  90 => 9,  80 => 8,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"layout.html.twig\" %}

{% block title %}
{{parent()}} - Accueil {#parent = pour récupérer le contenu du même block qui existe déjà dans base.html.twig#}
{% endblock %}


{% block content %}
<!--section avec les catégories de déchets principaux-->
    <section class=\"topsection\">
        <h1>les catégories de déchets</h1>
        <p class=\"text-center\">
          trouver facilement une catégorie de déchets pour un tri simplifié
        </p>
    </section>
    <section class=\"bg-colorfirst\">
        <div class=\"container\">
            <h2 id=\"topmargin\" class=\"text-center font-weight-bolder\">Les déchets communs</h2>
            <p class=\"text-center\" id=\"dechetsCommun\">
                    Sur cette partie vous trouverez les déchets les plus courants, ceux
                    de notre vie quotidienne
            </p>
            <!-- partie avec les flip card -->
            <div class=\"row\">
              {% for dechetCommun in dechetsCommuns %}
                <div class=\"card-container mt-5 col-sm-4\">
                    <div class=\"card cardfront flipcard\">
                      <img
                        src=\"{{ asset(\"img/\") }}{{ dechetCommun.urlPicto }}\"
                        class=\"card-img-top\"
                        alt=\"dechets papier\"
                      />
                      <div class=\"card-body\">
                      <h5 class=\"card-title\">{{ dechetCommun.nomCategorie | capitalize }}</h5>
                      </div>
                    </div>
                    <div class=\"card cardback flipcard\">
                        <div class=\"card-body\">
                              <h5 class=\"card-title\">{{ dechetCommun.nomCategorie | capitalize }}</h5>
                              <ul class=\"card-text\">
                                  {{ dechetCommun.description | raw }}
                              </ul>
                        </div>
                    </div>
                </div>
                {% endfor %}
              </div>
        </div>
    </section>
      <!-- partie avec les autres catégories de déchets -->
    <section class=\"bg-colorother\">
        <div class=\"fontcolor\">
              <h2 class=\"text-center margehaute\">Autre types de déchet</h2>
              <p class=\"text-center\">
                    Ces déchets ont un traitements particuliers et necessitent une prise
                    en charge spécifique. Ils peuvent être traités en déchèterie. 
              </p>
             <div class=\"container\">
                  <div class=\"row\">
                        {% for autreCategorie in autresCategories %}
                            <div class=\"col-3 margehaute\">
                                <img
                                  class=\"img-thumbnail angle\"
                                  src=\"{{ asset(\"img/\") }}{{ autreCategorie.urlPicto }}\"
                                  alt=\"icône de la catégorie\"
                                 />
                            </div>
                            <div class=\"col-9 margehaute\">
                                <h2 class=\"titlemargin\">{{ autreCategorie.nomCategorie | capitalize }}</h2>
                                 <p>
                                  {{ autreCategorie.description }}
                                </p>
                            </div>
                          {% endfor %}
                    </div>
              </div>
          </div>
      </section>
{% endblock %}

", "categories/main.html.twig", "/Users/laurastassi/Recherche Job/Travail_Formation/Code/Symfony/MrBin/templates/categories/main.html.twig");
    }
}
