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

/* home/main.html.twig */
class __TwigTemplate_83f77817a8d44650a8cde89e7e7c16c852fae57a6541d3990cb1a80971e97ad7 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/main.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/main.html.twig"));

        $this->parent = $this->loadTemplate("layout.html.twig", "home/main.html.twig", 1);
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

    // line 7
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 8
        echo "    
    <section class=\"marge bg1\">
        <div 
            id=\"color-font\" 
            class=\"container alert alert-infos text-center\" 
            role=\"alert\"
        >
            <h2 class=\"alert-heading\">Infos du jour ";
        // line 15
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "d/m/Y"), "html", null, true);
        echo "</h2>
            ";
        // line 16
        if ( !(null === twig_get_attribute($this->env, $this->source, (isset($context["todayJourRamassage"]) || array_key_exists("todayJourRamassage", $context) ? $context["todayJourRamassage"] : (function () { throw new RuntimeError('Variable "todayJourRamassage" does not exist.', 16, $this->source); })()), "contenants", [], "any", false, false, false, 16))) {
            // line 17
            echo "                <p> 
                    ";
            // line 19
            echo "                    Aujourd'hui on est ";
            echo twig_escape_filter($this->env, (isset($context["dateFr"]) || array_key_exists("dateFr", $context) ? $context["dateFr"] : (function () { throw new RuntimeError('Variable "dateFr" does not exist.', 19, $this->source); })()), "html", null, true);
            echo " n'oubliez pas de sortir le ou les bacs suivants : 
                </p>
                <ul>
                    ";
            // line 22
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["todayJourRamassage"]) || array_key_exists("todayJourRamassage", $context) ? $context["todayJourRamassage"] : (function () { throw new RuntimeError('Variable "todayJourRamassage" does not exist.', 22, $this->source); })()), "contenants", [], "any", false, false, false, 22));
            foreach ($context['_seq'] as $context["_key"] => $context["contenant"]) {
                // line 23
                echo "                         <li>
                           ";
                // line 24
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contenant"], "nomContenant", [], "any", false, false, false, 24)), "html", null, true);
                echo "
                        </li>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['contenant'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 27
            echo "                </ul>
            ";
        } else {
            // line 29
            echo "                <p> Pas de poubelles à sortir aujourd'hui. </p>
            ";
        }
        // line 31
        echo "        </div>
        <div class=\"container\">
            <h1>Mister Bin</h1>
            <h2 class=\"alignement\">Ne cherchez plus, jetez!</h2>
            <p class=\"alignement\">
                Trouvez facilement la déchetterie pour vos déchets
            </p>
        </div>
        <div class=\"container cadre pt-5 pb-5\">
            <h2 class=\"text-center\" id=\"cadreh2\">
                Saisissez ici votre recherche
            </h2>
                <!--MOTEUR DE RECHERCHE-->
                    <div id='react-root'></div>
                <!---FIN MOTEUR DE RECHERCHE-->
            </div>
        </div>
    </section>
    <section class=\"bgcouleur\">
        <div class=\"container\">
            <h2 id=\"sectionmap\">Les déchetteries en un coup d'oeil</h2>
            <iframe 
                class=\"mb-5\"
                src=\"https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d71379.96208417251!2d2.2627743974156416!3d48.853700559854914!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sd%C3%A9chetterie%20paris!5e0!3m2!1sfr!2sfr!4v1586509253151!5m2!1sfr!2sfr\"
                width=\"1140\"
                height=\"450\"
                frameborder=\"0\"
                style=\"border: 0;\"
                allowfullscreen=\"\"
                aria-hidden=\"false\"
                tabindex=\"0\"
            ></iframe>
            <div class=\"row\">
                <div class=\"col-12\">
                    <h2>Restons en contact</h2>
                    <p id=\"formattexte\">Si vous avez une suggestion n'hésitez pas à nous écrire.</p>
                </div>
                <div class=\"col-lg-4 col-sm-5\">
                    <div class=\"form-group\">
                        ";
        // line 70
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 70, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "
                            ";
        // line 71
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 71, $this->source); })()), 'widget');
        echo "
                        ";
        // line 72
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 72, $this->source); })()), 'form_end');
        echo "
                    </div><!-- /.form-group -->
                </div><!-- /.col-lg-4 -->
                <div class=\"col-lg-8 col-sm-7\">
                        <img
                            class=\"imagebg bgright\"
                            src=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../img/beach_clean1.jpg"), "html", null, true);
        echo "\"
                            alt=\"image de jeunes gens ramassant des déchets sur une plage\"
                        />
                </div>
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "home/main.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  197 => 78,  188 => 72,  184 => 71,  180 => 70,  139 => 31,  135 => 29,  131 => 27,  122 => 24,  119 => 23,  115 => 22,  108 => 19,  105 => 17,  103 => 16,  99 => 15,  90 => 8,  80 => 7,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"layout.html.twig\" %}

{% block title %}
{{parent()}} - Accueil {#parent = pour récupérer le contenu du même block qui existe déjà dans base.html.twig#}
{% endblock %}

{% block content %}
    
    <section class=\"marge bg1\">
        <div 
            id=\"color-font\" 
            class=\"container alert alert-infos text-center\" 
            role=\"alert\"
        >
            <h2 class=\"alert-heading\">Infos du jour {{ \"now\"|date(\"d/m/Y\") }}</h2>
            {% if (todayJourRamassage.contenants is not null) %}
                <p> 
                    {# setlocale(LC_TIME, \"fr_FR\"); #}
                    Aujourd'hui on est {{ dateFr }} n'oubliez pas de sortir le ou les bacs suivants : 
                </p>
                <ul>
                    {% for contenant in todayJourRamassage.contenants %}
                         <li>
                           {{ contenant.nomContenant | capitalize }}
                        </li>
                    {% endfor  %}
                </ul>
            {% else %}
                <p> Pas de poubelles à sortir aujourd'hui. </p>
            {% endif %}
        </div>
        <div class=\"container\">
            <h1>Mister Bin</h1>
            <h2 class=\"alignement\">Ne cherchez plus, jetez!</h2>
            <p class=\"alignement\">
                Trouvez facilement la déchetterie pour vos déchets
            </p>
        </div>
        <div class=\"container cadre pt-5 pb-5\">
            <h2 class=\"text-center\" id=\"cadreh2\">
                Saisissez ici votre recherche
            </h2>
                <!--MOTEUR DE RECHERCHE-->
                    <div id='react-root'></div>
                <!---FIN MOTEUR DE RECHERCHE-->
            </div>
        </div>
    </section>
    <section class=\"bgcouleur\">
        <div class=\"container\">
            <h2 id=\"sectionmap\">Les déchetteries en un coup d'oeil</h2>
            <iframe 
                class=\"mb-5\"
                src=\"https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d71379.96208417251!2d2.2627743974156416!3d48.853700559854914!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sd%C3%A9chetterie%20paris!5e0!3m2!1sfr!2sfr!4v1586509253151!5m2!1sfr!2sfr\"
                width=\"1140\"
                height=\"450\"
                frameborder=\"0\"
                style=\"border: 0;\"
                allowfullscreen=\"\"
                aria-hidden=\"false\"
                tabindex=\"0\"
            ></iframe>
            <div class=\"row\">
                <div class=\"col-12\">
                    <h2>Restons en contact</h2>
                    <p id=\"formattexte\">Si vous avez une suggestion n'hésitez pas à nous écrire.</p>
                </div>
                <div class=\"col-lg-4 col-sm-5\">
                    <div class=\"form-group\">
                        {{form_start(form, {'attr': {'novalidate' : 'novalidate'}} )}}
                            {{ form_widget(form) }}
                        {{ form_end(form) }}
                    </div><!-- /.form-group -->
                </div><!-- /.col-lg-4 -->
                <div class=\"col-lg-8 col-sm-7\">
                        <img
                            class=\"imagebg bgright\"
                            src=\"{{ asset('../img/beach_clean1.jpg') }}\"
                            alt=\"image de jeunes gens ramassant des déchets sur une plage\"
                        />
                </div>
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section>
{% endblock %}

", "home/main.html.twig", "/Users/laurastassi/Recherche Job/Travail_Formation/Code/Symfony/MrBin/templates/home/main.html.twig");
    }
}
