<?php

/* SitephysUserBundle::layoutuser.html.twig */
class __TwigTemplate_6f0cdda0cb4df696835ef6d79a4a56cc1c1c0650875ab4ccd5525f53ab8a2d7a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'menu' => array($this, 'block_menu'),
            'sitephysuser_section' => array($this, 'block_sitephysuser_section'),
            'sitephysuser_image' => array($this, 'block_sitephysuser_image'),
            'sitephysuser_body' => array($this, 'block_sitephysuser_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
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
    <div id=\"ho\">Méthodes et langage objet pour la physique - utilisateurs</div>
    <br />

    ";
        // line 41
        $this->displayBlock('sitephysuser_section', $context, $blocks);
        // line 43
        echo "    
    <br />

    ";
        // line 46
        $this->displayBlock('sitephysuser_image', $context, $blocks);
        // line 48
        echo "
    <p></p><br /><br />
 
    ";
        // line 51
        $this->displayBlock('sitephysuser_body', $context, $blocks);
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
    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        // line 9
        echo "         Gestion des utilisateurs 
      ";
    }

    // line 12
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 13
        echo "      ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "3d7c08b_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_3d7c08b_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/3d7c08b_main_1.css");
            // line 16
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? null), "html", null, true);
            echo "\" type=\"text/css\" />
      ";
            // asset "3d7c08b_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_3d7c08b_1") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/3d7c08b_bootstrap_2.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? null), "html", null, true);
            echo "\" type=\"text/css\" />
      ";
        } else {
            // asset "3d7c08b"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_3d7c08b") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/3d7c08b.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? null), "html", null, true);
            echo "\" type=\"text/css\" />
      ";
        }
        unset($context["asset_url"]);
        // line 18
        echo "    ";
    }

    // line 22
    public function block_menu($context, array $blocks = array())
    {
        // line 23
        echo "      <div id=\"menu_nav\">
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
            echo twig_escape_filter($this->env, ($context["userconnect"] ?? null), "html", null, true);
            echo " ";
        } else {
            echo " ";
            echo "Connexion";
            echo " ";
        }
        echo "</a></li>
          <li><a href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("../logout"), "html", null, true);
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
    }

    // line 41
    public function block_sitephysuser_section($context, array $blocks = array())
    {
        // line 42
        echo "    ";
    }

    // line 46
    public function block_sitephysuser_image($context, array $blocks = array())
    {
        // line 47
        echo "    ";
    }

    // line 51
    public function block_sitephysuser_body($context, array $blocks = array())
    {
        // line 52
        echo "    ";
    }

    // line 56
    public function block_javascripts($context, array $blocks = array())
    {
        // line 57
        echo "      ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "8a04782_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_8a04782_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/8a04782_jquery-3.1.1.min_1.js");
            // line 61
            echo "        <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? null), "html", null, true);
            echo "\"></script>
      ";
            // asset "8a04782_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_8a04782_1") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/8a04782_main_2.js");
            echo "        <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? null), "html", null, true);
            echo "\"></script>
      ";
            // asset "8a04782_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_8a04782_2") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/8a04782_bootstrap_3.js");
            echo "        <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? null), "html", null, true);
            echo "\"></script>
      ";
        } else {
            // asset "8a04782"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_8a04782") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/8a04782.js");
            echo "        <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? null), "html", null, true);
            echo "\"></script>
      ";
        }
        unset($context["asset_url"]);
        // line 63
        echo "    ";
    }

    public function getTemplateName()
    {
        return "SitephysUserBundle::layoutuser.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  235 => 63,  209 => 61,  204 => 57,  201 => 56,  197 => 52,  194 => 51,  190 => 47,  187 => 46,  183 => 42,  180 => 41,  172 => 32,  168 => 31,  164 => 30,  150 => 29,  146 => 28,  142 => 27,  138 => 26,  134 => 25,  130 => 23,  127 => 22,  123 => 18,  103 => 16,  98 => 13,  95 => 12,  90 => 9,  87 => 8,  79 => 64,  77 => 56,  72 => 53,  70 => 51,  65 => 48,  63 => 46,  58 => 43,  56 => 41,  49 => 36,  47 => 22,  42 => 19,  40 => 12,  37 => 11,  35 => 8,  26 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "SitephysUserBundle::layoutuser.html.twig", "/var/www/html/sitephys/physmvc/src/Sitephys/UserBundle/Resources/views/layoutuser.html.twig");
    }
}
