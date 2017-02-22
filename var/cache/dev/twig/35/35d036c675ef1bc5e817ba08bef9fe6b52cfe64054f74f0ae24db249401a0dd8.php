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
        $__internal_90c5024e13bdbc50678f38703260eb836a483bfcb10dae85705176f0cf4627a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_90c5024e13bdbc50678f38703260eb836a483bfcb10dae85705176f0cf4627a2->enter($__internal_90c5024e13bdbc50678f38703260eb836a483bfcb10dae85705176f0cf4627a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EvaluatorBundle:Course:enter.html.twig"));

        $__internal_7fd1bfb0cbdfaedad6d4187f83fbee9b5460f3d3593fc1365c584b5214256b25 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7fd1bfb0cbdfaedad6d4187f83fbee9b5460f3d3593fc1365c584b5214256b25->enter($__internal_7fd1bfb0cbdfaedad6d4187f83fbee9b5460f3d3593fc1365c584b5214256b25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EvaluatorBundle:Course:enter.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_90c5024e13bdbc50678f38703260eb836a483bfcb10dae85705176f0cf4627a2->leave($__internal_90c5024e13bdbc50678f38703260eb836a483bfcb10dae85705176f0cf4627a2_prof);

        
        $__internal_7fd1bfb0cbdfaedad6d4187f83fbee9b5460f3d3593fc1365c584b5214256b25->leave($__internal_7fd1bfb0cbdfaedad6d4187f83fbee9b5460f3d3593fc1365c584b5214256b25_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_9f2a4fd1b13ae9c23929eb74a9b8ab84df4ebe9f66084b71e0594a2d2de17945 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f2a4fd1b13ae9c23929eb74a9b8ab84df4ebe9f66084b71e0594a2d2de17945->enter($__internal_9f2a4fd1b13ae9c23929eb74a9b8ab84df4ebe9f66084b71e0594a2d2de17945_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_caf249f8aebfbd2b10eb464469d7f924600bc677bfaddd8ff1eb9918ac96e89d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_caf249f8aebfbd2b10eb464469d7f924600bc677bfaddd8ff1eb9918ac96e89d->enter($__internal_caf249f8aebfbd2b10eb464469d7f924600bc677bfaddd8ff1eb9918ac96e89d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("EvaluatorBundle:Mark:courseMarks", array("idCourse" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()), "idStudent" => $this->getAttribute($context["student"], "id", array()), "idPartial" => $this->getAttribute($context["partial"], "id", array()))));
                echo "
                        </td>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['partial'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 33
            echo "                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['student'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "        </tbody>
    </table>
    <div class=\"clearfix\"></div>
";
        
        $__internal_caf249f8aebfbd2b10eb464469d7f924600bc677bfaddd8ff1eb9918ac96e89d->leave($__internal_caf249f8aebfbd2b10eb464469d7f924600bc677bfaddd8ff1eb9918ac96e89d_prof);

        
        $__internal_9f2a4fd1b13ae9c23929eb74a9b8ab84df4ebe9f66084b71e0594a2d2de17945->leave($__internal_9f2a4fd1b13ae9c23929eb74a9b8ab84df4ebe9f66084b71e0594a2d2de17945_prof);

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
        return array (  122 => 35,  115 => 33,  106 => 30,  102 => 28,  98 => 27,  93 => 25,  89 => 23,  85 => 22,  80 => 19,  71 => 16,  68 => 15,  64 => 14,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
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
                           
                            {{ render(controller ( 'EvaluatorBundle:Mark:courseMarks' , { \"idCourse\": course.id, \"idStudent\": student.id, \"idPartial\": partial.id})) }}
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
