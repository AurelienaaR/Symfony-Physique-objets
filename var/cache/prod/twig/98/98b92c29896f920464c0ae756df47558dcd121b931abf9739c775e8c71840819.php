<?php

/* SitephysUserBundle:Security:deleteuser.html.twig */
class __TwigTemplate_3850049b4162f520845c253e6d370affdf157a6b6e7b77ed6ab76d945f186a61 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SitephysUserBundle::layoutuser.html.twig", "SitephysUserBundle:Security:deleteuser.html.twig", 1);
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
        echo "  Confirmation de suppression
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
    }

    // line 14
    public function block_sitephysuser_image($context, array $blocks = array())
    {
        // line 15
        echo "  <div id=\"containerimghome\">
    <div class=\"containerthome\">
      <img src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/sitephysuser/images/fond-cosmo.jpg"), "html", null, true);
        echo "\" class=\"homephoto\" alt=\"Image de l'accueil du compte\" />
\t</div>
  </div>
";
    }

    // line 22
    public function block_sitephysuser_body($context, array $blocks = array())
    {
        // line 23
        echo "
  <div class=\"well\">
    <br /><br />
    <a href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("../logout"), "html", null, true);
        echo "\">Déconnexion</a>
    <br /><br />
    <div id=\"hw\">Le compte ";
        // line 28
        echo twig_escape_filter($this->env, ($context["roledeletedaccount"] ?? null), "html", null, true);
        echo " de ";
        echo twig_escape_filter($this->env, ($context["usernamedeletedaccount"] ?? null), "html", null, true);
        echo " a bien été supprimé.
    </div>
    <br /><br />
    <div>
      <div class=\"button-eval\">
        <a href=\"";
        // line 33
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sitephys_physmvc_home");
        echo "\">Retour à l'accueil</a>
      </div>
    </div>
  </div>

";
    }

    public function getTemplateName()
    {
        return "SitephysUserBundle:Security:deleteuser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 33,  83 => 28,  78 => 26,  73 => 23,  70 => 22,  62 => 17,  58 => 15,  55 => 14,  50 => 11,  43 => 8,  40 => 7,  35 => 4,  32 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "SitephysUserBundle:Security:deleteuser.html.twig", "/var/www/html/sitephys/physmvc/src/Sitephys/UserBundle/Resources/views/Security/deleteuser.html.twig");
    }
}
