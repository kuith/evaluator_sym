<?php

/* EvaluatorBundle:Course:index.html.twig */
class __TwigTemplate_af34c658c222108888264ba1f089ce4a70083bc1c3494fa0f4abf3b756474aeb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EvaluatorBundle::layout.html.twig", "EvaluatorBundle:Course:index.html.twig", 1);
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
        $__internal_c3552c5071d4f6438ea189484c5e0f083306ab2964b64155ce5ae2c959ebdfce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c3552c5071d4f6438ea189484c5e0f083306ab2964b64155ce5ae2c959ebdfce->enter($__internal_c3552c5071d4f6438ea189484c5e0f083306ab2964b64155ce5ae2c959ebdfce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EvaluatorBundle:Course:index.html.twig"));

        $__internal_87cb07a052ca44f81984b8b42530cbe06ca4318a2992cb8b03a4becf2341caa6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87cb07a052ca44f81984b8b42530cbe06ca4318a2992cb8b03a4becf2341caa6->enter($__internal_87cb07a052ca44f81984b8b42530cbe06ca4318a2992cb8b03a4becf2341caa6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EvaluatorBundle:Course:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c3552c5071d4f6438ea189484c5e0f083306ab2964b64155ce5ae2c959ebdfce->leave($__internal_c3552c5071d4f6438ea189484c5e0f083306ab2964b64155ce5ae2c959ebdfce_prof);

        
        $__internal_87cb07a052ca44f81984b8b42530cbe06ca4318a2992cb8b03a4becf2341caa6->leave($__internal_87cb07a052ca44f81984b8b42530cbe06ca4318a2992cb8b03a4becf2341caa6_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_7d37030070e74d979d998151a8cddd941a3761f7e94854bd00fe0d1616e52f93 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d37030070e74d979d998151a8cddd941a3761f7e94854bd00fe0d1616e52f93->enter($__internal_7d37030070e74d979d998151a8cddd941a3761f7e94854bd00fe0d1616e52f93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_d5c71cf186ab43e650eadc93e0447ee2be936bf057057abe2c4fd216b361649e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5c71cf186ab43e650eadc93e0447ee2be936bf057057abe2c4fd216b361649e->enter($__internal_d5c71cf186ab43e650eadc93e0447ee2be936bf057057abe2c4fd216b361649e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    <div class=\"col-lg-12\">
        ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array(), "method"), "get", array(0 => "status"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 6
            echo "            <div class=\"alert alert-success\"> ";
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "</div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "
        <table class=\"table table-striped\">
            <thead class=\"thead-inverse\">
                <tr>
                    <th>Id Curso</th>
                    <th>Nombre Curso</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["courses"]) ? $context["courses"] : $this->getContext($context, "courses")));
        foreach ($context['_seq'] as $context["_key"] => $context["course"]) {
            // line 20
            echo "                    <tr>
                        <td>
                            ";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "id", array()), "html", null, true);
            echo "
                        </td>
                        <td>
                            ";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "name", array()), "html", null, true);
            echo "
                        </td>
                        <td>
                            <a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("evaluator_enter_course", array("id" => $this->getAttribute($context["course"], "id", array()))), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/icon_enter.png"), "html", null, true);
            echo "\"></a>
                        </td>
                        <td>
                            <a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("evaluator_delete_course", array("id" => $this->getAttribute($context["course"], "id", array()))), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/icon_delete.png"), "html", null, true);
            echo "\"></a>
                        </td>

                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['course'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "            </tbody>
        </table>

    </div>
    <div class=\"clearfix\"></div>

";
        
        $__internal_d5c71cf186ab43e650eadc93e0447ee2be936bf057057abe2c4fd216b361649e->leave($__internal_d5c71cf186ab43e650eadc93e0447ee2be936bf057057abe2c4fd216b361649e_prof);

        
        $__internal_7d37030070e74d979d998151a8cddd941a3761f7e94854bd00fe0d1616e52f93->leave($__internal_7d37030070e74d979d998151a8cddd941a3761f7e94854bd00fe0d1616e52f93_prof);

    }

    public function getTemplateName()
    {
        return "EvaluatorBundle:Course:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 36,  106 => 31,  98 => 28,  92 => 25,  86 => 22,  82 => 20,  78 => 19,  65 => 8,  56 => 6,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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
    <div class=\"col-lg-12\">
        {% for message in app.session.flashbag().get('status') %}
            <div class=\"alert alert-success\"> {{message}}</div>
        {% endfor %}

        <table class=\"table table-striped\">
            <thead class=\"thead-inverse\">
                <tr>
                    <th>Id Curso</th>
                    <th>Nombre Curso</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                {% for course in courses %}
                    <tr>
                        <td>
                            {{course.id}}
                        </td>
                        <td>
                            {{course.name}}
                        </td>
                        <td>
                            <a href=\"{{path(\"evaluator_enter_course\", {\"id\":course.id})}}\"><img src=\"{{ asset('images/icon_enter.png') }}\"></a>
                        </td>
                        <td>
                            <a href=\"{{path(\"evaluator_delete_course\", {\"id\":course.id})}}\"><img src=\"{{ asset('images/icon_delete.png') }}\"></a>
                        </td>

                    </tr>
                {% endfor %}
            </tbody>
        </table>

    </div>
    <div class=\"clearfix\"></div>

{% endblock %}
", "EvaluatorBundle:Course:index.html.twig", "C:\\wamp64\\www\\evaluator_sym\\src\\EvaluatorBundle/Resources/views/Course/index.html.twig");
    }
}
