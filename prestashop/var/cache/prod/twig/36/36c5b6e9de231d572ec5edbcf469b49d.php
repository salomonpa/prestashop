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

/* @PrestaShop/Admin/Improve/International/Translations/Blocks/copy_language.html.twig */
class __TwigTemplate_311d5d541e1220b5370fce99f598c528 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'copy_language' => [$this, 'block_copy_language'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 25
        echo "
";
        // line 27
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme(($context["copyLanguageForm"] ?? null), [0 => "@PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit.html.twig"], true);
        // line 28
        echo "
";
        // line 29
        $this->displayBlock('copy_language', $context, $blocks);
    }

    public function block_copy_language($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 30
        echo "  ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["copyLanguageForm"] ?? null), 'form_start', ["action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_international_translations_copy_language")]);
        echo "

  <div class=\"card\">
    <h3 class=\"card-header\">
      <i class=\"material-icons\">file_copy</i>
      ";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Copy", [], "Admin.Actions"), "html", null, true);
        echo "
    </h3>

    <div class=\"card-body\">
      <div class=\"form-wrapper\">
        <div class=\"row\">
          <div class=\"col-sm\">
            <div class=\"alert alert-info\" role=\"alert\">
              <div class=\"alert-text\">
                ";
        // line 44
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Copies data from one language to another.", [], "Admin.International.Help"), "html", null, true);
        echo "<br>
                ";
        // line 45
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Warning: This will replace all of the existing data inside the destination language.", [], "Admin.International.Help"), "html", null, true);
        echo "<br>
                ";
        // line 46
        echo twig_replace_filter($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("If necessary [1][2] you must first create a new language[/1].", [], "Admin.International.Help"), ["[1]" => (("<a href=\"" . ($context["addLanguageUrl"] ?? null)) . "\">"), "[2]" => "<i class=\"material-icons\">launch</i>", "[/1]" => "</a>"]);
        echo "
              </div>
            </div>
          </div>
        </div>
        <div class=\"form-group row\">
          ";
        // line 52
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["copyLanguageForm"] ?? null), "from_language", [], "any", false, false, false, 52), 'label');
        echo "
          <div class=\"col-sm\">
            <div class=\"input-group\">
              ";
        // line 55
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["copyLanguageForm"] ?? null), "from_language", [], "any", false, false, false, 55), 'errors');
        echo "
              ";
        // line 56
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["copyLanguageForm"] ?? null), "from_language", [], "any", false, false, false, 56), 'widget');
        echo "

              ";
        // line 58
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["copyLanguageForm"] ?? null), "from_theme", [], "any", false, false, false, 58), 'errors');
        echo "
              ";
        // line 59
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["copyLanguageForm"] ?? null), "from_theme", [], "any", false, false, false, 59), 'widget');
        echo "
            </div>
            <small class=\"form-text\">
              ";
        // line 62
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Language files must be complete to allow copying of translations.", [], "Admin.International.Notification"), "html", null, true);
        echo "
            </small>
          </div>
        </div>

        <div class=\"form-group row\">
          ";
        // line 68
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["copyLanguageForm"] ?? null), "to_language", [], "any", false, false, false, 68), 'label');
        echo "
          <div class=\"col-sm\">
            <div class=\"input-group\">
              ";
        // line 71
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["copyLanguageForm"] ?? null), "to_language", [], "any", false, false, false, 71), 'errors');
        echo "
              ";
        // line 72
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["copyLanguageForm"] ?? null), "to_language", [], "any", false, false, false, 72), 'widget');
        echo "

              ";
        // line 74
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["copyLanguageForm"] ?? null), "to_theme", [], "any", false, false, false, 74), 'errors');
        echo "
              ";
        // line 75
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["copyLanguageForm"] ?? null), "to_theme", [], "any", false, false, false, 75), 'widget');
        echo "
            </div>
          </div>
        </div>
        ";
        // line 79
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["copyLanguageForm"] ?? null), 'rest');
        echo "
      </div>
    </div>
    <div class=\"card-footer\">
      <div class=\"d-flex justify-content-end\">
        <button class=\"btn btn-primary\">
          <i class=\"material-icons\">file_copy</i>
          <span>";
        // line 86
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Copy", [], "Admin.Actions"), "html", null, true);
        echo "</span>
        </button>
      </div>
    </div>
  </div>

  ";
        // line 92
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["copyLanguageForm"] ?? null), 'form_end');
        echo "
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Improve/International/Translations/Blocks/copy_language.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 92,  161 => 86,  151 => 79,  144 => 75,  140 => 74,  135 => 72,  131 => 71,  125 => 68,  116 => 62,  110 => 59,  106 => 58,  101 => 56,  97 => 55,  91 => 52,  82 => 46,  78 => 45,  74 => 44,  62 => 35,  53 => 30,  46 => 29,  43 => 28,  41 => 27,  38 => 25,);
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Improve/International/Translations/Blocks/copy_language.html.twig", "C:\\xampp\\htdocs\\prestashop\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Improve\\International\\Translations\\Blocks\\copy_language.html.twig");
    }
}
