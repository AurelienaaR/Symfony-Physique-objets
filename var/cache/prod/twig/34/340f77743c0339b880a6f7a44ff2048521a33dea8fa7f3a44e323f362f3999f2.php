<?php

/* SitephysPhysmvcBundle:Phys:sym.html.twig */
class __TwigTemplate_c036bfc87d222ea3bb402652239479fe9663715c0f36c92692febfa7ad2f8118 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SitephysPhysmvcBundle::layout.html.twig", "SitephysPhysmvcBundle:Phys:sym.html.twig", 1);
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
        echo "  Niveaux et symbolisations des éléments de physique 
";
    }

    // line 7
    public function block_sitephysphysmvc_section($context, array $blocks = array())
    {
        // line 8
        echo "  <div id=\"hw\">Niveaux et symbolisations</div>
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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/sitephysphysmvc/images/schemaphysmvcelement.jpg"), "html", null, true);
        echo "\" class=\"homephoto\" alt=\"Image de Symbolisations par niveaux de base\" title=\"Schéma des niveaux de base\" />
\t</div>
  </div>
";
    }

    // line 19
    public function block_sitephysphysmvc_body($context, array $blocks = array())
    {
        // line 20
        echo "  <div class=\"well\">

    <div id=\"hb\">Description de niveaux et symbolisations par niveau de base</div><br />
      <nav id=\"tabs-nav\" class=\"clearfix\">
        ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 6));
        foreach ($context['_seq'] as $context["_key"] => $context["intBase"]) {
            // line 25
            echo "          <a href=\"";
            echo twig_escape_filter($this->env, ("#symbol" . $context["intBase"]), "html", null, true);
            echo "\"> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["datalevel"] ?? null), ($context["intBase"] - 1), array(), "array"), "html", null, true);
            echo " </a><span>&nbsp;</span>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['intBase'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "        <a href=\"";
        echo "#reference";
        echo "\"> Références </a>
      </nav>

      <div id=\"tabs-container\" onload=\"initTab()\">
        ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 6));
        foreach ($context['_seq'] as $context["_key"] => $context["intBase"]) {
            // line 32
            echo "          <article id=\"";
            echo twig_escape_filter($this->env, ("symbol" . $context["intBase"]), "html", null, true);
            echo "\" >
            ";
            // line 33
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(0, 6));
            foreach ($context['_seq'] as $context["_key"] => $context["intSub"]) {
                // line 34
                echo "              ";
                if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["bslevel"] ?? null), $context["intBase"], array(), "array", false, true), $context["intSub"], array(), "array", true, true)) {
                    // line 35
                    echo "                Niveau ";
                    echo twig_escape_filter($this->env, $context["intBase"], "html", null, true);
                    echo " - ";
                    echo twig_escape_filter($this->env, $context["intSub"], "html", null, true);
                    echo " : ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["bslevel"] ?? null), $context["intBase"], array(), "array"), $context["intSub"], array(), "array"), "html", null, true);
                    echo "
              ";
                }
                // line 37
                echo "              ";
                if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["bssymb"] ?? null), $context["intBase"], array(), "array", false, true), $context["intSub"], array(), "array", true, true)) {
                    // line 38
                    echo "                <br />Symbolisation : ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["bssymb"] ?? null), $context["intBase"], array(), "array"), $context["intSub"], array(), "array"), "html", null, true);
                    echo " <br /><br />
              ";
                }
                // line 40
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['intSub'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 41
            echo "          </article>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['intBase'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "        <article id=\"reference\">
          ";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["titlerefdom"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["titlerefdomx"]) {
            // line 45
            echo "            Domaine : ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["titlerefdomx"], "dtitle", array()), "html", null, true);
            echo ". Référence : ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["titlerefdomx"], "rtitle", array()), "html", null, true);
            echo " <br />
            Contenu : ";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["titlerefdomx"], "rcontent", array()), "html", null, true);
            echo " <br /><br />
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['titlerefdomx'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "        </article>
      </div>

  </div>
";
    }

    public function getTemplateName()
    {
        return "SitephysPhysmvcBundle:Phys:sym.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 48,  156 => 46,  149 => 45,  145 => 44,  142 => 43,  135 => 41,  129 => 40,  123 => 38,  120 => 37,  110 => 35,  107 => 34,  103 => 33,  98 => 32,  94 => 31,  86 => 27,  75 => 25,  71 => 24,  65 => 20,  62 => 19,  54 => 14,  50 => 12,  47 => 11,  42 => 8,  39 => 7,  34 => 4,  31 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "SitephysPhysmvcBundle:Phys:sym.html.twig", "/var/www/html/sitephys/physmvc/src/Sitephys/PhysmvcBundle/Resources/views/Phys/sym.html.twig");
    }
}
