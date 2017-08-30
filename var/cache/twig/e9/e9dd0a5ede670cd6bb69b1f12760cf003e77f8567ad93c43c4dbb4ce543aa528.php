<?php

/* index.html.twig */
class __TwigTemplate_c1f93458835597c27f944d2b6d1bcc3f5828a942ba2f8013f2c3d564fc0a4610 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout_front.html.twig", "index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout_front.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Accueil
";
    }

    // line 6
    public function block_content($context, array $blocks = array())
    {
        // line 7
        echo "

<div class=\"inner cover\">
    <p></p>
    <h1 class=\"cover-heading\">Ambert Carole</h1>
    <p class=\"lead\">Développement &amp; Intégration Web</p>
    <p class=\"lead\">
    <a href=\"../web/images/CV_carole_a.pdf\" class=\"btn btn-lg btn-default\">Voir mon cv</a>
    </p>
</div>
<!-- social icons -->
<div class=\"social\">
  <ul class=\"social-icons\">
    <li><a href=\"https://www.linkedin.com/in/carole-ambert-63b051145/\" target=\"_blank\"><img src=\"images/li.png\" alt=\"linkedin\"></a></li>
    <li><a href=\"https://github.com/Carolea\" target=\"_blank\"><img src=\"images/gh.png\" alt=\"github\"></a></li>
<!-- <li><a href=\"#\" target=\"_blank\"><img src=\"images/tw.png\" alt=\"twitter\"></a></li> -->
  </ul>
</div>
<!-- /social icons -->



";
    }

    public function getTemplateName()
    {
        return "index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 7,  36 => 6,  29 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"layout_front.html.twig\" %}

{% block title %}Accueil
{% endblock %}

{% block content %}


<div class=\"inner cover\">
    <p></p>
    <h1 class=\"cover-heading\">Ambert Carole</h1>
    <p class=\"lead\">Développement &amp; Intégration Web</p>
    <p class=\"lead\">
    <a href=\"../web/images/CV_carole_a.pdf\" class=\"btn btn-lg btn-default\">Voir mon cv</a>
    </p>
</div>
<!-- social icons -->
<div class=\"social\">
  <ul class=\"social-icons\">
    <li><a href=\"https://www.linkedin.com/in/carole-ambert-63b051145/\" target=\"_blank\"><img src=\"images/li.png\" alt=\"linkedin\"></a></li>
    <li><a href=\"https://github.com/Carolea\" target=\"_blank\"><img src=\"images/gh.png\" alt=\"github\"></a></li>
<!-- <li><a href=\"#\" target=\"_blank\"><img src=\"images/tw.png\" alt=\"twitter\"></a></li> -->
  </ul>
</div>
<!-- /social icons -->



{% endblock %}
", "index.html.twig", "C:\\xampp\\htdocs\\MicroCMS\\views\\index.html.twig");
    }
}
