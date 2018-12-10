<?php

/* @Boutique/Admin/commande_show.html.twig */
class __TwigTemplate_45ca6543ac15d5d3f14b4845ce78b81f63abb0c609d0fa6b3859fd102526b0aa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "@Boutique/Admin/commande_show.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Boutique/Admin/commande_show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Boutique/Admin/commande_show.html.twig"));

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
<div class=\"container\">
  <div class=\"row\">
    <div class=\"col-md-12\">
    <a href=\"";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("commande_add");
        echo "\">Ajouter une commande</a>
      <div class=\"table-responsive\">
        <table id=\"mytable\" class=\"table table-bordred table-striped\">
          <thead>
            <th><input type=\"checkbox\" id=\"checkall\" /></th>
            <th>ID commande</th>
            <th>ID membre</th>
            <th>Montant</th>
            <th>Date d'enregistrement</th>
            <th>Etat</th>
          </thead>
          <tbody>
            ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["commandes"] ?? $this->getContext($context, "commandes")));
        foreach ($context['_seq'] as $context["_key"] => $context["cmd"]) {
            // line 23
            echo "            <tr>
              <td><input type=\"checkbox\" class=\"checkthis\" /></td>
              <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["cmd"], "idCommande", array()), "html", null, true);
            echo "</td>
              <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["cmd"], "idMembre", array()), "html", null, true);
            echo "</td>
              <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["cmd"], "montant", array()), "html", null, true);
            echo "</td>
              <td>";
            // line 28
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["cmd"], "dateEnregistrement", array()), "Y-m-d"), "html", null, true);
            echo "</td>
              <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["cmd"], "etat", array()), "html", null, true);
            echo "</td>
              <td><a href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("commande_update", array("id" => $this->getAttribute($context["cmd"], "idCommande", array()))), "html", null, true);
            echo "\" target=\"_blank\"><i class=\"far fa-edit\"></i></a></td>
              <td><a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("commande_delete", array("id" => $this->getAttribute($context["cmd"], "idCommande", array()))), "html", null, true);
            echo "\" target=\"_blank\"><i class=\"far fa-trash-alt\"></i></a></td>
            </tr>
          </tbody>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cmd'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "
        </table>
      </div>
    </div>
  </div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Boutique/Admin/commande_show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 35,  121 => 31,  117 => 30,  113 => 29,  109 => 28,  105 => 27,  101 => 26,  97 => 25,  93 => 23,  89 => 22,  74 => 10,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
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

<div class=\"container\">
  <div class=\"row\">
    <div class=\"col-md-12\">
    <a href=\"{{path('commande_add')}}\">Ajouter une commande</a>
      <div class=\"table-responsive\">
        <table id=\"mytable\" class=\"table table-bordred table-striped\">
          <thead>
            <th><input type=\"checkbox\" id=\"checkall\" /></th>
            <th>ID commande</th>
            <th>ID membre</th>
            <th>Montant</th>
            <th>Date d'enregistrement</th>
            <th>Etat</th>
          </thead>
          <tbody>
            {% for cmd in commandes %}
            <tr>
              <td><input type=\"checkbox\" class=\"checkthis\" /></td>
              <td>{{ cmd.idCommande }}</td>
              <td>{{ cmd.idMembre }}</td>
              <td>{{ cmd.montant }}</td>
              <td>{{ cmd.dateEnregistrement|date('Y-m-d') }}</td>
              <td>{{ cmd.etat }}</td>
              <td><a href=\"{{ path('commande_update', {'id': cmd.idCommande})}}\" target=\"_blank\"><i class=\"far fa-edit\"></i></a></td>
              <td><a href=\"{{ path('commande_delete', {'id': cmd.idCommande})}}\" target=\"_blank\"><i class=\"far fa-trash-alt\"></i></a></td>
            </tr>
          </tbody>
          {% endfor %}

        </table>
      </div>
    </div>
  </div>
</div>
{% endblock %}", "@Boutique/Admin/commande_show.html.twig", "C:\\wamp64\\www\\Boutique3\\src\\BoutiqueBundle\\Resources\\views\\Admin\\commande_show.html.twig");
    }
}
