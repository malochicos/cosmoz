<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* /applications/dashboard/views/robots/index.twig */
class __TwigTemplate_0656124a5cda22f790e80c9d36c1b5e15e9764f32231c071aa15a0aa1ac9d67e extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["sitemaps"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["sitemap"]) {
            // line 2
            echo "Sitemap: ";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), [$context["sitemap"], true]), "html", null, true);
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sitemap'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["rules"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["rule"]) {
            // line 5
            echo twig_escape_filter($this->env, $context["rule"], "html", null, true);
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rule'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "/applications/dashboard/views/robots/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 5,  50 => 4,  41 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/applications/dashboard/views/robots/index.twig", "/home/vol7_6/epizy.com/epiz_25916666/forum.cosmoz-serv.cf/htdocs/applications/dashboard/views/robots/index.twig");
    }
}
