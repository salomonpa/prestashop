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

/* @PrestaShop/Admin/Improve/International/Currency/Blocks/exchange_rates.html.twig */
class __TwigTemplate_6c6bd5ac670824d29c29c06324ebb926 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'currency_settings' => [$this, 'block_currency_settings'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 25
        echo "
";
        // line 26
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme(($context["exchangeRatesForm"] ?? null), [0 => "@PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit.html.twig"], true);
        // line 27
        echo "
";
        // line 28
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["exchangeRatesForm"] ?? null), 'form_start', ["action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_currencies_refresh_exchange_rates")]);
        echo "
  <div class=\"card\">
    <h3 class=\"card-header\">
      ";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Exchange rate", [], "Admin.International.Feature"), "html", null, true);
        echo "
    </h3>
    <div class=\"card-body\">
      <div class=\"form-wrapper\">
        <div class=\"form-group row\">
          <label class=\"form-control-label\">
            ";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Live exchange rates", [], "Admin.International.Feature"), "html", null, true);
        echo "
          </label>
          <div class=\"col-sm\">
            <small class=\"form-text\">
              ";
        // line 41
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Check the [a]developer documentation[/a] for setup instructions.", ["[a]" => "<a href=\"https://devdocs.prestashop.com/1.7/faq/pricing/#refresh-exchange-rates\" target=\"_blank\">", "[/a]" => "</a>"], "Admin.International.Notification");
        echo "
            </small>
          </div>
        </div>
        <div class=\"form-group row\">
          <label for=\"\" class=\"form-control-label\">
            ";
        // line 47
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Update exchange rates", [], "Admin.International.Feature"), "html", null, true);
        echo "
          </label>
          <div class=\"col-sm\">
            <button class=\"btn btn-primary\" id=\"update-exchange-rates-button\">
              ";
        // line 51
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Update", [], "Admin.Actions"), "html", null, true);
        echo "
            </button>
          </div>
        </div>
        ";
        // line 55
        $this->displayBlock('currency_settings', $context, $blocks);
        // line 58
        echo "      </div>
    </div>
  </div>
";
        // line 61
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["exchangeRatesForm"] ?? null), 'form_end');
        echo "
";
    }

    // line 55
    public function block_currency_settings($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 56
        echo "          ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["exchangeRatesForm"] ?? null), 'rest');
        echo "
        ";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Improve/International/Currency/Blocks/exchange_rates.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 56,  104 => 55,  98 => 61,  93 => 58,  91 => 55,  84 => 51,  77 => 47,  68 => 41,  61 => 37,  52 => 31,  46 => 28,  43 => 27,  41 => 26,  38 => 25,);
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Improve/International/Currency/Blocks/exchange_rates.html.twig", "C:\\xampp\\htdocs\\prestashop\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Improve\\International\\Currency\\Blocks\\exchange_rates.html.twig");
    }
}
