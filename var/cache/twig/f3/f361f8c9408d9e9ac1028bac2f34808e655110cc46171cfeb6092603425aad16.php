<?php

/* experience.html.twig */
class __TwigTemplate_fda1645e023ad62461db0734892ee7f7c0c9cee81c64e146ffda21b55ae83cd7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout_front.html.twig", "experience.html.twig", 1);
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
        echo "Compétences";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "  <h1>Experiences</h1>
  ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["experiences"]) ? $context["experiences"] : $this->getContext($context, "experiences")));
        foreach ($context['_seq'] as $context["_key"] => $context["experience"]) {
            // line 8
            echo "    <article>
        <h2><a class=\"articleTitle\" href=\"";
            // line 9
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("experience", array("id" => $this->getAttribute($context["experience"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["experience"], "title", array()), "html", null, true);
            echo "</a></h2>
        <p>";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($context["experience"], "content", array()), "html", null, true);
            echo "</p>
    </article>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['experience'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "
";
    }

    public function getTemplateName()
    {
        return "experience.html.twig";
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
        return new Twig_Source("{% extends \"layout_front.html.twig\" %}

{% block title %}Compétences{% endblock %}

{% block content %}
  <h1>Experiences</h1>
  {% for experience in experiences %}
    <article>
        <h2><a class=\"articleTitle\" href=\"{{ path('experience', { 'id': experience.id }) }}\">{{ experience.title }}</a></h2>
        <p>{{ experience.content }}</p>
    </article>
  {% endfor %}

{% endblock %}
", "experience.html.twig", "C:\\xampp\\htdocs\\MicroCMS\\views\\experience.html.twig");
    }
}
