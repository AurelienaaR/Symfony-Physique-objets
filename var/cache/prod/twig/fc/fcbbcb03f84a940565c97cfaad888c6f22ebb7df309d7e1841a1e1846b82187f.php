<?php

/* SitephysPhysmvcBundle:Edit:viewupd.html.twig */
class __TwigTemplate_0bb9cd90225fc8a1501981dfab7468bc62b18db08280a6a79faff1843f3ce786 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SitephysPhysmvcBundle::layout.html.twig", "SitephysPhysmvcBundle:Edit:viewupd.html.twig", 1);
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
        echo "  Modifications d'élément simple du thème physique  
";
    }

    // line 7
    public function block_sitephysphysmvc_section($context, array $blocks = array())
    {
        // line 8
        echo "  <div id=\"hw\">Modifications de l'élément ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["phys"] ?? null), "title", array()), "html", null, true);
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
        echo "\" class=\"homephoto\" alt=\"Image de élément\" />
    </div>
  </div>
";
    }

    // line 19
    public function block_sitephysphysmvc_body($context, array $blocks = array())
    {
        // line 20
        echo "  <div class=\"well\">
      <div id=\"hb\">Descriptions de modification de ";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["phys"] ?? null), "title", array()), "html", null, true);
        echo " </div><br />

      <nav id=\"tabs-nav\" class=\"clearfix\">
        <a href=\"#domaine\">Domaine et thème</a><span>&nbsp;</span>
        <a href=\"#niveau\">Niveau</a><span>&nbsp;</span>
        <a href=\"#contenus\">Contenu</a><span>&nbsp;</span>
        <a href=\"#evaluation\">Evaluation</a><span>&nbsp;</span>
        <a href=\"#symbolisation\">Symbolisation</a><span>&nbsp;</span>
        <a href=\"#auteurs\">Création</a><span>&nbsp;</span>
      </nav>

      <div id=\"tabs-container\" onload=\"initTab()\">
        <article id=\"domaine\">
          Domaine : ";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["domain"] ?? null), "content", array()), "html", null, true);
        echo " 
          <br />Thème : ";
        // line 35
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["topic"] ?? null), "content", array()), "html", null, true);
        echo "
          <br />Mode du thème : ";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["topic"] ?? null), "mode", array()), "html", null, true);
        echo " 
        </article>

        <article id=\"niveau\">  
          Niveau de base <i>(global)</i> : ";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["physlevel"] ?? null), "levelBase", array()), "html", null, true);
        echo " 
          <br />Niveau de précision <i>(élément)</i> : ";
        // line 41
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["physlevel"] ?? null), "levelSub", array()), "html", null, true);
        echo " 
          <br />Description du niveau : ";
        // line 42
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["physlevel"] ?? null), "content", array()), "html", null, true);
        echo " <br />
        </article>

        <article id=\"contenus\">
          Contenu (actuel) :
          <br /> ";
        // line 47
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["phys"] ?? null), "content", array()), "html", null, true);
        echo " <br />
          Contenus (proposés à la modification) : 
          ";
        // line 49
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["physupd"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["physupdx"]) {
            // line 50
            echo "            <br /><br />Modification proposée : ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["physupdx"], "title", array()), "html", null, true);
            echo "
            <br />Contenu : ";
            // line 51
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["physupdx"], "content", array()), "html", null, true);
            echo "
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['physupdx'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "        </article>

        <article id=\"evaluation\">
          Evaluation (actuelle) : ";
        // line 56
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["phys"] ?? null), "evaluation", array()), "html", null, true);
        echo " 
          ";
        // line 57
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["physupd"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["physupdz"]) {
            // line 58
            echo "            <br /><br />Modification proposée : ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["physupdz"], "evaluation", array()), "html", null, true);
            echo "
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['physupdz'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        echo "        </article>

        <article id=\"symbolisation\">
          Symbolisations (actuelles) disponibles : <br />
          ";
        // line 64
        $context["cptsym"] = 0;
        // line 65
        echo "          ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["symbol"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["symbolx"]) {
            // line 66
            echo "            ";
            $context["cptsym"] = (($context["cptsym"] ?? null) + 1);
            // line 67
            echo "            <br />Symbolisation ";
            echo twig_escape_filter($this->env, ($context["cptsym"] ?? null), "html", null, true);
            echo " : ";
            echo twig_escape_filter($this->env, $context["symbolx"], "html", null, true);
            echo "
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['symbolx'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 69
        echo "        </article>

        <article id=\"auteurs\">
          Par (actuel) ";
        // line 72
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["phys"] ?? null), "author", array()), "html", null, true);
        echo ", le ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["phys"] ?? null), "date", array()), "Y-m-d H:i:s"), "html", null, true);
        echo ". 
          ";
        // line 73
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["physupd"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["physupdy"]) {
            // line 74
            echo "            <br /><br />Modification proposée : ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["physupdy"], "title", array()), "html", null, true);
            echo "
            <br />Par ";
            // line 75
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["physupdy"], "username", array()), "html", null, true);
            echo ", le ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["physupdy"], "date", array()), "Y-m-d H:i:s"), "html", null, true);
            echo ". 
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['physupdy'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 77
        echo "        </article>
      </div>

  </div>
";
    }

    public function getTemplateName()
    {
        return "SitephysPhysmvcBundle:Edit:viewupd.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  218 => 77,  208 => 75,  203 => 74,  199 => 73,  193 => 72,  188 => 69,  177 => 67,  174 => 66,  169 => 65,  167 => 64,  161 => 60,  152 => 58,  148 => 57,  144 => 56,  139 => 53,  131 => 51,  126 => 50,  122 => 49,  117 => 47,  109 => 42,  105 => 41,  101 => 40,  94 => 36,  90 => 35,  86 => 34,  70 => 21,  67 => 20,  64 => 19,  56 => 14,  52 => 12,  49 => 11,  42 => 8,  39 => 7,  34 => 4,  31 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "SitephysPhysmvcBundle:Edit:viewupd.html.twig", "/var/www/html/sitephys/physmvc/src/Sitephys/PhysmvcBundle/Resources/views/Edit/viewupd.html.twig");
    }
}
