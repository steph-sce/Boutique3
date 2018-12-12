<?php

/* @Boutique/Admin/membre_show.html.twig */
class __TwigTemplate_41432b88dde4f96def337119443a309d986dd9b7410c8f989ac597faf0dc62e0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "@Boutique/Admin/membre_show.html.twig", 1);
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Boutique/Admin/membre_show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, ($context["title"] ?? $this->getContext($context, "title")), "html", null, true);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "<div class=\"container\">
\t<div class=\"row\">
\t\t<div class=\"col-md-12\">
    <a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("membre_add");
        echo "\">Ajouter un utilisateur</a>
\t\t\t<div class=\"table-responsive\">
\t\t\t\t<table id=\"mytable\" class=\"table table-bordred table-striped\">
\t\t\t\t\t<thead>
\t\t\t\t\t\t<th><input type=\"checkbox\" id=\"checkall\" /></th>
\t\t\t\t\t\t<th>Id du membre</th>
\t\t\t\t\t\t<th>Prénom - Nom</th>
\t\t\t\t\t\t<th>Email</th>
\t\t\t\t\t\t<th>Adresse</th>
\t\t\t\t\t\t<th>Statut</th>
\t\t\t\t\t\t<th colspan=\"3\">Actions</th>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody>
\t\t\t\t\t\t";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["membres"] ?? $this->getContext($context, "membres")));
        foreach ($context['_seq'] as $context["_key"] => $context["mb"]) {
            // line 23
            echo "\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td><input type=\"checkbox\" class=\"checkthis\" /></td>
\t\t\t\t\t\t\t<td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["mb"], "idMembre", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["mb"], "prenom", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["mb"], "nom", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["mb"], "email", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["mb"], "adresse", array()), "html", null, true);
            echo "</br>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["mb"], "codePostal", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["mb"], "ville", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["mb"], "statut", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t";
            // line 30
            if (($this->getAttribute($context["mb"], "statut", array()) == 1)) {
                // line 31
                echo "\t\t\t\t\t\t\t<td style=\"color:red\">ADMIN</td>
\t\t\t\t\t\t\t";
            } else {
                // line 33
                echo "\t\t\t\t\t\t\t<td style=\"color:green\">CLIENT</td>
\t\t\t\t\t\t\t";
            }
            // line 35
            echo "\t\t\t\t\t\t\t<td><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("membre_profil", array("id" => $this->getAttribute($context["mb"], "idMembre", array()))), "html", null, true);
            echo "\" target=\"_blank\"><i class=\"far fa-eye\"></i></a></td>
              <td><a href=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("membre_update", array("id" => $this->getAttribute($context["mb"], "idMembre", array()))), "html", null, true);
            echo "\" target=\"_blank\"><i class=\"far fa-edit\"></i></a></td>
              <td><a href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("membre_delete", array("id" => $this->getAttribute($context["mb"], "idMembre", array()))), "html", null, true);
            echo "\" target=\"_blank\"><i class=\"far fa-trash-alt\"></i></a></td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "\t\t\t\t\t</tbody>
\t\t\t\t</table>
\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
<div class=\"modal fade\" id=\"delete\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"edit\" aria-hidden=\"true\">
\t<div class=\"modal-dialog\">
\t\t<div class=\"modal-content\">
\t\t\t<div class=\"modal-header\">
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\"><span class=\"glyphicon glyphicon-remove\"
\t\t\t\t\t aria-hidden=\"true\"></span></button>
\t\t\t\t<h4 class=\"modal-title custom_align\" id=\"Heading\">Supprimer cet utilisateur</h4>
\t\t\t</div>
\t\t\t<div class=\"modal-body\">
\t\t\t\t<div class=\"alert alert-danger\"><span class=\"glyphicon glyphicon-warning-sign\"></span> Etes vous sur de vouloir supprimer cet utilisateur ?</div>
\t\t\t</div>
\t\t\t<div class=\"modal-footer \">
\t\t\t\t<button type=\"button\" class=\"btn btn-success\" data-dismiss=\"modal\"><span class=\"glyphicon glyphicon-ok-sign\"></span> Oui</button>
\t\t\t\t<button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\"><span class=\"glyphicon glyphicon-remove\"></span> Non</button>
\t\t\t</div>
\t\t</div>
\t\t<!-- /.modal-content -->
\t</div>
\t<!-- /.modal-dialog -->
</div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Boutique/Admin/membre_show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 40,  127 => 37,  123 => 36,  118 => 35,  114 => 33,  110 => 31,  108 => 30,  104 => 29,  96 => 28,  92 => 27,  86 => 26,  82 => 25,  78 => 23,  74 => 22,  58 => 9,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
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
\t<div class=\"row\">
\t\t<div class=\"col-md-12\">
    <a href=\"{{path('membre_add')}}\">Ajouter un utilisateur</a>
\t\t\t<div class=\"table-responsive\">
\t\t\t\t<table id=\"mytable\" class=\"table table-bordred table-striped\">
\t\t\t\t\t<thead>
\t\t\t\t\t\t<th><input type=\"checkbox\" id=\"checkall\" /></th>
\t\t\t\t\t\t<th>Id du membre</th>
\t\t\t\t\t\t<th>Prénom - Nom</th>
\t\t\t\t\t\t<th>Email</th>
\t\t\t\t\t\t<th>Adresse</th>
\t\t\t\t\t\t<th>Statut</th>
\t\t\t\t\t\t<th colspan=\"3\">Actions</th>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody>
\t\t\t\t\t\t{% for mb in membres %}
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td><input type=\"checkbox\" class=\"checkthis\" /></td>
\t\t\t\t\t\t\t<td>{{ mb.idMembre }}</td>
\t\t\t\t\t\t\t<td>{{ mb.prenom }} {{ mb.nom }}</td>
\t\t\t\t\t\t\t<td>{{ mb.email }}</td>
\t\t\t\t\t\t\t<td>{{ mb.adresse }}</br>{{ mb.codePostal }} {{ mb.ville }}</td>
\t\t\t\t\t\t\t<td>{{ mb.statut }}</td>
\t\t\t\t\t\t\t{% if mb.statut == 1%}
\t\t\t\t\t\t\t<td style=\"color:red\">ADMIN</td>
\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t<td style=\"color:green\">CLIENT</td>
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t<td><a href=\"{{ path('membre_profil', {'id': mb.idMembre})}}\" target=\"_blank\"><i class=\"far fa-eye\"></i></a></td>
              <td><a href=\"{{ path('membre_update', {'id': mb.idMembre})}}\" target=\"_blank\"><i class=\"far fa-edit\"></i></a></td>
              <td><a href=\"{{ path('membre_delete', {'id': mb.idMembre})}}\" target=\"_blank\"><i class=\"far fa-trash-alt\"></i></a></td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t</tbody>
\t\t\t\t</table>
\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
<div class=\"modal fade\" id=\"delete\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"edit\" aria-hidden=\"true\">
\t<div class=\"modal-dialog\">
\t\t<div class=\"modal-content\">
\t\t\t<div class=\"modal-header\">
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\"><span class=\"glyphicon glyphicon-remove\"
\t\t\t\t\t aria-hidden=\"true\"></span></button>
\t\t\t\t<h4 class=\"modal-title custom_align\" id=\"Heading\">Supprimer cet utilisateur</h4>
\t\t\t</div>
\t\t\t<div class=\"modal-body\">
\t\t\t\t<div class=\"alert alert-danger\"><span class=\"glyphicon glyphicon-warning-sign\"></span> Etes vous sur de vouloir supprimer cet utilisateur ?</div>
\t\t\t</div>
\t\t\t<div class=\"modal-footer \">
\t\t\t\t<button type=\"button\" class=\"btn btn-success\" data-dismiss=\"modal\"><span class=\"glyphicon glyphicon-ok-sign\"></span> Oui</button>
\t\t\t\t<button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\"><span class=\"glyphicon glyphicon-remove\"></span> Non</button>
\t\t\t</div>
\t\t</div>
\t\t<!-- /.modal-content -->
\t</div>
\t<!-- /.modal-dialog -->
</div>

{% endblock %}", "@Boutique/Admin/membre_show.html.twig", "C:\\wamp64\\www\\Boutique3\\src\\BoutiqueBundle\\Resources\\views\\Admin\\membre_show.html.twig");
    }
}
