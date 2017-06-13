<?php

/* SitephysUserBundle:Security:homeuser.html.twig */
class __TwigTemplate_9fa80368b5f118835faaa0f61ae2a3efefa7e4c710fa8fdf59376b58323b2290 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SitephysUserBundle::layoutuser.html.twig", "SitephysUserBundle:Security:homeuser.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'menu' => array($this, 'block_menu'),
            'sitephysuser_section' => array($this, 'block_sitephysuser_section'),
            'sitephysuser_image' => array($this, 'block_sitephysuser_image'),
            'sitephysuser_body' => array($this, 'block_sitephysuser_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SitephysUserBundle::layoutuser.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo "  Accueil du compte utilisateur
";
    }

    // line 7
    public function block_menu($context, array $blocks = array())
    {
        // line 8
        echo "  ";
        $this->displayParentBlock("menu", $context, $blocks);
        echo "
";
    }

    // line 11
    public function block_sitephysuser_section($context, array $blocks = array())
    {
        // line 12
        echo "  <div id=\"hw\">Compte de ";
        echo twig_escape_filter($this->env, ($context["userconnect"] ?? null), "html", null, true);
        echo " </div>
";
    }

    // line 15
    public function block_sitephysuser_image($context, array $blocks = array())
    {
        // line 16
        echo "  <div id=\"containerimghome\">
    <div class=\"containerthome\">
      <img src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/sitephysuser/images/screen-tableau.jpg"), "html", null, true);
        echo "\" class=\"homephoto\" alt=\"Image de l'accueil du compte\" title=\"Accueil du compte\" />
    </div>
  </div>
";
    }

    // line 23
    public function block_sitephysuser_body($context, array $blocks = array())
    {
        // line 24
        echo "  <div class=\"well\">
    <div id=\"hb\">Types d'édition</div><br />
    <nav id=\"tabs-nav\" class=\"clearfix\">
      <a href=\"";
        // line 27
        echo "#details";
        echo "\">Détails du compte</a><span>&nbsp;</span>
      <a href=\"";
        // line 28
        echo "#suppression";
        echo "\">Suppression du compte</a><span>&nbsp;</span>
      <a href=\"";
        // line 29
        echo "#creation";
        echo "\">Ajout d'un nouveau compte</a><span>&nbsp;</span>
      <a href=\"";
        // line 30
        echo "#deconnexion";
        echo "\">Déconnexion</a>
    </nav>
    <div id=\"tabs-container\" onload=\"initTab()\">
      <article id=\"";
        // line 33
        echo "details";
        echo "\">
        Pseudo : ";
        // line 34
        echo twig_escape_filter($this->env, ($context["userconnect"] ?? null), "html", null, true);
        echo "
        <br />Courriel : ";
        // line 35
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["userobject"] ?? null), "email", array()), "html", null, true);
        echo "
        <br />Role : ";
        // line 36
        echo twig_escape_filter($this->env, ($context["userroles"] ?? null), "html", null, true);
        echo ", avec courriel";
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["userobject"] ?? null), "authorized", array())) {
            echo " validé. ";
        } else {
            echo " non validé. ";
        }
        echo " 
        ";
        // line 37
        if ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["userobject"] ?? null), "roles", array()), 0, array(), "array") == "ROLE_AUTHOR")) {
            // line 38
            echo "          <br />Intérêts : ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["userobject"] ?? null), "interest", array()), "html", null, true);
            echo "
        ";
        }
        // line 40
        echo "      </article>
      <article id=\"";
        // line 41
        echo "suppression";
        echo "\">
        <a href=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sitephys_user_delete", array("iduser" => twig_get_attribute($this->env, $this->getSourceContext(), ($context["userobject"] ?? null), "id", array()))), "html", null, true);
        echo "\">Suppression</a>
      </article>
      <article id=\"";
        // line 44
        echo "creation";
        echo "\">
        <a href=\"";
        // line 45
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sitephys_user_add", array("roleuser" => "user"));
        echo "\">Création d'un compte utilisateur</a><br />
        <a href=\"";
        // line 46
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sitephys_user_add", array("roleuser" => "author"));
        echo "\">Création d'un compte auteur</a>
      </article>
      <article id=\"";
        // line 48
        echo "deconnexion";
        echo "\">
        <a href=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("../logout"), "html", null, true);
        echo "\">Déconnexion</a>
      </article>
    </div>
  </div>

";
    }

    public function getTemplateName()
    {
        return "SitephysUserBundle:Security:homeuser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  160 => 49,  156 => 48,  151 => 46,  147 => 45,  143 => 44,  138 => 42,  134 => 41,  131 => 40,  125 => 38,  123 => 37,  113 => 36,  109 => 35,  105 => 34,  101 => 33,  95 => 30,  91 => 29,  87 => 28,  83 => 27,  78 => 24,  75 => 23,  67 => 18,  63 => 16,  60 => 15,  53 => 12,  50 => 11,  43 => 8,  40 => 7,  35 => 4,  32 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "SitephysUserBundle:Security:homeuser.html.twig", "/var/www/html/sitephys/physmvc/src/Sitephys/UserBundle/Resources/views/Security/homeuser.html.twig");
    }
}
