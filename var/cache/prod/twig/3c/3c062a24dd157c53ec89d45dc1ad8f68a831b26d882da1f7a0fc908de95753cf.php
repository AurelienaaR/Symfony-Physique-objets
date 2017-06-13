<?php

/* SitephysUserBundle:Security:authen.html.twig */
class __TwigTemplate_54dd60ba7e4eb5f444c07fd28410cca70c8f15d3afaebe2bd6fe1aff2d549523 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SitephysUserBundle::layoutuser.html.twig", "SitephysUserBundle:Security:authen.html.twig", 1);
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
        echo "  Authentification utilisateur
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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/sitephysuser/images/code-object.jpg"), "html", null, true);
        echo "\" class=\"homephoto\" alt=\"Image de Authentification\" />
    </div>
  </div>
";
    }

    // line 22
    public function block_sitephysuser_body($context, array $blocks = array())
    {
        // line 23
        echo "  <div id=\"containerimghometopic\">
\t<div id=\"hx\">Votre courriel est vérifié et le rôle de votre compte est validé.</div>
\t<br />
\t<div id=\"hx\">Pour accéder à votre compte validé, veuillez fermer cette fenêtre puis connectez vous.</div>
\t<br />
  </div>
  <br />
  <div id=\"eval-th\">
    <div class=\"button-eval\">
      <a href=\"";
        // line 32
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sitephys_physmvc_home");
        echo "\">Accueil</a>
    </div>
  </div>
  <br />
";
    }

    public function getTemplateName()
    {
        return "SitephysUserBundle:Security:authen.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 32,  73 => 23,  70 => 22,  62 => 17,  58 => 15,  55 => 14,  50 => 11,  43 => 8,  40 => 7,  35 => 4,  32 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "SitephysUserBundle:Security:authen.html.twig", "/var/www/html/sitephys/physmvc/src/Sitephys/UserBundle/Resources/views/Security/authen.html.twig");
    }
}
