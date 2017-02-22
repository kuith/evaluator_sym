<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_fbf598c7f12aa7a0d654c73192cbd1a9866931e5c470aea81040e1555b77d73a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7fd5b4f59696fffda484a914115e6ae10cc38816ee49d8acc37a6f9df84d9ee1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7fd5b4f59696fffda484a914115e6ae10cc38816ee49d8acc37a6f9df84d9ee1->enter($__internal_7fd5b4f59696fffda484a914115e6ae10cc38816ee49d8acc37a6f9df84d9ee1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_85e3a7174fc753425799d718a6ae4d9dc260b1337c7c47cbe39ef6abb8f9b6d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85e3a7174fc753425799d718a6ae4d9dc260b1337c7c47cbe39ef6abb8f9b6d5->enter($__internal_85e3a7174fc753425799d718a6ae4d9dc260b1337c7c47cbe39ef6abb8f9b6d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7fd5b4f59696fffda484a914115e6ae10cc38816ee49d8acc37a6f9df84d9ee1->leave($__internal_7fd5b4f59696fffda484a914115e6ae10cc38816ee49d8acc37a6f9df84d9ee1_prof);

        
        $__internal_85e3a7174fc753425799d718a6ae4d9dc260b1337c7c47cbe39ef6abb8f9b6d5->leave($__internal_85e3a7174fc753425799d718a6ae4d9dc260b1337c7c47cbe39ef6abb8f9b6d5_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_d22cba65a0d09d429c698f1115e80850c2cc385429e1d9312f1faeef780e05c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d22cba65a0d09d429c698f1115e80850c2cc385429e1d9312f1faeef780e05c0->enter($__internal_d22cba65a0d09d429c698f1115e80850c2cc385429e1d9312f1faeef780e05c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_08abe69aeb347a0ad1bb5c0026daec72ac55b644c40b9c4c021c29dd0e38fd65 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08abe69aeb347a0ad1bb5c0026daec72ac55b644c40b9c4c021c29dd0e38fd65->enter($__internal_08abe69aeb347a0ad1bb5c0026daec72ac55b644c40b9c4c021c29dd0e38fd65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_08abe69aeb347a0ad1bb5c0026daec72ac55b644c40b9c4c021c29dd0e38fd65->leave($__internal_08abe69aeb347a0ad1bb5c0026daec72ac55b644c40b9c4c021c29dd0e38fd65_prof);

        
        $__internal_d22cba65a0d09d429c698f1115e80850c2cc385429e1d9312f1faeef780e05c0->leave($__internal_d22cba65a0d09d429c698f1115e80850c2cc385429e1d9312f1faeef780e05c0_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "C:\\wamp64\\www\\evaluator_sym\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\ajax.html.twig");
    }
}
