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
        $__internal_0c8c82b744ccd2bd6d90522a4e481ce8d53383bdafe873fb564b4fa4f4343dea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c8c82b744ccd2bd6d90522a4e481ce8d53383bdafe873fb564b4fa4f4343dea->enter($__internal_0c8c82b744ccd2bd6d90522a4e481ce8d53383bdafe873fb564b4fa4f4343dea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EvaluatorBundle:Mark:grid_marks.html.twig"));

        $__internal_a10eba164dccd0c75fce981793333896b4485eaa2b3a553e3fe9825bc8833be5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a10eba164dccd0c75fce981793333896b4485eaa2b3a553e3fe9825bc8833be5->enter($__internal_a10eba164dccd0c75fce981793333896b4485eaa2b3a553e3fe9825bc8833be5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EvaluatorBundle:Mark:grid_marks.html.twig"));

        // line 1
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mark"]) ? $context["mark"] : $this->getContext($context, "mark")), "grade", array()), "html", null, true);
        echo "
";
        
        $__internal_0c8c82b744ccd2bd6d90522a4e481ce8d53383bdafe873fb564b4fa4f4343dea->leave($__internal_0c8c82b744ccd2bd6d90522a4e481ce8d53383bdafe873fb564b4fa4f4343dea_prof);

        
        $__internal_a10eba164dccd0c75fce981793333896b4485eaa2b3a553e3fe9825bc8833be5->leave($__internal_a10eba164dccd0c75fce981793333896b4485eaa2b3a553e3fe9825bc8833be5_prof);

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
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{mark.grade}}
", "EvaluatorBundle:Mark:grid_marks.html.twig", "C:\\wamp64\\www\\evaluator_sym\\src\\EvaluatorBundle/Resources/views/Mark/grid_marks.html.twig");
    }
}
