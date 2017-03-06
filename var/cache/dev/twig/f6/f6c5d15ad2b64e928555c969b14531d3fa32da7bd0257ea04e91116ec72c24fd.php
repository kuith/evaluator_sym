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
        $__internal_4d5926dab11e423ee3150931ba2a1b768842e1ff4bc00c4d6758be35a477b14e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d5926dab11e423ee3150931ba2a1b768842e1ff4bc00c4d6758be35a477b14e->enter($__internal_4d5926dab11e423ee3150931ba2a1b768842e1ff4bc00c4d6758be35a477b14e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EvaluatorBundle:Mark:grid_marks.html.twig"));

        $__internal_d5c3c468988692bfb53072ffe251b1b80fc571643b04e9d31e5075d347571344 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5c3c468988692bfb53072ffe251b1b80fc571643b04e9d31e5075d347571344->enter($__internal_d5c3c468988692bfb53072ffe251b1b80fc571643b04e9d31e5075d347571344_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EvaluatorBundle:Mark:grid_marks.html.twig"));

        // line 1
        if (((isset($context["mark"]) ? $context["mark"] : $this->getContext($context, "mark")) == null)) {
            // line 2
            echo "    ";
            echo 0;
            echo "
";
        } else {
            // line 4
            echo "    ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mark"]) ? $context["mark"] : $this->getContext($context, "mark")), "grade", array()), "html", null, true);
            echo "
";
        }
        // line 6
        echo "
";
        
        $__internal_4d5926dab11e423ee3150931ba2a1b768842e1ff4bc00c4d6758be35a477b14e->leave($__internal_4d5926dab11e423ee3150931ba2a1b768842e1ff4bc00c4d6758be35a477b14e_prof);

        
        $__internal_d5c3c468988692bfb53072ffe251b1b80fc571643b04e9d31e5075d347571344->leave($__internal_d5c3c468988692bfb53072ffe251b1b80fc571643b04e9d31e5075d347571344_prof);

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
    {{0}}
{% else %}
    {{ mark.grade }}
{% endif %}

", "EvaluatorBundle:Mark:grid_marks.html.twig", "C:\\wamp64\\www\\evaluator_sym\\src\\EvaluatorBundle/Resources/views/Mark/grid_marks.html.twig");
    }
}
