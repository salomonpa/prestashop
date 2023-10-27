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

/* @PrestaShop/Admin/Improve/International/Currency/Blocks/form.html.twig */
class __TwigTemplate_f8b163737ab5cc345f8fa40724f27517 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'form' => [$this, 'block_form'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 25
        echo "
";
        // line 26
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme(($context["currencyForm"] ?? null), [0 => "@PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit.html.twig"], true);
        // line 27
        echo "
";
        // line 28
        $this->displayBlock('form', $context, $blocks);
    }

    public function block_form($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 29
        echo "  ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["currencyForm"] ?? null), 'form_start', ["attr" => ["id" => "currency_form", "data-reference-url" => twig_replace_filter($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_currencies_get_reference_data", ["currencyIsoCode" => "CURRENCY_ISO_CODE"]), ["/CURRENCY_ISO_CODE" => "{/id}"]), "data-languages" => json_encode(        // line 33
($context["languages"] ?? null)), "data-translations" => json_encode(["step.symbol" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("1. Enter symbol", [], "Admin.International.Feature"), "step.format" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("2. Choose format", [], "Admin.International.Feature"), "modal.title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Customize symbol and format", [], "Admin.International.Feature"), "modal.apply" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Apply", [], "Admin.Actions"), "modal.cancel" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Cancel", [], "Admin.Actions"), "modal.close" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Close", [], "Admin.Actions"), "list.language" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Language", [], "Admin.Global"), "list.example" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Example", [], "Admin.Global"), "list.edit" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Edit symbol / format", [], "Admin.International.Feature"), "list.reset" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Reset", [], "Admin.Actions"), "list.reset.success" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Your symbol and format customizations have been successfully reset for this language.", [], "Admin.Notifications.Success"), "list.example.format" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("%price%", [], "Admin.International.Feature"), "modal.restore.title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Are you sure you want to restore default settings?", [], "Admin.International.Feature"), "modal.restore.apply" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Restore", [], "Admin.Actions"), "modal.restore.cancel" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Cancel", [], "Admin.Actions"), "modal.restore.body" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Restoring your currency's default settings will delete all the customizations you made before. Parameters will look just the same as when the currency is freshly imported.", [], "Admin.International.Feature")])]]);
        // line 53
        echo "

    <div class=\"card card-currency\">
      <div class=\"card-header\">
        ";
        // line 57
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Currencies", [], "Admin.Global"), "html", null, true);
        echo "
      </div>
      <div class=\"card-body\">
        <div class=\"form-wrapper\">
          ";
        // line 61
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["currencyForm"] ?? null), 'errors');
        echo "

          ";
        // line 63
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["currencyForm"] ?? null), "vars", [], "any", false, true, false, 63), "data", [], "any", false, true, false, 63), "id", [], "any", true, true, false, 63)) {
            // line 64
            echo "
            ";
            // line 65
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["currencyForm"] ?? null), "selected_iso_code", [], "any", false, false, false, 65), 'row');
            echo "
            <div class=\"form-group row type-checkbox \">
              <label for=\"currency_unofficial\" class=\"form-control-label \">
                ";
            // line 68
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("or", [], "Admin.Global"), "html", null, true);
            echo "
              </label>
              ";
            // line 70
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["currencyForm"] ?? null), "unofficial", [], "any", false, false, false, 70), 'widget');
            echo "
            </div>
          ";
        }
        // line 73
        echo "
          ";
        // line 74
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["currencyForm"] ?? null), "names", [], "any", false, false, false, 74), 'row');
        echo "

          ";
        // line 76
        $context["symbolsClass"] = ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["currencyForm"] ?? null), "symbols", [], "any", false, false, false, 76), "vars", [], "any", false, false, false, 76), "errors", [], "any", false, false, false, 76))) ? ("") : ("d-none"));
        // line 77
        echo "          ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["currencyForm"] ?? null), "symbols", [], "any", false, false, false, 77), 'row', ["row_attr" => ["class" => ($context["symbolsClass"] ?? null)]]);
        echo "
          ";
        // line 78
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["currencyForm"] ?? null), 'widget');
        echo "
        </div>
      </div>

      <div class=\"card-footer\">
        <div class=\"card-footer-left\">
          <a href=\"";
        // line 84
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_currencies_index");
        echo "\" class=\"btn btn-outline-secondary\">
            ";
        // line 85
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Cancel", [], "Admin.Actions"), "html", null, true);
        echo "
          </a>

          ";
        // line 88
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["currencyForm"] ?? null), "vars", [], "any", false, true, false, 88), "data", [], "any", false, true, false, 88), "id", [], "any", true, true, false, 88) &&  !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["currencyForm"] ?? null), "vars", [], "any", false, false, false, 88), "data", [], "any", false, false, false, 88), "unofficial", [], "any", false, false, false, 88))) {
            // line 89
            echo "            <button type=\"button\" id=\"currency_reset_default_settings\" class=\"btn btn-outline-primary card-currency-reset\">
              <i class=\"material-icons\">refresh</i>
              ";
            // line 91
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Restore default settings", [], "Admin.International.Feature"), "html", null, true);
            echo "
            </button>
          ";
        }
        // line 94
        echo "        </div>

        <button type=\"submit\" class=\"btn btn-primary\" id=\"save-button\">";
        // line 96
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Save", [], "Admin.Actions"), "html", null, true);
        echo "</button>
      </div>
    </div>
  ";
        // line 99
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["currencyForm"] ?? null), 'form_end');
        echo "

  ";
        // line 101
        if ((array_key_exists("languageDataError", $context) && ($context["languageDataError"] ?? null))) {
            // line 102
            echo "    <div class=\"card\">
      <div class=\"card-body\">
        <div class=\"alert alert-danger\">
          ";
            // line 105
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Could not display symbol and format customization:", [], "Admin.International.Notification"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, ($context["languageDataError"] ?? null), "html", null, true);
            echo "
        </div>
      </div>
    </div>
  ";
        } else {
            // line 110
            echo "    <!-- Modal -->
    <div class=\"modal fade\" id=\"currency_loading_data_modal\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\" data-backdrop=\"static\">
      <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
        <div class=\"modal-content\">
          <div class=\"modal-header\">
            <h5 class=\"modal-title\" id=\"exampleModalLongTitle\">";
            // line 115
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Loading currency data", [], "Admin.International.Feature"), "html", null, true);
            echo "</h5>
          </div>
          <div class=\"modal-body\">
            ";
            // line 118
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Please wait while currency data is being loaded", [], "Admin.International.Feature"), "html", null, true);
            echo "
          </div>
          <div class=\"modal-footer\">
            <button type=\"button\" class=\"btn btn-secondary spinner\">";
            // line 121
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Close", [], "Admin.Actions"), "html", null, true);
            echo "</button>
          </div>
        </div>
      </div>
    </div>
  ";
        }
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Improve/International/Currency/Blocks/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  194 => 121,  188 => 118,  182 => 115,  175 => 110,  165 => 105,  160 => 102,  158 => 101,  153 => 99,  147 => 96,  143 => 94,  137 => 91,  133 => 89,  131 => 88,  125 => 85,  121 => 84,  112 => 78,  107 => 77,  105 => 76,  100 => 74,  97 => 73,  91 => 70,  86 => 68,  80 => 65,  77 => 64,  75 => 63,  70 => 61,  63 => 57,  57 => 53,  55 => 33,  53 => 29,  46 => 28,  43 => 27,  41 => 26,  38 => 25,);
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Improve/International/Currency/Blocks/form.html.twig", "C:\\xampp\\htdocs\\prestashop\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Improve\\International\\Currency\\Blocks\\form.html.twig");
    }
}
