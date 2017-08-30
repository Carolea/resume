<?php

/* layout_front.html.twig */
class __TwigTemplate_57938ac9c711a836442c21af8cc16269b8fdee5b19dea18c113cc17a20dbd815 extends Twig_Template
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
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
<head>
    

   <!--encodage de la page   -->
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
    
    <!--pour internet explorer: s'assurer qu'il utilise la dernière version du moteur de rendu -->
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    
    <!--affichage du site sans zoom, initialisé à 100%    -->
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    
    
    <!-- meta de référencement-->
    <meta name=\"description\" content=\"Portfolio en ligne\">
    <meta name=\"author\" content=\"Sk0tia\">
    <meta name=\"keywords\" content=\"responsive, bootstrap, portfolio\">
    
    <link rel=\"shortcut icon\" href=\"../web/images/favicon.ico\">
    
   <!-- titre de la page   -->
    <title>Carolea - ";
        // line 24
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    
    <!-- styles -->
    <!-- bootstrap CSS    -->  
    <link href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/lib/bootstrap-front/css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/lib/bootstrap-front/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <!-- style ajouté -->
    <link href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/css/accueil.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    
    
    <!-- Font -->    
<!--    <link href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/font/css/fontello.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href='http://fonts.googleapis.com/css?family=Droid+Sans:400,700' rel='stylesheet' type='text/css'>-->
    
    
</head>

<body>
   
    <!-------Animation de transition de page---------->
    <div class=\"menu active\">
      <div class=\"menu-up\"> </div>
      <div class=\"menu-down\"></div>
        
       
       <!----------------->
        <div class=\"site-wrapper\">

          <div class=\"site-wrapper-inner\">

            <div class=\"cover-container\">

              <div class=\"masthead clearfix\">
                <div class=\"inner\">
                  <h3 class=\"masthead-brand\">Carolea</h3>
                  <nav class=\"nav nav-masthead\">

                    <a class=\"nav-link button \" href=\"";
        // line 61
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home");
        echo "\">Accueil</a>
                    <a class=\"nav-link button\" href=\"";
        // line 62
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("loisir");
        echo "\">Compétences</a>
                    <a class=\"nav-link button\" href=\"";
        // line 63
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("portfolio");
        echo "\">Portfolio</a>
                    <a class=\"nav-link button\" href=\"";
        // line 64
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("contact");
        echo "\">Contact</a>
                  </nav>
                </div>
              </div>


    ";
        // line 70
        $this->displayBlock('content', $context, $blocks);
        // line 71
        echo " 
    

              <div class=\"mastfoot\">
                <div class=\"inner\">
                  <p ><a href=\"http://dzyngiri.com\">Mentions Légales</a> Copyright © 2017.</p>

                </div>
              </div>


            </div>

          </div>

        </div>

    </div>
    
    <!-- Scripts -->
    <script src=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("lib/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/lib/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/lib/bootstrap/js/diagonal.js"), "html", null, true);
        echo "\"></script>
    
   <script src=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("lib/bootstrap/js/console.image.min.js"), "html", null, true);
        echo "\"></script>
   <script>
    /*console.meme(\"Annnnd\", \"no bug.\", \"Aaand It's Gone\", 400, 300);*/
    </script>


</body>
</html>
";
    }

    // line 24
    public function block_title($context, array $blocks = array())
    {
    }

    // line 70
    public function block_content($context, array $blocks = array())
    {
        // line 71
        echo "    ";
    }

    public function getTemplateName()
    {
        return "layout_front.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  177 => 71,  174 => 70,  169 => 24,  156 => 95,  151 => 93,  147 => 92,  143 => 91,  121 => 71,  119 => 70,  110 => 64,  106 => 63,  102 => 62,  98 => 61,  69 => 35,  62 => 31,  57 => 29,  53 => 28,  46 => 24,  21 => 1,);
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
<html lang=\"fr\">
<head>
    

   <!--encodage de la page   -->
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
    
    <!--pour internet explorer: s'assurer qu'il utilise la dernière version du moteur de rendu -->
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    
    <!--affichage du site sans zoom, initialisé à 100%    -->
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    
    
    <!-- meta de référencement-->
    <meta name=\"description\" content=\"Portfolio en ligne\">
    <meta name=\"author\" content=\"Sk0tia\">
    <meta name=\"keywords\" content=\"responsive, bootstrap, portfolio\">
    
    <link rel=\"shortcut icon\" href=\"../web/images/favicon.ico\">
    
   <!-- titre de la page   -->
    <title>Carolea - {% block title %}{% endblock %}</title>
    
    <!-- styles -->
    <!-- bootstrap CSS    -->  
    <link href=\"{{ asset('/lib/bootstrap-front/css/bootstrap.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('/lib/bootstrap-front/css/bootstrap.min.css') }}\" rel=\"stylesheet\">
    <!-- style ajouté -->
    <link href=\"{{ asset('/css/accueil.css') }}\" rel=\"stylesheet\">
    
    
    <!-- Font -->    
<!--    <link href=\"{{ asset('/font/css/fontello.css') }}\" rel=\"stylesheet\">
    <link href='http://fonts.googleapis.com/css?family=Droid+Sans:400,700' rel='stylesheet' type='text/css'>-->
    
    
</head>

<body>
   
    <!-------Animation de transition de page---------->
    <div class=\"menu active\">
      <div class=\"menu-up\"> </div>
      <div class=\"menu-down\"></div>
        
       
       <!----------------->
        <div class=\"site-wrapper\">

          <div class=\"site-wrapper-inner\">

            <div class=\"cover-container\">

              <div class=\"masthead clearfix\">
                <div class=\"inner\">
                  <h3 class=\"masthead-brand\">Carolea</h3>
                  <nav class=\"nav nav-masthead\">

                    <a class=\"nav-link button \" href=\"{{ path('home') }}\">Accueil</a>
                    <a class=\"nav-link button\" href=\"{{ path('loisir') }}\">Compétences</a>
                    <a class=\"nav-link button\" href=\"{{ path('portfolio') }}\">Portfolio</a>
                    <a class=\"nav-link button\" href=\"{{ path('contact') }}\">Contact</a>
                  </nav>
                </div>
              </div>


    {% block content %}
    {% endblock %} 
    

              <div class=\"mastfoot\">
                <div class=\"inner\">
                  <p ><a href=\"http://dzyngiri.com\">Mentions Légales</a> Copyright © 2017.</p>

                </div>
              </div>


            </div>

          </div>

        </div>

    </div>
    
    <!-- Scripts -->
    <script src=\"{{ asset('lib/jquery/jquery.min.js') }}\"></script>
    <script src=\"{{ asset('/lib/bootstrap/js/bootstrap.min.js') }}\"></script>
    <script src=\"{{ asset('/lib/bootstrap/js/diagonal.js') }}\"></script>
    
   <script src=\"{{ asset('lib/bootstrap/js/console.image.min.js') }}\"></script>
   <script>
    /*console.meme(\"Annnnd\", \"no bug.\", \"Aaand It's Gone\", 400, 300);*/
    </script>


</body>
</html>
", "layout_front.html.twig", "C:\\xampp\\htdocs\\MicroCMS\\views\\layout_front.html.twig");
    }
}
