<?php

/* SitephysPhysmvcBundle:Phys:sample.html.twig */
class __TwigTemplate_dff2bf65ad292bc5eb0b97af2ace91b10326f57108815be0001543e749ed13d9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SitephysPhysmvcBundle::layout.html.twig", "SitephysPhysmvcBundle:Phys:sample.html.twig", 1);
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
        $__internal_b9f92edb4d1da0c83de06b6cacb6ff7b2363b5dbcb1b099dde5a3dafbc909cbf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9f92edb4d1da0c83de06b6cacb6ff7b2363b5dbcb1b099dde5a3dafbc909cbf->enter($__internal_b9f92edb4d1da0c83de06b6cacb6ff7b2363b5dbcb1b099dde5a3dafbc909cbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SitephysPhysmvcBundle:Phys:sample.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b9f92edb4d1da0c83de06b6cacb6ff7b2363b5dbcb1b099dde5a3dafbc909cbf->leave($__internal_b9f92edb4d1da0c83de06b6cacb6ff7b2363b5dbcb1b099dde5a3dafbc909cbf_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_5d708ff22ed2db606f975a1752cabf38356409ed7970ccd57de806a2319a1568 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d708ff22ed2db606f975a1752cabf38356409ed7970ccd57de806a2319a1568->enter($__internal_5d708ff22ed2db606f975a1752cabf38356409ed7970ccd57de806a2319a1568_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Eléments des niveaux simples du thème physique
";
        
        $__internal_5d708ff22ed2db606f975a1752cabf38356409ed7970ccd57de806a2319a1568->leave($__internal_5d708ff22ed2db606f975a1752cabf38356409ed7970ccd57de806a2319a1568_prof);

    }

    // line 7
    public function block_sitephysphysmvc_section($context, array $blocks = array())
    {
        $__internal_01892b77444eecf358e2052af74ac28b92b1838487955795c91440d26047a08a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01892b77444eecf358e2052af74ac28b92b1838487955795c91440d26047a08a->enter($__internal_01892b77444eecf358e2052af74ac28b92b1838487955795c91440d26047a08a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sitephysphysmvc_section"));

        // line 8
        echo "  <div id=\"hw\">Eléments des niveaux simples du thème ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["topic"]) || array_key_exists("topic", $context) ? $context["topic"] : (function () { throw new Twig_Error_Runtime('Variable "topic" does not exist.', 8, $this->getSourceContext()); })()), "title", array()), "html", null, true);
        echo " </div>
";
        
        $__internal_01892b77444eecf358e2052af74ac28b92b1838487955795c91440d26047a08a->leave($__internal_01892b77444eecf358e2052af74ac28b92b1838487955795c91440d26047a08a_prof);

    }

    // line 11
    public function block_sitephysphysmvc_image($context, array $blocks = array())
    {
        $__internal_5a0b9165eebfc8c485bab6ed1eb79ff9f3f4e02ddc35dc0d0b9733e627afe5b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a0b9165eebfc8c485bab6ed1eb79ff9f3f4e02ddc35dc0d0b9733e627afe5b9->enter($__internal_5a0b9165eebfc8c485bab6ed1eb79ff9f3f4e02ddc35dc0d0b9733e627afe5b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sitephysphysmvc_image"));

        // line 12
        echo "  <div id=\"containerimghome\">
    <div class=\"containerthome\">
      <img src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/sitephysphysmvc/images/schemaphysmvcelement.jpg"), "html", null, true);
        echo "\" class=\"homephoto\" alt=\"Image de niveaux basiques\" title=\"Schéma Elément simple avec les niveaux simples\" />
    </div>  
  </div>
";
        
        $__internal_5a0b9165eebfc8c485bab6ed1eb79ff9f3f4e02ddc35dc0d0b9733e627afe5b9->leave($__internal_5a0b9165eebfc8c485bab6ed1eb79ff9f3f4e02ddc35dc0d0b9733e627afe5b9_prof);

    }

    // line 19
    public function block_sitephysphysmvc_body($context, array $blocks = array())
    {
        $__internal_ca07c9e333949e6d422249e4b9c8026949ddafed2af0386bee9f2887cf7368a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca07c9e333949e6d422249e4b9c8026949ddafed2af0386bee9f2887cf7368a4->enter($__internal_ca07c9e333949e6d422249e4b9c8026949ddafed2af0386bee9f2887cf7368a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sitephysphysmvc_body"));

        // line 20
        echo "    <div class=\"well\">
      <div id=\"hb\">Descriptions de :  
        ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["indkey"]) || array_key_exists("indkey", $context) ? $context["indkey"] : (function () { throw new Twig_Error_Runtime('Variable "indkey" does not exist.', 22, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["levt"]) {
            // line 23
            echo "          <span> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["physelt"]) || array_key_exists("physelt", $context) ? $context["physelt"] : (function () { throw new Twig_Error_Runtime('Variable "physelt" does not exist.', 23, $this->getSourceContext()); })()), $context["levt"], array(), "array"), "title", array()), "html", null, true);
            echo ", </span> 
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['levt'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "      </div>
      <br />
      <nav id=\"tabs-nav\" class=\"clearfix\">
        <a href=\"#domaine\">Domaine et thème</a><span>&nbsp;</span>
        <a href=\"#niveau\">Niveau</a><span>&nbsp;</span>
        <a href=\"#contenu\">Contenu</a><span>&nbsp;</span>
        <a href=\"#evaluation\">Evaluation</a><span>&nbsp;</span>
        <a href=\"#symbolisation\">Symbolisation</a><span>&nbsp;</span>
        <a href=\"#reference\">Références</a>
        <a href=\"#author\">Création</a>
      </nav>
      <div id=\"tabs-container\" onload=\"initTab()\">
        <article id=\"domaine\">
          Domaine : ";
        // line 38
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["domain"]) || array_key_exists("domain", $context) ? $context["domain"] : (function () { throw new Twig_Error_Runtime('Variable "domain" does not exist.', 38, $this->getSourceContext()); })()), "title", array()), "html", null, true);
        echo "
          <br />Thème : ";
        // line 39
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["topic"]) || array_key_exists("topic", $context) ? $context["topic"] : (function () { throw new Twig_Error_Runtime('Variable "topic" does not exist.', 39, $this->getSourceContext()); })()), "content", array()), "html", null, true);
        echo "
          ";
        // line 40
        $context["dimtopic"] = (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["topic"]) || array_key_exists("topic", $context) ? $context["topic"] : (function () { throw new Twig_Error_Runtime('Variable "topic" does not exist.', 40, $this->getSourceContext()); })()), "mode", array()) - 6);
        // line 41
        echo "          <br />Evolution (logique ou chronologique) dans le thème par 
          ";
        // line 42
        if (((isset($context["dimtopic"]) || array_key_exists("dimtopic", $context) ? $context["dimtopic"] : (function () { throw new Twig_Error_Runtime('Variable "dimtopic" does not exist.', 42, $this->getSourceContext()); })()) ==  -1)) {
            echo " questionnements. ";
        }
        // line 43
        echo "          ";
        if (((isset($context["dimtopic"]) || array_key_exists("dimtopic", $context) ? $context["dimtopic"] : (function () { throw new Twig_Error_Runtime('Variable "dimtopic" does not exist.', 43, $this->getSourceContext()); })()) == 0)) {
            echo " connaissances établies. ";
        }
        // line 44
        echo "          ";
        if (((isset($context["dimtopic"]) || array_key_exists("dimtopic", $context) ? $context["dimtopic"] : (function () { throw new Twig_Error_Runtime('Variable "dimtopic" does not exist.', 44, $this->getSourceContext()); })()) == 1)) {
            echo " résolutions. ";
        }
        echo " 
          <br />Mode du thème : ";
        // line 45
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["topic"]) || array_key_exists("topic", $context) ? $context["topic"] : (function () { throw new Twig_Error_Runtime('Variable "topic" does not exist.', 45, $this->getSourceContext()); })()), "mode", array()), "html", null, true);
        echo "
        </article>
        <article id=\"niveau\">
          ";
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["indkey"]) || array_key_exists("indkey", $context) ? $context["indkey"] : (function () { throw new Twig_Error_Runtime('Variable "indkey" does not exist.', 48, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["levx"]) {
            // line 49
            echo "            Niveau ";
            echo twig_escape_filter($this->env, $context["levx"], "html", null, true);
            echo " : <br />
            Niveau de base <i>(global)</i> : ";
            // line 50
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["level"]) || array_key_exists("level", $context) ? $context["level"] : (function () { throw new Twig_Error_Runtime('Variable "level" does not exist.', 50, $this->getSourceContext()); })()), $context["levx"], array(), "array"), "levelBase", array()), "html", null, true);
            echo " 
            <br />Niveau de précision <i>(élément)</i> : 0 
            <br />Description du niveau : ";
            // line 52
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["level"]) || array_key_exists("level", $context) ? $context["level"] : (function () { throw new Twig_Error_Runtime('Variable "level" does not exist.', 52, $this->getSourceContext()); })()), $context["levx"], array(), "array"), "content", array()), "html", null, true);
            echo " <br /><br />
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['levx'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "        </article>
        <article id=\"contenu\">
          ";
        // line 56
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["indkey"]) || array_key_exists("indkey", $context) ? $context["indkey"] : (function () { throw new Twig_Error_Runtime('Variable "indkey" does not exist.', 56, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["levy"]) {
            // line 57
            echo "            Niveau ";
            echo twig_escape_filter($this->env, $context["levy"], "html", null, true);
            echo " : <br />
            Titre : ";
            // line 58
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["physelt"]) || array_key_exists("physelt", $context) ? $context["physelt"] : (function () { throw new Twig_Error_Runtime('Variable "physelt" does not exist.', 58, $this->getSourceContext()); })()), $context["levy"], array(), "array"), "title", array()), "html", null, true);
            echo " <br />
            Contenu : ";
            // line 59
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["physelt"]) || array_key_exists("physelt", $context) ? $context["physelt"] : (function () { throw new Twig_Error_Runtime('Variable "physelt" does not exist.', 59, $this->getSourceContext()); })()), $context["levy"], array(), "array"), "content", array()), "html", null, true);
            echo " <br /><br />
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['levy'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "        </article>
        <article id=\"evaluation\">
          ";
        // line 63
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["indkey"]) || array_key_exists("indkey", $context) ? $context["indkey"] : (function () { throw new Twig_Error_Runtime('Variable "indkey" does not exist.', 63, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["levz"]) {
            // line 64
            echo "            Niveau ";
            echo twig_escape_filter($this->env, $context["levz"], "html", null, true);
            echo " : <br />
            Evaluation : ";
            // line 65
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["physelt"]) || array_key_exists("physelt", $context) ? $context["physelt"] : (function () { throw new Twig_Error_Runtime('Variable "physelt" does not exist.', 65, $this->getSourceContext()); })()), $context["levz"], array(), "array"), "evaluation", array()), "html", null, true);
            echo " <br /><br />
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['levz'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        echo "        </article>
        <article id=\"symbolisation\">
          ";
        // line 69
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["indkey"]) || array_key_exists("indkey", $context) ? $context["indkey"] : (function () { throw new Twig_Error_Runtime('Variable "indkey" does not exist.', 69, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["levw"]) {
            // line 70
            echo "            Niveau ";
            echo twig_escape_filter($this->env, $context["levw"], "html", null, true);
            echo " : <br />
            ";
            // line 71
            $context["cptsym"] = 0;
            // line 72
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["symcontent"]) || array_key_exists("symcontent", $context) ? $context["symcontent"] : (function () { throw new Twig_Error_Runtime('Variable "symcontent" does not exist.', 72, $this->getSourceContext()); })()), $context["levw"], array(), "array"));
            foreach ($context['_seq'] as $context["_key"] => $context["symcontentx"]) {
                // line 73
                echo "              ";
                $context["cptsym"] = ((isset($context["cptsym"]) || array_key_exists("cptsym", $context) ? $context["cptsym"] : (function () { throw new Twig_Error_Runtime('Variable "cptsym" does not exist.', 73, $this->getSourceContext()); })()) + 1);
                // line 74
                echo "              Symbolisation ";
                echo twig_escape_filter($this->env, (isset($context["cptsym"]) || array_key_exists("cptsym", $context) ? $context["cptsym"] : (function () { throw new Twig_Error_Runtime('Variable "cptsym" does not exist.', 74, $this->getSourceContext()); })()), "html", null, true);
                echo " : ";
                echo twig_escape_filter($this->env, $context["symcontentx"], "html", null, true);
                echo " <br />
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['symcontentx'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 76
            echo "            <br /><br />
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['levw'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 78
        echo "        </article>
        <article id=\"reference\">
          ";
        // line 80
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["titlecontref"]) || array_key_exists("titlecontref", $context) ? $context["titlecontref"] : (function () { throw new Twig_Error_Runtime('Variable "titlecontref" does not exist.', 80, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["titlecontrefx"]) {
            // line 81
            echo "            Référence : ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["titlecontrefx"], "rtitle", array()), "html", null, true);
            echo " <br />
            ";
            // line 82
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["titlecontrefx"], "rcontent", array()), "html", null, true);
            echo " <br /><br />
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['titlecontrefx'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 84
        echo "          ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["indkey"]) || array_key_exists("indkey", $context) ? $context["indkey"] : (function () { throw new Twig_Error_Runtime('Variable "indkey" does not exist.', 84, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["levv"]) {
            // line 85
            echo "            Niveau ";
            echo twig_escape_filter($this->env, $context["levv"], "html", null, true);
            echo " : <br />
            Lien : <a href =\"";
            // line 86
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["physelt"]) || array_key_exists("physelt", $context) ? $context["physelt"] : (function () { throw new Twig_Error_Runtime('Variable "physelt" does not exist.', 86, $this->getSourceContext()); })()), $context["levv"], array(), "array"), "webLinks", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["physelt"]) || array_key_exists("physelt", $context) ? $context["physelt"] : (function () { throw new Twig_Error_Runtime('Variable "physelt" does not exist.', 86, $this->getSourceContext()); })()), $context["levv"], array(), "array"), "webLinks", array()), "html", null, true);
            echo "</a><br />
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['levv'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 88
        echo "        </article>
        <article id=\"author\"> 
          ";
        // line 90
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["indkey"]) || array_key_exists("indkey", $context) ? $context["indkey"] : (function () { throw new Twig_Error_Runtime('Variable "indkey" does not exist.', 90, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["levu"]) {
            // line 91
            echo "            Niveau ";
            echo twig_escape_filter($this->env, $context["levu"], "html", null, true);
            echo " : <br />
            Auteur : ";
            // line 92
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["physelt"]) || array_key_exists("physelt", $context) ? $context["physelt"] : (function () { throw new Twig_Error_Runtime('Variable "physelt" does not exist.', 92, $this->getSourceContext()); })()), $context["levu"], array(), "array"), "author", array()), "html", null, true);
            echo " <br />
            Date : ";
            // line 93
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["physelt"]) || array_key_exists("physelt", $context) ? $context["physelt"] : (function () { throw new Twig_Error_Runtime('Variable "physelt" does not exist.', 93, $this->getSourceContext()); })()), $context["levu"], array(), "array"), "date", array()), "d/m/Y H:i:s"), "html", null, true);
            echo " <br /><br />
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['levu'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 95
        echo "        </article>
      </div>
  </div>
";
        
        $__internal_ca07c9e333949e6d422249e4b9c8026949ddafed2af0386bee9f2887cf7368a4->leave($__internal_ca07c9e333949e6d422249e4b9c8026949ddafed2af0386bee9f2887cf7368a4_prof);

    }

    public function getTemplateName()
    {
        return "SitephysPhysmvcBundle:Phys:sample.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  336 => 95,  328 => 93,  324 => 92,  319 => 91,  315 => 90,  311 => 88,  301 => 86,  296 => 85,  291 => 84,  283 => 82,  278 => 81,  274 => 80,  270 => 78,  263 => 76,  252 => 74,  249 => 73,  244 => 72,  242 => 71,  237 => 70,  233 => 69,  229 => 67,  221 => 65,  216 => 64,  212 => 63,  208 => 61,  200 => 59,  196 => 58,  191 => 57,  187 => 56,  183 => 54,  175 => 52,  170 => 50,  165 => 49,  161 => 48,  155 => 45,  148 => 44,  143 => 43,  139 => 42,  136 => 41,  134 => 40,  130 => 39,  126 => 38,  111 => 25,  102 => 23,  98 => 22,  94 => 20,  88 => 19,  77 => 14,  73 => 12,  67 => 11,  57 => 8,  51 => 7,  43 => 4,  37 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"SitephysPhysmvcBundle::layout.html.twig\" %}

{% block title %}
  Eléments des niveaux simples du thème physique
{% endblock %}

{% block sitephysphysmvc_section %}
  <div id=\"hw\">Eléments des niveaux simples du thème {{ topic.title }} </div>
{% endblock %}

{% block sitephysphysmvc_image %}
  <div id=\"containerimghome\">
    <div class=\"containerthome\">
      <img src=\"{{ asset('bundles/sitephysphysmvc/images/schemaphysmvcelement.jpg') }}\" class=\"homephoto\" alt=\"Image de niveaux basiques\" title=\"Schéma Elément simple avec les niveaux simples\" />
    </div>  
  </div>
{% endblock %}

{% block sitephysphysmvc_body %}
    <div class=\"well\">
      <div id=\"hb\">Descriptions de :  
        {% for levt in indkey %}
          <span> {{ physelt[levt].title }}, </span> 
        {% endfor %}
      </div>
      <br />
      <nav id=\"tabs-nav\" class=\"clearfix\">
        <a href=\"#domaine\">Domaine et thème</a><span>&nbsp;</span>
        <a href=\"#niveau\">Niveau</a><span>&nbsp;</span>
        <a href=\"#contenu\">Contenu</a><span>&nbsp;</span>
        <a href=\"#evaluation\">Evaluation</a><span>&nbsp;</span>
        <a href=\"#symbolisation\">Symbolisation</a><span>&nbsp;</span>
        <a href=\"#reference\">Références</a>
        <a href=\"#author\">Création</a>
      </nav>
      <div id=\"tabs-container\" onload=\"initTab()\">
        <article id=\"domaine\">
          Domaine : {{ domain.title }}
          <br />Thème : {{ topic.content }}
          {% set dimtopic = topic.mode - 6 %}
          <br />Evolution (logique ou chronologique) dans le thème par 
          {% if dimtopic == -1 %} questionnements. {% endif %}
          {% if dimtopic == 0 %} connaissances établies. {% endif %}
          {% if dimtopic == 1 %} résolutions. {% endif %} 
          <br />Mode du thème : {{ topic.mode }}
        </article>
        <article id=\"niveau\">
          {% for levx in indkey %}
            Niveau {{ levx }} : <br />
            Niveau de base <i>(global)</i> : {{ level[levx].levelBase }} 
            <br />Niveau de précision <i>(élément)</i> : 0 
            <br />Description du niveau : {{ level[levx].content }} <br /><br />
          {% endfor %}
        </article>
        <article id=\"contenu\">
          {% for levy in indkey %}
            Niveau {{ levy }} : <br />
            Titre : {{ physelt[levy].title }} <br />
            Contenu : {{ physelt[levy].content }} <br /><br />
          {% endfor %}
        </article>
        <article id=\"evaluation\">
          {% for levz in indkey %}
            Niveau {{ levz }} : <br />
            Evaluation : {{ physelt[levz].evaluation }} <br /><br />
          {% endfor %}
        </article>
        <article id=\"symbolisation\">
          {% for levw in indkey %}
            Niveau {{ levw }} : <br />
            {% set cptsym = 0 %}
            {% for symcontentx in symcontent[levw] %}
              {% set cptsym = cptsym + 1 %}
              Symbolisation {{ cptsym }} : {{ symcontentx }} <br />
            {% endfor %}
            <br /><br />
          {% endfor %}
        </article>
        <article id=\"reference\">
          {% for titlecontrefx in titlecontref %}
            Référence : {{ titlecontrefx.rtitle }} <br />
            {{ titlecontrefx.rcontent }} <br /><br />
          {% endfor %}
          {% for levv in indkey %}
            Niveau {{ levv }} : <br />
            Lien : <a href =\"{{ physelt[levv].webLinks }}\">{{ physelt[levv].webLinks }}</a><br />
          {% endfor %}
        </article>
        <article id=\"author\"> 
          {% for levu in indkey %}
            Niveau {{ levu }} : <br />
            Auteur : {{ physelt[levu].author }} <br />
            Date : {{ physelt[levu].date|date('d/m/Y H:i:s') }} <br /><br />
          {% endfor %}
        </article>
      </div>
  </div>
{% endblock %}
", "SitephysPhysmvcBundle:Phys:sample.html.twig", "C:\\xampp\\physmvc\\src\\Sitephys\\PhysmvcBundle/Resources/views/Phys/sample.html.twig");
    }
}
