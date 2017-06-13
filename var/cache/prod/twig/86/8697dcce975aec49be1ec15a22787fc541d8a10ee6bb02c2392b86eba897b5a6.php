<?php

/* SitephysPhysmvcBundle:Phys:links.html.twig */
class __TwigTemplate_376af2825dd6a633462d19e7ef372b12e49beba2f7ebda843674af7ba9c1b0d9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SitephysPhysmvcBundle::layout.html.twig", "SitephysPhysmvcBundle:Phys:links.html.twig", 1);
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
        echo "  Liens
";
    }

    // line 7
    public function block_sitephysphysmvc_section($context, array $blocks = array())
    {
        // line 8
        echo "  <div id=\"hw\">Liens</div>
";
    }

    // line 11
    public function block_sitephysphysmvc_image($context, array $blocks = array())
    {
        // line 12
        echo "  <div id=\"containerimghome\">
    <div class=\"containerthome\">
\t  <img src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/sitephysphysmvc/images/linkssite.jpg"), "html", null, true);
        echo "\" class=\"homephoto\" alt=\"Image de Liens\" title=\"Liens\" />
\t</div>
  </div>
";
    }

    // line 19
    public function block_sitephysphysmvc_body($context, array $blocks = array())
    {
        // line 20
        echo "  <div class=\"well\">
      <div id=\"hb\">Sites de physique</div>
      <br />
      <nav id=\"tabs-nav\" class=\"clearfix\">
        <a href=\"#site1\">Mon autre site</a><span>&nbsp;</span>
        <a href=\"#site2\">Site de TS</a><span>&nbsp;</span>
        <a href=\"#site3\">Site généraliste</a><span>&nbsp;</span>
      </nav>
      <div id=\"tabs-container\" onload=\"initTab()\">
        <article id=\"site1\">
          Titre : Site d'extraits de livres, TP, colles et applications pour TS et Prépas
          <br />Commentaire : Colles de mathématiques et de physique, TP, applications et extraits d'ouvrages de mathématiques (jusqu'à Bac +1) et de physique-chimie (jusqu'à Bac +2)
          <br />Lien Internet : <a href=\"http://enseignant_postbac.nexgate.ch\">http://enseignant_postbac.nexgate.ch</a>
        </article>
        <article id=\"site2\">
          Titre : Site de Physique-Chimie au Lycée
          <br />Commentaire : Nombreux éléments de cours, d'exercices et de TP en physique-chimie (1L, 1ES, TS, TS-spé et Bac S) par M. Chaurand, Professeur agrégé.
\t\t\t<br />Lien Internet : <a href=\"http://chaurand.fr/site/index.html\">http://chaurand.fr/site/index.html</a>
        </article>
        <article id=\"site3\">
          Titre : Site généraliste en astronomie, physique, chimie et technologies
          <br />Commentaire : Vaste site généraliste en astronomie, sciences et nouvelles technologies (projet Luxorion). 
\t\t\t<br />Lien Internet : <a href=\"http://www.astrosurf.com/luxorion/index.htm\">http://www.astrosurf.com/luxorion/index.htm</a>
        </article>
      </div>
  </div>
";
    }

    public function getTemplateName()
    {
        return "SitephysPhysmvcBundle:Phys:links.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 20,  62 => 19,  54 => 14,  50 => 12,  47 => 11,  42 => 8,  39 => 7,  34 => 4,  31 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "SitephysPhysmvcBundle:Phys:links.html.twig", "/var/www/html/sitephys/physmvc/src/Sitephys/PhysmvcBundle/Resources/views/Phys/links.html.twig");
    }
}
