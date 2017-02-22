<?php

/* EvaluatorBundle::layout.html.twig */
class __TwigTemplate_f17987eafde5c5c38854558479966c06ef58be91a9bafd01c6025d82536feb51 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1d14f709d8086292419f5331535f1a68365ca493052e036386b7fd42892365eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d14f709d8086292419f5331535f1a68365ca493052e036386b7fd42892365eb->enter($__internal_1d14f709d8086292419f5331535f1a68365ca493052e036386b7fd42892365eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EvaluatorBundle::layout.html.twig"));

        $__internal_7437d524f91292140e22fb1c13704f6250d33a85f602df36e1500efc84ac076d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7437d524f91292140e22fb1c13704f6250d33a85f602df36e1500efc84ac076d->enter($__internal_7437d524f91292140e22fb1c13704f6250d33a85f602df36e1500efc84ac076d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EvaluatorBundle::layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"es\">
    <head>
        <!-- Required meta tags always come first -->
        <meta charset=\"utf-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
        <meta http-equiv=\"x-ua-compatible\" content=\"ie=edge\">
        <title>
            ";
        // line 9
        $this->displayBlock('title', $context, $blocks);
        // line 10
        echo "        </title>

        <!-- Bootstrap CSS -->
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/css/bootstrap.min.css\" integrity=\"sha384-AysaV+vQoT3kOAXZkl02PThvDr8HYKPZhNT5h/CXfBThSRXQ6jW5DO2ekP5ViFdi\" crossorigin=\"anonymous\">
        ";
        // line 14
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 17
        echo "    </head>
    <body>
        <div class=\"container\">
            <header>
                <nav class=\"navbar navbar-dark bg-primary\">
                    <a class=\"navbar-brand\" href=\"";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("evaluator_homepage");
        echo "\">Evaluator 2.0</a>
                    <span class=\"nav navbar-nav\">
                        ";
        // line 24
        if (($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()) != null)) {
            // line 25
            echo "                            <a class=\"nav-item nav-link\" href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("evaluator_index_courses");
            echo "\" id=\"cursosNavItem\">Cursos</a>
                            <a class=\"nav-item nav-link\" href=\"";
            // line 26
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("evaluator_add_course");
            echo "\" id=\"nuevoCursoNavItem\">Nuevo Curso</a>
                        ";
        }
        // line 28
        echo "                    </span>
                    <span class=\"nav navbar-nav float-md-right\">

                        <div class=\"dropdown\">
                            <a class=\"nav-item nav-link\" href=\"#\" id=\"cursosNavItem\">
                                ";
        // line 33
        if (($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()) != null)) {
            // line 34
            echo "                                    Bienvenido, ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "name", array()), "html", null, true);
            echo "
                                ";
        }
        // line 36
        echo "                            </a>
                            <button class=\"btn btn-primary dropdown-toggle\" type=\"button\" id=\"dropdownMenuButton\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                Login
                            </button>
                            <div class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuButton\">
                                ";
        // line 41
        if (($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()) == null)) {
            // line 42
            echo "                                    <a class=\"dropdown-item\" href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login");
            echo "\">Entrar</a>
                                ";
        } else {
            // line 44
            echo "                                    <a class=\"dropdown-item\" href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("logout");
            echo "\">Salir</a>
                                ";
        }
        // line 46
        echo "                            </div>
                        </div>
                    </span>

                </nav>

            </header>
            <section id=\"content\">
                ";
        // line 54
        $this->displayBlock('content', $context, $blocks);
        // line 55
        echo "            </section>
            <footer class=\"blockquote-footer\">
                Evaluator. Symfony3 version
            </footer>
        </div>

        <!-- jQuery first, then Tether, then Bootstrap JS. -->
        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js\" integrity=\"sha384-3ceskX3iaEnIogmQchP8opvBy3Mi7Ce34nWjpBIwVTHfGYWQS9jwHDVRnpKKHJg7\" crossorigin=\"anonymous\"></script>
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/tether/1.3.7/js/tether.min.js\" integrity=\"sha384-XTs3FgkjiBgo8qjEjBk0tGmf3wPrWtA6coPfQDfFEY8AnYJwjalXCiosYRBIBZX8\" crossorigin=\"anonymous\"></script>
        <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/js/bootstrap.min.js\" integrity=\"sha384-BLiI7JTZm+JWlgKa0M0kGRpJbF2J8q+qreVrKBC47e3K6BW78kGLrCkeRX6I9RoK\" crossorigin=\"anonymous\"></script>
    </body>
</html>
";
        
        $__internal_1d14f709d8086292419f5331535f1a68365ca493052e036386b7fd42892365eb->leave($__internal_1d14f709d8086292419f5331535f1a68365ca493052e036386b7fd42892365eb_prof);

        
        $__internal_7437d524f91292140e22fb1c13704f6250d33a85f602df36e1500efc84ac076d->leave($__internal_7437d524f91292140e22fb1c13704f6250d33a85f602df36e1500efc84ac076d_prof);

    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        $__internal_ea6b3674fdc0e2d5a295acacf47443c1f8eb4ffdc28dbbcf20548946f8234b37 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea6b3674fdc0e2d5a295acacf47443c1f8eb4ffdc28dbbcf20548946f8234b37->enter($__internal_ea6b3674fdc0e2d5a295acacf47443c1f8eb4ffdc28dbbcf20548946f8234b37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e025622b476edbcb3dfcb802847b8a40d93cf6f6e3ec2d7a194157bf9ba029e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e025622b476edbcb3dfcb802847b8a40d93cf6f6e3ec2d7a194157bf9ba029e5->enter($__internal_e025622b476edbcb3dfcb802847b8a40d93cf6f6e3ec2d7a194157bf9ba029e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Evaluator Symfony 3 Version";
        
        $__internal_e025622b476edbcb3dfcb802847b8a40d93cf6f6e3ec2d7a194157bf9ba029e5->leave($__internal_e025622b476edbcb3dfcb802847b8a40d93cf6f6e3ec2d7a194157bf9ba029e5_prof);

        
        $__internal_ea6b3674fdc0e2d5a295acacf47443c1f8eb4ffdc28dbbcf20548946f8234b37->leave($__internal_ea6b3674fdc0e2d5a295acacf47443c1f8eb4ffdc28dbbcf20548946f8234b37_prof);

    }

    // line 14
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_8677606d09bf9c9d5e61f65cd281eb699d4fc6b272268a9a5d27b45b75d54c74 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8677606d09bf9c9d5e61f65cd281eb699d4fc6b272268a9a5d27b45b75d54c74->enter($__internal_8677606d09bf9c9d5e61f65cd281eb699d4fc6b272268a9a5d27b45b75d54c74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_1cf7e98c5f0e47ce45ebaf355d0fb47ad44b3d70939942eaae4e50472a11722a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1cf7e98c5f0e47ce45ebaf355d0fb47ad44b3d70939942eaae4e50472a11722a->enter($__internal_1cf7e98c5f0e47ce45ebaf355d0fb47ad44b3d70939942eaae4e50472a11722a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 15
        echo "            <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/estilos.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
        ";
        
        $__internal_1cf7e98c5f0e47ce45ebaf355d0fb47ad44b3d70939942eaae4e50472a11722a->leave($__internal_1cf7e98c5f0e47ce45ebaf355d0fb47ad44b3d70939942eaae4e50472a11722a_prof);

        
        $__internal_8677606d09bf9c9d5e61f65cd281eb699d4fc6b272268a9a5d27b45b75d54c74->leave($__internal_8677606d09bf9c9d5e61f65cd281eb699d4fc6b272268a9a5d27b45b75d54c74_prof);

    }

    // line 54
    public function block_content($context, array $blocks = array())
    {
        $__internal_567caba73062ad88e2c975bd4902a4cffb42317c20a91e3ada5c1443a79b144e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_567caba73062ad88e2c975bd4902a4cffb42317c20a91e3ada5c1443a79b144e->enter($__internal_567caba73062ad88e2c975bd4902a4cffb42317c20a91e3ada5c1443a79b144e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_60a8468d1bbbb89808bc9ded259d6af73d81a34402b5a267f8676ea1ea2cd3ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60a8468d1bbbb89808bc9ded259d6af73d81a34402b5a267f8676ea1ea2cd3ff->enter($__internal_60a8468d1bbbb89808bc9ded259d6af73d81a34402b5a267f8676ea1ea2cd3ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        echo "Contenido por defecto";
        
        $__internal_60a8468d1bbbb89808bc9ded259d6af73d81a34402b5a267f8676ea1ea2cd3ff->leave($__internal_60a8468d1bbbb89808bc9ded259d6af73d81a34402b5a267f8676ea1ea2cd3ff_prof);

        
        $__internal_567caba73062ad88e2c975bd4902a4cffb42317c20a91e3ada5c1443a79b144e->leave($__internal_567caba73062ad88e2c975bd4902a4cffb42317c20a91e3ada5c1443a79b144e_prof);

    }

    public function getTemplateName()
    {
        return "EvaluatorBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  182 => 54,  169 => 15,  160 => 14,  142 => 9,  120 => 55,  118 => 54,  108 => 46,  102 => 44,  96 => 42,  94 => 41,  87 => 36,  81 => 34,  79 => 33,  72 => 28,  67 => 26,  62 => 25,  60 => 24,  55 => 22,  48 => 17,  46 => 14,  40 => 10,  38 => 9,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"es\">
    <head>
        <!-- Required meta tags always come first -->
        <meta charset=\"utf-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
        <meta http-equiv=\"x-ua-compatible\" content=\"ie=edge\">
        <title>
            {% block title %}Evaluator Symfony 3 Version{% endblock%}
        </title>

        <!-- Bootstrap CSS -->
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/css/bootstrap.min.css\" integrity=\"sha384-AysaV+vQoT3kOAXZkl02PThvDr8HYKPZhNT5h/CXfBThSRXQ6jW5DO2ekP5ViFdi\" crossorigin=\"anonymous\">
        {% block stylesheets %}
            <link href=\"{{ asset('css/estilos.css') }}\" rel=\"stylesheet\" />
        {% endblock %}
    </head>
    <body>
        <div class=\"container\">
            <header>
                <nav class=\"navbar navbar-dark bg-primary\">
                    <a class=\"navbar-brand\" href=\"{{path(\"evaluator_homepage\")}}\">Evaluator 2.0</a>
                    <span class=\"nav navbar-nav\">
                        {% if app.user != null %}
                            <a class=\"nav-item nav-link\" href=\"{{path(\"evaluator_index_courses\")}}\" id=\"cursosNavItem\">Cursos</a>
                            <a class=\"nav-item nav-link\" href=\"{{path(\"evaluator_add_course\")}}\" id=\"nuevoCursoNavItem\">Nuevo Curso</a>
                        {% endif%}
                    </span>
                    <span class=\"nav navbar-nav float-md-right\">

                        <div class=\"dropdown\">
                            <a class=\"nav-item nav-link\" href=\"#\" id=\"cursosNavItem\">
                                {% if app.user != null %}
                                    Bienvenido, {{app.user.name}}
                                {% endif%}
                            </a>
                            <button class=\"btn btn-primary dropdown-toggle\" type=\"button\" id=\"dropdownMenuButton\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                Login
                            </button>
                            <div class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuButton\">
                                {% if app.user == null %}
                                    <a class=\"dropdown-item\" href=\"{{path(\"login\")}}\">Entrar</a>
                                {% else %}
                                    <a class=\"dropdown-item\" href=\"{{path(\"logout\")}}\">Salir</a>
                                {% endif %}
                            </div>
                        </div>
                    </span>

                </nav>

            </header>
            <section id=\"content\">
                {% block content %}Contenido por defecto{% endblock %}
            </section>
            <footer class=\"blockquote-footer\">
                Evaluator. Symfony3 version
            </footer>
        </div>

        <!-- jQuery first, then Tether, then Bootstrap JS. -->
        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js\" integrity=\"sha384-3ceskX3iaEnIogmQchP8opvBy3Mi7Ce34nWjpBIwVTHfGYWQS9jwHDVRnpKKHJg7\" crossorigin=\"anonymous\"></script>
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/tether/1.3.7/js/tether.min.js\" integrity=\"sha384-XTs3FgkjiBgo8qjEjBk0tGmf3wPrWtA6coPfQDfFEY8AnYJwjalXCiosYRBIBZX8\" crossorigin=\"anonymous\"></script>
        <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/js/bootstrap.min.js\" integrity=\"sha384-BLiI7JTZm+JWlgKa0M0kGRpJbF2J8q+qreVrKBC47e3K6BW78kGLrCkeRX6I9RoK\" crossorigin=\"anonymous\"></script>
    </body>
</html>
", "EvaluatorBundle::layout.html.twig", "C:\\wamp64\\www\\evaluator_sym\\src\\EvaluatorBundle/Resources/views/layout.html.twig");
    }
}
