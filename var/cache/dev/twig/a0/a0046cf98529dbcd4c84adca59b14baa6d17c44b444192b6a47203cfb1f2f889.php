<?php

/* @Boutique/Admin/membre_profil.html.twig */
class __TwigTemplate_4f263b4deb5ac66b877016418c0959750181f4264887359f5bd6530cec63d6c4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "@Boutique/Admin/membre_profil.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Boutique/Admin/membre_profil.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Boutique/Admin/membre_profil.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 5
        echo "
<h1>";
        // line 6
        echo twig_escape_filter($this->env, ($context["title"] ?? $this->getContext($context, "title")), "html", null, true);
        echo "</h1>
<h2>Info du client</h2>
<ul>
<li>Nom: <b>";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute(($context["membre"] ?? $this->getContext($context, "membre")), "nom", array()), "html", null, true);
        echo "</b></li>
<li>Prénom: <b>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["membre"] ?? $this->getContext($context, "membre")), "prenom", array()), "html", null, true);
        echo "</b></li>
<li>Email: <b>";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute(($context["membre"] ?? $this->getContext($context, "membre")), "nom", array()), "html", null, true);
        echo "</b></li>
<li>Adresse: <b>";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute(($context["membre"] ?? $this->getContext($context, "membre")), "adresse", array()), "html", null, true);
        echo "</b></li>
<li>Code postal: <b>";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute(($context["membre"] ?? $this->getContext($context, "membre")), "codePostal", array()), "html", null, true);
        echo "</b></li>
<li>Ville: <b>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["membre"] ?? $this->getContext($context, "membre")), "ville", array()), "html", null, true);
        echo "</b></li>
</ul>

<h2>Commande du client</h2>
";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["membre"] ?? $this->getContext($context, "membre")), "commandes", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["cde"]) {
            // line 19
            echo "Commande N°";
            echo twig_escape_filter($this->env, $this->getAttribute($context["cde"], "IdCommande", array()), "html", null, true);
            echo "
<ul>
<li>Date: <b>";
            // line 21
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["cde"], "dateEnregistrement", array()), "d/m/y"), "html", null, true);
            echo "</b></li>
<li>Montant: <b>";
            // line 22
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["cde"], "montant", array()), 2, ",", " "), "html", null, true);
            echo "€</b></li>
<li>Etat: <b>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["cde"], "etat", array()), "html", null, true);
            echo "</b></li>
</ul>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cde'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Boutique/Admin/membre_profil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 26,  103 => 23,  99 => 22,  95 => 21,  89 => 19,  85 => 18,  78 => 14,  74 => 13,  70 => 12,  66 => 11,  62 => 10,  58 => 9,  52 => 6,  49 => 5,  40 => 4,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'layout.html.twig' %}


{% block content %}

<h1>{{title}}</h1>
<h2>Info du client</h2>
<ul>
<li>Nom: <b>{{membre.nom}}</b></li>
<li>Prénom: <b>{{membre.prenom}}</b></li>
<li>Email: <b>{{membre.nom}}</b></li>
<li>Adresse: <b>{{membre.adresse}}</b></li>
<li>Code postal: <b>{{membre.codePostal}}</b></li>
<li>Ville: <b>{{membre.ville}}</b></li>
</ul>

<h2>Commande du client</h2>
{% for cde in membre.commandes %}
Commande N°{{cde.IdCommande}}
<ul>
<li>Date: <b>{{cde.dateEnregistrement | date(\"d/m/y\")}}</b></li>
<li>Montant: <b>{{cde.montant | number_format(2, ',', ' ')}}€</b></li>
<li>Etat: <b>{{cde.etat}}</b></li>
</ul>
{% endfor %}

{% endblock %}

", "@Boutique/Admin/membre_profil.html.twig", "C:\\wamp64\\www\\Boutique3\\src\\BoutiqueBundle\\Resources\\views\\Admin\\membre_profil.html.twig");
    }
}
