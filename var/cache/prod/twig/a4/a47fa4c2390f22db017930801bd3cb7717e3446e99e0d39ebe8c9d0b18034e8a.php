<?php

/* SitephysPhysmvcBundle:Edit:formadd.html.twig */
class __TwigTemplate_62d4ca2008e8c60078a7625fc2353a967280f4f90bf423e1f13ee2e2bf5df085 extends Twig_Template
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
  
    <div id=\"hw\">Formulaire d'ajout de domaine</div>
    <br />

    ";
        // line 7
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["formphysadd"] ?? null), 'form_start', array("attr" => array("class" => "form")));
        echo "
    ";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["formphysadd"] ?? null), 'errors');
        echo "

    <div> 
      ";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), ($context["formphysadd"] ?? null), "title", array()), 'row', array("attr" => array("class" => "form-control")));
        echo " 
    </div>

    <br />
    <div> 
      ";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), ($context["formphysadd"] ?? null), "username", array()), 'row', array("attr" => array("class" => "form-control")));
        echo " 
    </div>

    <br />
    <div> 
      ";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), ($context["formphysadd"] ?? null), "email", array()), 'row', array("attr" => array("class" => "form-control")));
        echo " 
    </div>

    <br />
    <div> 
      ";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), ($context["formphysadd"] ?? null), "date", array()), 'row', array("attr" => array("class" => "form-control")));
        echo " 
    </div>

    <br />
    <div>
      <span>  ";
        // line 31
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), ($context["formphysadd"] ?? null), "content", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "  </span>
    </div>

    <br /><br />
    <div> 
      <span>  ";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), ($context["formphysadd"] ?? null), "weblink", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "  </span>
    </div>

    <br /><br />
    ";
        // line 40
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), ($context["formphysadd"] ?? null), "save", array()), 'widget', array("attr" => array("class" => "btn btn-primary")));
        echo "
    ";
        // line 41
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["formphysadd"] ?? null), 'form_end');
        echo "
    
    <br />
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "SitephysPhysmvcBundle:Edit:formadd.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 41,  84 => 40,  77 => 36,  69 => 31,  61 => 26,  53 => 21,  45 => 16,  37 => 11,  31 => 8,  27 => 7,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "SitephysPhysmvcBundle:Edit:formadd.html.twig", "/var/www/html/sitephys/physmvc/src/Sitephys/PhysmvcBundle/Resources/views/Edit/formadd.html.twig");
    }
}
