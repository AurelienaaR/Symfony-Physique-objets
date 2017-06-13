<?php

/* SitephysPhysmvcBundle:Edit:update.html.twig */
class __TwigTemplate_59b130ee2bf4d20d23dd225c6dccfb1f59bad67465e98826ae76be16f134bd14 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SitephysPhysmvcBundle::layout.html.twig", "SitephysPhysmvcBundle:Edit:update.html.twig", 1);
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
        echo "  Modification d'élément simple
";
    }

    // line 7
    public function block_sitephysphysmvc_section($context, array $blocks = array())
    {
        // line 8
        echo "  <div id=\"hw\">Suggestion de modification de l'élément <strong>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["physupdate"] ?? null), "title", array()), "html", null, true);
        echo "</strong>. </div>
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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/sitephysphysmvc/images/physmvcmodif.jpg"), "html", null, true);
        echo "\" class=\"homephoto\" alt=\"Image de Suggestion - Modification\" />
\t</div>
  </div>
";
    }

    // line 19
    public function block_sitephysphysmvc_body($context, array $blocks = array())
    {
        // line 20
        echo "  <div id=\"containerimghometopic\">
    <div id=\"hx\">
      Proposition de modification à la date actuelle, ";
        // line 22
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y-m-d H:i:s"), "html", null, true);
        echo ", de l'élément <strong>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["physupdate"] ?? null), "title", array()), "html", null, true);
        echo "</strong> créé par ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["physupdate"] ?? null), "author", array()), "html", null, true);
        echo " le ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["physupdate"] ?? null), "date", array()), "Y-m-d H:i:s"), "html", null, true);
        echo " du domaine <strong>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["physupdatedomain"] ?? null), "content", array()), "html", null, true);
        echo "</strong> et du thème <strong>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["physupdatetopic"] ?? null), "content", array()), "html", null, true);
        echo "</strong> pour le niveau de base <strong>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["physupdatelevel"] ?? null), "levelBase", array()), "html", null, true);
        echo "</strong> et le niveau de précision <strong>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["physupdatelevel"] ?? null), "levelSub", array()), "html", null, true);
        echo "</strong>, soit : <strong>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["physupdatelevel"] ?? null), "content", array()), "html", null, true);
        echo "</strong>.<br /><strong>Contenu actuel : ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["physupdate"] ?? null), "content", array()), "html", null, true);
        echo "<br />Evaluation actuelle : ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["physupdate"] ?? null), "evaluation", array()), "html", null, true);
        echo "</strong>
    </div>
  </div>
  <br />
  ";
        // line 26
        echo twig_include($this->env, $context, "SitephysPhysmvcBundle:Edit:formupdate.html.twig");
        echo "
  <br />
";
    }

    public function getTemplateName()
    {
        return "SitephysPhysmvcBundle:Edit:update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 26,  71 => 22,  67 => 20,  64 => 19,  56 => 14,  52 => 12,  49 => 11,  42 => 8,  39 => 7,  34 => 4,  31 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "SitephysPhysmvcBundle:Edit:update.html.twig", "/var/www/html/sitephys/physmvc/src/Sitephys/PhysmvcBundle/Resources/views/Edit/update.html.twig");
    }
}
