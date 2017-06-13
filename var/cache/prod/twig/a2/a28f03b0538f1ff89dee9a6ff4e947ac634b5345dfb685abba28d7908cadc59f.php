<?php

/* SitephysPhysmvcBundle:Edit:formaddtopic.html.twig */
class __TwigTemplate_e22dceeeed0d1a8e335b83260216d189e0b67118494a707812862dc40525135e extends Twig_Template
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
  
    <div id=\"hw\">Formulaire d'ajout du thème</div>
    <br />

    ";
        // line 8
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["formphysaddtopic"] ?? null), 'form_start', array("attr" => array("class" => "form")));
        echo "
    ";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["formphysaddtopic"] ?? null), 'errors');
        echo "

    <div> 
      ";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), ($context["formphysaddtopic"] ?? null), "title", array()), 'row', array("attr" => array("class" => "form-control")));
        echo " 
    </div>

    <br />
    <div> 
      ";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), ($context["formphysaddtopic"] ?? null), "username", array()), 'row', array("attr" => array("class" => "form-control")));
        echo " 
    </div>

    <br />
    <div> 
      ";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), ($context["formphysaddtopic"] ?? null), "email", array()), 'row', array("attr" => array("class" => "form-control")));
        echo " 
    </div>

    <br />
    <div> 
      ";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), ($context["formphysaddtopic"] ?? null), "date", array()), 'row', array("attr" => array("class" => "form-control")));
        echo " 
    </div>

    <br />
    Mode d'évolution (0 : champ de questions, 1 : linéarité de questions, 2 : états, 3 : linéarité de solutions, 4 : champ de solutions) du thème
    <br />
    <div> 
      ";
        // line 34
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), ($context["formphysaddtopic"] ?? null), "mode", array()), 'row', array("attr" => array("class" => "form-control")));
        echo " 
    </div>

    <br />
    Elément exp in (1) du thème
    <br />
    <div>
      <span>  ";
        // line 41
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), ($context["formphysaddtopic"] ?? null), "contentexpin", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "  </span>
    </div>

    <br />
    Elément th (2) du thème
    <br />
    <div>
      <span>  ";
        // line 48
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), ($context["formphysaddtopic"] ?? null), "contentth", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "  </span>
    </div>

    <br />
    Elément exp out (3) du thème
    <br />
    <div>
      <span>  ";
        // line 55
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), ($context["formphysaddtopic"] ?? null), "contentexpout", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "  </span>
    </div>

    <br />
    Elément return exp in (4) du thème
    <br />
    <div>
      <span>  ";
        // line 62
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), ($context["formphysaddtopic"] ?? null), "contentretexpin", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "  </span>
    </div>

    <br />
    Elément return th (5) du thème
    <br />
    <div>
      <span>  ";
        // line 69
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), ($context["formphysaddtopic"] ?? null), "contentretth", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "  </span>
    </div>

    <br />
    Elément return exp out (6) du thème
    <br />
    <div>
      <span>  ";
        // line 76
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), ($context["formphysaddtopic"] ?? null), "contentretexpout", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "  </span>
    </div>

    <br />
\tLien internet proposé
\t<br />
    <div> 
      <span>  ";
        // line 83
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), ($context["formphysaddtopic"] ?? null), "weblink", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "  </span>
    </div>

    <div>
      <span>  ";
        // line 87
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), ($context["formphysaddtopic"] ?? null), "domainid", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "  </span>
    </div>

    <br /><br />
    ";
        // line 91
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), ($context["formphysaddtopic"] ?? null), "save", array()), 'widget', array("attr" => array("class" => "btn btn-primary")));
        echo "
    ";
        // line 92
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["formphysaddtopic"] ?? null), 'form_end');
        echo "

    <br />
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "SitephysPhysmvcBundle:Edit:formaddtopic.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  160 => 92,  156 => 91,  149 => 87,  142 => 83,  132 => 76,  122 => 69,  112 => 62,  102 => 55,  92 => 48,  82 => 41,  72 => 34,  62 => 27,  54 => 22,  46 => 17,  38 => 12,  32 => 9,  28 => 8,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "SitephysPhysmvcBundle:Edit:formaddtopic.html.twig", "/var/www/html/sitephys/physmvc/src/Sitephys/PhysmvcBundle/Resources/views/Edit/formaddtopic.html.twig");
    }
}
