<?php

/* SitephysPhysmvcBundle:Phys:element.html.twig */
class __TwigTemplate_98b5e425b2d18bee47ecbc0589fae1ec518be152cf1a6800c51aafe46b0de4a2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SitephysPhysmvcBundle::layout.html.twig", "SitephysPhysmvcBundle:Phys:element.html.twig", 1);
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
        echo "  Lecture d'élément simple du thème physique
";
    }

    // line 7
    public function block_sitephysphysmvc_section($context, array $blocks = array())
    {
        // line 8
        echo "  <div id=\"hw\">Elément simple du niveau ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["level"] ?? null), "levelBase", array()), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["level"] ?? null), "levelSub", array()), "html", null, true);
        echo " du thème ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["topic"] ?? null), "title", array()), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/sitephysphysmvc/images/fond-cosmo.jpg"), "html", null, true);
        echo "\" class=\"homephoto\" alt=\"Image de élément\" title=\"Elément simple\" />
\t</div>
  </div>
";
    }

    // line 19
    public function block_sitephysphysmvc_body($context, array $blocks = array())
    {
        // line 20
        echo "  <div class=\"well\">
      <div id=\"hb\">Descriptions de ";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["physelt"] ?? null), "title", array()), "html", null, true);
        echo " </div>
      <br />
      <nav id=\"tabs-nav\" class=\"clearfix\">
        <a href=\"#domaine\">Domaine et thème</a><span>&nbsp;</span>
        <a href=\"#niveau\">Niveau</a><span>&nbsp;</span>
        <a href=\"#contenu\">Contenu</a><span>&nbsp;</span>
        <a href=\"#evaluation\">Evaluation</a><span>&nbsp;</span>
        <a href=\"#symbolisation\">Symbolisation</a><span>&nbsp;</span>
        <a href=\"#reference\">Références</a>
        <a href=\"#author\">Création</a>
      </nav>
      <div id=\"tabs-container\" onload=\"initTab()\">
        <article id=\"domaine\">
          Domaine : ";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["domain"] ?? null), "title", array()), "html", null, true);
        echo "
          <br />Thème : ";
        // line 35
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["topic"] ?? null), "content", array()), "html", null, true);
        echo "
          ";
        // line 36
        $context["dimtopic"] = (twig_get_attribute($this->env, $this->getSourceContext(), ($context["topic"] ?? null), "mode", array()) - 2);
        // line 37
        echo "          <br />Dim du thème : ";
        echo twig_escape_filter($this->env, ($context["dimtopic"] ?? null), "html", null, true);
        echo " 
          <br />Mode du thème : ";
        // line 38
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["topic"] ?? null), "mode", array()), "html", null, true);
        echo "
        </article>
        <article id=\"niveau\">
          Niveau de base <i>(global)</i> : ";
        // line 41
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["level"] ?? null), "levelBase", array()), "html", null, true);
        echo " 
          <br />Niveau de précision <i>(élément)</i> : ";
        // line 42
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["level"] ?? null), "levelSub", array()), "html", null, true);
        echo " 
          <br />Description du niveau : ";
        // line 43
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["level"] ?? null), "content", array()), "html", null, true);
        echo " 
        </article>
        <article id=\"contenu\">
          Titre : ";
        // line 46
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["physelt"] ?? null), "title", array()), "html", null, true);
        echo " <br />
          Contenu : ";
        // line 47
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["physelt"] ?? null), "content", array()), "html", null, true);
        echo "
        </article>
        <article id=\"evaluation\">
          Evaluation : ";
        // line 50
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["physelt"] ?? null), "evaluation", array()), "html", null, true);
        echo " 
        </article>
        <article id=\"symbolisation\">
          ";
        // line 53
        $context["cptsym"] = 0;
        // line 54
        echo "          ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["symcontent"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["symcontentx"]) {
            // line 55
            echo "            ";
            $context["cptsym"] = (($context["cptsym"] ?? null) + 1);
            // line 56
            echo "            Symbolisation ";
            echo twig_escape_filter($this->env, ($context["cptsym"] ?? null), "html", null, true);
            echo " : ";
            echo twig_escape_filter($this->env, $context["symcontentx"], "html", null, true);
            echo " <br />
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['symcontentx'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "        </article>
        <article id=\"reference\">
          ";
        // line 60
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["titlecontref"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["titlecontrefx"]) {
            // line 61
            echo "            Référence : ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["titlecontrefx"], "rtitle", array()), "html", null, true);
            echo " <br />
            ";
            // line 62
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["titlecontrefx"], "rcontent", array()), "html", null, true);
            echo " <br /><br />
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['titlecontrefx'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        echo "          Lien : <a href =\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["physelt"] ?? null), "webLinks", array()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["physelt"] ?? null), "webLinks", array()), "html", null, true);
        echo "</a>
        </article>
        <article id=\"author\"> 
          Auteur : ";
        // line 67
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["physelt"] ?? null), "author", array()), "html", null, true);
        echo " <br />
          Date : ";
        // line 68
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["physelt"] ?? null), "date", array()), "d/m/Y H:i:s"), "html", null, true);
        echo "
        </article>
      </div>
  </div>
";
    }

    public function getTemplateName()
    {
        return "SitephysPhysmvcBundle:Phys:element.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  196 => 68,  192 => 67,  183 => 64,  175 => 62,  170 => 61,  166 => 60,  162 => 58,  151 => 56,  148 => 55,  143 => 54,  141 => 53,  135 => 50,  129 => 47,  125 => 46,  119 => 43,  115 => 42,  111 => 41,  105 => 38,  100 => 37,  98 => 36,  94 => 35,  90 => 34,  74 => 21,  71 => 20,  68 => 19,  60 => 14,  56 => 12,  53 => 11,  42 => 8,  39 => 7,  34 => 4,  31 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "SitephysPhysmvcBundle:Phys:element.html.twig", "/var/www/html/sitephys/physmvc/src/Sitephys/PhysmvcBundle/Resources/views/Phys/element.html.twig");
    }
}
