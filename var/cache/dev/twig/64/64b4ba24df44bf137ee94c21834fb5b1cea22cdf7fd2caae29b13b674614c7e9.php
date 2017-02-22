<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_45dce907d27a40e6934735514931f4cfa806c6c8455173bf727c6611838b4700 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_acb9becd237b73308326a111768a607f503b2e506bf97b190edabfdfd12a33bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_acb9becd237b73308326a111768a607f503b2e506bf97b190edabfdfd12a33bd->enter($__internal_acb9becd237b73308326a111768a607f503b2e506bf97b190edabfdfd12a33bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_33ac3e3ff57dbd20ea3cb05d1f13884838d798f2b00e9d347f902e0dfd6692f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33ac3e3ff57dbd20ea3cb05d1f13884838d798f2b00e9d347f902e0dfd6692f3->enter($__internal_33ac3e3ff57dbd20ea3cb05d1f13884838d798f2b00e9d347f902e0dfd6692f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_acb9becd237b73308326a111768a607f503b2e506bf97b190edabfdfd12a33bd->leave($__internal_acb9becd237b73308326a111768a607f503b2e506bf97b190edabfdfd12a33bd_prof);

        
        $__internal_33ac3e3ff57dbd20ea3cb05d1f13884838d798f2b00e9d347f902e0dfd6692f3->leave($__internal_33ac3e3ff57dbd20ea3cb05d1f13884838d798f2b00e9d347f902e0dfd6692f3_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_5f7b8937bb06284b9d98f896e49af80eafa5635f9ed3203596566531e3f7bcfc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f7b8937bb06284b9d98f896e49af80eafa5635f9ed3203596566531e3f7bcfc->enter($__internal_5f7b8937bb06284b9d98f896e49af80eafa5635f9ed3203596566531e3f7bcfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_5457f0477c8faf97dcbeda9e0edebbc55f1d9f2d932935688260f4dae2b2a2d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5457f0477c8faf97dcbeda9e0edebbc55f1d9f2d932935688260f4dae2b2a2d7->enter($__internal_5457f0477c8faf97dcbeda9e0edebbc55f1d9f2d932935688260f4dae2b2a2d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_5457f0477c8faf97dcbeda9e0edebbc55f1d9f2d932935688260f4dae2b2a2d7->leave($__internal_5457f0477c8faf97dcbeda9e0edebbc55f1d9f2d932935688260f4dae2b2a2d7_prof);

        
        $__internal_5f7b8937bb06284b9d98f896e49af80eafa5635f9ed3203596566531e3f7bcfc->leave($__internal_5f7b8937bb06284b9d98f896e49af80eafa5635f9ed3203596566531e3f7bcfc_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_f5da7ddbff032835d815d839a57cca3e31bfbe61ea915a5c0765492b9ae6249c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f5da7ddbff032835d815d839a57cca3e31bfbe61ea915a5c0765492b9ae6249c->enter($__internal_f5da7ddbff032835d815d839a57cca3e31bfbe61ea915a5c0765492b9ae6249c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_e77f223998efb1cc2230e2cdffbc00478fb508336b2a4eae91f2828c3a000ee2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e77f223998efb1cc2230e2cdffbc00478fb508336b2a4eae91f2828c3a000ee2->enter($__internal_e77f223998efb1cc2230e2cdffbc00478fb508336b2a4eae91f2828c3a000ee2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_e77f223998efb1cc2230e2cdffbc00478fb508336b2a4eae91f2828c3a000ee2->leave($__internal_e77f223998efb1cc2230e2cdffbc00478fb508336b2a4eae91f2828c3a000ee2_prof);

        
        $__internal_f5da7ddbff032835d815d839a57cca3e31bfbe61ea915a5c0765492b9ae6249c->leave($__internal_f5da7ddbff032835d815d839a57cca3e31bfbe61ea915a5c0765492b9ae6249c_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_898850bfc24befd80ba2c195d5dfb4eab9865c22454744056b5266cd55ba352b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_898850bfc24befd80ba2c195d5dfb4eab9865c22454744056b5266cd55ba352b->enter($__internal_898850bfc24befd80ba2c195d5dfb4eab9865c22454744056b5266cd55ba352b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_08c032ec983d76b11289d49881ad26332051288023016f577bf95255c5ca5850 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08c032ec983d76b11289d49881ad26332051288023016f577bf95255c5ca5850->enter($__internal_08c032ec983d76b11289d49881ad26332051288023016f577bf95255c5ca5850_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_08c032ec983d76b11289d49881ad26332051288023016f577bf95255c5ca5850->leave($__internal_08c032ec983d76b11289d49881ad26332051288023016f577bf95255c5ca5850_prof);

        
        $__internal_898850bfc24befd80ba2c195d5dfb4eab9865c22454744056b5266cd55ba352b->leave($__internal_898850bfc24befd80ba2c195d5dfb4eab9865c22454744056b5266cd55ba352b_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "C:\\wamp64\\www\\evaluator_sym\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
