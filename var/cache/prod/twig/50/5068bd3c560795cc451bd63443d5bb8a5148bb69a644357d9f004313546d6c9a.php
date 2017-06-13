<?php

/* SitephysPhysmvcBundle:Phys:home.html.twig */
class __TwigTemplate_bd211fb79248b1d2cf834638eb3b12f48d3bb19a2a31af6d74807d6d6bc3e41a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SitephysPhysmvcBundle::layout.html.twig", "SitephysPhysmvcBundle:Phys:home.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'menu' => array($this, 'block_menu'),
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
        echo "  Etudes des thèmes et domaines de physique  
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
    public function block_sitephysphysmvc_section($context, array $blocks = array())
    {
        // line 12
        echo "  <div id=\"hw\">Accueil</div>
";
    }

    // line 15
    public function block_sitephysphysmvc_image($context, array $blocks = array())
    {
        // line 16
        echo "  <div id=\"containerimghome\">
    <div class=\"containerthome\">
      <a href=\"";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sitephys_physmvc_presentation");
        echo "\">
        <img src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/sitephysphysmvc/images/home-fond.jpg"), "html", null, true);
        echo "\" class=\"homephoto\" alt=\"Lien vers la présentation du site\" title=\"Présentation du site Etudes des thèmes et domaines de physique\" />
      </a>
    </div>
  </div>
";
    }

    // line 25
    public function block_sitephysphysmvc_body($context, array $blocks = array())
    {
        // line 26
        echo "  <div class=\"well\">
    <div id=\"hb\">Domaines - thèmes enregistrés pour chaque type d'évolution</div><br />
    
    <nav id=\"tabs-nav\" class=\"clearfix\">
      ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["evol"] ?? null));
        foreach ($context['_seq'] as $context["kex"] => $context["typex"]) {
            // line 31
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, ("#evol" . $context["kex"]), "html", null, true);
            echo "\"> ";
            echo twig_escape_filter($this->env, $context["typex"], "html", null, true);
            echo " </a><span>&nbsp;</span>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['kex'], $context['typex'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "      <a href=\"";
        echo "#lasttentop";
        echo "\">Dix derniers thèmes</a><span>&nbsp;</span>
    </nav>

    <div id=\"tabs-container\" onload=\"initTab()\">
      ";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["evol"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["typey"]) {
            // line 38
            echo "        <article id=\"";
            echo twig_escape_filter($this->env, ("evol" . $context["key"]), "html", null, true);
            echo "\">
          ";
            // line 39
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["domtitle"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["domtitlex"]) {
                // line 40
                echo "            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["tabtopperdom"] ?? null), $context["key"], array(), "array"), twig_get_attribute($this->env, $this->getSourceContext(), $context["domtitlex"], "id", array()), array(), "array"));
                foreach ($context['_seq'] as $context["_key"] => $context["tabtopperdomx"]) {
                    // line 41
                    echo "              ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["domtitlex"], "title", array()), "html", null, true);
                    echo " - <span><a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sitephys_physmvc_phys_hometopic", array("idTopic" => twig_get_attribute($this->env, $this->getSourceContext(), $context["tabtopperdomx"], "id", array()))), "html", null, true);
                    echo "\"> ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["tabtopperdomx"], "title", array()), "html", null, true);
                    echo " </a></span><br />
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tabtopperdomx'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 42
                echo "  
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['domtitlex'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 44
            echo "        </article>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['typey'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "      <article id=\"";
        echo "lasttentop";
        echo "\">
        ";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["lasttentop"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["lasttentopx"]) {
            // line 48
            echo "          <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sitephys_physmvc_phys_hometopic", array("idTopic" => twig_get_attribute($this->env, $this->getSourceContext(), $context["lasttentopx"], "id", array()))), "html", null, true);
            echo "\"><div> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["lasttentopx"], "title", array()), "html", null, true);
            echo " </div></a>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lasttentopx'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "      </article>
    </div>

  </div>
";
    }

    public function getTemplateName()
    {
        return "SitephysPhysmvcBundle:Phys:home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  175 => 50,  164 => 48,  160 => 47,  155 => 46,  148 => 44,  141 => 42,  128 => 41,  123 => 40,  119 => 39,  114 => 38,  110 => 37,  102 => 33,  91 => 31,  87 => 30,  81 => 26,  78 => 25,  69 => 19,  65 => 18,  61 => 16,  58 => 15,  53 => 12,  50 => 11,  43 => 8,  40 => 7,  35 => 4,  32 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "SitephysPhysmvcBundle:Phys:home.html.twig", "/var/www/html/sitephys/physmvc/src/Sitephys/PhysmvcBundle/Resources/views/Phys/home.html.twig");
    }
}
