<?php

/* TwigBundle:Exception:error.html.twig */
class __TwigTemplate_3b0aabd880218ed6acf2a086cb5b0410a915ed056389d576595cdd37e1b0e9e4 extends Twig_Template
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
            'sitephysuser_body' => array($this, 'block_sitephysuser_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>

  <head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <title>
      ";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        // line 10
        echo "    </title>
    ";
        // line 11
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 19
        echo "  </head>

  <body>
    ";
        // line 22
        $this->displayBlock('menu', $context, $blocks);
        // line 36
        echo "
    ";
        // line 37
        $this->displayBlock('sitephysuser_section', $context, $blocks);
        // line 42
        echo "    
    <br />

    <p></p><br /><br />
 
    ";
        // line 47
        $this->displayBlock('sitephysuser_body', $context, $blocks);
        // line 57
        echo "
    <br />

    ";
        // line 60
        $this->displayBlock('javascripts', $context, $blocks);
        // line 71
        echo "
  </body>
  
</html>
";
    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        // line 8
        echo "           Erreur sur le site Eléments de physique en méthodes et langages objet 
      ";
    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 12
        echo "      ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "d667f12_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_d667f12_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/d667f12_main_1.css");
            // line 13
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? null), "html", null, true);
            echo "\" type=\"text/css\" />
      ";
        } else {
            // asset "d667f12"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_d667f12") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/d667f12.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? null), "html", null, true);
            echo "\" type=\"text/css\" />
      ";
        }
        unset($context["asset_url"]);
        // line 15
        echo "      ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "08b27fa_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_08b27fa_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/08b27fa_bootstrap_1.css");
            // line 16
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? null), "html", null, true);
            echo "\" type=\"text/css\">
      ";
        } else {
            // asset "08b27fa"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_08b27fa") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/08b27fa.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? null), "html", null, true);
            echo "\" type=\"text/css\">
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
          <li><a href=\"http://enseignant_postbac.nexgate.ch/index.html\">Liens</a></li>
        </ul>
      </div>
    ";
    }

    // line 37
    public function block_sitephysuser_section($context, array $blocks = array())
    {
        // line 38
        echo "      <br />
      <div id=\"ho\">Eléments de physique en méthodes et langages objet</div>
      <br />
    ";
    }

    // line 47
    public function block_sitephysuser_body($context, array $blocks = array())
    {
        // line 48
        echo "      <br />
      <div id=\"hx\">Erreur - Méthodes et langage objet pour la physique</div>
      <br /><br /><br />
      <div id=\"eval-th\">
        <div class=\"button-eval\">
          <a href=\"";
        // line 53
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sitephys_physmvc_home");
        echo "\">Retour à l'accueil du site</a>
        </div>
      </div>
    ";
    }

    // line 60
    public function block_javascripts($context, array $blocks = array())
    {
        // line 61
        echo "      ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "74ce16b_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_74ce16b_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/74ce16b_jquery-3.1.1.min_1.js");
            // line 62
            echo "        <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? null), "html", null, true);
            echo "\"></script>
      ";
        } else {
            // asset "74ce16b"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_74ce16b") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/74ce16b.js");
            echo "        <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? null), "html", null, true);
            echo "\"></script>
      ";
        }
        unset($context["asset_url"]);
        // line 64
        echo "      ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "c4a5346_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_c4a5346_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/c4a5346_main_1.js");
            // line 65
            echo "        <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? null), "html", null, true);
            echo "\"></script>
      ";
        } else {
            // asset "c4a5346"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_c4a5346") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/c4a5346.js");
            echo "        <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? null), "html", null, true);
            echo "\"></script>
      ";
        }
        unset($context["asset_url"]);
        // line 67
        echo "      ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "7009615_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_7009615_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/7009615_bootstrap_1.js");
            // line 68
            echo "        <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? null), "html", null, true);
            echo "\"></script>
      ";
        } else {
            // asset "7009615"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_7009615") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/7009615.js");
            echo "        <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? null), "html", null, true);
            echo "\"></script>
      ";
        }
        unset($context["asset_url"]);
        // line 70
        echo "    ";
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  267 => 70,  253 => 68,  248 => 67,  234 => 65,  229 => 64,  215 => 62,  210 => 61,  207 => 60,  199 => 53,  192 => 48,  189 => 47,  182 => 38,  179 => 37,  170 => 31,  166 => 30,  152 => 29,  148 => 28,  144 => 27,  140 => 26,  136 => 25,  132 => 23,  129 => 22,  125 => 18,  111 => 16,  106 => 15,  92 => 13,  87 => 12,  84 => 11,  79 => 8,  76 => 7,  68 => 71,  66 => 60,  61 => 57,  59 => 47,  52 => 42,  50 => 37,  47 => 36,  45 => 22,  40 => 19,  38 => 11,  35 => 10,  33 => 7,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "TwigBundle:Exception:error.html.twig", "/var/www/html/sitephys/physmvc/app/Resources/TwigBundle/views/Exception/error.html.twig");
    }
}
