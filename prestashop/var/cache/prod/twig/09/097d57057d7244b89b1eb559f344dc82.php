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

/* @Product/CatalogPage/Lists/list_quicknav.html.twig */
class __TwigTemplate_55eb4623af6c68f2c4d9cf24b299d454 extends Template
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
        echo "<div class=\"quicknav-container\">
    <div class=\"quicknav-header\">
        <div class=\"float-left\"><a href=\"#\" data-toggle=\"sidebar\" data-target=\".sidebar\">&times;</a></div>
        <h2>";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Quick navigation", [], "Admin.Global"), "html", null, true);
        echo "</h2>
    </div>
    <div class=\"quicknav-scroller\">
        <table class=\"table table-condensed table-striped product quicknav-products\">
            <thead>
                <tr class=\"column-headers\">
                    <th class=\"hidden-xs hidden-sm hidden-md\">
                        ";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("ID", [], "Admin.Global"), "html", null, true);
        echo "
                    </th>
                    <th>
                        ";
        // line 38
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Name", [], "Admin.Global"), "html", null, true);
        echo "
                    </th>
                    <th class=\"hidden-xs hidden-sm\">
                        ";
        // line 41
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Price", [], "Admin.Global"), "html", null, true);
        echo "
                    </th>
                    ";
        // line 43
        if ($this->extensions['PrestaShopBundle\Twig\LayoutExtension']->getConfiguration("PS_STOCK_MANAGEMENT")) {
            // line 44
            echo "                        <th class=\"hidden-xs\">
                            ";
            // line 45
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Quantity", [], "Admin.Catalog.Feature"), "html", null, true);
            echo "
                        </th>
                    ";
        }
        // line 48
        echo "                </tr>
            </thead>
            <tbody>
                ";
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 52
            echo "                    <tr>
                        <td class=\"hidden-xs hidden-sm hidden-md\">
                            <a href=\"";
            // line 54
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["product"], "url", [], "any", true, true, false, 54)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["product"], "url", [], "any", false, false, false, 54), "")) : ("")), "html", null, true);
            echo "#tab-step1\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "id_product", [], "any", false, false, false, 54), "html", null, true);
            echo "</a>
                        </td>
                        <td>
                            <a href=\"";
            // line 57
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["product"], "url", [], "any", true, true, false, 57)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["product"], "url", [], "any", false, false, false, 57), "")) : ("")), "html", null, true);
            echo "#tab-step1\">";
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", true, true, false, 57)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 57), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("N/A", [], "Admin.Global"))) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("N/A", [], "Admin.Global"))), "html", null, true);
            echo "</a>
                        </td>
                        <td class=\"hidden-xs hidden-sm\">
                            <a href=\"";
            // line 60
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["product"], "url", [], "any", true, true, false, 60)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["product"], "url", [], "any", false, false, false, 60), "")) : ("")), "html", null, true);
            echo "#tab-step2\">";
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", true, true, false, 60)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 60), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("N/A", [], "Admin.Global"))) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("N/A", [], "Admin.Global"))), "html", null, true);
            echo "</a>
                        </td>
                        ";
            // line 62
            if ($this->extensions['PrestaShopBundle\Twig\LayoutExtension']->getConfiguration("PS_STOCK_MANAGEMENT")) {
                // line 63
                echo "                            <td class=\"hidden-xs product-sav-quantity\"
                                productquantityvalue=\"";
                // line 64
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["product"], "sav_quantity", [], "any", true, true, false, 64)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["product"], "sav_quantity", [], "any", false, false, false, 64), "")) : ("")), "html", null, true);
                echo "\">
                                <a href=\"";
                // line 65
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["product"], "url", [], "any", true, true, false, 65)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["product"], "url", [], "any", false, false, false, 65), "")) : ("")), "html", null, true);
                echo "#tab-step3\">
                                    ";
                // line 66
                if ((twig_get_attribute($this->env, $this->source, $context["product"], "sav_quantity", [], "any", true, true, false, 66) && (twig_get_attribute($this->env, $this->source, $context["product"], "sav_quantity", [], "any", false, false, false, 66) > 0))) {
                    // line 67
                    echo "                                        ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "sav_quantity", [], "any", false, false, false, 67), "html", null, true);
                    echo "
                                    ";
                } else {
                    // line 69
                    echo "                                        <span
                                            class=\"badge badge-danger\">";
                    // line 70
                    echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["product"], "sav_quantity", [], "any", true, true, false, 70)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["product"], "sav_quantity", [], "any", false, false, false, 70), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("N/A", [], "Admin.Global"))) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("N/A", [], "Admin.Global"))), "html", null, true);
                    echo "</span>
                                    ";
                }
                // line 72
                echo "                                </a>
                            </td>
                        ";
            }
            // line 75
            echo "                    </tr>
                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 77
            echo "                    <tr><td colspan=\"5\">
                        ";
            // line 78
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("There is no result for this search. Update your filters to view other products.", [], "Admin.Catalog.Notification"), "html", null, true);
            echo "
                    </td></tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 81
        echo "            </tbody>
        </table>
    </div>
    <div class=\"quicknav-fixed-bottom navbar-form-footer\">
      ";
        // line 85
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("PrestaShopBundle:Admin\\Common:pagination", ["limit" =>         // line 89
($context["limit"] ?? null), "offset" =>         // line 90
($context["offset"] ?? null), "total" =>         // line 91
($context["total"] ?? null), "caller_parameters" => ["view" => "quicknav"], "caller_route" => "admin_product_list", "view" => "quicknav"]));
        // line 97
        echo "
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "@Product/CatalogPage/Lists/list_quicknav.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  180 => 97,  178 => 91,  177 => 90,  176 => 89,  175 => 85,  169 => 81,  160 => 78,  157 => 77,  151 => 75,  146 => 72,  141 => 70,  138 => 69,  132 => 67,  130 => 66,  126 => 65,  122 => 64,  119 => 63,  117 => 62,  110 => 60,  102 => 57,  94 => 54,  90 => 52,  85 => 51,  80 => 48,  74 => 45,  71 => 44,  69 => 43,  64 => 41,  58 => 38,  52 => 35,  42 => 28,  37 => 25,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Product/CatalogPage/Lists/list_quicknav.html.twig", "C:\\xampp\\htdocs\\prestashop\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Product\\CatalogPage\\Lists\\list_quicknav.html.twig");
    }
}
