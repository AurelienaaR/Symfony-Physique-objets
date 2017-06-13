<?php

/* SitephysPhysmvcBundle:Edit:viewadd.html.twig */
class __TwigTemplate_fc3aa9c1680711aa385013117e2aaa01d7027d5fcc9bd9f94814c25b5002096e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SitephysPhysmvcBundle::layout.html.twig", "SitephysPhysmvcBundle:Edit:viewadd.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'sitephysphysmvc_section' => array($this, 'block_sitephysphysmvc_section'),
            'sitephysphysmvc_image' => array($this, 'block_sitephysphysmvc_image'),
            'sitephysphysmvc_body' => array($this, 'block_sitephysphysmvc_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SitephysPhysmvcBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo "  Lecture de domaine ajouté 
";
    }

    // line 7
    public function block_sitephysphysmvc_section($context, array $blocks = array())
    {
        // line 8
        echo "  <div id=\"hw\">Domaine ajouté : ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["physadd"] ?? null), "title", array()), "html", null, true);
        echo " </div>
";
    }

    // line 11
    public function block_sitephysphysmvc_image($context, array $blocks = array())
    {
        // line 12
        echo "  <div id=\"containerimghome\">
    <div class=\"containerthome\">
      <img src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/sitephysphysmvc/images/mars.jpg"), "html", null, true);
        echo "\" class=\"homephoto\" alt=\"Image du domaine ajouté\" />
\t  </div>
  </div>
";
    }

    // line 19
    public function block_sitephysphysmvc_body($context, array $blocks = array())
    {
        // line 20
        echo "  <div class=\"well\">
      <div id=\"hb\">Descriptions du domaine ajouté, ";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["physadd"] ?? null), "title", array()), "html", null, true);
        echo " </div><br />

      <nav id=\"tabs-nav\" class=\"clearfix\">
        <a href=\"#contenu\">Contenu</a><span>&nbsp;</span>
        <a href=\"#auteur\">Création</a><span>&nbsp;</span>
      </nav>

      <div id=\"tabs-container\" onload=\"initTab()\">
        <article id=\"contenu\">
          Contenu :
          <br /> ";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["physadd"] ?? null), "content", array()), "html", null, true);
        echo " <br />
        </article>
        <article id=\"auteur\">
          Auteur : ";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["physadd"] ?? null), "username", array()), "html", null, true);
        echo ", 
          <br />Date : ";
        // line 35
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["physadd"] ?? null), "date", array()), "d/m/Y H:i:s"), "html", null, true);
        echo "
          <br />Lien Internet : ";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["physadd"] ?? null), "weblink", array()), "html", null, true);
        echo "
        </article>
      </div>

  </div>
";
    }

    public function getTemplateName()
    {
        return "SitephysPhysmvcBundle:Edit:viewadd.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 36,  93 => 35,  89 => 34,  83 => 31,  70 => 21,  67 => 20,  64 => 19,  56 => 14,  52 => 12,  49 => 11,  42 => 8,  39 => 7,  34 => 4,  31 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "SitephysPhysmvcBundle:Edit:viewadd.html.twig", "/var/www/html/sitephys/physmvc/src/Sitephys/PhysmvcBundle/Resources/views/Edit/viewadd.html.twig");
    }
}
