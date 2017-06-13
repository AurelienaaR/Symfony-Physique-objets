<?php

/* SitephysUserBundle:Security:adduser.html.twig */
class __TwigTemplate_3d177f678bce95d8c198220488ca864e0de76f4503c39a48802740ada3167f9f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SitephysUserBundle::layoutuser.html.twig", "SitephysUserBundle:Security:adduser.html.twig", 1);
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
        echo "  Inscription (nouveau compte utilisateur)
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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/sitephysuser/images/cyclotron.jpg"), "html", null, true);
        echo "\" class=\"homephoto\" alt=\"Image de Ajout de compte Utilisateur\" />
\t</div>
  </div>
";
    }

    // line 22
    public function block_sitephysuser_body($context, array $blocks = array())
    {
        // line 23
        echo "  <br />
  ";
        // line 24
        if ((($context["userroles"] ?? null) == "author")) {
            // line 25
            echo "    <div id=\"hw\">Inscription (nouveau compte Auteur)</div>
    <div id=\"containerimghometopic\">
      <div id=\"hx\"><i>
\t\tPour ce compte, veuillez préciser, s'il vous plait, vos domaines d'intérêts (au moins 500 caractères) en sciences et pour lesquels vous souhaiteriez éventuellement apporter des modifications ou des ajouts en plus des fonctionalités des comptes Utilisateurs.
      </i></div>
    </div>
  ";
        } else {
            // line 32
            echo "    <div id=\"hw\">Inscription (nouveau compte Utilisateur)</div>
  ";
        }
        // line 34
        echo "
  <br /><br />
  ";
        // line 36
        echo twig_include($this->env, $context, "SitephysUserBundle:Security:formuseradd.html.twig");
        echo "

";
    }

    public function getTemplateName()
    {
        return "SitephysUserBundle:Security:adduser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 36,  91 => 34,  87 => 32,  78 => 25,  76 => 24,  73 => 23,  70 => 22,  62 => 17,  58 => 15,  55 => 14,  50 => 11,  43 => 8,  40 => 7,  35 => 4,  32 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "SitephysUserBundle:Security:adduser.html.twig", "/var/www/html/sitephys/physmvc/src/Sitephys/UserBundle/Resources/views/Security/adduser.html.twig");
    }
}
