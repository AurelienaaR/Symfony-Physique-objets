<?php

/* SitephysPhysmvcBundle:Phys:global.html.twig */
class __TwigTemplate_49b7ce34acfbd2030378dd57ac3b7f44618e9110a2a30c599033f9b0b3f64e2a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SitephysPhysmvcBundle::layout.html.twig", "SitephysPhysmvcBundle:Phys:global.html.twig", 1);
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
        echo "  Lecture d'un élément global du thème physique
";
    }

    // line 7
    public function block_sitephysphysmvc_section($context, array $blocks = array())
    {
        // line 8
        echo "  <div id=\"hw\">
    Lecture de l'élément global du niveau de base ";
        // line 9
        echo twig_escape_filter($this->env, ($context["intlevel"] ?? null), "html", null, true);
        echo " du thème ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["topic"] ?? null), "title", array()), "html", null, true);
        echo " 
  </div>
";
    }

    // line 13
    public function block_sitephysphysmvc_image($context, array $blocks = array())
    {
        // line 14
        echo "  <div class=\"containertglobal\">
    ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(array(0 => 1, 1 => 2, 2 => 3, 3 => 6, 4 => 5, 5 => 4));
        foreach ($context['_seq'] as $context["_key"] => $context["jb"]) {
            // line 16
            echo "      ";
            if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["tabboolelt"] ?? null), $context["jb"], array(), "array")) {
                // line 17
                echo "        <div>
          <a href=\"";
                // line 18
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sitephys_physmvc_phys_element", array("idTopic" => ($context["idtop"] ?? null), "intLevel" => ($context["intlevel"] ?? null), "intEltLevel" => $context["jb"])), "html", null, true);
                echo "\">
            <img align=\"left\" src=\"";
                // line 19
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((("bundles/sitephysphysmvc/images/schemaphysmvcsimple" . $context["jb"]) . ".png")), "html", null, true);
                echo "\" alt=\"Schéma de l'élément du modèle global\" margin: \"0\" padding: \"0\" width=\"33%\" height=\"135px\" onmouseover=\"this.src='";
                echo twig_escape_filter($this->env, (("/bundles/sitephysphysmvc/images/schemaphysmvcsimplesombre" . $context["jb"]) . ".png"), "html", null, true);
                echo "'\" onmouseout=\"this.src='";
                echo twig_escape_filter($this->env, (("/bundles/sitephysphysmvc/images/schemaphysmvcsimple" . $context["jb"]) . ".png"), "html", null, true);
                echo "'\" />
          </a>
        </div>
      ";
            } else {
                // line 23
                echo "        <div>
          <img align=\"left\" src=\"";
                // line 24
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((("bundles/sitephysphysmvc/images/schemaphysmvcsimpleclair" . $context["jb"]) . ".png")), "html", null, true);
                echo "\" margin: \"0\" padding: \"0\" width=\"33%\" height=\"135px\" alt=\"Schéma élément non enregistré\" />
        </div>
      ";
            }
            // line 27
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['jb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "  </div>
";
    }

    // line 31
    public function block_sitephysphysmvc_body($context, array $blocks = array())
    {
        // line 32
        echo "  <div class=\"well\">
    <div id=\"hb\">Descriptions du niveau de base (global) ";
        // line 33
        echo twig_escape_filter($this->env, ($context["intlevel"] ?? null), "html", null, true);
        echo " du thème ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["topic"] ?? null), "title", array()), "html", null, true);
        echo " </div>
    <br />
    <nav id=\"tabs-nav\" class=\"clearfix\">
      <a href=\"#titre\">Titres des éléments</a><span>&nbsp;</span>
      <a href=\"#contenu\">Contenu(s)</a><span>&nbsp;</span>
      <a href=\"#evaluation\">Evaluation(s)</a><span>&nbsp;</span>
      <a href=\"#symbolisation\">Symbolisation(s)</a><span>&nbsp;</span>
    </nav>
    <div id=\"tabs-container\" onload=\"initTab()\">      
      <article id=\"titre\">
        Domaine : ";
        // line 43
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["domain"] ?? null), "title", array()), "html", null, true);
        echo " 
        <br />Thème : ";
        // line 44
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["topic"] ?? null), "title", array()), "html", null, true);
        echo " 
        ";
        // line 45
        $context["dimtopic"] = (twig_get_attribute($this->env, $this->getSourceContext(), ($context["topic"] ?? null), "mode", array()) - 2);
        // line 46
        echo "        <br />Dim du thème : ";
        echo twig_escape_filter($this->env, ($context["dimtopic"] ?? null), "html", null, true);
        echo " 
        <br />Mode du thème : ";
        // line 47
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["topic"] ?? null), "mode", array()), "html", null, true);
        echo " 
        <br />Niveau de base (global) : ";
        // line 48
        echo twig_escape_filter($this->env, ($context["intlevel"] ?? null), "html", null, true);
        echo " <br />
        ";
        // line 49
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 6));
        foreach ($context['_seq'] as $context["_key"] => $context["iEltLPos"]) {
            // line 50
            echo "          ";
            if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["tabboolelt"] ?? null), $context["iEltLPos"], array(), "array")) {
                // line 51
                echo "            <br />Titre élément ";
                echo twig_escape_filter($this->env, $context["iEltLPos"], "html", null, true);
                echo " : ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["phys"] ?? null), $context["iEltLPos"], array(), "array"), "title", array()), "html", null, true);
                echo " 
          ";
            }
            // line 53
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['iEltLPos'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "      </article>
      <article id=\"contenu\">
        Domaine : ";
        // line 56
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["domain"] ?? null), "title", array()), "html", null, true);
        echo " 
        <br />Thème : ";
        // line 57
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["topic"] ?? null), "title", array()), "html", null, true);
        echo "
        <br />Contenu du thème : ";
        // line 58
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["topic"] ?? null), "content", array()), "html", null, true);
        echo " 
        <br />Niveau de base (global) : ";
        // line 59
        echo twig_escape_filter($this->env, ($context["intlevel"] ?? null), "html", null, true);
        echo " <br />
        ";
        // line 60
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 6));
        foreach ($context['_seq'] as $context["_key"] => $context["iEltLPos"]) {
            // line 61
            echo "          ";
            if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["tabboolelt"] ?? null), $context["iEltLPos"], array(), "array")) {
                // line 62
                echo "            <br />Titre : ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["phys"] ?? null), $context["iEltLPos"], array(), "array"), "title", array()), "html", null, true);
                echo "
            <br />Contenu : ";
                // line 63
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["phys"] ?? null), $context["iEltLPos"], array(), "array"), "content", array()), "html", null, true);
                echo " <br />
          ";
            }
            // line 65
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['iEltLPos'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        echo "      </article>
      <article id=\"evaluation\">
        Domaine : ";
        // line 68
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["domain"] ?? null), "title", array()), "html", null, true);
        echo " 
        <br />Thème : ";
        // line 69
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["topic"] ?? null), "title", array()), "html", null, true);
        echo "
        <br />Contenu du thème : ";
        // line 70
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["topic"] ?? null), "content", array()), "html", null, true);
        echo " 
        <br />Niveau de base (global) : ";
        // line 71
        echo twig_escape_filter($this->env, ($context["intlevel"] ?? null), "html", null, true);
        echo " <br />
        ";
        // line 72
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 6));
        foreach ($context['_seq'] as $context["_key"] => $context["iEltLPos"]) {
            // line 73
            echo "          ";
            if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["tabboolelt"] ?? null), $context["iEltLPos"], array(), "array")) {
                // line 74
                echo "            <br />Titre : ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["phys"] ?? null), $context["iEltLPos"], array(), "array"), "title", array()), "html", null, true);
                echo "
            <br />Evaluation : ";
                // line 75
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["phys"] ?? null), $context["iEltLPos"], array(), "array"), "evaluation", array()), "html", null, true);
                echo " <br />
          ";
            }
            // line 77
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['iEltLPos'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 78
        echo "      </article>
      <article id=\"symbolisation\">
        Domaine : ";
        // line 80
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["domain"] ?? null), "title", array()), "html", null, true);
        echo " 
        <br />Thème : ";
        // line 81
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["topic"] ?? null), "title", array()), "html", null, true);
        echo "
        <br />Contenu du thème : ";
        // line 82
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["topic"] ?? null), "content", array()), "html", null, true);
        echo " 
        <br />Niveau de base (global) : ";
        // line 83
        echo twig_escape_filter($this->env, ($context["intlevel"] ?? null), "html", null, true);
        echo " <br />
        ";
        // line 84
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 6));
        foreach ($context['_seq'] as $context["_key"] => $context["iEltLPos"]) {
            // line 85
            echo "          ";
            if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["tabboolelt"] ?? null), $context["iEltLPos"], array(), "array")) {
                // line 86
                echo "            <br />Titre : ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["phys"] ?? null), $context["iEltLPos"], array(), "array"), "title", array()), "html", null, true);
                echo "
            <br />Symbolisation : ";
                // line 87
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["symbol"] ?? null), $context["iEltLPos"], array(), "array"), "html", null, true);
                echo " <br />
          ";
            }
            // line 89
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['iEltLPos'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 90
        echo "      </article>
    </div>
  </div>
";
    }

    public function getTemplateName()
    {
        return "SitephysPhysmvcBundle:Phys:global.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  299 => 90,  293 => 89,  288 => 87,  283 => 86,  280 => 85,  276 => 84,  272 => 83,  268 => 82,  264 => 81,  260 => 80,  256 => 78,  250 => 77,  245 => 75,  240 => 74,  237 => 73,  233 => 72,  229 => 71,  225 => 70,  221 => 69,  217 => 68,  213 => 66,  207 => 65,  202 => 63,  197 => 62,  194 => 61,  190 => 60,  186 => 59,  182 => 58,  178 => 57,  174 => 56,  170 => 54,  164 => 53,  156 => 51,  153 => 50,  149 => 49,  145 => 48,  141 => 47,  136 => 46,  134 => 45,  130 => 44,  126 => 43,  111 => 33,  108 => 32,  105 => 31,  100 => 28,  94 => 27,  88 => 24,  85 => 23,  74 => 19,  70 => 18,  67 => 17,  64 => 16,  60 => 15,  57 => 14,  54 => 13,  45 => 9,  42 => 8,  39 => 7,  34 => 4,  31 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "SitephysPhysmvcBundle:Phys:global.html.twig", "/var/www/html/sitephys/physmvc/src/Sitephys/PhysmvcBundle/Resources/views/Phys/global.html.twig");
    }
}
