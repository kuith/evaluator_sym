<?php

/* EvaluatorBundle:Course:enter.html.twig */
class __TwigTemplate_ab2964569c6763f9b1936c43377a0aa49e7a20c0239efb36133fe193dd143e57 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EvaluatorBundle::layout.html.twig", "EvaluatorBundle:Course:enter.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "EvaluatorBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a3df8a6ee5df5d647e35a7d63e592a1e728c08f55d11314c3dcfeb426e7afd3e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a3df8a6ee5df5d647e35a7d63e592a1e728c08f55d11314c3dcfeb426e7afd3e->enter($__internal_a3df8a6ee5df5d647e35a7d63e592a1e728c08f55d11314c3dcfeb426e7afd3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EvaluatorBundle:Course:enter.html.twig"));

        $__internal_06b753e3e018c52dce0763428b4397fcafbf14f41b452d82428a0cd3511e81a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06b753e3e018c52dce0763428b4397fcafbf14f41b452d82428a0cd3511e81a2->enter($__internal_06b753e3e018c52dce0763428b4397fcafbf14f41b452d82428a0cd3511e81a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EvaluatorBundle:Course:enter.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a3df8a6ee5df5d647e35a7d63e592a1e728c08f55d11314c3dcfeb426e7afd3e->leave($__internal_a3df8a6ee5df5d647e35a7d63e592a1e728c08f55d11314c3dcfeb426e7afd3e_prof);

        
        $__internal_06b753e3e018c52dce0763428b4397fcafbf14f41b452d82428a0cd3511e81a2->leave($__internal_06b753e3e018c52dce0763428b4397fcafbf14f41b452d82428a0cd3511e81a2_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_b8204baed1363c576aca3410448b6f9e8153e152198974158325622a74525a37 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b8204baed1363c576aca3410448b6f9e8153e152198974158325622a74525a37->enter($__internal_b8204baed1363c576aca3410448b6f9e8153e152198974158325622a74525a37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_8116f7532d5c9d1befa5261df5010269dc492079627f7b8f247fc2fbe6ec27c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8116f7532d5c9d1befa5261df5010269dc492079627f7b8f247fc2fbe6ec27c2->enter($__internal_8116f7532d5c9d1befa5261df5010269dc492079627f7b8f247fc2fbe6ec27c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    <div class=\"col-lg-6\">
        <div class=\"card-block text-nowrap\">
            Curso: ";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "name", array()), "html", null, true);
        echo "
        </div>
    </div>

    <table class=\"table table-striped\">
        <thead class=\"thead-inverse\">
            <tr>
                <th>Nombre Alumno</th>
                    ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["partials"]) ? $context["partials"] : $this->getContext($context, "partials")));
        foreach ($context['_seq'] as $context["_key"] => $context["partial"]) {
            // line 15
            echo "                    <th>
                        ";
            // line 16
            echo twig_escape_filter($this->env, ((($this->getAttribute($context["partial"], "name", array()) . " (") . $this->getAttribute($context["partial"], "weight", array())) . ")"), "html", null, true);
            echo "
                    </th>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['partial'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "            </tr>
        </thead>
        <tbody>
            ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["students"]) ? $context["students"] : $this->getContext($context, "students")));
        foreach ($context['_seq'] as $context["_key"] => $context["student"]) {
            // line 23
            echo "                <tr>
                    <td>
                        ";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["student"], "name", array()), "html", null, true);
            echo "
                    </td>
                    ";
            // line 27
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["partials"]) ? $context["partials"] : $this->getContext($context, "partials")));
            foreach ($context['_seq'] as $context["_key"] => $context["partial"]) {
                // line 28
                echo "                        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["marks"]) ? $context["marks"] : $this->getContext($context, "marks")));
                foreach ($context['_seq'] as $context["_key"] => $context["mark"]) {
                    // line 29
                    echo "                            ";
                    if ((($this->getAttribute($this->getAttribute($context["mark"], "idPartial", array()), "id", array()) == $this->getAttribute($context["partial"], "id", array())) && ($this->getAttribute($this->getAttribute($context["mark"], "idStudent", array()), "id", array()) == $this->getAttribute($context["student"], "id", array())))) {
                        // line 30
                        echo "                                <td>
                                    ";
                        // line 31
                        echo twig_escape_filter($this->env, $this->getAttribute($context["mark"], "grade", array()), "html", null, true);
                        echo "
                                </td>
                            ";
                    }
                    // line 34
                    echo "                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mark'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 35
                echo "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['partial'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 36
            echo "
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['student'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "        </tbody>
    </table>
    <div class=\"clearfix\"></div>
";
        
        $__internal_8116f7532d5c9d1befa5261df5010269dc492079627f7b8f247fc2fbe6ec27c2->leave($__internal_8116f7532d5c9d1befa5261df5010269dc492079627f7b8f247fc2fbe6ec27c2_prof);

        
        $__internal_b8204baed1363c576aca3410448b6f9e8153e152198974158325622a74525a37->leave($__internal_b8204baed1363c576aca3410448b6f9e8153e152198974158325622a74525a37_prof);

    }

    public function getTemplateName()
    {
        return "EvaluatorBundle:Course:enter.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 39,  131 => 36,  125 => 35,  119 => 34,  113 => 31,  110 => 30,  107 => 29,  102 => 28,  98 => 27,  93 => 25,  89 => 23,  85 => 22,  80 => 19,  71 => 16,  68 => 15,  64 => 14,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"EvaluatorBundle::layout.html.twig\" %}

{% block content %}
    <div class=\"col-lg-6\">
        <div class=\"card-block text-nowrap\">
            Curso: {{course.name}}
        </div>
    </div>

    <table class=\"table table-striped\">
        <thead class=\"thead-inverse\">
            <tr>
                <th>Nombre Alumno</th>
                    {% for partial in partials %}
                    <th>
                        {{partial.name ~ ' (' ~ partial.weight ~ ')'}}
                    </th>
                {% endfor %}
            </tr>
        </thead>
        <tbody>
            {% for student in students %}
                <tr>
                    <td>
                        {{student.name}}
                    </td>
                    {% for partial in partials %}
                        {% for mark in marks %}
                            {% if mark.idPartial.id == partial.id  and  mark.idStudent.id == student.id %}
                                <td>
                                    {{mark.grade}}
                                </td>
                            {% endif %}
                        {% endfor %}
                    {% endfor %}

                </tr>
            {% endfor %}
        </tbody>
    </table>
    <div class=\"clearfix\"></div>
{% endblock %}
", "EvaluatorBundle:Course:enter.html.twig", "C:\\wamp64\\www\\evaluator_sym\\src\\EvaluatorBundle/Resources/views/Course/enter.html.twig");
    }
}
