<?php

/* SitephysPhysmvcBundle:Phys:eval.html.twig */
class __TwigTemplate_5d430f381b42448cab36596657af2343069101a3d5647b8724dd079936bfac94 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SitephysPhysmvcBundle::layout.html.twig", "SitephysPhysmvcBundle:Phys:eval.html.twig", 1);
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
        echo "  Evaluations du thème physique
";
    }

    // line 7
    public function block_sitephysphysmvc_section($context, array $blocks = array())
    {
        // line 8
        echo "  <div id=\"hw\">Evaluations du thème ";
        echo twig_escape_filter($this->env, ($context["toptitle"] ?? null), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/sitephysphysmvc/images/schemaphysmvcglobal.png"), "html", null, true);
        echo "\" class=\"homephoto\" alt=\"Image de Evaluations du thème\" title =\"Evaluations du thème\" />
\t</div>
  </div>
";
    }

    // line 19
    public function block_sitephysphysmvc_body($context, array $blocks = array())
    {
        // line 20
        echo "  <div class=\"well\">
      <div id=\"hb\">Description par niveau des évaluations du thème ";
        // line 21
        echo twig_escape_filter($this->env, ($context["toptitle"] ?? null), "html", null, true);
        echo " </div><br />
      <nav id=\"tabs-nav\" class=\"clearfix\">
        ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 6));
        foreach ($context['_seq'] as $context["_key"] => $context["intevali"]) {
            // line 24
            echo "          ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, 6));
            foreach ($context['_seq'] as $context["_key"] => $context["intevalj"]) {
                // line 25
                echo "            ";
                if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["tabbool"] ?? null), $context["intevali"], array(), "array"), $context["intevalj"], array(), "array")) {
                    // line 26
                    echo "              <a href=\"";
                    echo twig_escape_filter($this->env, ((("#eval" . $context["intevali"]) . "-") . $context["intevalj"]), "html", null, true);
                    echo "\"> ";
                    echo twig_escape_filter($this->env, $context["intevali"], "html", null, true);
                    echo " - ";
                    echo twig_escape_filter($this->env, $context["intevalj"], "html", null, true);
                    echo " </a><span>&nbsp;</span>
            ";
                }
                // line 28
                echo "          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['intevalj'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 29
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['intevali'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "      </nav>
      <div id=\"tabs-container\"  onload=\"initTab()\">
        ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 6));
        foreach ($context['_seq'] as $context["_key"] => $context["intevalic"]) {
            // line 33
            echo "          ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, 6));
            foreach ($context['_seq'] as $context["_key"] => $context["intevaljc"]) {
                // line 34
                echo "            ";
                if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["tabbool"] ?? null), $context["intevalic"], array(), "array"), $context["intevaljc"], array(), "array")) {
                    // line 35
                    echo "              <article id=\"";
                    echo twig_escape_filter($this->env, ((("eval" . $context["intevalic"]) . "-") . $context["intevaljc"]), "html", null, true);
                    echo "\" >
                Niveau : ";
                    // line 36
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["tablevel"] ?? null), $context["intevalic"], array(), "array"), $context["intevaljc"], array(), "array"), "html", null, true);
                    echo " <br />
                Evaluation : ";
                    // line 37
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["tabeval"] ?? null), $context["intevalic"], array(), "array"), $context["intevaljc"], array(), "array"), "html", null, true);
                    echo " <br />
                Symbolisation : ";
                    // line 38
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["tabsym"] ?? null), $context["intevalic"], array(), "array"), $context["intevaljc"], array(), "array"), "html", null, true);
                    echo " <br /><br />
              </article>
            ";
                }
                // line 41
                echo "          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['intevaljc'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 42
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['intevalic'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "      </div>
  </div>
";
    }

    public function getTemplateName()
    {
        return "SitephysPhysmvcBundle:Phys:eval.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 43,  150 => 42,  144 => 41,  138 => 38,  134 => 37,  130 => 36,  125 => 35,  122 => 34,  117 => 33,  113 => 32,  109 => 30,  103 => 29,  97 => 28,  87 => 26,  84 => 25,  79 => 24,  75 => 23,  70 => 21,  67 => 20,  64 => 19,  56 => 14,  52 => 12,  49 => 11,  42 => 8,  39 => 7,  34 => 4,  31 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "SitephysPhysmvcBundle:Phys:eval.html.twig", "/var/www/html/sitephys/physmvc/src/Sitephys/PhysmvcBundle/Resources/views/Phys/eval.html.twig");
    }
}
