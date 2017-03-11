<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_60b558f13f212622b71429dd386fc723affe025f7fe41bce03aef6d62d5c4bda extends Twig_Template
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
        $__internal_fa6f0d1b0a99fcf545f3fdd14c7bb07a300a56027c454cccf263d2746ff1ad87 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa6f0d1b0a99fcf545f3fdd14c7bb07a300a56027c454cccf263d2746ff1ad87->enter($__internal_fa6f0d1b0a99fcf545f3fdd14c7bb07a300a56027c454cccf263d2746ff1ad87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_d103507af3a35927d17e63155701d11ef8806bb89880fe1cea8604aa8ea1875b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d103507af3a35927d17e63155701d11ef8806bb89880fe1cea8604aa8ea1875b->enter($__internal_d103507af3a35927d17e63155701d11ef8806bb89880fe1cea8604aa8ea1875b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fa6f0d1b0a99fcf545f3fdd14c7bb07a300a56027c454cccf263d2746ff1ad87->leave($__internal_fa6f0d1b0a99fcf545f3fdd14c7bb07a300a56027c454cccf263d2746ff1ad87_prof);

        
        $__internal_d103507af3a35927d17e63155701d11ef8806bb89880fe1cea8604aa8ea1875b->leave($__internal_d103507af3a35927d17e63155701d11ef8806bb89880fe1cea8604aa8ea1875b_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_b413c98df38c56cb8740cf3ba15a81a4821729c1835559d45fb96a9afb51651d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b413c98df38c56cb8740cf3ba15a81a4821729c1835559d45fb96a9afb51651d->enter($__internal_b413c98df38c56cb8740cf3ba15a81a4821729c1835559d45fb96a9afb51651d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_c661ebbe10cbff9d79dc7c0fae986dcfd6a66882230812b58e2584669c215907 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c661ebbe10cbff9d79dc7c0fae986dcfd6a66882230812b58e2584669c215907->enter($__internal_c661ebbe10cbff9d79dc7c0fae986dcfd6a66882230812b58e2584669c215907_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_c661ebbe10cbff9d79dc7c0fae986dcfd6a66882230812b58e2584669c215907->leave($__internal_c661ebbe10cbff9d79dc7c0fae986dcfd6a66882230812b58e2584669c215907_prof);

        
        $__internal_b413c98df38c56cb8740cf3ba15a81a4821729c1835559d45fb96a9afb51651d->leave($__internal_b413c98df38c56cb8740cf3ba15a81a4821729c1835559d45fb96a9afb51651d_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a226b1dcfc5df55a25b1c94e5e97dda02b5b89e4d97a3ca3bc1fdea73102a95d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a226b1dcfc5df55a25b1c94e5e97dda02b5b89e4d97a3ca3bc1fdea73102a95d->enter($__internal_a226b1dcfc5df55a25b1c94e5e97dda02b5b89e4d97a3ca3bc1fdea73102a95d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_7e97a18b251d03d017e5ef134f5f35bccf2ee82be8fed617b12cc90f2011e52d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e97a18b251d03d017e5ef134f5f35bccf2ee82be8fed617b12cc90f2011e52d->enter($__internal_7e97a18b251d03d017e5ef134f5f35bccf2ee82be8fed617b12cc90f2011e52d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_7e97a18b251d03d017e5ef134f5f35bccf2ee82be8fed617b12cc90f2011e52d->leave($__internal_7e97a18b251d03d017e5ef134f5f35bccf2ee82be8fed617b12cc90f2011e52d_prof);

        
        $__internal_a226b1dcfc5df55a25b1c94e5e97dda02b5b89e4d97a3ca3bc1fdea73102a95d->leave($__internal_a226b1dcfc5df55a25b1c94e5e97dda02b5b89e4d97a3ca3bc1fdea73102a95d_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_33cddb1f24fdb49c6263a0eb338c67ae4638f2296fffc3740c3595636e68399c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_33cddb1f24fdb49c6263a0eb338c67ae4638f2296fffc3740c3595636e68399c->enter($__internal_33cddb1f24fdb49c6263a0eb338c67ae4638f2296fffc3740c3595636e68399c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_8dd17151e36cebdef314a07d13beb3f1c92e5bb4b972f5cb9962efba9b545a14 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8dd17151e36cebdef314a07d13beb3f1c92e5bb4b972f5cb9962efba9b545a14->enter($__internal_8dd17151e36cebdef314a07d13beb3f1c92e5bb4b972f5cb9962efba9b545a14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_8dd17151e36cebdef314a07d13beb3f1c92e5bb4b972f5cb9962efba9b545a14->leave($__internal_8dd17151e36cebdef314a07d13beb3f1c92e5bb4b972f5cb9962efba9b545a14_prof);

        
        $__internal_33cddb1f24fdb49c6263a0eb338c67ae4638f2296fffc3740c3595636e68399c->leave($__internal_33cddb1f24fdb49c6263a0eb338c67ae4638f2296fffc3740c3595636e68399c_prof);

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
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
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
", "@WebProfiler/Collector/router.html.twig", "C:\\wamp64\\www\\evaluator_sym\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
