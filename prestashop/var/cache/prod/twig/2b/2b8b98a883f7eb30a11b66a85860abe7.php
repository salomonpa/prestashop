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

/* @PrestaShop/Admin/Common/pagination_quicknav.html.twig */
class __TwigTemplate_9cec727a5360eaad7ffb7660782b3924 extends Template
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
        // line 25
        if ((($context["previous_url"] ?? null) || ($context["next_url"] ?? null))) {
            // line 26
            echo "<nav>
    <ul class=\"pagination\">
        <li class=\"page-item ";
            // line 28
            if (($context["first_url"] ?? null)) {
            } else {
                echo "disabled";
            }
            echo "\">
            <a class=\"page-link\" ";
            // line 29
            if (($context["first_url"] ?? null)) {
                echo "href=\"";
                echo twig_escape_filter($this->env, ($context["first_url"] ?? null), "html", null, true);
                echo "\"";
            } else {
                echo "nohref";
            }
            echo ">1</a>
        </li>
        <li class=\"page-item ";
            // line 31
            if (($context["previous_url"] ?? null)) {
            } else {
                echo "disabled";
            }
            echo "\">
            <a class=\"page-link\" data-role=\"previous-page-link\" ";
            // line 32
            if (($context["previous_url"] ?? null)) {
                echo "href=\"";
                echo twig_escape_filter($this->env, ($context["previous_url"] ?? null), "html", null, true);
                echo "\"";
            } else {
                echo "nohref";
            }
            echo ">&lt;</a>
        </li>
        <li class=\"page-item active\" style=\"float: left;\">
            <input name=\"paginator_jump_page\" class=\"jump-to-page\" type=\"text\" style=\"width: 4em;\"
                   value=\"";
            // line 36
            echo twig_escape_filter($this->env, ($context["current_page"] ?? null), "html", null, true);
            echo "\" psurl=\"";
            echo twig_escape_filter($this->env, ($context["jump_page_url"] ?? null), "html", null, true);
            echo "\" psmax=\"";
            echo twig_escape_filter($this->env, ($context["page_count"] ?? null), "html", null, true);
            echo "\" pslimit=\"";
            echo twig_escape_filter($this->env, ($context["limit"] ?? null), "html", null, true);
            echo "\" />
        </li>
        <li class=\"page-item ";
            // line 38
            if ((array_key_exists("next_url", $context) && (($context["next_url"] ?? null) != false))) {
            } else {
                echo "disabled";
            }
            echo "\">
            <a class=\"page-link\" data-role=\"next-page-link\" id=\"pagination_next_url\" ";
            // line 39
            if ((array_key_exists("next_url", $context) && (($context["next_url"] ?? null) != false))) {
                echo "href=\"";
                echo twig_escape_filter($this->env, ($context["next_url"] ?? null), "html", null, true);
                echo "\"";
            } else {
                echo "nohref";
            }
            echo ">&gt;</a>
        </li>
        <li class=\"page-item ";
            // line 41
            if ((array_key_exists("last_url", $context) && (($context["last_url"] ?? null) != false))) {
            } else {
                echo "disabled";
            }
            echo "\">
            <a class=\"page-link\" ";
            // line 42
            if ((array_key_exists("last_url", $context) && (($context["last_url"] ?? null) != false))) {
                echo "href=\"";
                echo twig_escape_filter($this->env, ($context["last_url"] ?? null), "html", null, true);
                echo "\"";
            } else {
                echo "nohref";
            }
            echo ">";
            echo twig_escape_filter($this->env, ($context["page_count"] ?? null), "html", null, true);
            echo "</a>
        </li>
    </ul>
</nav>
";
        }
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Common/pagination_quicknav.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 42,  110 => 41,  99 => 39,  92 => 38,  81 => 36,  68 => 32,  61 => 31,  50 => 29,  43 => 28,  39 => 26,  37 => 25,);
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Common/pagination_quicknav.html.twig", "C:\\xampp\\htdocs\\prestashop\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Common\\pagination_quicknav.html.twig");
    }
}
