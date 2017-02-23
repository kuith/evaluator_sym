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
        $__internal_46ee1e9ef1ecbc044dfe1078288e45c11422c39f5913dd5d26eeeed1cc9b3264 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_46ee1e9ef1ecbc044dfe1078288e45c11422c39f5913dd5d26eeeed1cc9b3264->enter($__internal_46ee1e9ef1ecbc044dfe1078288e45c11422c39f5913dd5d26eeeed1cc9b3264_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EvaluatorBundle:Course:enter.html.twig"));

        $__internal_60422c8eda76c676aafb6886489a25278d804efe80f7a507c5996dd9f7674b4d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60422c8eda76c676aafb6886489a25278d804efe80f7a507c5996dd9f7674b4d->enter($__internal_60422c8eda76c676aafb6886489a25278d804efe80f7a507c5996dd9f7674b4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EvaluatorBundle:Course:enter.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_46ee1e9ef1ecbc044dfe1078288e45c11422c39f5913dd5d26eeeed1cc9b3264->leave($__internal_46ee1e9ef1ecbc044dfe1078288e45c11422c39f5913dd5d26eeeed1cc9b3264_prof);

        
        $__internal_60422c8eda76c676aafb6886489a25278d804efe80f7a507c5996dd9f7674b4d->leave($__internal_60422c8eda76c676aafb6886489a25278d804efe80f7a507c5996dd9f7674b4d_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_0d6cffdcae6df3a99def2e28b25158aa1c72c608eb8dfc6edfe3c66c388aa621 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d6cffdcae6df3a99def2e28b25158aa1c72c608eb8dfc6edfe3c66c388aa621->enter($__internal_0d6cffdcae6df3a99def2e28b25158aa1c72c608eb8dfc6edfe3c66c388aa621_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_586d8b4927c14f1552385df808eff8a60fea00e14ec58ac9b0c932fe69db188c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_586d8b4927c14f1552385df808eff8a60fea00e14ec58ac9b0c932fe69db188c->enter($__internal_586d8b4927c14f1552385df808eff8a60fea00e14ec58ac9b0c932fe69db188c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
            echo twig_escape_filter($this->env, $this->getAttribute($context["partial"], "name", array()), "html", null, true);
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
                echo "                        <td>
                            ";
                // line 30
                echo "                            ";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("EvaluatorBundle:Mark:courseMarks", array("idCourse" => $this->getAttribute(                // line 31
(isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()), "idStudent" => $this->getAttribute($context["student"], "id", array()), "idPartial" => $this->getAttribute($context["partial"], "id", array()))));
                echo "
                        </td>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['partial'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 34
            echo "                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['student'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "        </tbody>
    </table>
    <div class=\"clearfix\"></div>
";
        
        $__internal_586d8b4927c14f1552385df808eff8a60fea00e14ec58ac9b0c932fe69db188c->leave($__internal_586d8b4927c14f1552385df808eff8a60fea00e14ec58ac9b0c932fe69db188c_prof);

        
        $__internal_0d6cffdcae6df3a99def2e28b25158aa1c72c608eb8dfc6edfe3c66c388aa621->leave($__internal_0d6cffdcae6df3a99def2e28b25158aa1c72c608eb8dfc6edfe3c66c388aa621_prof);

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
        return array (  123 => 36,  116 => 34,  107 => 31,  105 => 30,  102 => 28,  98 => 27,  93 => 25,  89 => 23,  85 => 22,  80 => 19,  71 => 16,  68 => 15,  64 => 14,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
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
                        {{partial.name}}
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
                        <td>
                            {#{{ include(\"EvaluatorBundle:Mark:grid_marks.html.twig\" , { \"idCourse\": course.id, \"idStudent\": student.id, \"idPartial\": partial.id}) }}#}
                            {{ render(controller ( 'EvaluatorBundle:Mark:courseMarks' ,
                                 { 'idCourse': course.id, 'idStudent': student.id, 'idPartial': partial.id})) }}
                        </td>
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
