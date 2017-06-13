<?php

/* SitephysPhysmvcBundle::layout.html.twig */
class __TwigTemplate_aa1ab5e849c627b2efcc3c84ad1d35b022f10f4c5ea2d3ae2a178da2db81c8fe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'menu' => array($this, 'block_menu'),
            'sitephysphysmvc_section' => array($this, 'block_sitephysphysmvc_section'),
            'sitephysphysmvc_image' => array($this, 'block_sitephysphysmvc_image'),
            'sitephysphysmvc_body' => array($this, 'block_sitephysphysmvc_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e3bfdb7984078ed3d16ae935fc1ef48e1b3f45a68843bb6ccd757b0c6df5cf60 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3bfdb7984078ed3d16ae935fc1ef48e1b3f45a68843bb6ccd757b0c6df5cf60->enter($__internal_e3bfdb7984078ed3d16ae935fc1ef48e1b3f45a68843bb6ccd757b0c6df5cf60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SitephysPhysmvcBundle::layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>

  <head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <title>
      ";
        // line 8
        $this->displayBlock('title', $context, $blocks);
        // line 11
        echo "    </title>
    ";
        // line 12
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 19
        echo "  </head>

  <body>
  ";
        // line 22
        $this->displayBlock('menu', $context, $blocks);
        // line 36
        echo "
    <br />
    <div id=\"ho\">Méthodes et langages orientés objet pour la physique</div>
    <br />

    ";
        // line 41
        $this->displayBlock('sitephysphysmvc_section', $context, $blocks);
        // line 43
        echo "    
    <br />

    ";
        // line 46
        $this->displayBlock('sitephysphysmvc_image', $context, $blocks);
        // line 48
        echo "
    <br /><br />
 
    ";
        // line 51
        $this->displayBlock('sitephysphysmvc_body', $context, $blocks);
        // line 53
        echo "
    <br />

    ";
        // line 56
        $this->displayBlock('javascripts', $context, $blocks);
        // line 64
        echo "
  </body>
  
</html>
";
        
        $__internal_e3bfdb7984078ed3d16ae935fc1ef48e1b3f45a68843bb6ccd757b0c6df5cf60->leave($__internal_e3bfdb7984078ed3d16ae935fc1ef48e1b3f45a68843bb6ccd757b0c6df5cf60_prof);

    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        $__internal_3dbde0977a95d7299a68893bdf4297465f3a93e2f43d5896d6e609015be068d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3dbde0977a95d7299a68893bdf4297465f3a93e2f43d5896d6e609015be068d0->enter($__internal_3dbde0977a95d7299a68893bdf4297465f3a93e2f43d5896d6e609015be068d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 9
        echo "         Eléments de physique en méthodes et langages orientés objet 
      ";
        
        $__internal_3dbde0977a95d7299a68893bdf4297465f3a93e2f43d5896d6e609015be068d0->leave($__internal_3dbde0977a95d7299a68893bdf4297465f3a93e2f43d5896d6e609015be068d0_prof);

    }

    // line 12
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e7a982be6cc798de4b92e642c70098137136616f2541dbeb79ac0ba6fe9aa1d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7a982be6cc798de4b92e642c70098137136616f2541dbeb79ac0ba6fe9aa1d5->enter($__internal_e7a982be6cc798de4b92e642c70098137136616f2541dbeb79ac0ba6fe9aa1d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 13
        echo "      ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "3d7c08b_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_3d7c08b_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/3d7c08b_main_1.css");
            // line 16
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 16, $this->getSourceContext()); })()), "html", null, true);
            echo "\" type=\"text/css\" />
      ";
            // asset "3d7c08b_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_3d7c08b_1") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/3d7c08b_bootstrap_2.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 16, $this->getSourceContext()); })()), "html", null, true);
            echo "\" type=\"text/css\" />
      ";
        } else {
            // asset "3d7c08b"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_3d7c08b") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/3d7c08b.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 16, $this->getSourceContext()); })()), "html", null, true);
            echo "\" type=\"text/css\" />
      ";
        }
        unset($context["asset_url"]);
        // line 18
        echo "    ";
        
        $__internal_e7a982be6cc798de4b92e642c70098137136616f2541dbeb79ac0ba6fe9aa1d5->leave($__internal_e7a982be6cc798de4b92e642c70098137136616f2541dbeb79ac0ba6fe9aa1d5_prof);

    }

    // line 22
    public function block_menu($context, array $blocks = array())
    {
        $__internal_1b8d330c531cef4f6c404f0360d29cd7e679cc43a4ec38bbca3c1a84fceed54e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b8d330c531cef4f6c404f0360d29cd7e679cc43a4ec38bbca3c1a84fceed54e->enter($__internal_1b8d330c531cef4f6c404f0360d29cd7e679cc43a4ec38bbca3c1a84fceed54e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 23
        echo "    <div id=\"menu_nav\">
      <ul class=\"menu cf\">
        <li><a href=\"";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sitephys_physmvc_home");
        echo "\">Accueil</a></li>
        <li><a href=\"";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sitephys_physmvc_topic");
        echo "\">Thèmes</a></li>
        <li><a href=\"";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sitephys_physmvc_symbolization");
        echo "\">Niveaux</a></li>
        <li><a href=\"";
        // line 28
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sitephys_physmvc_edition");
        echo "\">Edition</a></li>
        <li><a href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/login"), "html", null, true);
        echo "\"> ";
        if (array_key_exists("userconnect", $context)) {
            echo " ";
            echo twig_escape_filter($this->env, (isset($context["userconnect"]) || array_key_exists("userconnect", $context) ? $context["userconnect"] : (function () { throw new Twig_Error_Runtime('Variable "userconnect" does not exist.', 29, $this->getSourceContext()); })()), "html", null, true);
            echo " ";
        } else {
            echo " ";
            echo "Connexion";
            echo " ";
        }
        echo " </a></li>
        <li><a href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/logout"), "html", null, true);
        echo "\">Déconnexion</a></li>
        <li><a href=\"";
        // line 31
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sitephys_user_account");
        echo "\">Compte</a></li>
        <li><a href=\"";
        // line 32
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sitephys_physmvc_links");
        echo "\">Liens</a></li>
      </ul>
    </div>
  ";
        
        $__internal_1b8d330c531cef4f6c404f0360d29cd7e679cc43a4ec38bbca3c1a84fceed54e->leave($__internal_1b8d330c531cef4f6c404f0360d29cd7e679cc43a4ec38bbca3c1a84fceed54e_prof);

    }

    // line 41
    public function block_sitephysphysmvc_section($context, array $blocks = array())
    {
        $__internal_283d668acacddc19b59eacce1c773d8fa4889feea754447e0716dec3d7819cd7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_283d668acacddc19b59eacce1c773d8fa4889feea754447e0716dec3d7819cd7->enter($__internal_283d668acacddc19b59eacce1c773d8fa4889feea754447e0716dec3d7819cd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sitephysphysmvc_section"));

        // line 42
        echo "    ";
        
        $__internal_283d668acacddc19b59eacce1c773d8fa4889feea754447e0716dec3d7819cd7->leave($__internal_283d668acacddc19b59eacce1c773d8fa4889feea754447e0716dec3d7819cd7_prof);

    }

    // line 46
    public function block_sitephysphysmvc_image($context, array $blocks = array())
    {
        $__internal_19c687b89e04da18ac0c7667a256e5bf5e048771bdb00180bf1b06d9b2345faf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19c687b89e04da18ac0c7667a256e5bf5e048771bdb00180bf1b06d9b2345faf->enter($__internal_19c687b89e04da18ac0c7667a256e5bf5e048771bdb00180bf1b06d9b2345faf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sitephysphysmvc_image"));

        // line 47
        echo "    ";
        
        $__internal_19c687b89e04da18ac0c7667a256e5bf5e048771bdb00180bf1b06d9b2345faf->leave($__internal_19c687b89e04da18ac0c7667a256e5bf5e048771bdb00180bf1b06d9b2345faf_prof);

    }

    // line 51
    public function block_sitephysphysmvc_body($context, array $blocks = array())
    {
        $__internal_4de09271126fa6d01904b23e5fdcf3716e2c3e03986b4dd7399bed9c18cf8778 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4de09271126fa6d01904b23e5fdcf3716e2c3e03986b4dd7399bed9c18cf8778->enter($__internal_4de09271126fa6d01904b23e5fdcf3716e2c3e03986b4dd7399bed9c18cf8778_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sitephysphysmvc_body"));

        // line 52
        echo "    ";
        
        $__internal_4de09271126fa6d01904b23e5fdcf3716e2c3e03986b4dd7399bed9c18cf8778->leave($__internal_4de09271126fa6d01904b23e5fdcf3716e2c3e03986b4dd7399bed9c18cf8778_prof);

    }

    // line 56
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_43c8b3aa1b289210d326cb776942834071439b7f4f211e1768f15d8f944a764f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43c8b3aa1b289210d326cb776942834071439b7f4f211e1768f15d8f944a764f->enter($__internal_43c8b3aa1b289210d326cb776942834071439b7f4f211e1768f15d8f944a764f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 57
        echo "      ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "8a04782_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_8a04782_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/8a04782_jquery-3.1.1.min_1.js");
            // line 61
            echo "        <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 61, $this->getSourceContext()); })()), "html", null, true);
            echo "\"></script>
      ";
            // asset "8a04782_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_8a04782_1") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/8a04782_main_2.js");
            echo "        <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 61, $this->getSourceContext()); })()), "html", null, true);
            echo "\"></script>
      ";
            // asset "8a04782_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_8a04782_2") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/8a04782_bootstrap_3.js");
            echo "        <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 61, $this->getSourceContext()); })()), "html", null, true);
            echo "\"></script>
      ";
        } else {
            // asset "8a04782"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_8a04782") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/8a04782.js");
            echo "        <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 61, $this->getSourceContext()); })()), "html", null, true);
            echo "\"></script>
      ";
        }
        unset($context["asset_url"]);
        // line 63
        echo "    ";
        
        $__internal_43c8b3aa1b289210d326cb776942834071439b7f4f211e1768f15d8f944a764f->leave($__internal_43c8b3aa1b289210d326cb776942834071439b7f4f211e1768f15d8f944a764f_prof);

    }

    public function getTemplateName()
    {
        return "SitephysPhysmvcBundle::layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  280 => 63,  254 => 61,  249 => 57,  243 => 56,  236 => 52,  230 => 51,  223 => 47,  217 => 46,  210 => 42,  204 => 41,  193 => 32,  189 => 31,  185 => 30,  171 => 29,  167 => 28,  163 => 27,  159 => 26,  155 => 25,  151 => 23,  145 => 22,  138 => 18,  118 => 16,  113 => 13,  107 => 12,  99 => 9,  93 => 8,  82 => 64,  80 => 56,  75 => 53,  73 => 51,  68 => 48,  66 => 46,  61 => 43,  59 => 41,  52 => 36,  50 => 22,  45 => 19,  43 => 12,  40 => 11,  38 => 8,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>

  <head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <title>
      {% block title %}
         Eléments de physique en méthodes et langages orientés objet 
      {% endblock %}
    </title>
    {% block stylesheets %}
      {% stylesheets filter='?cssrewrite, ?scssphp' 
        'bundles/sitephysphysmvc/css/main.css' 
        'bundles/sitephysphysmvc/css/bootstrap.css' %}
        <link rel=\"stylesheet\" href=\"{{ asset_url }}\" type=\"text/css\" />
      {% endstylesheets %}
    {% endblock %}
  </head>

  <body>
  {% block menu %}
    <div id=\"menu_nav\">
      <ul class=\"menu cf\">
        <li><a href=\"{{ path('sitephys_physmvc_home') }}\">Accueil</a></li>
        <li><a href=\"{{ path('sitephys_physmvc_topic') }}\">Thèmes</a></li>
        <li><a href=\"{{ path('sitephys_physmvc_symbolization') }}\">Niveaux</a></li>
        <li><a href=\"{{ path('sitephys_physmvc_edition') }}\">Edition</a></li>
        <li><a href=\"{{ asset('/login') }}\"> {% if userconnect is defined %} {{ userconnect }} {% else %} {{ \"Connexion\" }} {% endif %} </a></li>
        <li><a href=\"{{ asset('/logout') }}\">Déconnexion</a></li>
        <li><a href=\"{{ path('sitephys_user_account') }}\">Compte</a></li>
        <li><a href=\"{{ path('sitephys_physmvc_links') }}\">Liens</a></li>
      </ul>
    </div>
  {% endblock %}

    <br />
    <div id=\"ho\">Méthodes et langages orientés objet pour la physique</div>
    <br />

    {% block sitephysphysmvc_section %}
    {% endblock %}
    
    <br />

    {% block sitephysphysmvc_image %}
    {% endblock %}

    <br /><br />
 
    {% block sitephysphysmvc_body %}
    {% endblock %}

    <br />

    {% block javascripts %}
      {% javascripts filter='?jsqueeze'
        'bundles/sitephysphysmvc/js/jquery-3.1.1.min.js' 
        'bundles/sitephysphysmvc/js/main.js' 
        'bundles/sitephysphysmvc/js/bootstrap.js' %}
        <script type=\"text/javascript\" src=\"{{ asset_url }}\"></script>
      {% endjavascripts %}
    {% endblock %}

  </body>
  
</html>
", "SitephysPhysmvcBundle::layout.html.twig", "C:\\xampp\\physmvc\\src\\Sitephys\\PhysmvcBundle/Resources/views/layout.html.twig");
    }
}
