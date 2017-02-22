<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_be4d1cec9070807712a715a9780d24ad57ccc6b94a94437daf23cc99cf8bb023 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3e76fb81220679256307a614222083edbc9e264a81773862a548967c331375dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e76fb81220679256307a614222083edbc9e264a81773862a548967c331375dd->enter($__internal_3e76fb81220679256307a614222083edbc9e264a81773862a548967c331375dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_f7beb4505ed69f36311ce261c5eb50048e9197db440feda7f820a11d5f641938 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7beb4505ed69f36311ce261c5eb50048e9197db440feda7f820a11d5f641938->enter($__internal_f7beb4505ed69f36311ce261c5eb50048e9197db440feda7f820a11d5f641938_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3e76fb81220679256307a614222083edbc9e264a81773862a548967c331375dd->leave($__internal_3e76fb81220679256307a614222083edbc9e264a81773862a548967c331375dd_prof);

        
        $__internal_f7beb4505ed69f36311ce261c5eb50048e9197db440feda7f820a11d5f641938->leave($__internal_f7beb4505ed69f36311ce261c5eb50048e9197db440feda7f820a11d5f641938_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_383b189177c1f0967910eb6277776d1d5480d1e2d19e89155acb23a0506cb4e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_383b189177c1f0967910eb6277776d1d5480d1e2d19e89155acb23a0506cb4e0->enter($__internal_383b189177c1f0967910eb6277776d1d5480d1e2d19e89155acb23a0506cb4e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_d4184fdc14a109eb409f7283aa968afc5723097829b7bb165dd8137d28207c10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4184fdc14a109eb409f7283aa968afc5723097829b7bb165dd8137d28207c10->enter($__internal_d4184fdc14a109eb409f7283aa968afc5723097829b7bb165dd8137d28207c10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_d4184fdc14a109eb409f7283aa968afc5723097829b7bb165dd8137d28207c10->leave($__internal_d4184fdc14a109eb409f7283aa968afc5723097829b7bb165dd8137d28207c10_prof);

        
        $__internal_383b189177c1f0967910eb6277776d1d5480d1e2d19e89155acb23a0506cb4e0->leave($__internal_383b189177c1f0967910eb6277776d1d5480d1e2d19e89155acb23a0506cb4e0_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_4e7b64fffb15e8dcf12c05c574007a289be3b13579cce289dcc430da2448639f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e7b64fffb15e8dcf12c05c574007a289be3b13579cce289dcc430da2448639f->enter($__internal_4e7b64fffb15e8dcf12c05c574007a289be3b13579cce289dcc430da2448639f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b99af59fc3d8a90bd3fbeb843af08150e2fbef43f5edb7acfa246b5ba5e4f55a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b99af59fc3d8a90bd3fbeb843af08150e2fbef43f5edb7acfa246b5ba5e4f55a->enter($__internal_b99af59fc3d8a90bd3fbeb843af08150e2fbef43f5edb7acfa246b5ba5e4f55a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_b99af59fc3d8a90bd3fbeb843af08150e2fbef43f5edb7acfa246b5ba5e4f55a->leave($__internal_b99af59fc3d8a90bd3fbeb843af08150e2fbef43f5edb7acfa246b5ba5e4f55a_prof);

        
        $__internal_4e7b64fffb15e8dcf12c05c574007a289be3b13579cce289dcc430da2448639f->leave($__internal_4e7b64fffb15e8dcf12c05c574007a289be3b13579cce289dcc430da2448639f_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_fc0de61f3ea187b48aa84f2e025f9a215295b1fb38368f8bed58174d12b53130 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc0de61f3ea187b48aa84f2e025f9a215295b1fb38368f8bed58174d12b53130->enter($__internal_fc0de61f3ea187b48aa84f2e025f9a215295b1fb38368f8bed58174d12b53130_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3a00e4a99c93925f23538a7eca68a567440760ea7b13005e19ca281cf0dfcb83 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a00e4a99c93925f23538a7eca68a567440760ea7b13005e19ca281cf0dfcb83->enter($__internal_3a00e4a99c93925f23538a7eca68a567440760ea7b13005e19ca281cf0dfcb83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_3a00e4a99c93925f23538a7eca68a567440760ea7b13005e19ca281cf0dfcb83->leave($__internal_3a00e4a99c93925f23538a7eca68a567440760ea7b13005e19ca281cf0dfcb83_prof);

        
        $__internal_fc0de61f3ea187b48aa84f2e025f9a215295b1fb38368f8bed58174d12b53130->leave($__internal_fc0de61f3ea187b48aa84f2e025f9a215295b1fb38368f8bed58174d12b53130_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "C:\\wamp64\\www\\evaluator_sym\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
