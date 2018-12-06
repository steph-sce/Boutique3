<?php

/* @Boutique/Admin/produit_show.html.twig */
class __TwigTemplate_ee92b7de829e3dda238f7c090559ab6e6f83583acf448e58bffdb752481e5cb5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "@Boutique/Admin/produit_show.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Boutique/Admin/produit_show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Boutique/Admin/produit_show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, ($context["title"] ?? $this->getContext($context, "title")), "html", null, true);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "
<h1>Je suis dans la page qui fait produit_show</h1>


";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["produits"] ?? $this->getContext($context, "produits")));
        foreach ($context['_seq'] as $context["_key"] => $context["pdt"]) {
            // line 11
            echo "<div class=\"col-md-3\">
  <div class=\"row\">
    <div class=\"thumbnail\">
      <img class=\"card-img-top\" src=";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("/photo/" . $this->getAttribute($context["pdt"], "photo", array()))), "html", null, true);
            echo " alt=\"\">
      <div class=\"caption\">
        <h3>";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["pdt"], "description", array()), "html", null, true);
            echo "</h3>
        <p><u>Catégorie</u> : ";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["pdt"], "categorie", array()), "html", null, true);
            echo "</p>
        <p><u>Couleur</u> : ";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["pdt"], "couleur", array()), "html", null, true);
            echo "</p>
        <p><u>Taille</u> : ";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["pdt"], "taille", array()), "html", null, true);
            echo "</p>
        <h4>";
            // line 20
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["pdt"], "prix", array()), 2, ",", ""), "html", null, true);
            echo "€</h4>
        ";
            // line 21
            if (($this->getAttribute($context["pdt"], "stock", array()) > 0)) {
                // line 22
                echo "        <form method=\"post\" action=\"panier.php\">
          ";
                // line 24
                echo "          <select name=\"quantite\" class=\"custom-select col-sm-2\">
            ";
                // line 25
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    if (($context["i"] <= $this->getAttribute($context["pdt"], "stock", array()))) {
                        echo " <option>";
                        echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                        echo "</option>
              ";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 27
                echo "          </select>
          <input type=\"submit\" name=\"ajout_panier\" value=\"Ajouter au panier\" class=\"btn btn-primary\">
          ";
            } else {
                // line 30
                echo "          <!-- Fin du if -->
          <strong>Produit en rupture de stock !</strong>
          ";
            }
            // line 33
            echo "        </form>
        <p>Nombre de produit(s) disponible(s) : <strong>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["pdt"], "stock", array()), "html", null, true);
            echo "</strong></p>
        <p>";
            // line 35
            echo ((($this->getAttribute($context["pdt"], "stock", array()) == 0)) ? ("Produit en rupture de stock !") : ("Produit en stock !"));
            echo "</p>        
        <p><a href=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("categorie", array("categorie" => $this->getAttribute($context["pdt"], "categorie", array()))), "html", null, true);
            echo "\" class=\"btn btn-primary\" role=\"button\">Retour vers la catégorie ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["pdt"], "categorie", array()), "html", null, true);
            echo "</a>
      </div>
    </div>
  </div>
</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pdt'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Boutique/Admin/produit_show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 42,  151 => 36,  147 => 35,  143 => 34,  140 => 33,  135 => 30,  130 => 27,  116 => 25,  113 => 24,  110 => 22,  108 => 21,  104 => 20,  100 => 19,  96 => 18,  92 => 17,  88 => 16,  83 => 14,  78 => 11,  74 => 10,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
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

{% block title %}{{ title }}{% endblock %}

{% block content %}

<h1>Je suis dans la page qui fait produit_show</h1>


{% for pdt in produits %}
<div class=\"col-md-3\">
  <div class=\"row\">
    <div class=\"thumbnail\">
      <img class=\"card-img-top\" src={{ asset('/photo/' ~ pdt.photo) }} alt=\"\">
      <div class=\"caption\">
        <h3>{{ pdt.description }}</h3>
        <p><u>Catégorie</u> : {{ pdt.categorie }}</p>
        <p><u>Couleur</u> : {{ pdt.couleur }}</p>
        <p><u>Taille</u> : {{ pdt.taille }}</p>
        <h4>{{ pdt.prix | number_format(2, ',', '')}}€</h4>
        {% if pdt.stock > 0 %}
        <form method=\"post\" action=\"panier.php\">
          {# <input type=\"hidden\" name=\"id_produit\" value=\"\"> #}
          <select name=\"quantite\" class=\"custom-select col-sm-2\">
            {% for i in 1..5 if i <= pdt.stock %} <option>{{ i }}</option>
              {% endfor %}
          </select>
          <input type=\"submit\" name=\"ajout_panier\" value=\"Ajouter au panier\" class=\"btn btn-primary\">
          {% else %}
          <!-- Fin du if -->
          <strong>Produit en rupture de stock !</strong>
          {% endif %}
        </form>
        <p>Nombre de produit(s) disponible(s) : <strong>{{ pdt.stock }}</strong></p>
        <p>{{ pdt.stock == 0 ? 'Produit en rupture de stock !' : 'Produit en stock !' }}</p>        
        <p><a href=\"{{ path('categorie', {'categorie' : pdt.categorie}) }}\" class=\"btn btn-primary\" role=\"button\">Retour vers la catégorie {{ pdt.categorie }}</a>
      </div>
    </div>
  </div>
</div>
{% endfor %}

{% endblock %}", "@Boutique/Admin/produit_show.html.twig", "C:\\wamp64\\www\\Boutique3\\src\\BoutiqueBundle\\Resources\\views\\Admin\\produit_show.html.twig");
    }
}
