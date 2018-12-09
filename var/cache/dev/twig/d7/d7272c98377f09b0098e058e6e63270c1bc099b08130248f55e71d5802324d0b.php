<?php

/* @Boutique/Admin/membre_form.html.twig */
class __TwigTemplate_982ab1dc1d0f74b0ad9e2490c6c0ba95e6dec5a895ad3e020ded5b8c77fa81e2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "@Boutique/Admin/membre_form.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Boutique/Admin/membre_form.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Boutique/Admin/membre_form.html.twig"));

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
<h1>";
        // line 7
        echo twig_escape_filter($this->env, ($context["title"] ?? $this->getContext($context, "title")), "html", null, true);
        echo "</h1>

<form>
\t<div class=\"form-group\"> <!-- idMembre -->
\t\t<label for=\"full_name_id\" class=\"control-label\">idMembre</label>
\t\t<input type=\"text\" class=\"form-control\" id=\"full_name_id\" name=\"iMembre\" placeholder=\"idMembre\">
\t</div>\t

\t<div class=\"form-group\"> <!-- nom -->
\t\t<label for=\"street1_id\" class=\"control-label\">nom</label>
\t\t<input type=\"text\" class=\"form-control\" id=\"street1_id\" name=\"nom\" placeholder=\"nom\">
\t</div>\t\t\t\t\t
\t\t\t\t\t\t\t
\t<div class=\"form-group\"> <!-- prenom -->
\t\t<label for=\"street2_id\" class=\"control-label\">prenom</label>
\t\t<input type=\"text\" class=\"form-control\" id=\"street2_id\" name=\"prenom\" placeholder=\"prenom\">
\t</div>\t

\t<div class=\"form-group\"> <!-- email-->
\t\t<label for=\"city_id\" class=\"control-label\">email</label>
\t\t<input type=\"text\" class=\"form-control\" id=\"city_id\" name=\"email\" placeholder=\"email\">
\t</div>\t\t\t\t\t\t\t\t\t
\t\t
\t<div class=\"form-group\"> <!-- civilite-->
\t\t<label for=\"zip_id\" class=\"control-label\">civilite</label>
\t\t<input type=\"text\" class=\"form-control\" id=\"zip_id\" name=\"civilite\" placeholder=\"civilite\">
\t</div>\t\t
\t\t
\t<div class=\"form-group\"> <!-- ville-->
\t\t<label for=\"zip_id\" class=\"control-label\">ville</label>
\t\t<input type=\"text\" class=\"form-control\" id=\"zip_id\" name=\"ville\" placeholder=\"ville\">
\t</div>\t
  \t
\t<div class=\"form-group\"> <!-- codePostal-->
\t\t<label for=\"zip_id\" class=\"control-label\">codePostal</label>
\t\t<input type=\"text\" class=\"form-control\" id=\"zip_id\" name=\"codePostal\" placeholder=\"codePostal\">
\t</div>\t
  \t
\t<div class=\"form-group\"> <!-- adresse-->
\t\t<label for=\"zip_id\" class=\"control-label\">adresse</label>
\t\t<input type=\"text\" class=\"form-control\" id=\"zip_id\" name=\"addresse\" placeholder=\"adresse\">
\t</div>\t
  \t
\t<div class=\"form-group\"> <!-- statut-->
\t\t<label for=\"zip_id\" class=\"control-label\">statut</label>
\t\t<input type=\"text\" class=\"form-control\" id=\"zip_id\" name=\"statut\" placeholder=\"statut\">
\t</div>\t
  \t
\t<div class=\"form-group\"> <!-- password-->
\t\t<label for=\"zip_id\" class=\"control-label\">password</label>
\t\t<input type=\"text\" class=\"form-control\" id=\"zip_id\" name=\"password\" placeholder=\"password\">
\t</div>\t

\t<div class=\"form-group\"> <!-- Submit Button -->
\t\t<button type=\"submit\" class=\"btn btn-primary\">Ajouter</button>
\t\t<button type=\"submit\" class=\"btn btn-warning\">Modifier</button>
\t</div>     
\t
</form>\t\t\t

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Boutique/Admin/membre_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 7,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
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

<h1>{{title}}</h1>

<form>
\t<div class=\"form-group\"> <!-- idMembre -->
\t\t<label for=\"full_name_id\" class=\"control-label\">idMembre</label>
\t\t<input type=\"text\" class=\"form-control\" id=\"full_name_id\" name=\"iMembre\" placeholder=\"idMembre\">
\t</div>\t

\t<div class=\"form-group\"> <!-- nom -->
\t\t<label for=\"street1_id\" class=\"control-label\">nom</label>
\t\t<input type=\"text\" class=\"form-control\" id=\"street1_id\" name=\"nom\" placeholder=\"nom\">
\t</div>\t\t\t\t\t
\t\t\t\t\t\t\t
\t<div class=\"form-group\"> <!-- prenom -->
\t\t<label for=\"street2_id\" class=\"control-label\">prenom</label>
\t\t<input type=\"text\" class=\"form-control\" id=\"street2_id\" name=\"prenom\" placeholder=\"prenom\">
\t</div>\t

\t<div class=\"form-group\"> <!-- email-->
\t\t<label for=\"city_id\" class=\"control-label\">email</label>
\t\t<input type=\"text\" class=\"form-control\" id=\"city_id\" name=\"email\" placeholder=\"email\">
\t</div>\t\t\t\t\t\t\t\t\t
\t\t
\t<div class=\"form-group\"> <!-- civilite-->
\t\t<label for=\"zip_id\" class=\"control-label\">civilite</label>
\t\t<input type=\"text\" class=\"form-control\" id=\"zip_id\" name=\"civilite\" placeholder=\"civilite\">
\t</div>\t\t
\t\t
\t<div class=\"form-group\"> <!-- ville-->
\t\t<label for=\"zip_id\" class=\"control-label\">ville</label>
\t\t<input type=\"text\" class=\"form-control\" id=\"zip_id\" name=\"ville\" placeholder=\"ville\">
\t</div>\t
  \t
\t<div class=\"form-group\"> <!-- codePostal-->
\t\t<label for=\"zip_id\" class=\"control-label\">codePostal</label>
\t\t<input type=\"text\" class=\"form-control\" id=\"zip_id\" name=\"codePostal\" placeholder=\"codePostal\">
\t</div>\t
  \t
\t<div class=\"form-group\"> <!-- adresse-->
\t\t<label for=\"zip_id\" class=\"control-label\">adresse</label>
\t\t<input type=\"text\" class=\"form-control\" id=\"zip_id\" name=\"addresse\" placeholder=\"adresse\">
\t</div>\t
  \t
\t<div class=\"form-group\"> <!-- statut-->
\t\t<label for=\"zip_id\" class=\"control-label\">statut</label>
\t\t<input type=\"text\" class=\"form-control\" id=\"zip_id\" name=\"statut\" placeholder=\"statut\">
\t</div>\t
  \t
\t<div class=\"form-group\"> <!-- password-->
\t\t<label for=\"zip_id\" class=\"control-label\">password</label>
\t\t<input type=\"text\" class=\"form-control\" id=\"zip_id\" name=\"password\" placeholder=\"password\">
\t</div>\t

\t<div class=\"form-group\"> <!-- Submit Button -->
\t\t<button type=\"submit\" class=\"btn btn-primary\">Ajouter</button>
\t\t<button type=\"submit\" class=\"btn btn-warning\">Modifier</button>
\t</div>     
\t
</form>\t\t\t

{% endblock %}", "@Boutique/Admin/membre_form.html.twig", "C:\\wamp64\\www\\Boutique3\\src\\BoutiqueBundle\\Resources\\views\\Admin\\membre_form.html.twig");
    }
}
