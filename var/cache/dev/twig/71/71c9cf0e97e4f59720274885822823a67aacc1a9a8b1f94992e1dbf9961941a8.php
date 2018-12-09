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
      <div class=\"table-responsive\">
        <table id=\"mytable\" class=\"table table-bordred table-striped\">
          <thead>
            <th><input type=\"checkbox\" id=\"checkall\" /></th>
            <th>idCommande</th>
            <th>idMembre</th>
            <th>montant</th>
            <th>dateEnregistrement</th>
            <th>etat</th>
          </thead>
          <tbody>
            ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["commandes"] ?? $this->getContext($context, "commandes")));
        foreach ($context['_seq'] as $context["_key"] => $context["cmd"]) {
            // line 22
            echo "            <tr>
              <td><input type=\"checkbox\" class=\"checkthis\" /></td>
              <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["cmd"], "idCommande", array()), "html", null, true);
            echo "</td>
              <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["cmd"], "idMembre", array()), "html", null, true);
            echo "</td>
              <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["cmd"], "montant", array()), "html", null, true);
            echo "</td>
              <td>";
            // line 27
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["cmd"], "dateEnregistrement", array()), "Y-m-d"), "html", null, true);
            echo "</td>
              <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["cmd"], "etat", array()), "html", null, true);
            echo "</td>
              <td>
                <p data-placement=\"top\" data-toggle=\"tooltip\" title=\"Edit\"><button class=\"btn btn-primary btn-xs\"
                    data-title=\"Edit\" data-toggle=\"modal\" data-target=\"#edit\"><span class=\"glyphicon glyphicon-pencil\"></span></button></p>
              </td>
              <td>
                <p data-placement=\"top\" data-toggle=\"tooltip\" title=\"Delete\"><button class=\"btn btn-danger btn-xs\"
                    data-title=\"Delete\" data-toggle=\"modal\" data-target=\"#delete\"><span class=\"glyphicon glyphicon-trash\"></span></button></p>
              </td>
            </tr>
          </tbody>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cmd'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "
        </table>
        <div class=\"clearfix\"></div>
        ";
        // line 52
        echo "      </div>
    </div>
  </div>
</div>
<div class=\"modal fade\" id=\"edit\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"edit\" aria-hidden=\"true\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\"><span class=\"glyphicon glyphicon-remove\"
            aria-hidden=\"true\"></span></button>
        <h4 class=\"modal-title custom_align\" id=\"Heading\">Edit Your Detail</h4>
      </div>
      <div class=\"modal-body\">
        <div class=\"form-group\">
          <input class=\"form-control \" type=\"text\" placeholder=\"Mohsin\">
        </div>
        <div class=\"form-group\">
          <input class=\"form-control \" type=\"text\" placeholder=\"Irshad\">
        </div>
        <div class=\"form-group\">
          <textarea rows=\"2\" class=\"form-control\" placeholder=\"CB 106/107 Street # 11 Wah Cantt Islamabad Pakistan\"></textarea>
        </div>
      </div>
      <div class=\"modal-footer \">
        <button type=\"button\" class=\"btn btn-warning btn-lg\" style=\"width: 100%;\"><span class=\"glyphicon glyphicon-ok-sign\"></span> Update</button>
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<div class=\"modal fade\" id=\"delete\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"edit\" aria-hidden=\"true\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\"><span class=\"glyphicon glyphicon-remove\"
            aria-hidden=\"true\"></span></button>
        <h4 class=\"modal-title custom_align\" id=\"Heading\">Delete this entry</h4>
      </div>
      <div class=\"modal-body\">
        <div class=\"alert alert-danger\"><span class=\"glyphicon glyphicon-warning-sign\"></span> Are you sure you want to
          delete this Record?</div>
      </div>
      <div class=\"modal-footer \">
        <button type=\"button\" class=\"btn btn-success\"><span class=\"glyphicon glyphicon-ok-sign\"></span> Yes</button>
        <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\"><span class=\"glyphicon glyphicon-remove\"></span> No</button>
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
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
        return array (  132 => 52,  127 => 40,  109 => 28,  105 => 27,  101 => 26,  97 => 25,  93 => 24,  89 => 22,  85 => 21,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
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
      <div class=\"table-responsive\">
        <table id=\"mytable\" class=\"table table-bordred table-striped\">
          <thead>
            <th><input type=\"checkbox\" id=\"checkall\" /></th>
            <th>idCommande</th>
            <th>idMembre</th>
            <th>montant</th>
            <th>dateEnregistrement</th>
            <th>etat</th>
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
              <td>
                <p data-placement=\"top\" data-toggle=\"tooltip\" title=\"Edit\"><button class=\"btn btn-primary btn-xs\"
                    data-title=\"Edit\" data-toggle=\"modal\" data-target=\"#edit\"><span class=\"glyphicon glyphicon-pencil\"></span></button></p>
              </td>
              <td>
                <p data-placement=\"top\" data-toggle=\"tooltip\" title=\"Delete\"><button class=\"btn btn-danger btn-xs\"
                    data-title=\"Delete\" data-toggle=\"modal\" data-target=\"#delete\"><span class=\"glyphicon glyphicon-trash\"></span></button></p>
              </td>
            </tr>
          </tbody>
          {% endfor %}

        </table>
        <div class=\"clearfix\"></div>
        {# <ul class=\"pagination pull-right\">
          <li class=\"disabled\"><a href=\"#\"><span class=\"glyphicon glyphicon-chevron-left\"></span></a></li>
          <li class=\"active\"><a href=\"#\">1</a></li>
          <li><a href=\"#\">2</a></li>
          <li><a href=\"#\">3</a></li>
          <li><a href=\"#\">4</a></li>
          <li><a href=\"#\">5</a></li>
          <li><a href=\"#\"><span class=\"glyphicon glyphicon-chevron-right\"></span></a></li>
        </ul> #}
      </div>
    </div>
  </div>
</div>
<div class=\"modal fade\" id=\"edit\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"edit\" aria-hidden=\"true\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\"><span class=\"glyphicon glyphicon-remove\"
            aria-hidden=\"true\"></span></button>
        <h4 class=\"modal-title custom_align\" id=\"Heading\">Edit Your Detail</h4>
      </div>
      <div class=\"modal-body\">
        <div class=\"form-group\">
          <input class=\"form-control \" type=\"text\" placeholder=\"Mohsin\">
        </div>
        <div class=\"form-group\">
          <input class=\"form-control \" type=\"text\" placeholder=\"Irshad\">
        </div>
        <div class=\"form-group\">
          <textarea rows=\"2\" class=\"form-control\" placeholder=\"CB 106/107 Street # 11 Wah Cantt Islamabad Pakistan\"></textarea>
        </div>
      </div>
      <div class=\"modal-footer \">
        <button type=\"button\" class=\"btn btn-warning btn-lg\" style=\"width: 100%;\"><span class=\"glyphicon glyphicon-ok-sign\"></span> Update</button>
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<div class=\"modal fade\" id=\"delete\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"edit\" aria-hidden=\"true\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\"><span class=\"glyphicon glyphicon-remove\"
            aria-hidden=\"true\"></span></button>
        <h4 class=\"modal-title custom_align\" id=\"Heading\">Delete this entry</h4>
      </div>
      <div class=\"modal-body\">
        <div class=\"alert alert-danger\"><span class=\"glyphicon glyphicon-warning-sign\"></span> Are you sure you want to
          delete this Record?</div>
      </div>
      <div class=\"modal-footer \">
        <button type=\"button\" class=\"btn btn-success\"><span class=\"glyphicon glyphicon-ok-sign\"></span> Yes</button>
        <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\"><span class=\"glyphicon glyphicon-remove\"></span> No</button>
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>

{% endblock %}", "@Boutique/Admin/commande_show.html.twig", "C:\\wamp64\\www\\Boutique3\\src\\BoutiqueBundle\\Resources\\views\\Admin\\commande_show.html.twig");
    }
}
