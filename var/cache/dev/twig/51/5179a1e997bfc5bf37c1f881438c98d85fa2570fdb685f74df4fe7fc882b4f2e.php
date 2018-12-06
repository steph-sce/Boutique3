<?php

/* @Boutique/Admin/commande_show.html.twig */
class __TwigTemplate_9317d6ac98acefe51c43c60e181f0d15b98f93905f51b378b510b90bae3783d4 extends Twig_Template
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
        <div class=\"col-sm-12 col-md-10 col-md-offset-1\">
            <table class=\"table table-hover\">
                <thead>
                    <tr>
                        <th>Product</th>
                        <th>Quantity</th>
                        <th class=\"text-center\">Price</th>
                        <th class=\"text-center\">Total</th>
                        <th> </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class=\"col-sm-8 col-md-6\">
                        <div class=\"media\">
                            <a class=\"thumbnail pull-left\" href=\"#\"> <img class=\"media-object\" src=\"http://icons.iconarchive.com/icons/custom-icon-design/flatastic-2/72/product-icon.png\" style=\"width: 72px; height: 72px;\"> </a>
                            <div class=\"media-body\">
                                <h4 class=\"media-heading\"><a href=\"#\">Product name</a></h4>
                                <h5 class=\"media-heading\"> by <a href=\"#\">Brand name</a></h5>
                                <span>Status: </span><span class=\"text-success\"><strong>In Stock</strong></span>
                            </div>
                        </div></td>
                        <td class=\"col-sm-1 col-md-1\" style=\"text-align: center\">
                        <input type=\"email\" class=\"form-control\" id=\"exampleInputEmail1\" value=\"3\">
                        </td>
                        <td class=\"col-sm-1 col-md-1 text-center\"><strong>\$4.87</strong></td>
                        <td class=\"col-sm-1 col-md-1 text-center\"><strong>\$14.61</strong></td>
                        <td class=\"col-sm-1 col-md-1\">
                        <button type=\"button\" class=\"btn btn-danger\">
                            <span class=\"glyphicon glyphicon-remove\"></span> Remove
                        </button></td>
                    </tr>
                    <tr>
                        <td class=\"col-md-6\">
                        <div class=\"media\">
                            <a class=\"thumbnail pull-left\" href=\"#\"> <img class=\"media-object\" src=\"http://icons.iconarchive.com/icons/custom-icon-design/flatastic-2/72/product-icon.png\" style=\"width: 72px; height: 72px;\"> </a>
                            <div class=\"media-body\">
                                <h4 class=\"media-heading\"><a href=\"#\">Product name</a></h4>
                                <h5 class=\"media-heading\"> by <a href=\"#\">Brand name</a></h5>
                                <span>Status: </span><span class=\"text-warning\"><strong>Leaves warehouse in 2 - 3 weeks</strong></span>
                            </div>
                        </div></td>
                        <td class=\"col-md-1\" style=\"text-align: center\">
                        <input type=\"email\" class=\"form-control\" id=\"exampleInputEmail1\" value=\"2\">
                        </td>
                        <td class=\"col-md-1 text-center\"><strong>\$4.99</strong></td>
                        <td class=\"col-md-1 text-center\"><strong>\$9.98</strong></td>
                        <td class=\"col-md-1\">
                        <button type=\"button\" class=\"btn btn-danger\">
                            <span class=\"glyphicon glyphicon-remove\"></span> Remove
                        </button></td>
                    </tr>
                    <tr>
                        <td>   </td>
                        <td>   </td>
                        <td>   </td>
                        <td><h5>Subtotal</h5></td>
                        <td class=\"text-right\"><h5><strong>\$24.59</strong></h5></td>
                    </tr>
                    <tr>
                        <td>   </td>
                        <td>   </td>
                        <td>   </td>
                        <td><h5>Estimated shipping</h5></td>
                        <td class=\"text-right\"><h5><strong>\$6.94</strong></h5></td>
                    </tr>
                    <tr>
                        <td>   </td>
                        <td>   </td>
                        <td>   </td>
                        <td><h3>Total</h3></td>
                        <td class=\"text-right\"><h3><strong>\$31.53</strong></h3></td>
                    </tr>
                    <tr>
                        <td>   </td>
                        <td>   </td>
                        <td>   </td>
                        <td>
                        <button type=\"button\" class=\"btn btn-default\">
                            <span class=\"glyphicon glyphicon-shopping-cart\"></span> Continue Shopping
                        </button></td>
                        <td>
                        <button type=\"button\" class=\"btn btn-success\">
                            Checkout <span class=\"glyphicon glyphicon-play\"></span>
                        </button></td>
                    </tr>
                </tbody>
            </table>
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
        return array (  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
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
        <div class=\"col-sm-12 col-md-10 col-md-offset-1\">
            <table class=\"table table-hover\">
                <thead>
                    <tr>
                        <th>Product</th>
                        <th>Quantity</th>
                        <th class=\"text-center\">Price</th>
                        <th class=\"text-center\">Total</th>
                        <th> </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class=\"col-sm-8 col-md-6\">
                        <div class=\"media\">
                            <a class=\"thumbnail pull-left\" href=\"#\"> <img class=\"media-object\" src=\"http://icons.iconarchive.com/icons/custom-icon-design/flatastic-2/72/product-icon.png\" style=\"width: 72px; height: 72px;\"> </a>
                            <div class=\"media-body\">
                                <h4 class=\"media-heading\"><a href=\"#\">Product name</a></h4>
                                <h5 class=\"media-heading\"> by <a href=\"#\">Brand name</a></h5>
                                <span>Status: </span><span class=\"text-success\"><strong>In Stock</strong></span>
                            </div>
                        </div></td>
                        <td class=\"col-sm-1 col-md-1\" style=\"text-align: center\">
                        <input type=\"email\" class=\"form-control\" id=\"exampleInputEmail1\" value=\"3\">
                        </td>
                        <td class=\"col-sm-1 col-md-1 text-center\"><strong>\$4.87</strong></td>
                        <td class=\"col-sm-1 col-md-1 text-center\"><strong>\$14.61</strong></td>
                        <td class=\"col-sm-1 col-md-1\">
                        <button type=\"button\" class=\"btn btn-danger\">
                            <span class=\"glyphicon glyphicon-remove\"></span> Remove
                        </button></td>
                    </tr>
                    <tr>
                        <td class=\"col-md-6\">
                        <div class=\"media\">
                            <a class=\"thumbnail pull-left\" href=\"#\"> <img class=\"media-object\" src=\"http://icons.iconarchive.com/icons/custom-icon-design/flatastic-2/72/product-icon.png\" style=\"width: 72px; height: 72px;\"> </a>
                            <div class=\"media-body\">
                                <h4 class=\"media-heading\"><a href=\"#\">Product name</a></h4>
                                <h5 class=\"media-heading\"> by <a href=\"#\">Brand name</a></h5>
                                <span>Status: </span><span class=\"text-warning\"><strong>Leaves warehouse in 2 - 3 weeks</strong></span>
                            </div>
                        </div></td>
                        <td class=\"col-md-1\" style=\"text-align: center\">
                        <input type=\"email\" class=\"form-control\" id=\"exampleInputEmail1\" value=\"2\">
                        </td>
                        <td class=\"col-md-1 text-center\"><strong>\$4.99</strong></td>
                        <td class=\"col-md-1 text-center\"><strong>\$9.98</strong></td>
                        <td class=\"col-md-1\">
                        <button type=\"button\" class=\"btn btn-danger\">
                            <span class=\"glyphicon glyphicon-remove\"></span> Remove
                        </button></td>
                    </tr>
                    <tr>
                        <td>   </td>
                        <td>   </td>
                        <td>   </td>
                        <td><h5>Subtotal</h5></td>
                        <td class=\"text-right\"><h5><strong>\$24.59</strong></h5></td>
                    </tr>
                    <tr>
                        <td>   </td>
                        <td>   </td>
                        <td>   </td>
                        <td><h5>Estimated shipping</h5></td>
                        <td class=\"text-right\"><h5><strong>\$6.94</strong></h5></td>
                    </tr>
                    <tr>
                        <td>   </td>
                        <td>   </td>
                        <td>   </td>
                        <td><h3>Total</h3></td>
                        <td class=\"text-right\"><h3><strong>\$31.53</strong></h3></td>
                    </tr>
                    <tr>
                        <td>   </td>
                        <td>   </td>
                        <td>   </td>
                        <td>
                        <button type=\"button\" class=\"btn btn-default\">
                            <span class=\"glyphicon glyphicon-shopping-cart\"></span> Continue Shopping
                        </button></td>
                        <td>
                        <button type=\"button\" class=\"btn btn-success\">
                            Checkout <span class=\"glyphicon glyphicon-play\"></span>
                        </button></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

{% endblock %}

", "@Boutique/Admin/commande_show.html.twig", "C:\\wamp64\\www\\Boutique3\\src\\BoutiqueBundle\\Resources\\views\\Admin\\commande_show.html.twig");
    }
}
