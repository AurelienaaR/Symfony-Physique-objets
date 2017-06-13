<?php

/* SitephysPhysmvcBundle:Phys:hometopic.html.twig */
class __TwigTemplate_419d377f32c69dee44ec22251732ceccb2e1d74bdab8937633f87e4bf2c5f769 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SitephysPhysmvcBundle::layout.html.twig", "SitephysPhysmvcBundle:Phys:hometopic.html.twig", 1);
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
        echo "  Accueil des éléments du thème physique
";
    }

    // line 7
    public function block_sitephysphysmvc_section($context, array $blocks = array())
    {
        // line 8
        echo "  <div id=\"hw\">Accueil des éléments du thème ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["topi"] ?? null), "title", array()), "html", null, true);
        echo "</div>
";
    }

    // line 11
    public function block_sitephysphysmvc_image($context, array $blocks = array())
    {
        // line 12
        echo "<div class=\"groupphotos\">
  <div id=\"containerimghometopic\">
    ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(array(0 => 1, 1 => 2, 2 => 3, 3 => 6, 4 => 5, 5 => 4));
        foreach ($context['_seq'] as $context["_key"] => $context["ib"]) {
            // line 15
            echo "      ";
            if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["tabboolbase"] ?? null), $context["ib"], array(), "array")) {
                // line 16
                echo "        <div>
          <a href=\"";
                // line 17
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sitephys_physmvc_phys_global", array("idTopic" => ($context["idtop"] ?? null), "intLevel" => $context["ib"])), "html", null, true);
                echo "\">
            <img src=\"";
                // line 18
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((("bundles/sitephysphysmvc/images/schemaphysmvcglobal" . $context["ib"]) . ".png")), "html", null, true);
                echo "\" align=\"left\" margin: \"0\" padding: \"0\" width=\"33%\" alt=\"Schéma élément du modèle global\" onmouseover=\"this.src='";
                echo twig_escape_filter($this->env, (("/bundles/sitephysphysmvc/images/schemaphysmvcglobalsombre" . $context["ib"]) . ".png"), "html", null, true);
                echo "'\" onmouseout=\"this.src='";
                echo twig_escape_filter($this->env, (("/bundles/sitephysphysmvc/images/schemaphysmvcglobal" . $context["ib"]) . ".png"), "html", null, true);
                echo "'\" />
          </a>
        </div>
      ";
            } else {
                // line 22
                echo "        <div>
          <img src=\"";
                // line 23
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((("bundles/sitephysphysmvc/images/schemaphysmvcglobalclair" . $context["ib"]) . ".png")), "html", null, true);
                echo "\" align=\"left\" margin: \"0\" padding: \"0\" width=\"33%\" alt=\"Schéma élément non enregistré\" />
        </div>
      ";
            }
            // line 26
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ib'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "  </div>
</div>
";
    }

    // line 31
    public function block_sitephysphysmvc_body($context, array $blocks = array())
    {
        // line 32
        echo "  <div class=\"well\">

    <div id=\"hb\">Liste des éléments disponibles pour le thème ";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["topi"] ?? null), "title", array()), "html", null, true);
        echo " </div>
    <br />
    ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["listphys"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["listphysx"]) {
            // line 37
            echo "      <strong> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["listphysx"], "title", array()), "html", null, true);
            echo " </strong> du niveau :<span>&nbsp;</span>
      ";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["levelcontent"] ?? null), twig_get_attribute($this->env, $this->getSourceContext(), $context["listphysx"], "id", array()), array(), "array"), "html", null, true);
            echo "
      <span class=\"italique\"> par ";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["listphysx"], "author", array()), "html", null, true);
            echo ", le ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["listphysx"], "date", array()), "d/m/Y"), "html", null, true);
            echo "</span>
      <br />
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['listphysx'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "  </div>
  <br />
  <div id=\"eval-th\">
    <div class=\"button-eval\">
      <a href=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sitephys_physmvc_evaluation", array("idTopic" => ($context["idtop"] ?? null))), "html", null, true);
        echo "\">Evaluations du thème</a>
    </div>
  </div>

";
    }

    public function getTemplateName()
    {
        return "SitephysPhysmvcBundle:Phys:hometopic.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 46,  138 => 42,  127 => 39,  123 => 38,  118 => 37,  114 => 36,  109 => 34,  105 => 32,  102 => 31,  96 => 27,  90 => 26,  84 => 23,  81 => 22,  70 => 18,  66 => 17,  63 => 16,  60 => 15,  56 => 14,  52 => 12,  49 => 11,  42 => 8,  39 => 7,  34 => 4,  31 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "SitephysPhysmvcBundle:Phys:hometopic.html.twig", "/var/www/html/sitephys/physmvc/src/Sitephys/PhysmvcBundle/Resources/views/Phys/hometopic.html.twig");
    }
}
