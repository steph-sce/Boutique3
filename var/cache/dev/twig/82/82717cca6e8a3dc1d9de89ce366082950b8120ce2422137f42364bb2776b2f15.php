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
  ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["produits"] ?? $this->getContext($context, "produits")));
        foreach ($context['_seq'] as $context["_key"] => $context["pdt"]) {
            // line 11
            echo "  <div class=\"col-md-4\">
    <img class=\"card-img-top\" src=";
            // line 12
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("/photo/" . $this->getAttribute($context["pdt"], "photo", array()))), "html", null, true);
            echo " alt=\"\">
    ";
            // line 14
            echo "    <h4>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["pdt"], "description", array()), "html", null, true);
            echo "</h4>
    ";
            // line 16
            echo "    <ul>
      <li>Catégorie : ";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["pdt"], "categorie", array()), "html", null, true);
            echo "</li>
      <li>Couleur : ";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["pdt"], "couleur", array()), "html", null, true);
            echo "</li>
      <li>Taille : ";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["pdt"], "taille", array()), "html", null, true);
            echo "</li>
    </ul>
    <h4>";
            // line 21
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["pdt"], "prix", array()), 2, ",", ""), "html", null, true);
            echo "€</h4>
    <!-- s'il y a des produits -->
    ";
            // line 23
            if (($this->getAttribute($context["pdt"], "stock", array()) > 0)) {
                // line 24
                echo "    <form method=\"post\" action=\"panier.php\">
      <input type=\"hidden\" name=\"id_produit\" value=\"\">
      <select name=\"quantite\" class=\"custom-select col-sm-2\">
      ";
                // line 27
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    if (($context["i"] <= $this->getAttribute($context["pdt"], "stock", array()))) {
                        // line 28
                        echo "        <option>";
                        echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                        echo "</option>
      ";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 30
                echo "      </select>
       <input type=\"submit\" name=\"ajout_panier\" value=\"ajouter au panier\" class=\"btn col-sm-8 ml-2\">
      ";
            } else {
                // line 33
                echo "        <strong>Produit en rupture de stock !</strong>        
      ";
            }
            // line 35
            echo "    </form>
    <p>Nombre de produit(s) disponible(s) : ";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["pdt"], "stock", array()), "html", null, true);
            echo "</p>
    <!-- sinon -->
    ";
            // line 39
            echo "    <!-- Fin du if -->
    <p>
      <a href=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("categorie", array("categorie" => $this->getAttribute($context["pdt"], "categorie", array()))), "html", null, true);
            echo "\">Retour vers la catégorie ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["pdt"], "categorie", array()), "html", null, true);
            echo "</a>
    </p>
  </div>
</div><!-- .row -->
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pdt'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "

<!-- SUggestions de produit pour plus tard 
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
        return array (  170 => 46,  157 => 41,  153 => 39,  148 => 36,  145 => 35,  141 => 33,  136 => 30,  126 => 28,  121 => 27,  116 => 24,  114 => 23,  109 => 21,  104 => 19,  100 => 18,  96 => 17,  93 => 16,  88 => 14,  84 => 12,  81 => 11,  77 => 10,  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
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
  {% for pdt in produits %}
  <div class=\"col-md-4\">
    <img class=\"card-img-top\" src={{ asset('/photo/' ~ pdt.photo) }} alt=\"\">
    {# <h3>Description</h3> #}
    <h4>{{ pdt.description }}</h4>
    {# <h3>Détails</h3> #}
    <ul>
      <li>Catégorie : {{ pdt.categorie }}</li>
      <li>Couleur : {{ pdt.couleur }}</li>
      <li>Taille : {{ pdt.taille }}</li>
    </ul>
    <h4>{{ pdt.prix | number_format(2, ',', '')}}€</h4>
    <!-- s'il y a des produits -->
    {% if pdt.stock > 0 %}
    <form method=\"post\" action=\"panier.php\">
      <input type=\"hidden\" name=\"id_produit\" value=\"\">
      <select name=\"quantite\" class=\"custom-select col-sm-2\">
      {% for i in 1..5 if i <= pdt.stock %}
        <option>{{ i }}</option>
      {% endfor %}
      </select>
       <input type=\"submit\" name=\"ajout_panier\" value=\"ajouter au panier\" class=\"btn col-sm-8 ml-2\">
      {% else %}
        <strong>Produit en rupture de stock !</strong>        
      {% endif %}
    </form>
    <p>Nombre de produit(s) disponible(s) : {{ pdt.stock }}</p>
    <!-- sinon -->
    {# <p>{{ pdt.stock == 0 ? 'Produit en rupture de stock !' : 'Produit en stock !' }}</p> #}
    <!-- Fin du if -->
    <p>
      <a href=\"{{ path('categorie', {'categorie' : pdt.categorie}) }}\">Retour vers la catégorie {{ pdt.categorie }}</a>
    </p>
  </div>
</div><!-- .row -->
{% endfor %}


<!-- SUggestions de produit pour plus tard 
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
{% endblock %}", "@Boutique/Produit/produit.html.twig", "C:\\wamp64\\www\\symfony\\Boutique3\\src\\BoutiqueBundle\\Resources\\views\\Produit\\produit.html.twig");
    }
}
