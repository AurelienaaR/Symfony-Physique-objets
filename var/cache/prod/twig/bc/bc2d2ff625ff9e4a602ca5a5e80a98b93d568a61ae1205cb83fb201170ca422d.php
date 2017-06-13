<?php

/* SitephysUserBundle:Security:emailuser.html.twig */
class __TwigTemplate_29f3693599bf8db4c1a82c5e645853fd65d0ba56995add7968944d5956c00a6f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SitephysUserBundle::layoutuser.html.twig", "SitephysUserBundle:Security:emailuser.html.twig", 1);
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
        echo "  Courriel envoyé
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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/sitephysuser/images/tabcontrol.jpg"), "html", null, true);
        echo "\" class=\"homephoto\" alt=\"Image de courriel\" />
    </div>
  </div>
";
    }

    // line 22
    public function block_sitephysuser_body($context, array $blocks = array())
    {
        // line 23
        echo "  <br /><br />
  <div id=\"hw\">Courriel envoyé</div>
  <br /><br />
  <div id=\"eval-th\">
    <div class=\"button-eval\">
      <a href=\"";
        // line 28
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sitephys_physmvc_home");
        echo "\">Retour à l'accueil</a>
    </div>
  </div>
";
    }

    public function getTemplateName()
    {
        return "SitephysUserBundle:Security:emailuser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 28,  73 => 23,  70 => 22,  62 => 17,  58 => 15,  55 => 14,  50 => 11,  43 => 8,  40 => 7,  35 => 4,  32 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "SitephysUserBundle:Security:emailuser.html.twig", "/var/www/html/sitephys/physmvc/src/Sitephys/UserBundle/Resources/views/Security/emailuser.html.twig");
    }
}
