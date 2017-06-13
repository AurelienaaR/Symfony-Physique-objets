<?php

/* SitephysPhysmvcBundle:Edit:viewaddtopic.html.twig */
class __TwigTemplate_07af426ed09b3450832aaa67fd01a890c44933caa39395e338f742cda9d73100 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SitephysPhysmvcBundle::layout.html.twig", "SitephysPhysmvcBundle:Edit:viewaddtopic.html.twig", 1);
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
        echo "  Lecture de thème ajouté 
";
    }

    // line 7
    public function block_sitephysphysmvc_section($context, array $blocks = array())
    {
        // line 8
        echo "  <div id=\"hw\">Thème ajouté : ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["physaddtopic"] ?? null), "title", array()), "html", null, true);
        echo " du domaine ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["domtopadded"] ?? null), "title", array()), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/sitephysphysmvc/images/schemaphysmvcelement.jpg"), "html", null, true);
        echo "\" class=\"homephoto\" alt=\"Image du thème ajouté\" />
    </div>
  </div>
";
    }

    // line 19
    public function block_sitephysphysmvc_body($context, array $blocks = array())
    {
        // line 20
        echo "  <div class=\"well\">
      <div id=\"hb\">Description des éléments globaux du thème ajouté ";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["physaddtopic"] ?? null), "title", array()), "html", null, true);
        echo " du domaine ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["domtopadded"] ?? null), "title", array()), "html", null, true);
        echo " </div><br />

      <nav id=\"tabs-nav\" class=\"clearfix\">
        <a href=\"#contenuexpin\">Exp in (1)</a><span>&nbsp;</span>
        <a href=\"#contenuth\">Th (2)</a><span>&nbsp;</span>
        <a href=\"#contenuexpout\">Exp out (3)</a><span>&nbsp;</span>
        <a href=\"#contenuretexpin\">Return Exp in (4)</a><span>&nbsp;</span>
        <a href=\"#contenuretth\">Return Th (5)</a><span>&nbsp;</span>
        <a href=\"#contenuretexpout\">Return Exp out (6)</a><span>&nbsp;</span>
        <a href=\"#auteur\">Création</a><span>&nbsp;</span>
      </nav>

      <div id=\"tabs-container\" onload=\"initTab()\">
        <article id=\"contenuexpin\">
          Contenu de l'élément Exp in (1) :
          <br /> ";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["physaddtopic"] ?? null), "contentexpin", array()), "html", null, true);
        echo "
        </article>
        <article id=\"contenuth\">
          Contenu de l'élément Th (2) :
          <br /> ";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["physaddtopic"] ?? null), "contentth", array()), "html", null, true);
        echo "
        </article>
        <article id=\"contenuexpout\">
          Contenu de l'élément Exp out (3) :
          <br /> ";
        // line 44
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["physaddtopic"] ?? null), "contentexpout", array()), "html", null, true);
        echo "
        </article>
        <article id=\"contenuretexpin\">
          Contenu de l'élément Return Exp in (4) :
          <br /> ";
        // line 48
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["physaddtopic"] ?? null), "contentretexpin", array()), "html", null, true);
        echo "
        </article>
        <article id=\"contenuretth\">
          Contenu de l'élément Return Th (5) :
          <br /> ";
        // line 52
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["physaddtopic"] ?? null), "contentretth", array()), "html", null, true);
        echo "
        </article>
        <article id=\"contenuretexpout\">
          Contenu de l'élément Return Exp out (6) :
          <br /> ";
        // line 56
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["physaddtopic"] ?? null), "contentretexpout", array()), "html", null, true);
        echo "
        </article>
        <article id=\"auteur\">
          Auteur : ";
        // line 59
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["physaddtopic"] ?? null), "username", array()), "html", null, true);
        echo ", 
          <br />Date : ";
        // line 60
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["physaddtopic"] ?? null), "date", array()), "d/m/Y H:i:s"), "html", null, true);
        echo "
          ";
        // line 61
        $context["dimmode"] = (twig_get_attribute($this->env, $this->getSourceContext(), ($context["physaddtopic"] ?? null), "mode", array()) - 2);
        // line 62
        echo "          <br />Dimension d'évolution : ";
        echo twig_escape_filter($this->env, ($context["dimmode"] ?? null), "html", null, true);
        echo "
          <br />Lien Internet : ";
        // line 63
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["physaddtopic"] ?? null), "weblink", array()), "html", null, true);
        echo "
        </article>
      </div>

  </div>
";
    }

    public function getTemplateName()
    {
        return "SitephysPhysmvcBundle:Edit:viewaddtopic.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 63,  143 => 62,  141 => 61,  137 => 60,  133 => 59,  127 => 56,  120 => 52,  113 => 48,  106 => 44,  99 => 40,  92 => 36,  72 => 21,  69 => 20,  66 => 19,  58 => 14,  54 => 12,  51 => 11,  42 => 8,  39 => 7,  34 => 4,  31 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "SitephysPhysmvcBundle:Edit:viewaddtopic.html.twig", "/var/www/html/sitephys/physmvc/src/Sitephys/PhysmvcBundle/Resources/views/Edit/viewaddtopic.html.twig");
    }
}
