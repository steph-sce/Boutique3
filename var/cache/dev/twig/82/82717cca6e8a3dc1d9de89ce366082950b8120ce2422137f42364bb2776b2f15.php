<?php

/* @Boutique/Produit/produit.html.twig */
class __TwigTemplate_856f0a42b683a8c147d13c31644b3bd649baa752a0d3b46b05edc95c23f5a62a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "@Boutique/Produit/produit.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Boutique/Produit/produit.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Boutique/Produit/produit.html.twig"));

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
        echo "<div class=\"row\">
  <div class=\"col-12\">
    <h1>";
        // line 8
        echo twig_escape_filter($this->env, ($context["title"] ?? $this->getContext($context, "title")), "html", null, true);
        echo "</h1>
  </div>
  <div class=\"col-md-4\">
    <img class=\"card-img-top\" src=";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("/photo/" . $this->getAttribute(($context["produits"] ?? $this->getContext($context, "produits")), "photo", array()))), "html", null, true);
        echo " alt=\"\">
    ";
        // line 13
        echo "    <h4>";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["produits"] ?? $this->getContext($context, "produits")), "description", array()), "html", null, true);
        echo "</h4>
    ";
        // line 15
        echo "    <ul>
      <li>Catégorie : ";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute(($context["produits"] ?? $this->getContext($context, "produits")), "categorie", array()), "html", null, true);
        echo "</li>
      <li>Couleur : ";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute(($context["produits"] ?? $this->getContext($context, "produits")), "couleur", array()), "html", null, true);
        echo "</li>
      <li>Taille : ";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute(($context["produits"] ?? $this->getContext($context, "produits")), "taille", array()), "html", null, true);
        echo "</li>
    </ul>
    <h4>";
        // line 20
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute(($context["produits"] ?? $this->getContext($context, "produits")), "prix", array()), 2, ",", ""), "html", null, true);
        echo "€</h4>
    <!-- s'il y a des produits -->
    ";
        // line 22
        if (($this->getAttribute(($context["produits"] ?? $this->getContext($context, "produits")), "stock", array()) > 0)) {
            // line 23
            echo "    <form method=\"post\" action=\"panier.php\">
      <input type=\"hidden\" name=\"id_produit\" value=\"\">
      <select name=\"quantite\" class=\"custom-select col-sm-2\">
      ";
            // line 26
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, 5));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                if (($context["i"] <= $this->getAttribute(($context["produits"] ?? $this->getContext($context, "produits")), "stock", array()))) {
                    // line 27
                    echo "        <option>";
                    echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                    echo "</option>
      ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 29
            echo "      </select>
       <input type=\"submit\" name=\"ajout_panier\" value=\"ajouter au panier\" class=\"btn col-sm-8 ml-2\">
      ";
        } else {
            // line 32
            echo "        <strong>Produit en rupture de stock !</strong>        
      ";
        }
        // line 34
        echo "    </form>
    <p>Nombre de produit(s) disponible(s) : ";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute(($context["produits"] ?? $this->getContext($context, "produits")), "stock", array()), "html", null, true);
        echo "</p>
    <!-- sinon -->
    ";
        // line 38
        echo "    <!-- Fin du if -->
    <p>
      <a href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("categorie", array("categorie" => $this->getAttribute(($context["produits"] ?? $this->getContext($context, "produits")), "categorie", array()))), "html", null, true);
        echo "\">Retour vers la catégorie ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["produits"] ?? $this->getContext($context, "produits")), "categorie", array()), "html", null, true);
        echo "</a></br>
      <a href=\"";
        // line 41
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("accueil");
        echo "\">Retour vers tout les articles</a>
    </p>
  </div>
</div><!-- .row -->


<!-- Suggestions de produit pour plus tard 
    <hr>
    <div class=\"row\">
        <div class=\"col-12\">
            <h3>Suggestions de produits</h3>
        </div>
\t\t   <div class=\"col-sm-3\">
\t\t\t\t<a href=\"\">
\t\t\t\t\t<img src=\"\" alt=\"\" class=\"img-fluid\">
\t\t\t\t</a>
\t\t\t\t<h4>10€</h4>
\t\t   </div> 
    </div>-->
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Boutique/Produit/produit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 41,  151 => 40,  147 => 38,  142 => 35,  139 => 34,  135 => 32,  130 => 29,  120 => 27,  115 => 26,  110 => 23,  108 => 22,  103 => 20,  98 => 18,  94 => 17,  90 => 16,  87 => 15,  82 => 13,  78 => 11,  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
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
<div class=\"row\">
  <div class=\"col-12\">
    <h1>{{ title }}</h1>
  </div>
  <div class=\"col-md-4\">
    <img class=\"card-img-top\" src={{ asset('/photo/' ~ produits.photo) }} alt=\"\">
    {# <h3>Description</h3> #}
    <h4>{{ produits.description }}</h4>
    {# <h3>Détails</h3> #}
    <ul>
      <li>Catégorie : {{ produits.categorie }}</li>
      <li>Couleur : {{ produits.couleur }}</li>
      <li>Taille : {{ produits.taille }}</li>
    </ul>
    <h4>{{ produits.prix | number_format(2, ',', '')}}€</h4>
    <!-- s'il y a des produits -->
    {% if produits.stock > 0 %}
    <form method=\"post\" action=\"panier.php\">
      <input type=\"hidden\" name=\"id_produit\" value=\"\">
      <select name=\"quantite\" class=\"custom-select col-sm-2\">
      {% for i in 1..5 if i <= produits.stock %}
        <option>{{ i }}</option>
      {% endfor %}
      </select>
       <input type=\"submit\" name=\"ajout_panier\" value=\"ajouter au panier\" class=\"btn col-sm-8 ml-2\">
      {% else %}
        <strong>Produit en rupture de stock !</strong>        
      {% endif %}
    </form>
    <p>Nombre de produit(s) disponible(s) : {{ produits.stock }}</p>
    <!-- sinon -->
    {# <p>{{ produits.stock == 0 ? 'Produit en rupture de stock !' : 'Produit en stock !' }}</p> #}
    <!-- Fin du if -->
    <p>
      <a href=\"{{ path('categorie', {'categorie' : produits.categorie}) }}\">Retour vers la catégorie {{ produits.categorie }}</a></br>
      <a href=\"{{ path('accueil') }}\">Retour vers tout les articles</a>
    </p>
  </div>
</div><!-- .row -->


<!-- Suggestions de produit pour plus tard 
    <hr>
    <div class=\"row\">
        <div class=\"col-12\">
            <h3>Suggestions de produits</h3>
        </div>
\t\t   <div class=\"col-sm-3\">
\t\t\t\t<a href=\"\">
\t\t\t\t\t<img src=\"\" alt=\"\" class=\"img-fluid\">
\t\t\t\t</a>
\t\t\t\t<h4>10€</h4>
\t\t   </div> 
    </div>-->
{% endblock %}", "@Boutique/Produit/produit.html.twig", "C:\\wamp64\\www\\Boutique3\\src\\BoutiqueBundle\\Resources\\views\\Produit\\produit.html.twig");
    }
}
