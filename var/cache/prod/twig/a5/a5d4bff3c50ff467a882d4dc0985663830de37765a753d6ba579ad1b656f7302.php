<?php

/* SitephysUserBundle:Security:formuseradd.html.twig */
class __TwigTemplate_86faf4e747f5fa145c4201003993e762a42c728076ca430d15c5193bb1cc83c6 extends Twig_Template
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
        echo "<div class=\"wellform\">

  <div class=\"form-group\">
  
    <div id=\"hw\">Formulaire d'inscription</div>
    <br />

    ";
        // line 8
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["formuseradd"] ?? null), 'form_start', array("attr" => array("class" => "form")));
        echo "
    ";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["formuseradd"] ?? null), 'errors');
        echo "

    <div> 
      ";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), ($context["formuseradd"] ?? null), "username", array()), 'row', array("attr" => array("class" => "form-control")));
        echo " 
    </div>

    <br />
    <div> 
      ";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), ($context["formuseradd"] ?? null), "email", array()), 'row', array("attr" => array("class" => "form-control")));
        echo " 
    </div>

    <br />
    <div>
      <span>  ";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), ($context["formuseradd"] ?? null), "password", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "  </span>
    </div>

    ";
        // line 25
        if ((($context["userroles"] ?? null) == "author")) {
            // line 26
            echo "      <br />
      <div>
        <span>  ";
            // line 28
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), ($context["formuseradd"] ?? null), "interest", array()), 'row', array("attr" => array("class" => "form-control")));
            echo "  </span>
      </div>
    ";
        }
        // line 31
        echo "
    <br /><br />
    ";
        // line 33
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), ($context["formuseradd"] ?? null), "save", array()), 'widget', array("attr" => array("class" => "btn btn-primary")));
        echo "
    ";
        // line 34
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["formuseradd"] ?? null), 'form_end');
        echo "
    
    <br />
        
  </div>

</div>
";
    }

    public function getTemplateName()
    {
        return "SitephysUserBundle:Security:formuseradd.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 34,  76 => 33,  72 => 31,  66 => 28,  62 => 26,  60 => 25,  54 => 22,  46 => 17,  38 => 12,  32 => 9,  28 => 8,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "SitephysUserBundle:Security:formuseradd.html.twig", "/var/www/html/sitephys/physmvc/src/Sitephys/UserBundle/Resources/views/Security/formuseradd.html.twig");
    }
}
