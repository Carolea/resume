<?php

/* perso.html.twig */
class __TwigTemplate_fb405d369dd3f2456f5312bed4e126aabe6a6fa8c58c6bf242211b85a0cc52a9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "perso.html.twig", 1);
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Home";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "  <h1>Perso</h1>
  ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["persos"]) ? $context["persos"] : $this->getContext($context, "persos")));
        foreach ($context['_seq'] as $context["_key"] => $context["perso"]) {
            // line 8
            echo "    <article>
        <h2><a class=\"articleTitle\" href=\"";
            // line 9
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("perso", array("id" => $this->getAttribute($context["perso"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["perso"], "title", array()), "html", null, true);
            echo "</a></h2>
        <p>";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($context["perso"], "content", array()), "html", null, true);
            echo "</p>
    </article>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['perso'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "
";
    }

    public function getTemplateName()
    {
        return "perso.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 13,  54 => 10,  48 => 9,  45 => 8,  41 => 7,  38 => 6,  35 => 5,  29 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"layout.html.twig\" %}

{% block title %}Home{% endblock %}

{% block content %}
  <h1>Perso</h1>
  {% for perso in persos %}
    <article>
        <h2><a class=\"articleTitle\" href=\"{{ path('perso', { 'id': perso.id }) }}\">{{ perso.title }}</a></h2>
        <p>{{ perso.content }}</p>
    </article>
  {% endfor %}

{% endblock %}
", "perso.html.twig", "C:\\xampp\\htdocs\\MicroCMS\\views\\perso.html.twig");
    }
}
