<?php

/* layout.html.twig */
class __TwigTemplate_8d2113affc36479330e476a9617daef5340cbed3672e06d55ddce88d7507148c extends Twig_Template
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
  ";
        // line 47
        echo "  <nav class=\"navbar navbar-inverse\">
    <div class=\"container-fluid\">
      <div class=\"navbar-header\">
        <!-- La marque -->
        <a class=\"navbar-brand\" href=\"";
        // line 51
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("accueil");
        echo "\">MA BOUTIQUE</a>
      </div>
      <ul class=\"nav navbar-nav navbar-right\">
        <li><a class=\"nav-link\" href=\"";
        // line 54
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("produit_show");
        echo "\">Produit</a></li>
        <li><a class=\"nav-link\" href=\"";
        // line 55
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("membre_show");
        echo "\">Membre</a></li>
        <li><a class=\"nav-link\" href=\"";
        // line 56
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("commande_show");
        echo "\">Commande</a></li>
        <li><a class=\"nav-link\" href=\"\">Profil</a></li>
        <li><a class=\"nav-link\" href=\"\">Deconnexion</a></li>
        <li><a class=\"nav-link\" href=\"\">Connexion</a></li>
        <li><a class=\"nav-link\" href=\"\">Inscription</a></li>
      </ul>
    </div>
  </nav>
  <!-- Page Content -->
  <div class=\"container\" style=\"min-height: 80vh;\">
    <div class=\"row\">
      <div class=\"col-12\">
        <!-- ici le contenu spécifique de chaque page -->

        ";
        // line 70
        $this->displayBlock('content', $context, $blocks);
        // line 72
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

    // line 70
    public function block_content($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 71
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
        return array (  148 => 71,  139 => 70,  122 => 6,  94 => 72,  92 => 70,  75 => 56,  71 => 55,  67 => 54,  61 => 51,  55 => 47,  47 => 16,  34 => 6,  27 => 1,);
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
  {# <nav class=\"navbar navbar-expand-lg navbar-dark bg-dark\">
    <div class=\"container\">
      <!-- La marque -->
      <a class=\"navbar-brand\" href=\"{{ path('accueil') }}\">MA BOUTIQUE</a>

      <!-- Le burger -->
      <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#nav1\" aria-controls=\"navbarResponsive\"
        aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon\"></span>
      </button>

      <!-- Le menu -->
      <div class=\"collapse navbar-collapse\" id=\"nav1\">
        <ul class=\"navbar-nav ml-auto\">
          <li><a class=\"nav-link\" href=\"\">Boutique</a></li>
          <li><a class=\"nav-link\" href=\"{{ path('produit_show') }}\">Produit</a></li>
          <li><a class=\"nav-link\" href=\"{{ path('membre_show') }}\">Membre</a></li>
          <li><a class=\"nav-link\" href=\"{{ path('commande_show') }}\">Commande</a></li>
          <li><a class=\"nav-link\" href=\"\">Profil</a></li>
          <li><a class=\"nav-link\" href=\"\">Deconnexion</a></li>
          <li><a class=\"nav-link\" href=\"\">Connexion</a></li>
          <li><a class=\"nav-link\" href=\"\">Inscription</a></li>
        </ul>
      </div>
    </div>
  </nav> #}
  <nav class=\"navbar navbar-inverse\">
    <div class=\"container-fluid\">
      <div class=\"navbar-header\">
        <!-- La marque -->
        <a class=\"navbar-brand\" href=\"{{ path('accueil') }}\">MA BOUTIQUE</a>
      </div>
      <ul class=\"nav navbar-nav navbar-right\">
        <li><a class=\"nav-link\" href=\"{{ path('produit_show') }}\">Produit</a></li>
        <li><a class=\"nav-link\" href=\"{{ path('membre_show') }}\">Membre</a></li>
        <li><a class=\"nav-link\" href=\"{{ path('commande_show') }}\">Commande</a></li>
        <li><a class=\"nav-link\" href=\"\">Profil</a></li>
        <li><a class=\"nav-link\" href=\"\">Deconnexion</a></li>
        <li><a class=\"nav-link\" href=\"\">Connexion</a></li>
        <li><a class=\"nav-link\" href=\"\">Inscription</a></li>
      </ul>
    </div>
  </nav>
  <!-- Page Content -->
  <div class=\"container\" style=\"min-height: 80vh;\">
    <div class=\"row\">
      <div class=\"col-12\">
        <!-- ici le contenu spécifique de chaque page -->

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
