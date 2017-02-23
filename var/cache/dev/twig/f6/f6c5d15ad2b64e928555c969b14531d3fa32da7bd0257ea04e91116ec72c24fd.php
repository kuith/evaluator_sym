<?php

/* EvaluatorBundle:Mark:grid_marks.html.twig */
class __TwigTemplate_aa5ebc395c6a5230d389afd0ae5ee056ac10b00b17f43a059fd4f454ae323f09 extends Twig_Template
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
        $__internal_ad28d60f44b9eedd48ba79f3392959b4eac6fb1874bdb36054a82aba5a0fcf7f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad28d60f44b9eedd48ba79f3392959b4eac6fb1874bdb36054a82aba5a0fcf7f->enter($__internal_ad28d60f44b9eedd48ba79f3392959b4eac6fb1874bdb36054a82aba5a0fcf7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EvaluatorBundle:Mark:grid_marks.html.twig"));

        $__internal_2964264dbea236abe544d11c65d21fd3aea5a08930d79b9fdf6aee3ce5d127c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2964264dbea236abe544d11c65d21fd3aea5a08930d79b9fdf6aee3ce5d127c1->enter($__internal_2964264dbea236abe544d11c65d21fd3aea5a08930d79b9fdf6aee3ce5d127c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EvaluatorBundle:Mark:grid_marks.html.twig"));

        // line 1
        if (((isset($context["mark"]) ? $context["mark"] : $this->getContext($context, "mark")) == null)) {
            // line 2
            echo "    ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mark"]) ? $context["mark"] : $this->getContext($context, "mark")), "grade", array()), "html", null, true);
            echo "
";
        } else {
            // line 4
            echo "    ";
            echo 0;
            echo "
";
        }
        // line 6
        echo "
";
        
        $__internal_ad28d60f44b9eedd48ba79f3392959b4eac6fb1874bdb36054a82aba5a0fcf7f->leave($__internal_ad28d60f44b9eedd48ba79f3392959b4eac6fb1874bdb36054a82aba5a0fcf7f_prof);

        
        $__internal_2964264dbea236abe544d11c65d21fd3aea5a08930d79b9fdf6aee3ce5d127c1->leave($__internal_2964264dbea236abe544d11c65d21fd3aea5a08930d79b9fdf6aee3ce5d127c1_prof);

    }

    public function getTemplateName()
    {
        return "EvaluatorBundle:Mark:grid_marks.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 6,  33 => 4,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if mark == null %}
    {{mark.grade}}
{% else %}
    {{ 0 }}
{% endif %}

", "EvaluatorBundle:Mark:grid_marks.html.twig", "C:\\wamp64\\www\\evaluator_sym\\src\\EvaluatorBundle/Resources/views/Mark/grid_marks.html.twig");
    }
}
