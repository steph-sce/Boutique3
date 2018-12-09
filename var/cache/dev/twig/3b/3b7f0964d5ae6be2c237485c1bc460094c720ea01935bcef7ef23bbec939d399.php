<?php

/* @Boutique/Produit/index.html.twig */
class __TwigTemplate_9a24289ee593e71b7e4972eab643b614d78ab63162a2610b89edd4b0ae7010ec extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "@Boutique/Produit/index.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Boutique/Produit/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Boutique/Produit/index.html.twig"));

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
        echo "<h1 class=\"mt-4\">";
        echo twig_escape_filter($this->env, ($context["title"] ?? $this->getContext($context, "title")), "html", null, true);
        echo "</h1>
<div class=\"row\">
  <div class=\"col-md-3\">
    <a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("accueil");
        echo "\" class=\"list-group-item\">Tous</a>
    ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["produits"] ?? $this->getContext($context, "produits")));
        foreach ($context['_seq'] as $context["_key"] => $context["pdt"]) {
            // line 11
            echo "    <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("categorie", array("categorie" => $this->getAttribute($context["pdt"], "categorie", array()))), "html", null, true);
            echo "\" class=\"list-group-item list-group-item-action\">";
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute(            // line 12
$context["pdt"], "categorie", array())), "html", null, true);
            echo "</a>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pdt'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "  </div>
  <div class=\"col-md-9\">
    <div class=\"row\">
      ";
        // line 17
        if ((twig_length_filter($this->env, ($context["produits"] ?? $this->getContext($context, "produits"))) < 2)) {
            echo " <div class=\"col-sm-4 mb-4\">
        <div class=\"thumbnail\">
          <a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("produit", array("id" => $this->getAttribute($this->getAttribute(($context["produits"] ?? $this->getContext($context, "produits")), 0, array(), "array"), "idProduit", array()))), "html", null, true);
            echo "\">
            <img src=";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("/photo/" . $this->getAttribute($this->getAttribute(($context["produits"] ?? $this->getContext($context, "produits")), 0, array(), "array"), "photo", array()))), "html", null, true);
            echo " alt=\"\" class=\"card-img-top\">
          </a>
          <div class=\"card-body\">
            <h4>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["produits"] ?? $this->getContext($context, "produits")), 0, array(), "array"), "titre", array()), "html", null, true);
            echo "</h4>
            <h5>";
            // line 24
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($this->getAttribute(($context["produits"] ?? $this->getContext($context, "produits")), 0, array(), "array"), "prix", array()), 2, ",", ""), "html", null, true);
            echo "€</h5>
            <p>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["produits"] ?? $this->getContext($context, "produits")), 0, array(), "array"), "description", array()), "html", null, true);
            echo "</p>
            <a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("produit", array("id" => $this->getAttribute($this->getAttribute(($context["produits"] ?? $this->getContext($context, "produits")), 0, array(), "array"), "idProduit", array()))), "html", null, true);
            echo "\" class=\"btn btn-outline-primary\">Voir le
              produit</a>
          </div>
        </div>
    </div>
    ";
        } else {
            // line 32
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["produits"] ?? $this->getContext($context, "produits")));
            foreach ($context['_seq'] as $context["_key"] => $context["pdt"]) {
                // line 33
                echo "    <div class=\"col-sm-4 mb-4\">
      <div class=\"thumbnail\">
        <a href=\"";
                // line 35
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("produit", array("id" => $this->getAttribute($context["pdt"], "idProduit", array()))), "html", null, true);
                echo "\">
          <img src=";
                // line 36
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("/photo/" . $this->getAttribute($context["pdt"], "photo", array()))), "html", null, true);
                echo " alt=\"\" class=\"card-img-top\">
        </a>
        <div class=\"card-body\">
          <h4>";
                // line 39
                echo twig_escape_filter($this->env, $this->getAttribute($context["pdt"], "titre", array()), "html", null, true);
                echo "</h4>
          <h5>";
                // line 40
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["pdt"], "prix", array()), 2, ",", ""), "html", null, true);
                echo "€</h5>
          <p>";
                // line 41
                echo twig_escape_filter($this->env, $this->getAttribute($context["pdt"], "description", array()), "html", null, true);
                echo "</p>
          <a href=\"";
                // line 42
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("produit", array("id" => $this->getAttribute($context["pdt"], "idProduit", array()))), "html", null, true);
                echo "\" class=\"btn btn-outline-primary\">Voir le produit</a>
        </div>
      </div>
    </div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pdt'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 47
            echo "    ";
        }
        // line 48
        echo "  </div>
</div>
</div><!-- .row -->
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Boutique/Produit/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  181 => 48,  178 => 47,  167 => 42,  163 => 41,  159 => 40,  155 => 39,  149 => 36,  145 => 35,  141 => 33,  136 => 32,  127 => 26,  123 => 25,  119 => 24,  115 => 23,  109 => 20,  105 => 19,  100 => 17,  95 => 14,  87 => 12,  83 => 11,  79 => 10,  75 => 9,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
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
<h1 class=\"mt-4\">{{ title }}</h1>
<div class=\"row\">
  <div class=\"col-md-3\">
    <a href=\"{{ path('accueil') }}\" class=\"list-group-item\">Tous</a>
    {% for pdt in produits %}
    <a href=\"{{ path('categorie', {'categorie' : pdt.categorie}) }}\" class=\"list-group-item list-group-item-action\">{{
      pdt.categorie | capitalize }}</a>
    {% endfor %}
  </div>
  <div class=\"col-md-9\">
    <div class=\"row\">
      {% if produits|length < 2 %} <div class=\"col-sm-4 mb-4\">
        <div class=\"thumbnail\">
          <a href=\"{{ path('produit', {'id' : produits[0].idProduit}) }}\">
            <img src={{ asset('/photo/' ~ produits[0].photo) }} alt=\"\" class=\"card-img-top\">
          </a>
          <div class=\"card-body\">
            <h4>{{ produits[0].titre }}</h4>
            <h5>{{ produits[0].prix | number_format(2, ',', '')}}€</h5>
            <p>{{ produits[0].description }}</p>
            <a href=\"{{ path('produit', {'id' : produits[0].idProduit}) }}\" class=\"btn btn-outline-primary\">Voir le
              produit</a>
          </div>
        </div>
    </div>
    {% else %}
    {% for pdt in produits %}
    <div class=\"col-sm-4 mb-4\">
      <div class=\"thumbnail\">
        <a href=\"{{ path('produit', {'id' : pdt.idProduit}) }}\">
          <img src={{ asset('/photo/' ~ pdt.photo) }} alt=\"\" class=\"card-img-top\">
        </a>
        <div class=\"card-body\">
          <h4>{{ pdt.titre }}</h4>
          <h5>{{ pdt.prix | number_format(2, ',', '')}}€</h5>
          <p>{{ pdt.description }}</p>
          <a href=\"{{ path('produit', {'id' : pdt.idProduit}) }}\" class=\"btn btn-outline-primary\">Voir le produit</a>
        </div>
      </div>
    </div>
    {% endfor %}
    {% endif %}
  </div>
</div>
</div><!-- .row -->
{% endblock %}", "@Boutique/Produit/index.html.twig", "C:\\wamp64\\www\\Boutique3\\src\\BoutiqueBundle\\Resources\\views\\Produit\\index.html.twig");
    }
}
