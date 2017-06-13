<?php

/* SitephysPhysmvcBundle:Phys:home.html.twig */
class __TwigTemplate_0537bf036b643b0e1027d64fc651d00f72d8f0cc4ec49bfeb51abf2af17a6028 extends Twig_Template
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
        $__internal_c098c79570ee7228c4d527fd0a495b97ba75d0633a9bd107511b1928fe483203 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c098c79570ee7228c4d527fd0a495b97ba75d0633a9bd107511b1928fe483203->enter($__internal_c098c79570ee7228c4d527fd0a495b97ba75d0633a9bd107511b1928fe483203_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SitephysPhysmvcBundle:Phys:home.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c098c79570ee7228c4d527fd0a495b97ba75d0633a9bd107511b1928fe483203->leave($__internal_c098c79570ee7228c4d527fd0a495b97ba75d0633a9bd107511b1928fe483203_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_45cc49960e2f79f705f487feb414682e9ccdadcc48cb5082f3630bf091e800de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45cc49960e2f79f705f487feb414682e9ccdadcc48cb5082f3630bf091e800de->enter($__internal_45cc49960e2f79f705f487feb414682e9ccdadcc48cb5082f3630bf091e800de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Etudes des thèmes et domaines de physique  
";
        
        $__internal_45cc49960e2f79f705f487feb414682e9ccdadcc48cb5082f3630bf091e800de->leave($__internal_45cc49960e2f79f705f487feb414682e9ccdadcc48cb5082f3630bf091e800de_prof);

    }

    // line 7
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a68a4ffa58ba1be821a4945fcb4e029f60223755e550201a02535ae4f50f2d30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a68a4ffa58ba1be821a4945fcb4e029f60223755e550201a02535ae4f50f2d30->enter($__internal_a68a4ffa58ba1be821a4945fcb4e029f60223755e550201a02535ae4f50f2d30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 8
        echo "  ";
        $this->displayParentBlock("menu", $context, $blocks);
        echo "
";
        
        $__internal_a68a4ffa58ba1be821a4945fcb4e029f60223755e550201a02535ae4f50f2d30->leave($__internal_a68a4ffa58ba1be821a4945fcb4e029f60223755e550201a02535ae4f50f2d30_prof);

    }

    // line 11
    public function block_sitephysphysmvc_section($context, array $blocks = array())
    {
        $__internal_5b0dfd55ee0561b1aeb40ff8cf214b317dc3e2c8394fcd997764dccf24d3e668 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b0dfd55ee0561b1aeb40ff8cf214b317dc3e2c8394fcd997764dccf24d3e668->enter($__internal_5b0dfd55ee0561b1aeb40ff8cf214b317dc3e2c8394fcd997764dccf24d3e668_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sitephysphysmvc_section"));

        // line 12
        echo "  <div id=\"hw\">Accueil</div>
";
        
        $__internal_5b0dfd55ee0561b1aeb40ff8cf214b317dc3e2c8394fcd997764dccf24d3e668->leave($__internal_5b0dfd55ee0561b1aeb40ff8cf214b317dc3e2c8394fcd997764dccf24d3e668_prof);

    }

    // line 15
    public function block_sitephysphysmvc_image($context, array $blocks = array())
    {
        $__internal_c87e1c0be3460b5700fd02c854b083628d6ade612dbb84d1bceaa12db62b43e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c87e1c0be3460b5700fd02c854b083628d6ade612dbb84d1bceaa12db62b43e3->enter($__internal_c87e1c0be3460b5700fd02c854b083628d6ade612dbb84d1bceaa12db62b43e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sitephysphysmvc_image"));

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
        
        $__internal_c87e1c0be3460b5700fd02c854b083628d6ade612dbb84d1bceaa12db62b43e3->leave($__internal_c87e1c0be3460b5700fd02c854b083628d6ade612dbb84d1bceaa12db62b43e3_prof);

    }

    // line 25
    public function block_sitephysphysmvc_body($context, array $blocks = array())
    {
        $__internal_c858c5602bc46692cade6144df3b8f257e84d3ef3741309e0b473c2cccb83a0c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c858c5602bc46692cade6144df3b8f257e84d3ef3741309e0b473c2cccb83a0c->enter($__internal_c858c5602bc46692cade6144df3b8f257e84d3ef3741309e0b473c2cccb83a0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sitephysphysmvc_body"));

        // line 26
        echo "  <div class=\"well\">
    <div id=\"hb\">Domaines - thèmes enregistrés pour chaque type d'évolution</div><br />
    
    <nav id=\"tabs-nav\" class=\"clearfix\">
      ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["evol"]) || array_key_exists("evol", $context) ? $context["evol"] : (function () { throw new Twig_Error_Runtime('Variable "evol" does not exist.', 30, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["kex"] => $context["typex"]) {
            // line 31
            echo "        <span><a href=\"";
            echo twig_escape_filter($this->env, ("#evol" . $context["kex"]), "html", null, true);
            echo "\"> ";
            echo twig_escape_filter($this->env, $context["typex"], "html", null, true);
            echo " </a>&nbsp;</span>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['kex'], $context['typex'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "      ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["evolsample"]) || array_key_exists("evolsample", $context) ? $context["evolsample"] : (function () { throw new Twig_Error_Runtime('Variable "evolsample" does not exist.', 33, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["kez"] => $context["typez"]) {
            // line 34
            echo "        <span><a href=\"";
            echo twig_escape_filter($this->env, ("#evolsample" . $context["kez"]), "html", null, true);
            echo "\"> ";
            echo twig_escape_filter($this->env, $context["typez"], "html", null, true);
            echo " </a>&nbsp;</span>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['kez'], $context['typez'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "      <span><a href=\"";
        echo "#lasttentop";
        echo "\">Dix derniers thèmes</a>&nbsp;</span>
    </nav>

    <div id=\"tabs-container\" onload=\"initTab()\">
      ";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["evol"]) || array_key_exists("evol", $context) ? $context["evol"] : (function () { throw new Twig_Error_Runtime('Variable "evol" does not exist.', 40, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["key"] => $context["typey"]) {
            // line 41
            echo "        <article id=\"";
            echo twig_escape_filter($this->env, ("evol" . $context["key"]), "html", null, true);
            echo "\">
          ";
            // line 42
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["domtitle"]) || array_key_exists("domtitle", $context) ? $context["domtitle"] : (function () { throw new Twig_Error_Runtime('Variable "domtitle" does not exist.', 42, $this->getSourceContext()); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["domtitlex"]) {
                // line 43
                echo "            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["tabtopperdom"]) || array_key_exists("tabtopperdom", $context) ? $context["tabtopperdom"] : (function () { throw new Twig_Error_Runtime('Variable "tabtopperdom" does not exist.', 43, $this->getSourceContext()); })()), $context["key"], array(), "array"), twig_get_attribute($this->env, $this->getSourceContext(), $context["domtitlex"], "id", array()), array(), "array"));
                foreach ($context['_seq'] as $context["_key"] => $context["tabtopperdomx"]) {
                    // line 44
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
                // line 45
                echo "  
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['domtitlex'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 47
            echo "        </article>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['typey'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "      ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["evolsample"]) || array_key_exists("evolsample", $context) ? $context["evolsample"] : (function () { throw new Twig_Error_Runtime('Variable "evolsample" does not exist.', 49, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["kew"] => $context["typew"]) {
            // line 50
            echo "        <article id=\"";
            echo twig_escape_filter($this->env, ("evolsample" . $context["kew"]), "html", null, true);
            echo "\">
          ";
            // line 51
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["domtitle"]) || array_key_exists("domtitle", $context) ? $context["domtitle"] : (function () { throw new Twig_Error_Runtime('Variable "domtitle" does not exist.', 51, $this->getSourceContext()); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["domtitlesax"]) {
                // line 52
                echo "            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["tabtopperdomsa"]) || array_key_exists("tabtopperdomsa", $context) ? $context["tabtopperdomsa"] : (function () { throw new Twig_Error_Runtime('Variable "tabtopperdomsa" does not exist.', 52, $this->getSourceContext()); })()), $context["kew"], array(), "array"), twig_get_attribute($this->env, $this->getSourceContext(), $context["domtitlesax"], "id", array()), array(), "array"));
                foreach ($context['_seq'] as $context["_key"] => $context["tabtopperdomsax"]) {
                    // line 53
                    echo "              ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["domtitlesax"], "title", array()), "html", null, true);
                    echo " - <span><a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sitephys_physmvc_phys_sample", array("idTopic" => twig_get_attribute($this->env, $this->getSourceContext(), $context["tabtopperdomsax"], "id", array()))), "html", null, true);
                    echo "\"> ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["tabtopperdomsax"], "title", array()), "html", null, true);
                    echo " </a></span><br />
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tabtopperdomsax'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 54
                echo "  
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['domtitlesax'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 56
            echo "        </article>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['kew'], $context['typew'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "      <article id=\"";
        echo "lasttentop";
        echo "\">
        ";
        // line 59
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["lasttentop"]) || array_key_exists("lasttentop", $context) ? $context["lasttentop"] : (function () { throw new Twig_Error_Runtime('Variable "lasttentop" does not exist.', 59, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["lasttentopx"]) {
            // line 60
            echo "          ";
            if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["lasttentopx"], "mode", array()) < 5)) {
                // line 61
                echo "            <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sitephys_physmvc_phys_hometopic", array("idTopic" => twig_get_attribute($this->env, $this->getSourceContext(), $context["lasttentopx"], "id", array()))), "html", null, true);
                echo "\"><div> ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["lasttentopx"], "title", array()), "html", null, true);
                echo " (double niveau)</div></a> 
          ";
            } else {
                // line 63
                echo "            <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sitephys_physmvc_phys_sample", array("idTopic" => twig_get_attribute($this->env, $this->getSourceContext(), $context["lasttentopx"], "id", array()))), "html", null, true);
                echo "\"><div> ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["lasttentopx"], "title", array()), "html", null, true);
                echo " (simple niveau)</div></a> 
          ";
            }
            // line 65
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lasttentopx'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        echo "      </article>
    </div>

  </div>
";
        
        $__internal_c858c5602bc46692cade6144df3b8f257e84d3ef3741309e0b473c2cccb83a0c->leave($__internal_c858c5602bc46692cade6144df3b8f257e84d3ef3741309e0b473c2cccb83a0c_prof);

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
        return array (  284 => 66,  278 => 65,  270 => 63,  262 => 61,  259 => 60,  255 => 59,  250 => 58,  243 => 56,  236 => 54,  223 => 53,  218 => 52,  214 => 51,  209 => 50,  204 => 49,  197 => 47,  190 => 45,  177 => 44,  172 => 43,  168 => 42,  163 => 41,  159 => 40,  151 => 36,  140 => 34,  135 => 33,  124 => 31,  120 => 30,  114 => 26,  108 => 25,  96 => 19,  92 => 18,  88 => 16,  82 => 15,  74 => 12,  68 => 11,  58 => 8,  52 => 7,  44 => 4,  38 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"SitephysPhysmvcBundle::layout.html.twig\" %}

{% block title %}
  Etudes des thèmes et domaines de physique  
{% endblock %}

{% block menu %}
  {{ parent() }}
{% endblock %}

{% block sitephysphysmvc_section %}
  <div id=\"hw\">Accueil</div>
{% endblock %}

{% block sitephysphysmvc_image %}
  <div id=\"containerimghome\">
    <div class=\"containerthome\">
      <a href=\"{{ path('sitephys_physmvc_presentation') }}\">
        <img src=\"{{ asset('bundles/sitephysphysmvc/images/home-fond.jpg') }}\" class=\"homephoto\" alt=\"Lien vers la présentation du site\" title=\"Présentation du site Etudes des thèmes et domaines de physique\" />
      </a>
    </div>
  </div>
{% endblock %}

{% block sitephysphysmvc_body %}
  <div class=\"well\">
    <div id=\"hb\">Domaines - thèmes enregistrés pour chaque type d'évolution</div><br />
    
    <nav id=\"tabs-nav\" class=\"clearfix\">
      {% for kex, typex in evol %}
        <span><a href=\"{{ \"#evol\" ~ kex }}\"> {{ typex }} </a>&nbsp;</span>
      {% endfor %}
      {% for kez, typez in evolsample %}
        <span><a href=\"{{ \"#evolsample\" ~ kez }}\"> {{ typez }} </a>&nbsp;</span>
      {% endfor %}
      <span><a href=\"{{ \"#lasttentop\" }}\">Dix derniers thèmes</a>&nbsp;</span>
    </nav>

    <div id=\"tabs-container\" onload=\"initTab()\">
      {% for key, typey in evol %}
        <article id=\"{{ \"evol\" ~ key }}\">
          {% for domtitlex in domtitle %}
            {% for tabtopperdomx in tabtopperdom[key][domtitlex.id] %}
              {{ domtitlex.title }} - <span><a href=\"{{ path('sitephys_physmvc_phys_hometopic', {'idTopic': tabtopperdomx.id}) }}\"> {{ tabtopperdomx.title }} </a></span><br />
            {% endfor %}  
          {% endfor %}
        </article>
      {% endfor %}
      {% for kew, typew in evolsample %}
        <article id=\"{{ \"evolsample\" ~ kew }}\">
          {% for domtitlesax in domtitle %}
            {% for tabtopperdomsax in tabtopperdomsa[kew][domtitlesax.id] %}
              {{ domtitlesax.title }} - <span><a href=\"{{ path('sitephys_physmvc_phys_sample', {'idTopic': tabtopperdomsax.id}) }}\"> {{ tabtopperdomsax.title }} </a></span><br />
            {% endfor %}  
          {% endfor %}
        </article>
      {% endfor %}
      <article id=\"{{ \"lasttentop\" }}\">
        {% for lasttentopx in lasttentop %}
          {% if lasttentopx.mode < 5 %}
            <a href=\"{{ path('sitephys_physmvc_phys_hometopic', {'idTopic': lasttentopx.id}) }}\"><div> {{ lasttentopx.title }} (double niveau)</div></a> 
          {% else %}
            <a href=\"{{ path('sitephys_physmvc_phys_sample', {'idTopic': lasttentopx.id}) }}\"><div> {{ lasttentopx.title }} (simple niveau)</div></a> 
          {% endif %}
        {% endfor %}
      </article>
    </div>

  </div>
{% endblock %}
", "SitephysPhysmvcBundle:Phys:home.html.twig", "C:\\xampp\\physmvc\\src\\Sitephys\\PhysmvcBundle/Resources/views/Phys/home.html.twig");
    }
}
