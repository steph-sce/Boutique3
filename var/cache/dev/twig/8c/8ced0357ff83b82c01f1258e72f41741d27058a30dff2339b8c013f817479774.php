<?php

/* layout.html.twig */
class __TwigTemplate_f9234f7403ce83bbd3c9e03214deca422d4293a8134d57504648ce8d99426ef8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>

<head>
  <meta charset=\"utf-8\">
  <title>Ma Boutique - ";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
  <!-- Bootstrap Core CSS -->
  <link href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" rel=\"stylesheet\" id=\"bootstrap-css\">
  <!-- jQuery -->
  <script src=\"https://code.jquery.com/jquery-3.3.1.min.js\" integrity=\"sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=\"
    crossorigin=\"anonymous\"></script>
  <!-- Bootstrap Core JavaScript -->
  <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
  <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.5.0/css/all.css\" integrity=\"sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU\"
    crossorigin=\"anonymous\">
  <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/css/style.css"), "html", null, true);
        echo "\">
</head>

<body>
  <!-- Navigation -->
  <nav class=\"navbar navbar-inverse\">
    <div class=\"container-fluid\">
      <div class=\"navbar-header\">
        <!-- La marque -->
        <a class=\"navbar-brand\" href=\"";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("accueil");
        echo "\">MA BOUTIQUE</a>
      </div>
      <!-- Le menu -->
      <ul class=\"nav navbar-nav navbar-right\">
        <li><a class=\"nav-link\" href=\"";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("profil");
        echo "\">Profil</a></li>
        <li><a class=\"nav-link\" href=\"\">Deconnexion</a></li>
        <li><a class=\"nav-link\" href=\"";
        // line 31
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("connexion");
        echo "\">Connexion</a></li>
        <li><a class=\"nav-link\" href=\"";
        // line 32
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("inscription");
        echo "\">Inscription</a></li>
        </li>
        <ul class=\"nav navbar-nav navbar-right text-uppercase\">
          <!-- Visa drapdown-->
          <li class=\"dropdown\">
            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Admin <span class=\"caret\"></span></a>
            <ul class=\"dropdown-menu pull-left\" role=\"menu\">
              <li><a class=\"nav-link\" href=\"";
        // line 39
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("produit_show");
        echo "\">Gestion des produits</a></li>
              <li><a class=\"nav-link\" href=\"";
        // line 40
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("commande_show");
        echo "\">Gestion des commandes</a></li>
              <li><a class=\"nav-link\" href=\"";
        // line 41
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("membre_show");
        echo "\">Gestion des membres</a></li>
            </ul>
        </ul>
  </nav>
  <!-- Page Content -->
  <div class=\"container\" style=\"min-height: 80vh;\">
    <div class=\"row\">
      <div class=\"col-12\">
        <!-- ici le contenu spécifique de chaque page -->
        ";
        // line 50
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 51
            echo "          <div class=\"alert alert-success\">";
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "</div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "
        ";
        // line 54
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 55
            echo "          <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "</div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "
        ";
        // line 58
        $this->displayBlock('content', $context, $blocks);
        // line 60
        echo "
      </div><!-- .col-12  -->
    </div><!-- .row -->
  </div><!-- .container -->
  <!-- footer -->
  <div class=\"container\">
    <hr>
    <footer>
      <div class=\"row text-center\">
        <div class=\"col\">
          <p>Copyright &copy; Ma Boutique - 2018</p>
        </div>
      </div>
    </footer>

  </div><!-- .container -->
</body>

</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 58
    public function block_content($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 59
        echo "        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  193 => 59,  184 => 58,  167 => 6,  139 => 60,  137 => 58,  134 => 57,  125 => 55,  121 => 54,  118 => 53,  109 => 51,  105 => 50,  93 => 41,  89 => 40,  85 => 39,  75 => 32,  71 => 31,  66 => 29,  59 => 25,  47 => 16,  34 => 6,  27 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>

<head>
  <meta charset=\"utf-8\">
  <title>Ma Boutique - {% block title %}{% endblock %}</title>
  <!-- Bootstrap Core CSS -->
  <link href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" rel=\"stylesheet\" id=\"bootstrap-css\">
  <!-- jQuery -->
  <script src=\"https://code.jquery.com/jquery-3.3.1.min.js\" integrity=\"sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=\"
    crossorigin=\"anonymous\"></script>
  <!-- Bootstrap Core JavaScript -->
  <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
  <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.5.0/css/all.css\" integrity=\"sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU\"
    crossorigin=\"anonymous\">
  <link rel=\"stylesheet\" href=\"{{ asset('/css/style.css') }}\">
</head>

<body>
  <!-- Navigation -->
  <nav class=\"navbar navbar-inverse\">
    <div class=\"container-fluid\">
      <div class=\"navbar-header\">
        <!-- La marque -->
        <a class=\"navbar-brand\" href=\"{{ path('accueil') }}\">MA BOUTIQUE</a>
      </div>
      <!-- Le menu -->
      <ul class=\"nav navbar-nav navbar-right\">
        <li><a class=\"nav-link\" href=\"{{ path('profil') }}\">Profil</a></li>
        <li><a class=\"nav-link\" href=\"\">Deconnexion</a></li>
        <li><a class=\"nav-link\" href=\"{{ path('connexion') }}\">Connexion</a></li>
        <li><a class=\"nav-link\" href=\"{{ path('inscription') }}\">Inscription</a></li>
        </li>
        <ul class=\"nav navbar-nav navbar-right text-uppercase\">
          <!-- Visa drapdown-->
          <li class=\"dropdown\">
            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Admin <span class=\"caret\"></span></a>
            <ul class=\"dropdown-menu pull-left\" role=\"menu\">
              <li><a class=\"nav-link\" href=\"{{ path('produit_show') }}\">Gestion des produits</a></li>
              <li><a class=\"nav-link\" href=\"{{ path('commande_show') }}\">Gestion des commandes</a></li>
              <li><a class=\"nav-link\" href=\"{{ path('membre_show') }}\">Gestion des membres</a></li>
            </ul>
        </ul>
  </nav>
  <!-- Page Content -->
  <div class=\"container\" style=\"min-height: 80vh;\">
    <div class=\"row\">
      <div class=\"col-12\">
        <!-- ici le contenu spécifique de chaque page -->
        {% for message in app.session.flashbag.get('success') %}
          <div class=\"alert alert-success\">{{ message }}</div>
        {% endfor %}

        {% for message in app.session.flashbag.get('error') %}
          <div class=\"alert alert-danger\">{{ message }}</div>
        {% endfor %}

        {% block content %}
        {% endblock %}

      </div><!-- .col-12  -->
    </div><!-- .row -->
  </div><!-- .container -->
  <!-- footer -->
  <div class=\"container\">
    <hr>
    <footer>
      <div class=\"row text-center\">
        <div class=\"col\">
          <p>Copyright &copy; Ma Boutique - 2018</p>
        </div>
      </div>
    </footer>

  </div><!-- .container -->
</body>

</html>", "layout.html.twig", "C:\\wamp64\\www\\Boutique3\\app\\Resources\\views\\layout.html.twig");
    }
}
