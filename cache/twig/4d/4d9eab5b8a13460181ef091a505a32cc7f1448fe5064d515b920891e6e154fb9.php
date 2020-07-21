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

/* /applications/vanilla/views/vanillasettings/editcategory.twig */
class __TwigTemplate_fe12471e291286a498f1f56dd9db188940ef5cfbdb262174231d9055a9784aa0 extends \Twig\Template
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
        echo "
";
        // line 2
        $macros["__internal_58e1b7b926a396e954bb953ef3dae9487a9ce623c610c20fcddcd32fb4034681"] = $this->macros["__internal_58e1b7b926a396e954bb953ef3dae9487a9ce623c610c20fcddcd32fb4034681"] = $this->loadTemplate("@dashboard/components/macros.twig", "/applications/vanilla/views/vanillasettings/editcategory.twig", 2)->unwrap();
        // line 3
        echo "
";
        // line 4
        echo twig_escape_filter($this->env, helpAsset(sprintf(call_user_func_array($this->env->getFunction('t')->getCallable(), ["About %s"]), call_user_func_array($this->env->getFunction('t')->getCallable(), ["Categories"])), call_user_func_array($this->env->getFunction('t')->getCallable(), ["Categories are used to organize discussions.", "Categories allow you to organize your discussions."])), "html", null, true);
        // line 10
        echo "

";
        // line 12
        echo twig_call_macro($macros["__internal_58e1b7b926a396e954bb953ef3dae9487a9ce623c610c20fcddcd32fb4034681"], "macro_dashboardHeading", [["title" =>         // line 14
($context["Title"] ?? null), "returnUrl" => "/vanilla/settings/categories"]], 13, $context, $this->getSourceContext());
        // line 17
        echo "
";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "open", [0 => ["enctype" => "multipart/form-data"]], "method", false, false, false, 18), "html", null, true);
        echo "
";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "errors", [], "method", false, false, false, 19), "html", null, true);
        echo "
";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "hidden", [0 => "ParentCategoryID"], "method", false, false, false, 20), "html", null, true);
        echo "
<ul>
    <li class=\"form-group\">
        <div class=\"label-wrap\">
            ";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "label", [0 => "Category", 1 => "Name"], "method", false, false, false, 24), "html", null, true);
        echo "
        </div>
        <div class=\"input-wrap\">
            ";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "textBox", [0 => "Name"], "method", false, false, false, 27), "html", null, true);
        echo "
        </div>
    </li>
    <li class=\"form-group\">
        <div class=\"label-wrap\">
            <strong>";
        // line 32
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["Category Url:"]), "html", null, true);
        echo "</strong>
        </div>
        <div id=\"UrlCode\" class=\"input-wrap category-url-code\">
            <div class=\"category-url\">
                ";
        // line 36
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), ["/categories", true]), "html", null, true);
        // line 37
        echo "/";
        // line 38
        echo "<span>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "getValue", [0 => "UrlCode"], "method", false, false, false, 38), "html", null, true);
        echo "</span>
            </div>
            ";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "textBox", [0 => "UrlCode"], "method", false, false, false, 40), "html", null, true);
        echo "
            ";
        // line 41
        echo ((twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "getValue", [0 => "UrlCode"], "method", false, false, false, 41)) ? ("/") : (""));
        echo "
            <a class=\"Edit btn btn-link\" href=\"#\">";
        // line 42
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["edit"]), "html", null, true);
        echo "</a>
            <a class=\"Save btn btn-primary\" href=\"#\">";
        // line 43
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["OK"]), "html", null, true);
        echo "</a>
        </div>
    </li>
    <li class=\"form-group\">
        <div class=\"label-wrap\">
            ";
        // line 48
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "label", [0 => "Description", 1 => "Description"], "method", false, false, false, 48), "html", null, true);
        echo "
        </div>
        <div class=\"input-wrap\">
            ";
        // line 51
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "textBox", [0 => "Description", 1 => ["MultiLine" => true]], "method", false, false, false, 51), "html", null, true);
        echo "
        </div>
    </li>
    <li class=\"form-group\">
        <div class=\"label-wrap\">
            ";
        // line 56
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "label", [0 => "Css Class", 1 => "CssClass"], "method", false, false, false, 56), "html", null, true);
        echo "
        </div>
        <div class=\"input-wrap\">
            ";
        // line 59
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "textBox", [0 => "CssClass", 1 => ["MultiLine" => false]], "method", false, false, false, 59), "html", null, true);
        echo "
        </div>
    </li>
    ";
        // line 62
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "imageUploadPreview", [0 => "Photo", 1 => call_user_func_array($this->env->getFunction('t')->getCallable(), ["Photo"]), 2 => "", 3 => ("vanilla/settings/deletecategoryphoto/" . twig_get_attribute($this->env, $this->source,         // line 66
($context["category"] ?? null), "CategoryID", [], "any", false, false, false, 66))], "method", false, false, false, 62), "html", null, true);
        // line 67
        echo "

    ";
        // line 72
        echo "    ";
        if ((isset($context["_ExtendedFields"]) || array_key_exists("_ExtendedFields", $context))) {
            // line 73
            echo "        ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "simple", [0 => ($context["_ExtendedFields"] ?? null), 1 => []], "method", false, false, false, 73), "html", null, true);
            echo "
    ";
        }
        // line 75
        echo "    <li class=\"form-group\">
        <div class=\"label-wrap\">
            ";
        // line 77
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "label", [0 => "Display As", 1 => "DisplayAs"], "method", false, false, false, 77), "html", null, true);
        echo "
        </div>
        <div class=\"input-wrap\">
            ";
        // line 80
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "dropDown", [0 => "DisplayAs", 1 => ($context["DisplayAsOptions"] ?? null), 2 => ["Wrap" => true]], "method", false, false, false, 80), "html", null, true);
        echo "
        </div>
    </li>
    <li class=\"form-group\">
        ";
        // line 84
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "toggle", [0 => "HideAllDiscussions", 1 => "Hide from the recent discussions page."], "method", false, false, false, 84), "html", null, true);
        echo "
    </li>
    ";
        // line 86
        if ((($context["Operation"] ?? null) === "Edit")) {
            // line 87
            echo "        <li class=\"form-group\">
            ";
            // line 88
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "toggle", [0 => "Archived", 1 => "This category is archived."], "method", false, false, false, 88), "html", null, true);
            echo "
        </li>
    ";
        }
        // line 91
        echo "    ";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('firePluggableEchoEvent')->getCallable(), [($context["pluggable"] ?? null), "afterCategorySettings"]), "html", null, true);
        echo "
    ";
        // line 92
        if ((twig_length_filter($this->env, ($context["PermissionData"] ?? null)) > 0)) {
            // line 93
            echo "        <li id=\"Permissions\" class=\"form-group\">
            ";
            // line 94
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "toggle", [0 => "CustomPermissions", 1 => "This category has custom permissions."], "method", false, false, false, 94), "html", null, true);
            echo "
        </li>
    ";
        }
        // line 97
        echo "</ul>
<div class=\"CategoryPermissions\">

    ";
        // line 100
        if ((twig_length_filter($this->env, ($context["DiscussionTypes"] ?? null)) > 1)) {
            // line 101
            echo "        <div class=\"P DiscussionTypes form-group\">
            <div class=\"label-wrap\">
                ";
            // line 103
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "label", [0 => "Discussion Types"], "method", false, false, false, 103), "html", null, true);
            echo "
            </div>
            <div class=\"checkbox-list input-wrap\">
                ";
            // line 106
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["DiscussionTypes"] ?? null));
            foreach ($context['_seq'] as $context["type"] => $context["row"]) {
                // line 107
                echo "                    ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "checkBox", [0 => "AllowedDiscussionTypes[]", 1 => ((twig_get_attribute($this->env, $this->source, $context["row"], "Plural", [], "any", false, false, false, 107)) ? (twig_get_attribute($this->env, $this->source, $context["row"], "Plural", [], "any", false, false, false, 107)) : ($context["type"])), 2 => ["value" => $context["type"]]], "method", false, false, false, 107), "html", null, true);
                echo "
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['type'], $context['row'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 109
            echo "            </div>
        </div>
    ";
        }
        // line 112
        echo "
    ";
        // line 113
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "simple", [0 => ($context["_PermissionFields"] ?? null), 1 => []], "method", false, false, false, 113), "html", null, true);
        echo "

    <div class=\"padded\">";
        // line 115
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["Check all permissions that apply for each role"]), "html", null, true);
        echo "</div>
    ";
        // line 116
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "checkBoxGridGroups", [0 => ($context["PermissionData"] ?? null), 1 => "Permission"], "method", false, false, false, 116), "html", null, true);
        echo "
</div>
";
        // line 118
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "close", [0 => "Save"], "method", false, false, false, 118), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "/applications/vanilla/views/vanillasettings/editcategory.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  266 => 118,  261 => 116,  257 => 115,  252 => 113,  249 => 112,  244 => 109,  235 => 107,  231 => 106,  225 => 103,  221 => 101,  219 => 100,  214 => 97,  208 => 94,  205 => 93,  203 => 92,  198 => 91,  192 => 88,  189 => 87,  187 => 86,  182 => 84,  175 => 80,  169 => 77,  165 => 75,  159 => 73,  156 => 72,  152 => 67,  150 => 66,  149 => 62,  143 => 59,  137 => 56,  129 => 51,  123 => 48,  115 => 43,  111 => 42,  107 => 41,  103 => 40,  97 => 38,  95 => 37,  93 => 36,  86 => 32,  78 => 27,  72 => 24,  65 => 20,  61 => 19,  57 => 18,  54 => 17,  52 => 14,  51 => 12,  47 => 10,  45 => 4,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/applications/vanilla/views/vanillasettings/editcategory.twig", "/home/vol7_6/epizy.com/epiz_25916666/forum.cosmoz-serv.cf/htdocs/applications/vanilla/views/vanillasettings/editcategory.twig");
    }
}
