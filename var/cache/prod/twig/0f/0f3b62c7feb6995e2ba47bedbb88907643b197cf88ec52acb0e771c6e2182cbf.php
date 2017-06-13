<?php

/* SitephysUserBundle:Security/Emails:registration.html.twig */
class __TwigTemplate_7d00c56e98dfa019cb3bb0574f123c1eaa6bfbd9849d61b06688ca0f6935072b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
  <head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <title>
         Site physicstopics.fr - Courriel de validation du compte
    </title>
  </head>

  <body>
    <br />
    Site physicstopics.fr - Courriel de validation du compte de ";
        // line 13
        echo twig_escape_filter($this->env, ($context["uemail"] ?? null), "html", null, true);
        echo "
\t<br /><br />
\tCliquer sur ce lien : <br /><br />
\t<a href=\"";
        // line 16
        echo twig_escape_filter($this->env, ((("https://physicstopics.fr/user/authentification/" . ($context["uemail"] ?? null)) . "/") . ($context["toklink"] ?? null)), "html", null, true);
        echo "\">Validation de votre compte</a>
\t<br />
  </body>

</html>
";
    }

    public function getTemplateName()
    {
        return "SitephysUserBundle:Security/Emails:registration.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 16,  33 => 13,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "SitephysUserBundle:Security/Emails:registration.html.twig", "/var/www/html/sitephys/physmvc/src/Sitephys/UserBundle/Resources/views/Security/Emails/registration.html.twig");
    }
}
