<?php

/* contact.html.twig */
class __TwigTemplate_db682fc0695d3a2f1561bd81c78f42e2f6ed7145333556c0c3fd6a42b79613c3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout_front.html.twig", "contact.html.twig", 1);
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
        echo "Contact";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "
<div id=\"main\">
\t<h2>Contact me</h2>
\t<p>For queries about anything on this website, or for job quotations, please contact me using the contact form below or via <a href=\"mailto:email@email.com\">email</a>.</p>

\t<form action=\"#\" method=\"post\">
\t\t";
        // line 12
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
\t\t";
        // line 13
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "

\t\t<div>
\t\t\t";
        // line 16
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'label', array("label" => "Your name:"));
        echo "<br />

\t\t\t<div class='form-input'>
\t\t\t\t";
        // line 19
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'widget');
        echo "
\t\t\t\t";
        // line 20
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'errors');
        echo "
\t\t\t</div>
\t\t</div>

\t\t<div>
\t\t\t";
        // line 25
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'label', array("label" => "Your Email:"));
        echo "<br />

\t\t\t<div class='form-input'>
\t\t\t\t";
        // line 28
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'errors');
        echo "
\t\t\t\t";
        // line 29
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget');
        echo "
\t\t\t</div>
\t\t</div>

\t\t<div>
\t\t\t";
        // line 34
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "message", array()), 'label', array("label" => "Your Message:"));
        echo "<br />

\t\t\t<div class='form-textarea'>
\t\t\t\t";
        // line 37
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "message", array()), 'errors');
        echo "
\t\t\t\t";
        // line 38
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "message", array()), 'widget');
        echo "
\t\t\t</div>
\t\t</div>

\t\t<input type=\"submit\" name=\"submit\" />
\t\t";
        // line 43
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
\t</form>
</div>


";
    }

    public function getTemplateName()
    {
        return "contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 43,  102 => 38,  98 => 37,  92 => 34,  84 => 29,  80 => 28,  74 => 25,  66 => 20,  62 => 19,  56 => 16,  50 => 13,  46 => 12,  38 => 6,  35 => 5,  29 => 3,  11 => 1,);
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

{% block title %}Contact{% endblock %}

{% block content %}

<div id=\"main\">
\t<h2>Contact me</h2>
\t<p>For queries about anything on this website, or for job quotations, please contact me using the contact form below or via <a href=\"mailto:email@email.com\">email</a>.</p>

\t<form action=\"#\" method=\"post\">
\t\t{{ form_start(form) }}
\t\t{{ form_errors(form) }}

\t\t<div>
\t\t\t{{ form_label(form.name, 'Your name:') }}<br />

\t\t\t<div class='form-input'>
\t\t\t\t{{ form_widget(form.name) }}
\t\t\t\t{{ form_errors(form.name) }}
\t\t\t</div>
\t\t</div>

\t\t<div>
\t\t\t{{ form_label(form.email, 'Your Email:') }}<br />

\t\t\t<div class='form-input'>
\t\t\t\t{{ form_errors(form.email) }}
\t\t\t\t{{ form_widget(form.email) }}
\t\t\t</div>
\t\t</div>

\t\t<div>
\t\t\t{{ form_label(form.message, 'Your Message:') }}<br />

\t\t\t<div class='form-textarea'>
\t\t\t\t{{ form_errors(form.message) }}
\t\t\t\t{{ form_widget(form.message) }}
\t\t\t</div>
\t\t</div>

\t\t<input type=\"submit\" name=\"submit\" />
\t\t{{ form_end(form) }}
\t</form>
</div>


{% endblock %}", "contact.html.twig", "C:\\xampp\\htdocs\\MicroCMS\\views\\contact.html.twig");
    }
}
