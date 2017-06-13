<?php

/* SitephysUserBundle:Security:authentification.html.twig */
class __TwigTemplate_8e402c161e130049bba5f9438092fd885561b6a11c5ea3d231c683a084f8557b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SitephysUserBundle::layoutuser.html.twig", "SitephysUserBundle:Security:authentification.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'menu' => array($this, 'block_menu'),
            'sitephysuser_section' => array($this, 'block_sitephysuser_section'),
            'sitephysphysmvc_image' => array($this, 'block_sitephysphysmvc_image'),
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
        echo "  Formulaire d'inscription utilisateur
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
    public function block_sitephysphysmvc_image($context, array $blocks = array())
    {
        // line 15
        echo "  <div id=\"containerimghome\">
    <div class=\"containerthome\">
      <img src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/sitephysuser/images/code-object.jpg"), "html", null, true);
        echo "\" class=\"homephoto\" alt=\"Image de Accueil\" />
    </div>
  </div>
";
    }

    // line 22
    public function block_sitephysuser_body($context, array $blocks = array())
    {
        // line 23
        echo "
  <div class=\"well\">
    <div id=\"hb\">Connexion à votre compte : </div>
    <form action=\"";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login_check");
        echo "\" method=\"POST\">
      <span style=\"text-align:center; color:#000\"><label for=\"username\"> Pseudo : </label></span><br />
      <span style=\"text-align:center; color:#000\"><input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 28
        echo twig_escape_filter($this->env, ($context["last_username"] ?? null), "html", null, true);
        echo "\" /></span><br /><br />
      <span style=\"text-align:center; color:#000\"><label for=\"password\"> Mot de passe : </label></span><br />
      <span style=\"text-align:center; color:#000\"><input type=\"password\" id=\"password\" name=\"_password\" /></span><br /><br />
      <span style=\"text-align:center; color:#000\"><input type=\"submit\" value=\"Connexion\" /></span><br />
    </form>
    <br />
    <div id=\"hb\">
      <br />
      Ou : <br />
      <a href=\"";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sitephys_user_add", array("roleuser" => "user"));
        echo "\">Création d'un nouveau compte utilisateur</a><br />
      <a href=\"";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sitephys_user_add", array("roleuser" => "author"));
        echo "\">Création d'un nouveau compte auteur</a><br />
    </div>
    
  </div>
";
    }

    public function getTemplateName()
    {
        return "SitephysUserBundle:Security:authentification.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 38,  95 => 37,  83 => 28,  78 => 26,  73 => 23,  70 => 22,  62 => 17,  58 => 15,  55 => 14,  50 => 11,  43 => 8,  40 => 7,  35 => 4,  32 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "SitephysUserBundle:Security:authentification.html.twig", "/var/www/html/sitephys/physmvc/src/Sitephys/UserBundle/Resources/views/Security/authentification.html.twig");
    }
}
