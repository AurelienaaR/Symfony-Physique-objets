<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_6be147234314fff17f4bcf57c58acfe9ab6d6288d731cd220ad1150d52555f46 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_86a32d33ddf02b9ba1f8cdf35f491fb5fbde7700134f98594214b8e55de42a0a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86a32d33ddf02b9ba1f8cdf35f491fb5fbde7700134f98594214b8e55de42a0a->enter($__internal_86a32d33ddf02b9ba1f8cdf35f491fb5fbde7700134f98594214b8e55de42a0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_86a32d33ddf02b9ba1f8cdf35f491fb5fbde7700134f98594214b8e55de42a0a->leave($__internal_86a32d33ddf02b9ba1f8cdf35f491fb5fbde7700134f98594214b8e55de42a0a_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_2e6f0a87910ea2ff59f209077715351c960ec060771a18521e2fc900a05d1a82 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e6f0a87910ea2ff59f209077715351c960ec060771a18521e2fc900a05d1a82->enter($__internal_2e6f0a87910ea2ff59f209077715351c960ec060771a18521e2fc900a05d1a82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_2e6f0a87910ea2ff59f209077715351c960ec060771a18521e2fc900a05d1a82->leave($__internal_2e6f0a87910ea2ff59f209077715351c960ec060771a18521e2fc900a05d1a82_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_3a563f03a926c46870d7a6f89488b49aefbccb8efdac6576bb0adcc7fb3bb420 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a563f03a926c46870d7a6f89488b49aefbccb8efdac6576bb0adcc7fb3bb420->enter($__internal_3a563f03a926c46870d7a6f89488b49aefbccb8efdac6576bb0adcc7fb3bb420_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_3a563f03a926c46870d7a6f89488b49aefbccb8efdac6576bb0adcc7fb3bb420->leave($__internal_3a563f03a926c46870d7a6f89488b49aefbccb8efdac6576bb0adcc7fb3bb420_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_2d7d4649b0387874e44f7a4eee3f6f305b8311ed37c4084f107f674164da2032 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d7d4649b0387874e44f7a4eee3f6f305b8311ed37c4084f107f674164da2032->enter($__internal_2d7d4649b0387874e44f7a4eee3f6f305b8311ed37c4084f107f674164da2032_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_2d7d4649b0387874e44f7a4eee3f6f305b8311ed37c4084f107f674164da2032->leave($__internal_2d7d4649b0387874e44f7a4eee3f6f305b8311ed37c4084f107f674164da2032_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "C:\\xampp\\physmvc\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
