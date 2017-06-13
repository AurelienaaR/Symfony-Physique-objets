<?php

/* SitephysPhysmvcBundle:Edit:homeedit.html.twig */
class __TwigTemplate_646c004781c87862910dbafb555f809a1568b3d0fdcb40e740d2910a307b417d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SitephysPhysmvcBundle::layout.html.twig", "SitephysPhysmvcBundle:Edit:homeedit.html.twig", 1);
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
        echo "  Edition - Accueil
";
    }

    // line 7
    public function block_sitephysphysmvc_section($context, array $blocks = array())
    {
        // line 8
        echo "  <div id=\"hw\">Edition</div>
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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/sitephysphysmvc/images/BoseEinsteincondensation.jpg"), "html", null, true);
        echo "\" class=\"homephoto\" alt=\"Image de Accueil - Edition\" />
\t</div>
  </div>
";
    }

    // line 19
    public function block_sitephysphysmvc_body($context, array $blocks = array())
    {
        // line 20
        echo "  <div class=\"well\">
    <div id=\"hb\">Eléments par type d'édition (accessibilité selon le rôle validé)</div><br />

    <nav id=\"tabs-nav\" class=\"clearfix\">
      <a href=\"#consultelt\">Eléments</a><span>&nbsp;</span>
      ";
        // line 25
        if (($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_AUTHOR") && ($context["authorized"] ?? null))) {
            // line 26
            echo "        <a href=\"#modif\">Modification d'élément</a><span>&nbsp;</span>
      ";
        } else {
            // line 28
            echo "        <span>Modification d'élément (auteurs)</span><span>&nbsp;</span>
      ";
        }
        // line 30
        echo "      ";
        if ((($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_USER") || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_AUTHOR")) && ($context["authorized"] ?? null))) {
            // line 31
            echo "        <a href=\"#consultupd\">Eléments modifiés</a><span>&nbsp;</span>
      ";
        } else {
            // line 33
            echo "        <span>Eléments modifiés (utilisateurs)</span><span>&nbsp;</span>
      ";
        }
        // line 35
        echo "      ";
        if (($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_AUTHOR") && ($context["authorized"] ?? null))) {
            // line 36
            echo "        <a href=\"#add\">Ajout de domaine</a><span>&nbsp;</span>
      ";
        } else {
            // line 38
            echo "        <span>Ajout de domaine (auteurs)</span><span>&nbsp;</span>
      ";
        }
        // line 40
        echo "      ";
        if ((($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_USER") || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_AUTHOR")) && ($context["authorized"] ?? null))) {
            // line 41
            echo "        <a href=\"#consultadd\">Domaines ajoutés</a><span>&nbsp;</span>
      ";
        } else {
            // line 43
            echo "        <span>Domaines ajoutés (utilisateurs)</span><span>&nbsp;</span>
      ";
        }
        // line 45
        echo "      ";
        if (($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_AUTHOR") && ($context["authorized"] ?? null))) {
            // line 46
            echo "        <a href=\"#addtopic\">Ajout de thème</a><span>&nbsp;</span>
      ";
        } else {
            // line 48
            echo "        <span>Ajout de thème (auteurs)</span><span>&nbsp;</span>
      ";
        }
        // line 50
        echo "      ";
        if ((($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_USER") || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_AUTHOR")) && ($context["authorized"] ?? null))) {
            // line 51
            echo "        <a href=\"#consultaddtopic\">Thèmes ajoutés</a>
      ";
        } else {
            // line 53
            echo "        <span>Thèmes ajoutés (utilisateurs)</span>
      ";
        }
        // line 55
        echo "    </nav>

    <div id=\"tabs-container\" onload=\"initTab()\">
      <article id=\"consultelt\">
        ";
        // line 59
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["physphyss"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["physphyssx"]) {
            // line 60
            echo "          <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sitephys_physmvc_phys_view", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["physphyssx"], "id", array()))), "html", null, true);
            echo "\">
          ";
            // line 61
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["physphyssx"], "title", array()), "html", null, true);
            echo " </a><span>&nbsp;</span>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['physphyssx'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        echo "      </article>
      <article id=\"modif\">
        ";
        // line 65
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["physphyss"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["physphyssy"]) {
            // line 66
            echo "          <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sitephys_physmvc_edition_update", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["physphyssy"], "id", array()))), "html", null, true);
            echo "\">
          ";
            // line 67
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["physphyssy"], "title", array()), "html", null, true);
            echo " </a><span>&nbsp;</span>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['physphyssy'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        echo " 
      </article> 
      <article id=\"consultupd\">
        ";
        // line 71
        $context["idprec"] = 0;
        // line 72
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["physupphys"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["physupphysx"]) {
            // line 73
            echo "          ";
            if ((($context["idprec"] ?? null) != twig_get_attribute($this->env, $this->getSourceContext(), $context["physupphysx"], "id", array()))) {
                // line 74
                echo "            <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sitephys_physmvc_edition_viewupd", array("idphys" => twig_get_attribute($this->env, $this->getSourceContext(), $context["physupphysx"], "id", array()))), "html", null, true);
                echo "\"> ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["physupphysx"], "title", array()), "html", null, true);
                echo " </a><span>&nbsp;</span>
          ";
            }
            // line 76
            echo "          ";
            $context["idprec"] = twig_get_attribute($this->env, $this->getSourceContext(), $context["physupphysx"], "id", array());
            // line 77
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['physupphysx'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 78
        echo "      </article>
      <article id=\"add\">
        <a href=\"";
        // line 80
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sitephys_physmvc_edition_add");
        echo "\"> Domaine </a>
      </article>
      <article id=\"consultadd\">
        ";
        // line 83
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["physphysadds"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["physphysaddsx"]) {
            // line 84
            echo "          <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sitephys_physmvc_edition_viewadd", array("idadd" => twig_get_attribute($this->env, $this->getSourceContext(), $context["physphysaddsx"], "id", array()))), "html", null, true);
            echo "\"> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["physphysaddsx"], "title", array()), "html", null, true);
            echo " </a><span>&nbsp;</span>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['physphysaddsx'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 86
        echo "      </article>
      <article id=\"addtopic\">
      ";
        // line 88
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["physdomains"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["physdomainsx"]) {
            // line 89
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sitephys_physmvc_edition_addtopic", array("iddom" => twig_get_attribute($this->env, $this->getSourceContext(), $context["physdomainsx"], "id", array()))), "html", null, true);
            echo "\"> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["physdomainsx"], "title", array()), "html", null, true);
            echo " </a>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['physdomainsx'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 91
        echo "      </article>
      <article id=\"consultaddtopic\">
        ";
        // line 93
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["physphysaddtopics"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["physphysaddtopicsx"]) {
            // line 94
            echo "          <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sitephys_physmvc_edition_viewaddtopic", array("idaddtopic" => twig_get_attribute($this->env, $this->getSourceContext(), $context["physphysaddtopicsx"], "id", array()))), "html", null, true);
            echo "\"> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["physphysaddtopicsx"], "title", array()), "html", null, true);
            echo " </a><span>&nbsp;&nbsp;</span>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['physphysaddtopicsx'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 96
        echo "      </article>
    </div>

  </div>
";
    }

    public function getTemplateName()
    {
        return "SitephysPhysmvcBundle:Edit:homeedit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  276 => 96,  265 => 94,  261 => 93,  257 => 91,  246 => 89,  242 => 88,  238 => 86,  227 => 84,  223 => 83,  217 => 80,  213 => 78,  207 => 77,  204 => 76,  196 => 74,  193 => 73,  188 => 72,  186 => 71,  181 => 68,  173 => 67,  168 => 66,  164 => 65,  160 => 63,  152 => 61,  147 => 60,  143 => 59,  137 => 55,  133 => 53,  129 => 51,  126 => 50,  122 => 48,  118 => 46,  115 => 45,  111 => 43,  107 => 41,  104 => 40,  100 => 38,  96 => 36,  93 => 35,  89 => 33,  85 => 31,  82 => 30,  78 => 28,  74 => 26,  72 => 25,  65 => 20,  62 => 19,  54 => 14,  50 => 12,  47 => 11,  42 => 8,  39 => 7,  34 => 4,  31 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "SitephysPhysmvcBundle:Edit:homeedit.html.twig", "/var/www/html/sitephys/physmvc/src/Sitephys/PhysmvcBundle/Resources/views/Edit/homeedit.html.twig");
    }
}
