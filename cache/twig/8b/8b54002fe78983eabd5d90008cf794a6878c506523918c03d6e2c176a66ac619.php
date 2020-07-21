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

/* /library/Vanilla/EmbeddedContent/Embeds/ImageEmbed.twig */
class __TwigTemplate_6c342a5c9a65b71079987ada8643f3056915f642efd45740f51ae2e3070e1b71 extends \Twig\Template
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
        echo "<div class=\"embedExternal embedImage\">
    <div class=\"embedExternal-content\">
        <a class=\"embedImage-link\" href=\"";
        // line 3
        echo twig_escape_filter($this->env, Gdn_Format::sanitizeUrl(($context["url"] ?? null)), "html", null, true);
        echo "\" rel=\"nofollow noopener\" target=\"_blank\">
            <img
                class=\"embedImage-img\"
                src=\"";
        // line 6
        echo twig_escape_filter($this->env, ($context["url"] ?? null), "html", null, true);
        echo "\"
                alt=\"";
        // line 7
        echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
        echo "\"
            />
        </a>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "/library/Vanilla/EmbeddedContent/Embeds/ImageEmbed.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 7,  47 => 6,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/library/Vanilla/EmbeddedContent/Embeds/ImageEmbed.twig", "/home/vol7_6/epizy.com/epiz_25916666/forum.cosmoz-serv.cf/htdocs/library/Vanilla/EmbeddedContent/Embeds/ImageEmbed.twig");
    }
}
