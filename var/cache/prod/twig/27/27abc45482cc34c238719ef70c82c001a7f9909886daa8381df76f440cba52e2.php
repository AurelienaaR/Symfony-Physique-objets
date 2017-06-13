<?php

/* SitephysPhysmvcBundle:Phys:presentation.html.twig */
class __TwigTemplate_d4b27c09a04fe2f15a0ec83fbb6a14613dd7aeba25d189ca34482618f8acc9d2 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo "  Présentation du site Etudes des thèmes et domaines de physique 
";
    }

    // line 7
    public function block_sitephysphysmvc_section($context, array $blocks = array())
    {
        // line 8
        echo "  <div id=\"hw\">Présentation du site</div>
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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/sitephysphysmvc/images/schemaphysmvcelement.jpg"), "html", null, true);
        echo "\" class=\"homephoto\" alt=\"Image de niveaux basiques\" title=\"Schéma Elément simple avec les niveaux\" />
\t</div>\t
  </div>
";
    }

    // line 19
    public function block_sitephysphysmvc_body($context, array $blocks = array())
    {
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
        $context['_seq'] = twig_ensure_traversable(($context["domain"] ?? null));
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
\t\t  <strong>Schéma général</strong> à deux types de niveaux :<br /><br />
          <img src=\"";
        // line 73
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
\t\t\t<ul><strong>Symbolisations</strong> (De l'expérimentation : moyens, protocoles de sélection, de mise en oeuvre, d'utilisation, de précision, de tests, ... et de la théorie : outils de recueil, utilisation et analyse des références théoriques existantes, outils de formulations et de conformités de théories inexistantes, apprentissages informatiques, ...) disponibles suivant l'ensemble des thèmes : <br /><br />
          ";
        // line 101
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["symbol"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["symbolx"]) {
            // line 102
            echo "            <li> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["symbolx"], "content", array()), "html", null, true);
            echo " </li>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['symbolx'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 104
        echo "          </ul>
        </article>
      </div>
    </div>

";
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
        return array (  176 => 104,  167 => 102,  163 => 101,  132 => 73,  125 => 68,  116 => 66,  112 => 65,  65 => 20,  62 => 19,  54 => 14,  50 => 12,  47 => 11,  42 => 8,  39 => 7,  34 => 4,  31 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "SitephysPhysmvcBundle:Phys:presentation.html.twig", "/var/www/html/sitephys/physmvc/src/Sitephys/PhysmvcBundle/Resources/views/Phys/presentation.html.twig");
    }
}
