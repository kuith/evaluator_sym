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
        $__internal_b9e6e22c1e6c2d118710c6d0891e30547d4c589a1945738c338adad950b39427 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b9e6e22c1e6c2d118710c6d0891e30547d4c589a1945738c338adad950b39427->enter($__internal_b9e6e22c1e6c2d118710c6d0891e30547d4c589a1945738c338adad950b39427_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_8a9882b163bbb8e8f64c7615eea54147d9191a174514d6332560dfe62f20bea5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a9882b163bbb8e8f64c7615eea54147d9191a174514d6332560dfe62f20bea5->enter($__internal_8a9882b163bbb8e8f64c7615eea54147d9191a174514d6332560dfe62f20bea5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b9e6e22c1e6c2d118710c6d0891e30547d4c589a1945738c338adad950b39427->leave($__internal_b9e6e22c1e6c2d118710c6d0891e30547d4c589a1945738c338adad950b39427_prof);

        
        $__internal_8a9882b163bbb8e8f64c7615eea54147d9191a174514d6332560dfe62f20bea5->leave($__internal_8a9882b163bbb8e8f64c7615eea54147d9191a174514d6332560dfe62f20bea5_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_ac8bee2cef512776139b7646453b08d4236c9fb504a8e03e25dc476a4ae560eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac8bee2cef512776139b7646453b08d4236c9fb504a8e03e25dc476a4ae560eb->enter($__internal_ac8bee2cef512776139b7646453b08d4236c9fb504a8e03e25dc476a4ae560eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_d34f6d9b8f39e9a465ca2055f52d5bacdbb85e7a3b545b87ab5f1770663fdfd4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d34f6d9b8f39e9a465ca2055f52d5bacdbb85e7a3b545b87ab5f1770663fdfd4->enter($__internal_d34f6d9b8f39e9a465ca2055f52d5bacdbb85e7a3b545b87ab5f1770663fdfd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_d34f6d9b8f39e9a465ca2055f52d5bacdbb85e7a3b545b87ab5f1770663fdfd4->leave($__internal_d34f6d9b8f39e9a465ca2055f52d5bacdbb85e7a3b545b87ab5f1770663fdfd4_prof);

        
        $__internal_ac8bee2cef512776139b7646453b08d4236c9fb504a8e03e25dc476a4ae560eb->leave($__internal_ac8bee2cef512776139b7646453b08d4236c9fb504a8e03e25dc476a4ae560eb_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b7f49e417e1c1716149298ee65f0165e2db5c8746779bfa8afe0304c8857e7f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b7f49e417e1c1716149298ee65f0165e2db5c8746779bfa8afe0304c8857e7f0->enter($__internal_b7f49e417e1c1716149298ee65f0165e2db5c8746779bfa8afe0304c8857e7f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_e091d7e4ca392ef0cebe60cdaf9b57a14044e3d1b1ee075cc368060380c6da3d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e091d7e4ca392ef0cebe60cdaf9b57a14044e3d1b1ee075cc368060380c6da3d->enter($__internal_e091d7e4ca392ef0cebe60cdaf9b57a14044e3d1b1ee075cc368060380c6da3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_e091d7e4ca392ef0cebe60cdaf9b57a14044e3d1b1ee075cc368060380c6da3d->leave($__internal_e091d7e4ca392ef0cebe60cdaf9b57a14044e3d1b1ee075cc368060380c6da3d_prof);

        
        $__internal_b7f49e417e1c1716149298ee65f0165e2db5c8746779bfa8afe0304c8857e7f0->leave($__internal_b7f49e417e1c1716149298ee65f0165e2db5c8746779bfa8afe0304c8857e7f0_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_526747bae0247473460523cf4f0422cda604010de54d56eb1aa9e0c2b48e0e74 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_526747bae0247473460523cf4f0422cda604010de54d56eb1aa9e0c2b48e0e74->enter($__internal_526747bae0247473460523cf4f0422cda604010de54d56eb1aa9e0c2b48e0e74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_140a9ca6a30917fb47909c6ba6ac94b852dff0feb0198d3cbfc85ccc52523c89 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_140a9ca6a30917fb47909c6ba6ac94b852dff0feb0198d3cbfc85ccc52523c89->enter($__internal_140a9ca6a30917fb47909c6ba6ac94b852dff0feb0198d3cbfc85ccc52523c89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_140a9ca6a30917fb47909c6ba6ac94b852dff0feb0198d3cbfc85ccc52523c89->leave($__internal_140a9ca6a30917fb47909c6ba6ac94b852dff0feb0198d3cbfc85ccc52523c89_prof);

        
        $__internal_526747bae0247473460523cf4f0422cda604010de54d56eb1aa9e0c2b48e0e74->leave($__internal_526747bae0247473460523cf4f0422cda604010de54d56eb1aa9e0c2b48e0e74_prof);

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
