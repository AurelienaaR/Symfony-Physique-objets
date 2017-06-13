<?php

/* SitephysUserBundle:Security:login.html.twig */
class __TwigTemplate_1d545b504ed7185ba3d888d4e13caec4b669596bce55d18fdad6db9ae54d7794 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SitephysUserBundle::layoutuser.html.twig", "SitephysUserBundle:Security:login.html.twig", 1);
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
        echo "  Inscription ou connexion au compte utilisateur
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
        echo "  <div id=\"hw\">Connexion ou création de compte</div>
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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/sitephysuser/images/tabcontrol.jpg"), "html", null, true);
        echo "\" class=\"homephoto\" alt=\"Image du Login\" />
    </div>
  </div>
";
    }

    // line 23
    public function block_sitephysuser_body($context, array $blocks = array())
    {
        // line 24
        echo "  <br />
  <div class=\"well\">
    <div id=\"hb\">Connexion à votre compte : </div><br />
    <form action=\"";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login_check");
        echo "\" method=\"POST\">
      <span style=\"text-align:center; color:#000\"><label for=\"username\"> Pseudo : </label></span><br />
      <span style=\"text-align:center; color:#000\"><input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 29
        echo twig_escape_filter($this->env, ($context["last_username"] ?? null), "html", null, true);
        echo "\" /></span><br /><br />
      <span style=\"text-align:center; color:#000\"><label for=\"password\"> Mot de passe : </label></span><br />
      <span style=\"text-align:center; color:#000\"><input type=\"password\" id=\"password\" name=\"_password\" /></span><br /><br />
      <span style=\"text-align:center; color:#000\"><input type=\"submit\" value=\"Connexion\" /></span><br />
    </form>
    <br />
    <div style=\"text-align:center; color:#000;\">
      <br />
      Ou : <br />
      <a href=\"";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sitephys_user_add", array("roleuser" => "user"));
        echo "\">Création d'un nouveau compte utilisateur</a><br />
      <a href=\"";
        // line 39
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sitephys_user_add", array("roleuser" => "author"));
        echo "\">Création d'un nouveau compte auteur</a><br />
    </div>
  </div>

";
    }

    public function getTemplateName()
    {
        return "SitephysUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 39,  98 => 38,  86 => 29,  81 => 27,  76 => 24,  73 => 23,  65 => 18,  61 => 16,  58 => 15,  53 => 12,  50 => 11,  43 => 8,  40 => 7,  35 => 4,  32 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "SitephysUserBundle:Security:login.html.twig", "/var/www/html/sitephys/physmvc/src/Sitephys/UserBundle/Resources/views/Security/login.html.twig");
    }
}
