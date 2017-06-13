<?php

/* :Emails:registration.html.twig */
class __TwigTemplate_daca42b5214c431a900bd1f84cc4e918dcdcc817265738218922cbb2801b4848 extends Twig_Template
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
         Site physics-object.fr - Courriel de validation du compte
    </title>
  </head>

  <body>
    <br />
    Site physics-object.fr - Courriel de validation de votre compte. 
\t<br /><br />
\tCliquer sur ce lien : <br /><br />
\t<a href=\"";
        // line 16
        echo twig_escape_filter($this->env, ((("http://physics-object.fr/user/authentification/" . ($context["uemail"] ?? null)) . "/") . ($context["toklink"] ?? null)), "html", null, true);
        echo "\">Validation de votre compte</a>
\t<br />
  </body>

</html>
";
    }

    public function getTemplateName()
    {
        return ":Emails:registration.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 16,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":Emails:registration.html.twig", "/var/www/html/sitephys/physmvc/app/Resources/views/Emails/registration.html.twig");
    }
}
