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

/* layout.html.twig */
class __TwigTemplate_9ab57e24e0debe6ba15227c001dca5af62503a8c17d5204855aae2db0e594175 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "layout.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "layout.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "layout.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <header>
        <div class=\"container\">
            <nav class=\"navbar navbar-expand-lg navbar-light bg-green\">
                <a class=\"navbar-brand\" href=\"";
        // line 7
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mrBin_home");
        echo "\">
                    <img
                    src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../img/logo_main.svg"), "html", null, true);
        echo "\"
                    width=\"90\"
                    height=\"90\"
                    alt=\"image du logo de l'entreprise\"
                    />
                </a>
                <button
                    class=\"navbar-toggler\"
                    type=\"button\"
                    data-toggle=\"collapse\"
                    data-target=\"#navbarSupportedContent\"
                    aria-controls=\"navbarSupportedContent\"
                    aria-expanded=\"false\"
                    aria-label=\"Toggle navigation\"
                >
                    <span class=\"navbar-toggler-icon\"></span>
                </button>
                <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
                    <ul class=\"navbar-nav\">
                        <li class=\"nav-item active\">
                            <a class=\"nav-link\" href=\"";
        // line 29
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mrBin_home");
        echo "\">Home <span class=\"sr-only\">(current)</span></a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"";
        // line 32
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mrBin_categories");
        echo "\">Catégories</a>
                        </li>
                        ";
        // line 37
        echo "                        <li class=\"nav-item\">
                            ";
        // line 38
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 39
            echo "                                <a class=\"nav-link\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Déconnection</a>
                            ";
        } else {
            // line 41
            echo "                                <a class=\"nav-link\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\">Connexion</a>
                                ";
            // line 43
            echo "                            ";
        }
        // line 44
        echo "                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>
    <main>
        ";
        // line 52
        echo "        ";
        $this->displayBlock('content', $context, $blocks);
        // line 53
        echo "    </main>
    <footer>
        <div class=\"container\">
            <h5 class=\"centrer2\">
                Copyright© Mister Bin ";
        // line 57
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " en partenariat avec la Mairie de Paris
            </h5>
            <div class=\"row \">
                <div class=\"col-4\">
                    <h5>Plan du site</h5>
                    <ul>
                        <li><a class=\"yellow\" href=\"";
        // line 63
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mrBin_home");
        echo "\">Home</a></li>
                        <li><a class=\"yellow\" href=\"";
        // line 64
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mrBin_categories");
        echo "\">Catégories</a></li>
                        ";
        // line 66
        echo "                    </ul>
                </div>
                <div class=\"col-4 centrer2\">
                    <h5>Mentions légales</h5>
                    <h5>Mister Bin</h5>
                    <p>
                        123 Place Marie Curie 75007 Paris 01.47.54.33.70 Info@misterbin.fr
                    </p>
                </div>
                <div class=\"col-4\">
                    <h5>Suivez-nous sur</h5>
                    <!--icones réseaux sociaux-->
                    <div class=\"row\">
                        <div class=\"col-4 iconsize\">
                            <a class=\"yellow\" href=\"#\"
                            ><i
                                class=\"fab fa-facebook-square\"
                            ></i></a>
                        </div>
                        <div class=\"col-4 iconsize\">
                            <a class=\"yellow\" href=\"#\"
                            ><i
                                class=\"fab fa-instagram-square\"
                            ></i></a>
                        </div>
                        <div class=\"col-4 iconsize\">
                            <a class=\"yellow\" href=\"#\"
                            ><i
                                class=\"fab fa-linkedin\"
                            ></i></a>
                        </div>
                    </div>
                </div>
            </div><!-- /. row -->
        </div><!-- /. container -->
    </footer>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 52
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  213 => 52,  167 => 66,  163 => 64,  159 => 63,  150 => 57,  144 => 53,  141 => 52,  132 => 44,  129 => 43,  124 => 41,  118 => 39,  116 => 38,  113 => 37,  108 => 32,  102 => 29,  79 => 9,  74 => 7,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block body %}
    <header>
        <div class=\"container\">
            <nav class=\"navbar navbar-expand-lg navbar-light bg-green\">
                <a class=\"navbar-brand\" href=\"{{ path(\"mrBin_home\") }}\">
                    <img
                    src=\"{{ asset('../img/logo_main.svg') }}\"
                    width=\"90\"
                    height=\"90\"
                    alt=\"image du logo de l'entreprise\"
                    />
                </a>
                <button
                    class=\"navbar-toggler\"
                    type=\"button\"
                    data-toggle=\"collapse\"
                    data-target=\"#navbarSupportedContent\"
                    aria-controls=\"navbarSupportedContent\"
                    aria-expanded=\"false\"
                    aria-label=\"Toggle navigation\"
                >
                    <span class=\"navbar-toggler-icon\"></span>
                </button>
                <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
                    <ul class=\"navbar-nav\">
                        <li class=\"nav-item active\">
                            <a class=\"nav-link\" href=\"{{ path(\"mrBin_home\") }}\">Home <span class=\"sr-only\">(current)</span></a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"{{ path(\"mrBin_categories\") }}\">Catégories</a>
                        </li>
                        {# <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"#\">À propos</a>
                        </li> #}
                        <li class=\"nav-item\">
                            {% if is_granted(\"ROLE_USER\") %}
                                <a class=\"nav-link\" href=\"{{ path(\"app_logout\") }}\">Déconnection</a>
                            {% else %}
                                <a class=\"nav-link\" href=\"{{ path(\"app_login\") }}\">Connexion</a>
                                {# <a href=\"{{ path(\"app_register\") }}\">Créer un compte</a> #}
                            {% endif %}
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>
    <main>
        {# <div id='react-root'></div> #}
        {% block content %}{% endblock %}
    </main>
    <footer>
        <div class=\"container\">
            <h5 class=\"centrer2\">
                Copyright© Mister Bin {{ \"now\" | date(\"Y\") }} en partenariat avec la Mairie de Paris
            </h5>
            <div class=\"row \">
                <div class=\"col-4\">
                    <h5>Plan du site</h5>
                    <ul>
                        <li><a class=\"yellow\" href=\"{{ path(\"mrBin_home\") }}\">Home</a></li>
                        <li><a class=\"yellow\" href=\"{{ path(\"mrBin_categories\") }}\">Catégories</a></li>
                        {# <li><a class=\"yellow\" href=\"#\">A propos</a></li> #}
                    </ul>
                </div>
                <div class=\"col-4 centrer2\">
                    <h5>Mentions légales</h5>
                    <h5>Mister Bin</h5>
                    <p>
                        123 Place Marie Curie 75007 Paris 01.47.54.33.70 Info@misterbin.fr
                    </p>
                </div>
                <div class=\"col-4\">
                    <h5>Suivez-nous sur</h5>
                    <!--icones réseaux sociaux-->
                    <div class=\"row\">
                        <div class=\"col-4 iconsize\">
                            <a class=\"yellow\" href=\"#\"
                            ><i
                                class=\"fab fa-facebook-square\"
                            ></i></a>
                        </div>
                        <div class=\"col-4 iconsize\">
                            <a class=\"yellow\" href=\"#\"
                            ><i
                                class=\"fab fa-instagram-square\"
                            ></i></a>
                        </div>
                        <div class=\"col-4 iconsize\">
                            <a class=\"yellow\" href=\"#\"
                            ><i
                                class=\"fab fa-linkedin\"
                            ></i></a>
                        </div>
                    </div>
                </div>
            </div><!-- /. row -->
        </div><!-- /. container -->
    </footer>
{% endblock %}", "layout.html.twig", "/Users/laurastassi/Recherche Job/Travail_Formation/Code/Symfony/MrBin/templates/layout.html.twig");
    }
}
