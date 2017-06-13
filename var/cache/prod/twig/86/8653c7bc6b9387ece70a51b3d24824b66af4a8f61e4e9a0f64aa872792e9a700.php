<?php

/* SitephysPhysmvcBundle:Phys:top.html.twig */
class __TwigTemplate_358713c16ac64b923b1adf83e01272b0edf7940a7ea4bd846bef6f60b3b4e5ee extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SitephysPhysmvcBundle::layout.html.twig", "SitephysPhysmvcBundle:Phys:top.html.twig", 1);
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
        echo "  Thèmes de physique et formulaires
";
    }

    // line 7
    public function block_sitephysphysmvc_section($context, array $blocks = array())
    {
        // line 8
        echo "  <div id=\"hw\">Thèmes et références de leur domaine</div>
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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/sitephysphysmvc/images/physics-schema.jpg"), "html", null, true);
        echo "\" class=\"homephoto\" alt=\"Image de thèmes\" />
    </div>
  </div>
";
    }

    // line 19
    public function block_sitephysphysmvc_body($context, array $blocks = array())
    {
        // line 20
        echo "  <div class=\"well\">
    <div id=\"hb\">Descriptions, liens et références par domaine</div><br />

    <nav id=\"tabs-nav\" class=\"clearfix\">
      ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["iddomobject"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["tti"]) {
            // line 25
            echo "        <span style = \"margin:8px; float:left;\">
          <a href=\"";
            // line 26
            echo twig_escape_filter($this->env, (("#" . "domaintopic") . twig_get_attribute($this->env, $this->getSourceContext(), $context["tti"], "id", array(), "array")), "html", null, true);
            echo "\"> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["tti"], "title", array(), "array"), "html", null, true);
            echo " </a>&nbsp;
        </span>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tti'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "      <span style = \"margin:8px; float:left;\">
        <a href=\"#reference\"> Références </a>
      </span>
    </nav>

    <div id=\"tabs-container\" onload=\"initTab()\">
      ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["iddomobject"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["iddomobjectx"]) {
            // line 36
            echo "        ";
            $context["iddomobjectxi"] = twig_get_attribute($this->env, $this->getSourceContext(), $context["iddomobjectx"], "id", array(), "array");
            // line 37
            echo "        <article id=";
            echo twig_escape_filter($this->env, ("domaintopic" . ($context["iddomobjectxi"] ?? null)), "html", null, true);
            echo ">
          ";
            // line 38
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), ($context["listtopic"] ?? null), ($context["iddomobjectxi"] ?? null), array(), "array"));
            foreach ($context['_seq'] as $context["_key"] => $context["iddomobjectxd"]) {
                // line 39
                echo "            <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sitephys_physmvc_phys_hometopic", array("idTopic" => twig_get_attribute($this->env, $this->getSourceContext(), $context["iddomobjectxd"], "id", array()))), "html", null, true);
                echo "\"> ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["iddomobjectxd"], "title", array()), "html", null, true);
                echo " </a><br />
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['iddomobjectxd'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 41
            echo "        </article>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['iddomobjectx'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "      <article id=\"reference\">
        ";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["titlecontref"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["titlecontrefx"]) {
            // line 45
            echo "          Domaine : ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["titlecontrefx"], "dtitle", array()), "html", null, true);
            echo ". Référence : ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["titlecontrefx"], "rtitle", array()), "html", null, true);
            echo " <br />
          Contenu : ";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["titlecontrefx"], "rcontent", array()), "html", null, true);
            echo " <br /><br />
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['titlecontrefx'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "      </article>
    </div>

  </div>
";
    }

    public function getTemplateName()
    {
        return "SitephysPhysmvcBundle:Phys:top.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 48,  145 => 46,  138 => 45,  134 => 44,  131 => 43,  124 => 41,  113 => 39,  109 => 38,  104 => 37,  101 => 36,  97 => 35,  89 => 29,  78 => 26,  75 => 25,  71 => 24,  65 => 20,  62 => 19,  54 => 14,  50 => 12,  47 => 11,  42 => 8,  39 => 7,  34 => 4,  31 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "SitephysPhysmvcBundle:Phys:top.html.twig", "/var/www/html/sitephys/physmvc/src/Sitephys/PhysmvcBundle/Resources/views/Phys/top.html.twig");
    }
}
