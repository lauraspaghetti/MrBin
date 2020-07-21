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

/* security/login.html.twig */
class __TwigTemplate_a6eca29f7b932848d3c705056053a73cb74a1f9fbbae703310b836a1c0aefafe extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $this->parent = $this->loadTemplate("layout.html.twig", "security/login.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Connexion";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "<section class=\"fullscreen bg-login\"> 
    <div class='container'> 
        <div class=\"row logintop\">
            <div class=\"col-sm-4 mt-5\">
                ";
        // line 12
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 12, $this->source); })())) {
            // line 13
            echo "                    <div class=\"alert alert-danger\">
                        ";
            // line 14
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 14, $this->source); })()), "messageKey", [], "any", false, false, false, 14), twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 14, $this->source); })()), "messageData", [], "any", false, false, false, 14), "security"), "html", null, true);
            echo "
                    </div>
                ";
        }
        // line 17
        echo "                ";
        // line 18
        echo "                ";
        // line 23
        echo "                <form method=\"post\">
                    <h1 class id='toptitle'>Connexion</h1>
                    <div class=\"form-group\">
                        <input 
                            class=\"form-control\" 
                            type=\"email\" 
                            value=\"";
        // line 29
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 29, $this->source); })()), "html", null, true);
        echo "\" 
                            name=\"email\" 
                            id=\"inputEmail\"
                            placeholder=\"Email\" 
                            required autofocus
                        >
                    </div>
                    <div class=\"form-group\">
                        <input 
                            class=\"form-control\" 
                            type=\"password\" 
                            name=\"password\" 
                            id=\"inputPassword\" 
                            placeholder=\"Mot de passe\"
                            required
                        >
                    </div>
                    <input 
                        type=\"hidden\" 
                        name=\"_csrf_token\"
                        value=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\"
                    >
                    <div class=\"form-group\">
                        <a href\"#\">
                            <button 
                            class=\"btn\" 
                            type=\"submit\">
                                Je me connecte
                            </button>
                        </a>
                    </div>
                    <a href=\"";
        // line 60
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
        echo "\">
                        <button 
                        class=\"btn\" 
                        type=\"button\">
                            Créer mon compte
                        </button>
                    </a>
                </form>
            </div>
            <div class=\"col-sm-8\">
                <img
                    class=\"imagebg bgright\"
                    src=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../img/beach_clean2.jpg"), "html", null, true);
        echo "\"
                    alt=\"image de jeunes gens ramassant des déchets sur une plage\"
                />
            </div>
        </div>
</section>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  169 => 72,  154 => 60,  140 => 49,  117 => 29,  109 => 23,  107 => 18,  105 => 17,  99 => 14,  96 => 13,  94 => 12,  88 => 8,  78 => 7,  59 => 5,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout.html.twig' %}

{# {% set backgroundContainerClass = 'bgLogin' %} #}

{% block title %}Connexion{% endblock %}

{% block body %}
<section class=\"fullscreen bg-login\"> 
    <div class='container'> 
        <div class=\"row logintop\">
            <div class=\"col-sm-4 mt-5\">
                {% if error %}
                    <div class=\"alert alert-danger\">
                        {{ error.messageKey|trans       (error.messageData, 'security') }}
                    </div>
                {% endif %}
                {# A garder quand pour mettre sur la home si l'ux designer valide #}
                {# {% if app.user %}
                    <div class=\"mb-3\">
                        Bonjour {{ app.user.username }}, <a href=\"{{ path('app_logout') }}\">Se déconnecter</a>
                    </div>
                {% endif %} #}
                <form method=\"post\">
                    <h1 class id='toptitle'>Connexion</h1>
                    <div class=\"form-group\">
                        <input 
                            class=\"form-control\" 
                            type=\"email\" 
                            value=\"{{ last_username }}\" 
                            name=\"email\" 
                            id=\"inputEmail\"
                            placeholder=\"Email\" 
                            required autofocus
                        >
                    </div>
                    <div class=\"form-group\">
                        <input 
                            class=\"form-control\" 
                            type=\"password\" 
                            name=\"password\" 
                            id=\"inputPassword\" 
                            placeholder=\"Mot de passe\"
                            required
                        >
                    </div>
                    <input 
                        type=\"hidden\" 
                        name=\"_csrf_token\"
                        value=\"{{ csrf_token('authenticate') }}\"
                    >
                    <div class=\"form-group\">
                        <a href\"#\">
                            <button 
                            class=\"btn\" 
                            type=\"submit\">
                                Je me connecte
                            </button>
                        </a>
                    </div>
                    <a href=\"{{ path(\"app_register\") }}\">
                        <button 
                        class=\"btn\" 
                        type=\"button\">
                            Créer mon compte
                        </button>
                    </a>
                </form>
            </div>
            <div class=\"col-sm-8\">
                <img
                    class=\"imagebg bgright\"
                    src=\"{{ asset('../img/beach_clean2.jpg') }}\"
                    alt=\"image de jeunes gens ramassant des déchets sur une plage\"
                />
            </div>
        </div>
</section>
{#
    Uncomment this section and add a remember_me option below your firewall to activate remember me functionality.
    See https://symfony.com/doc/current/security/remember_me.html

     <div class=\"checkbox mb-3\">
        <label>
            <input type=\"checkbox\" name=\"_remember_me\"> Remember me
        </label>
    </div>
#}
{% endblock %}
", "security/login.html.twig", "/Users/laurastassi/Recherche Job/Travail_Formation/Code/Symfony/MrBin/templates/security/login.html.twig");
    }
}
