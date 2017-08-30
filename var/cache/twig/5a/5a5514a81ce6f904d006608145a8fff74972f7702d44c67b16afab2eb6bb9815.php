<?php

/* portfolio.html.twig */
class __TwigTemplate_0718f535f2ed746d92cefadab5e424fe5ccff87fcf27b5ae1efc49a20e48c7f2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout_front.html.twig", "portfolio.html.twig", 1);
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
        echo "Portfolio";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "<!--  <h1>Portfolio</h1>-->
  ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["portfolios"]) ? $context["portfolios"] : $this->getContext($context, "portfolios")));
        foreach ($context['_seq'] as $context["_key"] => $context["portfolio"]) {
            // line 8
            echo "   
<div id=\"all\">
  <div id=\"allcontent\">
      <div id=\"maincontent\">
\t        <div class=\"portfolio\">
\t            <img src=\"http://www.claudiogomboli.com/lab/gallery/imgs/ecomm.jpg\" alt=\"Portfolio img\"><br>
\t            <span class=\"txt\">Portfolio . Site CV.</span>
\t            <div class=\"ombra\"></div>
\t        </div>
\t        <div class=\"portfolio\">
\t            <img src=\"http://www.claudiogomboli.com/lab/gallery/imgs/speaker.jpg\" alt=\"Portfolio img\"><br>
\t            <span class=\"txt\">Projet Collectif . Declic.</span>
\t            <div class=\"ombra\"></div>
\t        </div>
\t        <div class=\"portfolio\">
\t            <img src=\"http://www.claudiogomboli.com/lab/gallery/imgs/graph01.jpg\" alt=\"Portfolio img\"><br>
\t            <span class=\"txt\">Poster . Laperquisa Cinema . <a href=\"http://cargocollective.com/gomboli/Laperquisa-Cinema-Screening-Posters\" target=\"_blank\" title=\"see more\">see more</a>.</span>
\t            <div class=\"ombra\"></div>
\t        </div>
\t        <div class=\"portfolio\">
\t            <img src=\"http://www.claudiogomboli.com/lab/gallery/imgs/web01.jpg\" alt=\"Portfolio img\"><br>
\t            <span class=\"txt\">Alfa Romeo <a href=\"http://www.alfaromeo.com/carconfigurator/IT/159/index.html\" target=\"_blank\" title=\"Alfa Romeo\">Car Configurator</a> . <a href=\"http://wedoo.it\" target=\"_blank\" title=\"WEDOO\">@Wedoo</a>.</span>
\t            <div class=\"ombra\"></div>
\t        </div>
\t        <div class=\"portfolio\">
\t            <img src=\"http://www.claudiogomboli.com/lab/gallery/imgs/illu01.jpg\" alt=\"Portfolio img\"><br>
\t            <span class=\"txt\">Mac Book Air . Keynote Illustration</span>
\t            <div class=\"ombra\"></div>
\t        </div>
\t    </div>
\t  
\t</div>
</div>
   
   
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['portfolio'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "
";
    }

    public function getTemplateName()
    {
        return "portfolio.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 44,  45 => 8,  41 => 7,  38 => 6,  35 => 5,  29 => 3,  11 => 1,);
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

{% block title %}Portfolio{% endblock %}

{% block content %}
<!--  <h1>Portfolio</h1>-->
  {% for portfolio in portfolios %}
   
<div id=\"all\">
  <div id=\"allcontent\">
      <div id=\"maincontent\">
\t        <div class=\"portfolio\">
\t            <img src=\"http://www.claudiogomboli.com/lab/gallery/imgs/ecomm.jpg\" alt=\"Portfolio img\"><br>
\t            <span class=\"txt\">Portfolio . Site CV.</span>
\t            <div class=\"ombra\"></div>
\t        </div>
\t        <div class=\"portfolio\">
\t            <img src=\"http://www.claudiogomboli.com/lab/gallery/imgs/speaker.jpg\" alt=\"Portfolio img\"><br>
\t            <span class=\"txt\">Projet Collectif . Declic.</span>
\t            <div class=\"ombra\"></div>
\t        </div>
\t        <div class=\"portfolio\">
\t            <img src=\"http://www.claudiogomboli.com/lab/gallery/imgs/graph01.jpg\" alt=\"Portfolio img\"><br>
\t            <span class=\"txt\">Poster . Laperquisa Cinema . <a href=\"http://cargocollective.com/gomboli/Laperquisa-Cinema-Screening-Posters\" target=\"_blank\" title=\"see more\">see more</a>.</span>
\t            <div class=\"ombra\"></div>
\t        </div>
\t        <div class=\"portfolio\">
\t            <img src=\"http://www.claudiogomboli.com/lab/gallery/imgs/web01.jpg\" alt=\"Portfolio img\"><br>
\t            <span class=\"txt\">Alfa Romeo <a href=\"http://www.alfaromeo.com/carconfigurator/IT/159/index.html\" target=\"_blank\" title=\"Alfa Romeo\">Car Configurator</a> . <a href=\"http://wedoo.it\" target=\"_blank\" title=\"WEDOO\">@Wedoo</a>.</span>
\t            <div class=\"ombra\"></div>
\t        </div>
\t        <div class=\"portfolio\">
\t            <img src=\"http://www.claudiogomboli.com/lab/gallery/imgs/illu01.jpg\" alt=\"Portfolio img\"><br>
\t            <span class=\"txt\">Mac Book Air . Keynote Illustration</span>
\t            <div class=\"ombra\"></div>
\t        </div>
\t    </div>
\t  
\t</div>
</div>
   
   
  {% endfor %}

{% endblock %}", "portfolio.html.twig", "C:\\xampp\\htdocs\\MicroCMS\\views\\portfolio.html.twig");
    }
}
