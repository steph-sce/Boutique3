<?php

/* @Boutique/Admin/membre_show.html.twig */
class __TwigTemplate_74a070183e72e1b5f6579af190f41427d311d7f0a7fc8b964ecf384c5e9756df extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Boutique/Admin/membre_show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Boutique/Admin/membre_show.html.twig"));

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
\t<div class=\"row\">
\t\t<div class=\"col-md-12\">
\t\t\t<div class=\"table-responsive\">
\t\t\t\t<table id=\"mytable\" class=\"table table-bordred table-striped\">
\t\t\t\t\t<thead>
\t\t\t\t\t\t<th><input type=\"checkbox\" id=\"checkall\" /></th>
\t\t\t\t\t\t<th>Nom</th>
\t\t\t\t\t\t<th>Prénom</th>
\t\t\t\t\t\t<th>Adresse</th>
\t\t\t\t\t\t<th>Ville</th>
\t\t\t\t\t\t<th>Email</th>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody>
\t\t\t\t\t\t";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["membres"] ?? $this->getContext($context, "membres")));
        foreach ($context['_seq'] as $context["_key"] => $context["mb"]) {
            // line 22
            echo "\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td><input type=\"checkbox\" class=\"checkthis\" /></td>
\t\t\t\t\t\t\t<td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["mb"], "nom", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["mb"], "prenom", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["mb"], "adresse", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["mb"], "ville", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["mb"], "email", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<p data-placement=\"top\" data-toggle=\"tooltip\" title=\"Edit\"><button class=\"btn btn-primary btn-xs\" data-title=\"Edit\"
\t\t\t\t\t\t\t\t\t data-toggle=\"modal\" data-target=\"#edit\"><span class=\"glyphicon glyphicon-pencil\"></span></button></p>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<p data-placement=\"top\" data-toggle=\"tooltip\" title=\"Delete\"><button class=\"btn btn-danger btn-xs\" data-title=\"Delete\"
\t\t\t\t\t\t\t\t\t data-toggle=\"modal\" data-target=\"#delete\"><span class=\"glyphicon glyphicon-trash\"></span></button></p>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "\t\t\t\t\t</tbody>
\t\t\t\t</table>
\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t";
        // line 51
        echo "\t\t\t</div>
\t\t</div>
\t</div>
</div>
<div class=\"modal fade\" id=\"edit\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"edit\" aria-hidden=\"true\">
\t<div class=\"modal-dialog\">
\t\t<div class=\"modal-content\">
\t\t\t<div class=\"modal-header\">
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\"><span class=\"glyphicon glyphicon-remove\"
\t\t\t\t\t aria-hidden=\"true\"></span></button>
\t\t\t\t<h4 class=\"modal-title custom_align\" id=\"Heading\">Edit Your Detail</h4>
\t\t\t</div>
\t\t\t<div class=\"modal-body\">
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<input class=\"form-control \" type=\"text\" placeholder=\"Mohsin\">
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<input class=\"form-control \" type=\"text\" placeholder=\"Irshad\">
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<textarea rows=\"2\" class=\"form-control\" placeholder=\"CB 106/107 Street # 11 Wah Cantt Islamabad Pakistan\"></textarea>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"modal-footer \">
\t\t\t\t<button type=\"button\" class=\"btn btn-warning btn-lg\" style=\"width: 100%;\"><span class=\"glyphicon glyphicon-ok-sign\"></span> Update</button>
\t\t\t</div>
\t\t</div>
\t\t<!-- /.modal-content -->
\t</div>
\t<!-- /.modal-dialog -->
</div>
<div class=\"modal fade\" id=\"delete\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"edit\" aria-hidden=\"true\">
\t<div class=\"modal-dialog\">
\t\t<div class=\"modal-content\">
\t\t\t<div class=\"modal-header\">
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\"><span class=\"glyphicon glyphicon-remove\"
\t\t\t\t\t aria-hidden=\"true\"></span></button>
\t\t\t\t<h4 class=\"modal-title custom_align\" id=\"Heading\">Delete this entry</h4>
\t\t\t</div>
\t\t\t<div class=\"modal-body\">
\t\t\t\t<div class=\"alert alert-danger\"><span class=\"glyphicon glyphicon-warning-sign\"></span> Are you sure you want to
\t\t\t\t\tdelete this Record?</div>
\t\t\t</div>
\t\t\t<div class=\"modal-footer \">
\t\t\t\t<button type=\"button\" class=\"btn btn-success\"><span class=\"glyphicon glyphicon-ok-sign\"></span> Yes</button>
\t\t\t\t<button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\"><span class=\"glyphicon glyphicon-remove\"></span> No</button>
\t\t\t</div>
\t\t</div>
\t\t<!-- /.modal-content -->
\t</div>
\t<!-- /.modal-dialog -->
</div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  131 => 51,  126 => 39,  109 => 28,  105 => 27,  101 => 26,  97 => 25,  93 => 24,  89 => 22,  85 => 21,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
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
\t\t\t<div class=\"table-responsive\">
\t\t\t\t<table id=\"mytable\" class=\"table table-bordred table-striped\">
\t\t\t\t\t<thead>
\t\t\t\t\t\t<th><input type=\"checkbox\" id=\"checkall\" /></th>
\t\t\t\t\t\t<th>Nom</th>
\t\t\t\t\t\t<th>Prénom</th>
\t\t\t\t\t\t<th>Adresse</th>
\t\t\t\t\t\t<th>Ville</th>
\t\t\t\t\t\t<th>Email</th>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody>
\t\t\t\t\t\t{% for mb in membres %}
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td><input type=\"checkbox\" class=\"checkthis\" /></td>
\t\t\t\t\t\t\t<td>{{ mb.nom }}</td>
\t\t\t\t\t\t\t<td>{{ mb.prenom }}</td>
\t\t\t\t\t\t\t<td>{{ mb.adresse }}</td>
\t\t\t\t\t\t\t<td>{{ mb.ville }}</td>
\t\t\t\t\t\t\t<td>{{ mb.email }}</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<p data-placement=\"top\" data-toggle=\"tooltip\" title=\"Edit\"><button class=\"btn btn-primary btn-xs\" data-title=\"Edit\"
\t\t\t\t\t\t\t\t\t data-toggle=\"modal\" data-target=\"#edit\"><span class=\"glyphicon glyphicon-pencil\"></span></button></p>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<p data-placement=\"top\" data-toggle=\"tooltip\" title=\"Delete\"><button class=\"btn btn-danger btn-xs\" data-title=\"Delete\"
\t\t\t\t\t\t\t\t\t data-toggle=\"modal\" data-target=\"#delete\"><span class=\"glyphicon glyphicon-trash\"></span></button></p>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t</tbody>
\t\t\t\t</table>
\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t{# <ul class=\"pagination pull-right\">
\t\t\t\t\t<li class=\"disabled\"><a href=\"#\"><span class=\"glyphicon glyphicon-chevron-left\"></span></a></li>
\t\t\t\t\t<li class=\"active\"><a href=\"#\">1</a></li>
\t\t\t\t\t<li><a href=\"#\">2</a></li>
\t\t\t\t\t<li><a href=\"#\">3</a></li>
\t\t\t\t\t<li><a href=\"#\">4</a></li>
\t\t\t\t\t<li><a href=\"#\">5</a></li>
\t\t\t\t\t<li><a href=\"#\"><span class=\"glyphicon glyphicon-chevron-right\"></span></a></li>
\t\t\t\t</ul> #}
\t\t\t</div>
\t\t</div>
\t</div>
</div>
<div class=\"modal fade\" id=\"edit\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"edit\" aria-hidden=\"true\">
\t<div class=\"modal-dialog\">
\t\t<div class=\"modal-content\">
\t\t\t<div class=\"modal-header\">
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\"><span class=\"glyphicon glyphicon-remove\"
\t\t\t\t\t aria-hidden=\"true\"></span></button>
\t\t\t\t<h4 class=\"modal-title custom_align\" id=\"Heading\">Edit Your Detail</h4>
\t\t\t</div>
\t\t\t<div class=\"modal-body\">
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<input class=\"form-control \" type=\"text\" placeholder=\"Mohsin\">
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<input class=\"form-control \" type=\"text\" placeholder=\"Irshad\">
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<textarea rows=\"2\" class=\"form-control\" placeholder=\"CB 106/107 Street # 11 Wah Cantt Islamabad Pakistan\"></textarea>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"modal-footer \">
\t\t\t\t<button type=\"button\" class=\"btn btn-warning btn-lg\" style=\"width: 100%;\"><span class=\"glyphicon glyphicon-ok-sign\"></span> Update</button>
\t\t\t</div>
\t\t</div>
\t\t<!-- /.modal-content -->
\t</div>
\t<!-- /.modal-dialog -->
</div>
<div class=\"modal fade\" id=\"delete\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"edit\" aria-hidden=\"true\">
\t<div class=\"modal-dialog\">
\t\t<div class=\"modal-content\">
\t\t\t<div class=\"modal-header\">
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\"><span class=\"glyphicon glyphicon-remove\"
\t\t\t\t\t aria-hidden=\"true\"></span></button>
\t\t\t\t<h4 class=\"modal-title custom_align\" id=\"Heading\">Delete this entry</h4>
\t\t\t</div>
\t\t\t<div class=\"modal-body\">
\t\t\t\t<div class=\"alert alert-danger\"><span class=\"glyphicon glyphicon-warning-sign\"></span> Are you sure you want to
\t\t\t\t\tdelete this Record?</div>
\t\t\t</div>
\t\t\t<div class=\"modal-footer \">
\t\t\t\t<button type=\"button\" class=\"btn btn-success\"><span class=\"glyphicon glyphicon-ok-sign\"></span> Yes</button>
\t\t\t\t<button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\"><span class=\"glyphicon glyphicon-remove\"></span> No</button>
\t\t\t</div>
\t\t</div>
\t\t<!-- /.modal-content -->
\t</div>
\t<!-- /.modal-dialog -->
</div>

{% endblock %}", "@Boutique/Admin/membre_show.html.twig", "C:\\wamp64\\www\\Boutique3\\src\\BoutiqueBundle\\Resources\\views\\Admin\\membre_show.html.twig");
    }
}
