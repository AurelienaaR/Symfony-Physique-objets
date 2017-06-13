<?php

/* SitephysPhysmvcBundle:Phys:presentation.html.twig */
class __TwigTemplate_28cd853d9bf1758672dff7c11a5ad67a793342950a4cf83074eb859eb2b34471 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SitephysPhysmvcBundle::layout.html.twig", "SitephysPhysmvcBundle:Phys:presentation.html.twig", 1);
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
        $__internal_d17eeeb175a28f4e5aedc22558178ef8e8b5c10f5c405e7a27b933ce065034af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d17eeeb175a28f4e5aedc22558178ef8e8b5c10f5c405e7a27b933ce065034af->enter($__internal_d17eeeb175a28f4e5aedc22558178ef8e8b5c10f5c405e7a27b933ce065034af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SitephysPhysmvcBundle:Phys:presentation.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d17eeeb175a28f4e5aedc22558178ef8e8b5c10f5c405e7a27b933ce065034af->leave($__internal_d17eeeb175a28f4e5aedc22558178ef8e8b5c10f5c405e7a27b933ce065034af_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_d7657964f56d6c522576637b2ca2fa3b2497e5397d313cbf53e7b5e9aed544af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7657964f56d6c522576637b2ca2fa3b2497e5397d313cbf53e7b5e9aed544af->enter($__internal_d7657964f56d6c522576637b2ca2fa3b2497e5397d313cbf53e7b5e9aed544af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Présentation du site Etudes des thèmes et domaines de physique 
";
        
        $__internal_d7657964f56d6c522576637b2ca2fa3b2497e5397d313cbf53e7b5e9aed544af->leave($__internal_d7657964f56d6c522576637b2ca2fa3b2497e5397d313cbf53e7b5e9aed544af_prof);

    }

    // line 7
    public function block_sitephysphysmvc_section($context, array $blocks = array())
    {
        $__internal_3157d3013860bab4ceebbffa742ea79a3dfd0ddac208fd3c15658744553ad8ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3157d3013860bab4ceebbffa742ea79a3dfd0ddac208fd3c15658744553ad8ef->enter($__internal_3157d3013860bab4ceebbffa742ea79a3dfd0ddac208fd3c15658744553ad8ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sitephysphysmvc_section"));

        // line 8
        echo "  <div id=\"hw\">Présentation du site</div>
";
        
        $__internal_3157d3013860bab4ceebbffa742ea79a3dfd0ddac208fd3c15658744553ad8ef->leave($__internal_3157d3013860bab4ceebbffa742ea79a3dfd0ddac208fd3c15658744553ad8ef_prof);

    }

    // line 11
    public function block_sitephysphysmvc_image($context, array $blocks = array())
    {
        $__internal_864287d49a5aefd1e4245938f6c29dd48348e3bf58629bf5bc74d4ed992c8971 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_864287d49a5aefd1e4245938f6c29dd48348e3bf58629bf5bc74d4ed992c8971->enter($__internal_864287d49a5aefd1e4245938f6c29dd48348e3bf58629bf5bc74d4ed992c8971_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sitephysphysmvc_image"));

        // line 12
        echo "  <div id=\"containerimghome\">
    <div class=\"containerthome\">
      <img src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/sitephysphysmvc/images/schemaphysmvcelement.jpg"), "html", null, true);
        echo "\" class=\"homephoto\" alt=\"Image de niveaux basiques\" title=\"Schéma Elément simple avec les niveaux\" />
\t  </div>\t
  </div>
";
        
        $__internal_864287d49a5aefd1e4245938f6c29dd48348e3bf58629bf5bc74d4ed992c8971->leave($__internal_864287d49a5aefd1e4245938f6c29dd48348e3bf58629bf5bc74d4ed992c8971_prof);

    }

    // line 19
    public function block_sitephysphysmvc_body($context, array $blocks = array())
    {
        $__internal_eb77ef9cddc31c4450d51d3fb17897b33c283df23eaef446e822a4ecfc098e6d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb77ef9cddc31c4450d51d3fb17897b33c283df23eaef446e822a4ecfc098e6d->enter($__internal_eb77ef9cddc31c4450d51d3fb17897b33c283df23eaef446e822a4ecfc098e6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sitephysphysmvc_body"));

        // line 20
        echo "  <div class=\"well\">

    <div id=\"hb\">Etudes des attributs et fonctionnalités des éléments de physique</div><br />
      <nav id=\"tabs-nav\" class=\"clearfix\">
        <a href=\"#modele\">Modèles objets</a><span>&nbsp;</span>
        <a href=\"#editions\">Editions (fonctionnalités)</a><span>&nbsp;</span>
        <a href=\"#appli\">Applications</a><span>&nbsp;</span>
        <a href=\"#domaines\">Domaines</a><span>&nbsp;</span>
        <a href=\"#niveaux\">Niveaux</a><span>&nbsp;</span>
        <a href=\"#modes\">Modes</a><span>&nbsp;</span>
        <a href=\"#symbolisation\">Symbolisations</a><span>&nbsp;</span>
      </nav>


    <div id=\"tabs-container\" onload=\"initTab()\">

        <article id=\"modele\">
          <ul>Les <strong>langages orientés objet</strong> reproduisent des réalités physiques : valeurs (expérimentales ou théoriques) et fonctionnalités, avec leurs évolutions (logiques ou chronologiques, erratiques ou astreintes) dans un cadre d'études au sein d'un environnement déterminé (modélisé ou non). Leurs éléments structurels sont les classes, elles-mêmes objets d'études au sein de cet environnement, pouvant être définies par héritage, interface, classe abstraite... Situées dans un namespace du schéma général du système, elles sont constituées de leurs variables (attributs) et de leurs fonctionnalités (méthodes) propres. Elles peuvent être en relation avec d'autres classes présentes. Les objets sont des instances de ces classes. Les relations (binaires exp. - th., forme - fond, classes - objets, attributs - méthodes, ...) au sein et entre classes et objets font du langage objet une autocomplétion de la description des éléments physiques et de leurs interactions pour un environnement défini. <br />
            <br /><li> Modèle du <strong>cycle en V</strong> : méthode de gestion de projet avec l'évolution suivante : 
            théorie (conception, spécifications) -> expérimentale (codage, détails du développement) -> théorie (fonctionnalités du produit, recette) décrivant un V (augmentation puis diminution du détail) avec les comparaisons horizontales (mêmes niveaux entre les deux branches du V) du projet.</li><br />
            <li> Méthodes <strong>Agile</strong> pour un projet de site Web : évolutions en cycles adaptatifs avec des échanges (description, analyses, propositions, corrections, améliorations, ...) entre clients et intégrateurs/développeurs ou entre intégrateurs/développeurs, qui sont définis, adaptés et fréquents.</li><br />
            <li> Modèles <strong>MVC</strong> avec (analogies) : Modèle (exp. in) - Vue (exp. out) - Contrôleur (th.). Séparation des fonctionnalités d'un système développé (logiciel, site, API, ...) permettant une conformité, une réalisation, une maintenance et une évolution efficaces et plus aisées.</li>
          </ul>
        </article>

        <article id=\"appli\">
\t\t\t<ul><strong>Applications</strong> concernant les évolutions de projets en physique - chimie : modèles orientés objet sur le fond (méthodes d'évolution pour un thème donné des systèmes, éléments quantifiés ou qualifiés, variables, environnements, référentiels, lois, théories, ...) : <br />
            <br /><li> Conceptions, évaluations, analyses, interactions, comparaisons, vérifications pour des émergences du hasard (systèmes sans contraintes, aléatoires, isolés, induisant la possibilité d'études statistiques, ...) ou bien utilisation des nécessités (logiques, de symétrie, de symétrie de jauge, de constance, de conservation, d'équilibres, de changement d'état, de propriétés, de minimalisation de variables, d'optimisation, ...) selon le cadre d'études (définitions, environnements, référentiels, repères, variables, ensembles, principes, postulats, ...). </li>
            <br /><li> Modèles objet pour la forme (avec par exemple adaptation des modèles sur le fond) : méthodes d'évolution de projet, systèmes organisationnels, méthodes de production de méthodes, ... </li>
            <br /><li> Types d'analyses de base sur des sujets expérimentaux ou théoriques (environnements, cadres, systèmes ou variables d'études et modèles, lois, entités physiques, ...) par : mesures, évaluations (empiriques), causalités discrètes (états successifs), considérations d'espèces aléatoires, modélisation aux éléments finis, analogies, ... </li>
            <br /><li> Types d'analyses évoluées sur des sujets expérimentaux ou théoriques (environnements, cadres, systèmes ou variables d'études et modèles, lois, entités physiques, ...) par : symbolisation, généralisation, englobement, conversions discret - continu, complexification, simplification, optimisation, récursivité, apprentissage de méthodes, ... </li>
          </ul>
        </article>

        <article id=\"editions\">
          <ul><strong>Editions</strong> (accès aux fonctionnalités) : <br />
            <br /><li> Visiteurs : consultation des éléments actuels.</li>
            <li> Utilisateurs (users) : gestion de compte, consultation des éléments actuels, éléments modifiés et ajoutés.</li>
            <li> Auteurs (authors) : gestion de compte, ajoût de domaine, consultation et modification des éléments actuels, ou consultation des éléments modifiés et ajoutés.</li>
            <li> Administrateurs (administrators) : gestion des utilisateurs, ajout de domaine et thèmes, consultation, modification et ajoût des éléments actuels, éléments modifiés et ajoutés.</li>
          </ul>
        </article>

        <article id=\"domaines\">
          <ul><strong>Domaines</strong> disponibles : <br /><br />
            ";
        // line 65
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["domain"]) || array_key_exists("domain", $context) ? $context["domain"] : (function () { throw new Twig_Error_Runtime('Variable "domain" does not exist.', 65, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["domainx"]) {
            // line 66
            echo "              <li> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["domainx"], "title", array()), "html", null, true);
            echo " </li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['domainx'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        echo "\t\t  </ul>
        </article>

        <article id=\"niveaux\">
          <strong>Schéma général</strong> à simples niveaux : seuls éléments de 1 à 6.
          <br /> <strong>Schéma général</strong> à doubles niveaux :<br /><br />
          <img src=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/sitephysphysmvc/images/schemaphysmvcglobal.png"), "html", null, true);
        echo "\" id=\"containerimghome\" alt=\"Image de niveaux globaux\" title=\"Schéma global\" /><br />
          <ul><strong>Niveaux</strong> des éléments pour chaque thème : <br />
            <br /><li> Niveau de base (global, nb de 1 à 6, cf. schéma ci-dessus pour les éléments globaux). </li><br />
\t\t\t<li> Niveau de précision (np de 1 à 6 : niveau d'élément dans un élément global, cf. schéma ci-dessus pour les éléments simples de chacun des éléments globaux). </li><br /> 
            <li> Niveau de précision np = 0 : niveau global de l'élément d'un niveau de base nb. </li><br /> 
            <li> Description formelle des niveaux de précision np (1 : \"exp. in\" et Action = \"Observation\", 2 : \"th.\" et Action = \"Formalisation\" ou bien 3 : \"exp. out\" et Action = \"Analyse, application\") de la chaîne d'entrée : <br />
            Action (niveau de précision « np ») dans le cadre utilisé de la chaîne d'entrée du niveau de base  « nb » des sorties établies au niveau nb – (np - 1) ou bien si np = 1, (nb - 1) – 3 (si nb > 1, sinon \"Entrées générales\") et nb – 6. Cette action produit des sorties, entrées du niveau nb – (np + 1) (et (nb + 1) – 1 si np = 3). </li><br />
            <li> Description formelle des niveaux de précision np (4 : \"exp. in\" et Action = \"Observation\", 5 : \"th.\" et Action = \"Formalisation\" ou bien 6 : \"exp. out\" et Action = \"Analyse, application\") de la chaîne de retour : <br />
            Action explicite ou implicite (niveau de précision « np ») dans le cadre utilisé de la chaîne de retour du niveau de base  « nb » des sorties établies au niveau nb – (np - 1). Ses fonctions (méthodes) d'études par rapport au niveau nb – (np - 3)  et ses valeurs (attributs) d'études par rapport au niveau nb – (7 - np) (comparaisons par les évaluations entre les niveaux d'avancée équivalente) peuvent être inchangés, redéfinis, précisés, modifiés, simplifiés, complexifiés, extrapolés... Cette action produit des sorties, entrées du niveau nb – (np + 1) ou nb – 1 si np = 6. </li>
          </ul>
        </article>

        <article id=\"modes\">
          <ul><strong>Etendue d'évolution</strong> d'éléments, d'une dimension <strong>dim</strong> positive pour le thème défini, étudié suivant une évolution elle-même causale discrète (par niveau : 1 - 1, 1 - 2, ..., 6 - 5, 6 - 6), de résolutions, sans question, dans l'environnement et cadre d'études, comprenant également les éléments identifiés du système. On note mode = dim + 2. Pour dim = ... <br />
            <li> 2 ou plus : champ, espace (états et gradients de multiplicité de 1 jusqu'à dim, implicites ou explicites) de résolutions.</li>
            <li> 1 : points (états) et leur direction locale (orientation implicite ou explicite).</li>
          </ul>
          <ul>Présentation d'éléments établis (dim = 0) du thème (système pour la forme ou pour le fond) étudié suivant une évolution causale discrète (par niveau : 1 - 1, 1 - 2, ..., 6 - 5, 6 - 6) de positions acquises ou prédites dans l'environnement d'étude comprenant lui-même les éléments identifiés du système : <br />
            <li> 0 : points (états).</li>
          </ul>
          <ul>Etendue de recherche d'éléments de dimension dim négative pour le thème défini, étudié suivant une évolution elle-même causale discrète (par niveau : 1 - 1, 1 - 2, ..., 6 - 5, 6 - 6) comprenant au moins une question et avec d'éventuelles résolutions, dans l'environnement et cadre d'études, comprenant également les éléments identifiés du système. On note mode = dim + 2. Pour dim = ... <br />
            <li> -1 : points (états) et leur direction locale (orientation implicite ou explicite).</li>
            <li> -2 ou moins : champ, espace (états et gradients de multiplicité de 1 jusqu'à -dim, implicites ou explicites) de questionnements (au moins un) et d'éventuelles résolutions.</li>
          </ul>
        </article>

        <article id=\"symbolisation\">
\t\t\t    <strong>Symbolisations</strong> (De l'expérimentation : moyens, protocoles de sélection, de mise en oeuvre, d'utilisation, de précision, de tests, ... et de la théorie : outils de recueil, utilisation et analyse des références théoriques existantes, outils de formulations et de conformités de théories inexistantes, apprentissages informatiques, ...) disponibles suivant l'ensemble des thèmes : <br /><br />

          ";
        // line 103
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 6));
        foreach ($context['_seq'] as $context["_key"] => $context["levp"]) {
            // line 104
            echo "            Niveau ";
            echo twig_escape_filter($this->env, $context["levp"], "html", null, true);
            echo " : <br />
            ";
            // line 105
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["level"]) || array_key_exists("level", $context) ? $context["level"] : (function () { throw new Twig_Error_Runtime('Variable "level" does not exist.', 105, $this->getSourceContext()); })()), $context["levp"], array(), "array"), "content", array()), "html", null, true);
            echo " <br />
            ";
            // line 106
            $context["cptsym"] = 0;
            // line 107
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["symcontent"]) || array_key_exists("symcontent", $context) ? $context["symcontent"] : (function () { throw new Twig_Error_Runtime('Variable "symcontent" does not exist.', 107, $this->getSourceContext()); })()), $context["levp"], array(), "array"));
            foreach ($context['_seq'] as $context["_key"] => $context["symcontentx"]) {
                // line 108
                echo "              ";
                $context["cptsym"] = ((isset($context["cptsym"]) || array_key_exists("cptsym", $context) ? $context["cptsym"] : (function () { throw new Twig_Error_Runtime('Variable "cptsym" does not exist.', 108, $this->getSourceContext()); })()) + 1);
                // line 109
                echo "              <br />Symbolisation ";
                echo twig_escape_filter($this->env, (isset($context["cptsym"]) || array_key_exists("cptsym", $context) ? $context["cptsym"] : (function () { throw new Twig_Error_Runtime('Variable "cptsym" does not exist.', 109, $this->getSourceContext()); })()), "html", null, true);
                echo " : ";
                echo twig_escape_filter($this->env, $context["symcontentx"], "html", null, true);
                echo " 
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['symcontentx'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 111
            echo "            <br /><br />
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['levp'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 113
        echo "        </article>
      </div>
    </div>

";
        
        $__internal_eb77ef9cddc31c4450d51d3fb17897b33c283df23eaef446e822a4ecfc098e6d->leave($__internal_eb77ef9cddc31c4450d51d3fb17897b33c283df23eaef446e822a4ecfc098e6d_prof);

    }

    public function getTemplateName()
    {
        return "SitephysPhysmvcBundle:Phys:presentation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  233 => 113,  226 => 111,  215 => 109,  212 => 108,  207 => 107,  205 => 106,  201 => 105,  196 => 104,  192 => 103,  160 => 74,  152 => 68,  143 => 66,  139 => 65,  92 => 20,  86 => 19,  75 => 14,  71 => 12,  65 => 11,  57 => 8,  51 => 7,  43 => 4,  37 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"SitephysPhysmvcBundle::layout.html.twig\" %}

{% block title %}
  Présentation du site Etudes des thèmes et domaines de physique 
{% endblock %}

{% block sitephysphysmvc_section %}
  <div id=\"hw\">Présentation du site</div>
{% endblock %}

{% block sitephysphysmvc_image %}
  <div id=\"containerimghome\">
    <div class=\"containerthome\">
      <img src=\"{{ asset('bundles/sitephysphysmvc/images/schemaphysmvcelement.jpg') }}\" class=\"homephoto\" alt=\"Image de niveaux basiques\" title=\"Schéma Elément simple avec les niveaux\" />
\t  </div>\t
  </div>
{% endblock %}

{% block sitephysphysmvc_body %}
  <div class=\"well\">

    <div id=\"hb\">Etudes des attributs et fonctionnalités des éléments de physique</div><br />
      <nav id=\"tabs-nav\" class=\"clearfix\">
        <a href=\"#modele\">Modèles objets</a><span>&nbsp;</span>
        <a href=\"#editions\">Editions (fonctionnalités)</a><span>&nbsp;</span>
        <a href=\"#appli\">Applications</a><span>&nbsp;</span>
        <a href=\"#domaines\">Domaines</a><span>&nbsp;</span>
        <a href=\"#niveaux\">Niveaux</a><span>&nbsp;</span>
        <a href=\"#modes\">Modes</a><span>&nbsp;</span>
        <a href=\"#symbolisation\">Symbolisations</a><span>&nbsp;</span>
      </nav>


    <div id=\"tabs-container\" onload=\"initTab()\">

        <article id=\"modele\">
          <ul>Les <strong>langages orientés objet</strong> reproduisent des réalités physiques : valeurs (expérimentales ou théoriques) et fonctionnalités, avec leurs évolutions (logiques ou chronologiques, erratiques ou astreintes) dans un cadre d'études au sein d'un environnement déterminé (modélisé ou non). Leurs éléments structurels sont les classes, elles-mêmes objets d'études au sein de cet environnement, pouvant être définies par héritage, interface, classe abstraite... Situées dans un namespace du schéma général du système, elles sont constituées de leurs variables (attributs) et de leurs fonctionnalités (méthodes) propres. Elles peuvent être en relation avec d'autres classes présentes. Les objets sont des instances de ces classes. Les relations (binaires exp. - th., forme - fond, classes - objets, attributs - méthodes, ...) au sein et entre classes et objets font du langage objet une autocomplétion de la description des éléments physiques et de leurs interactions pour un environnement défini. <br />
            <br /><li> Modèle du <strong>cycle en V</strong> : méthode de gestion de projet avec l'évolution suivante : 
            théorie (conception, spécifications) -> expérimentale (codage, détails du développement) -> théorie (fonctionnalités du produit, recette) décrivant un V (augmentation puis diminution du détail) avec les comparaisons horizontales (mêmes niveaux entre les deux branches du V) du projet.</li><br />
            <li> Méthodes <strong>Agile</strong> pour un projet de site Web : évolutions en cycles adaptatifs avec des échanges (description, analyses, propositions, corrections, améliorations, ...) entre clients et intégrateurs/développeurs ou entre intégrateurs/développeurs, qui sont définis, adaptés et fréquents.</li><br />
            <li> Modèles <strong>MVC</strong> avec (analogies) : Modèle (exp. in) - Vue (exp. out) - Contrôleur (th.). Séparation des fonctionnalités d'un système développé (logiciel, site, API, ...) permettant une conformité, une réalisation, une maintenance et une évolution efficaces et plus aisées.</li>
          </ul>
        </article>

        <article id=\"appli\">
\t\t\t<ul><strong>Applications</strong> concernant les évolutions de projets en physique - chimie : modèles orientés objet sur le fond (méthodes d'évolution pour un thème donné des systèmes, éléments quantifiés ou qualifiés, variables, environnements, référentiels, lois, théories, ...) : <br />
            <br /><li> Conceptions, évaluations, analyses, interactions, comparaisons, vérifications pour des émergences du hasard (systèmes sans contraintes, aléatoires, isolés, induisant la possibilité d'études statistiques, ...) ou bien utilisation des nécessités (logiques, de symétrie, de symétrie de jauge, de constance, de conservation, d'équilibres, de changement d'état, de propriétés, de minimalisation de variables, d'optimisation, ...) selon le cadre d'études (définitions, environnements, référentiels, repères, variables, ensembles, principes, postulats, ...). </li>
            <br /><li> Modèles objet pour la forme (avec par exemple adaptation des modèles sur le fond) : méthodes d'évolution de projet, systèmes organisationnels, méthodes de production de méthodes, ... </li>
            <br /><li> Types d'analyses de base sur des sujets expérimentaux ou théoriques (environnements, cadres, systèmes ou variables d'études et modèles, lois, entités physiques, ...) par : mesures, évaluations (empiriques), causalités discrètes (états successifs), considérations d'espèces aléatoires, modélisation aux éléments finis, analogies, ... </li>
            <br /><li> Types d'analyses évoluées sur des sujets expérimentaux ou théoriques (environnements, cadres, systèmes ou variables d'études et modèles, lois, entités physiques, ...) par : symbolisation, généralisation, englobement, conversions discret - continu, complexification, simplification, optimisation, récursivité, apprentissage de méthodes, ... </li>
          </ul>
        </article>

        <article id=\"editions\">
          <ul><strong>Editions</strong> (accès aux fonctionnalités) : <br />
            <br /><li> Visiteurs : consultation des éléments actuels.</li>
            <li> Utilisateurs (users) : gestion de compte, consultation des éléments actuels, éléments modifiés et ajoutés.</li>
            <li> Auteurs (authors) : gestion de compte, ajoût de domaine, consultation et modification des éléments actuels, ou consultation des éléments modifiés et ajoutés.</li>
            <li> Administrateurs (administrators) : gestion des utilisateurs, ajout de domaine et thèmes, consultation, modification et ajoût des éléments actuels, éléments modifiés et ajoutés.</li>
          </ul>
        </article>

        <article id=\"domaines\">
          <ul><strong>Domaines</strong> disponibles : <br /><br />
            {% for domainx in domain %}
              <li> {{ domainx.title }} </li>
            {% endfor %}
\t\t  </ul>
        </article>

        <article id=\"niveaux\">
          <strong>Schéma général</strong> à simples niveaux : seuls éléments de 1 à 6.
          <br /> <strong>Schéma général</strong> à doubles niveaux :<br /><br />
          <img src=\"{{ asset('bundles/sitephysphysmvc/images/schemaphysmvcglobal.png') }}\" id=\"containerimghome\" alt=\"Image de niveaux globaux\" title=\"Schéma global\" /><br />
          <ul><strong>Niveaux</strong> des éléments pour chaque thème : <br />
            <br /><li> Niveau de base (global, nb de 1 à 6, cf. schéma ci-dessus pour les éléments globaux). </li><br />
\t\t\t<li> Niveau de précision (np de 1 à 6 : niveau d'élément dans un élément global, cf. schéma ci-dessus pour les éléments simples de chacun des éléments globaux). </li><br /> 
            <li> Niveau de précision np = 0 : niveau global de l'élément d'un niveau de base nb. </li><br /> 
            <li> Description formelle des niveaux de précision np (1 : \"exp. in\" et Action = \"Observation\", 2 : \"th.\" et Action = \"Formalisation\" ou bien 3 : \"exp. out\" et Action = \"Analyse, application\") de la chaîne d'entrée : <br />
            Action (niveau de précision « np ») dans le cadre utilisé de la chaîne d'entrée du niveau de base  « nb » des sorties établies au niveau nb – (np - 1) ou bien si np = 1, (nb - 1) – 3 (si nb > 1, sinon \"Entrées générales\") et nb – 6. Cette action produit des sorties, entrées du niveau nb – (np + 1) (et (nb + 1) – 1 si np = 3). </li><br />
            <li> Description formelle des niveaux de précision np (4 : \"exp. in\" et Action = \"Observation\", 5 : \"th.\" et Action = \"Formalisation\" ou bien 6 : \"exp. out\" et Action = \"Analyse, application\") de la chaîne de retour : <br />
            Action explicite ou implicite (niveau de précision « np ») dans le cadre utilisé de la chaîne de retour du niveau de base  « nb » des sorties établies au niveau nb – (np - 1). Ses fonctions (méthodes) d'études par rapport au niveau nb – (np - 3)  et ses valeurs (attributs) d'études par rapport au niveau nb – (7 - np) (comparaisons par les évaluations entre les niveaux d'avancée équivalente) peuvent être inchangés, redéfinis, précisés, modifiés, simplifiés, complexifiés, extrapolés... Cette action produit des sorties, entrées du niveau nb – (np + 1) ou nb – 1 si np = 6. </li>
          </ul>
        </article>

        <article id=\"modes\">
          <ul><strong>Etendue d'évolution</strong> d'éléments, d'une dimension <strong>dim</strong> positive pour le thème défini, étudié suivant une évolution elle-même causale discrète (par niveau : 1 - 1, 1 - 2, ..., 6 - 5, 6 - 6), de résolutions, sans question, dans l'environnement et cadre d'études, comprenant également les éléments identifiés du système. On note mode = dim + 2. Pour dim = ... <br />
            <li> 2 ou plus : champ, espace (états et gradients de multiplicité de 1 jusqu'à dim, implicites ou explicites) de résolutions.</li>
            <li> 1 : points (états) et leur direction locale (orientation implicite ou explicite).</li>
          </ul>
          <ul>Présentation d'éléments établis (dim = 0) du thème (système pour la forme ou pour le fond) étudié suivant une évolution causale discrète (par niveau : 1 - 1, 1 - 2, ..., 6 - 5, 6 - 6) de positions acquises ou prédites dans l'environnement d'étude comprenant lui-même les éléments identifiés du système : <br />
            <li> 0 : points (états).</li>
          </ul>
          <ul>Etendue de recherche d'éléments de dimension dim négative pour le thème défini, étudié suivant une évolution elle-même causale discrète (par niveau : 1 - 1, 1 - 2, ..., 6 - 5, 6 - 6) comprenant au moins une question et avec d'éventuelles résolutions, dans l'environnement et cadre d'études, comprenant également les éléments identifiés du système. On note mode = dim + 2. Pour dim = ... <br />
            <li> -1 : points (états) et leur direction locale (orientation implicite ou explicite).</li>
            <li> -2 ou moins : champ, espace (états et gradients de multiplicité de 1 jusqu'à -dim, implicites ou explicites) de questionnements (au moins un) et d'éventuelles résolutions.</li>
          </ul>
        </article>

        <article id=\"symbolisation\">
\t\t\t    <strong>Symbolisations</strong> (De l'expérimentation : moyens, protocoles de sélection, de mise en oeuvre, d'utilisation, de précision, de tests, ... et de la théorie : outils de recueil, utilisation et analyse des références théoriques existantes, outils de formulations et de conformités de théories inexistantes, apprentissages informatiques, ...) disponibles suivant l'ensemble des thèmes : <br /><br />

          {% for levp in 1..6 %}
            Niveau {{ levp }} : <br />
            {{ level[levp].content }} <br />
            {% set cptsym = 0 %}
            {% for symcontentx in symcontent[levp] %}
              {% set cptsym = cptsym + 1 %}
              <br />Symbolisation {{ cptsym }} : {{ symcontentx }} 
            {% endfor %}
            <br /><br />
          {% endfor %}
        </article>
      </div>
    </div>

{% endblock %}
", "SitephysPhysmvcBundle:Phys:presentation.html.twig", "C:\\xampp\\physmvc\\src\\Sitephys\\PhysmvcBundle/Resources/views/Phys/presentation.html.twig");
    }
}
