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

/* @PrestaShop/Admin/Configure/AdvancedParameters/Profiles/Blocks/form.html.twig */
class __TwigTemplate_5ec6cf157d6a8d693b37dbaa23b2739b extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'profile_form_rest' => [$this, 'block_profile_form_rest'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 25
        echo "
";
        // line 26
        $macros["ps"] = $this->macros["ps"] = $this->loadTemplate("@PrestaShop/Admin/macros.html.twig", "@PrestaShop/Admin/Configure/AdvancedParameters/Profiles/Blocks/form.html.twig", 26)->unwrap();
        // line 27
        echo "
";
        // line 28
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["profileForm"] ?? null), 'form_start');
        echo "
<div class=\"card\">
  <h3 class=\"card-header\">
    <i class=\"material-icons\">group</i>
    ";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Profile", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "
  </h3>
  <div class=\"card-body\">
    <div class=\"form-wrapper\">
      ";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["profileForm"] ?? null), 'errors');
        echo "

      ";
        // line 38
        echo twig_call_macro($macros["ps"], "macro_form_group_row", [twig_get_attribute($this->env, $this->source, ($context["profileForm"] ?? null), "name", [], "any", false, false, false, 38), [], ["label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Name", [], "Admin.Global")]], 38, $context, $this->getSourceContext());
        // line 40
        echo "

      ";
        // line 42
        echo twig_call_macro($macros["ps"], "macro_form_group_row", [twig_get_attribute($this->env, $this->source, ($context["profileForm"] ?? null), "avatarUrl", [], "any", false, false, false, 42), [], ["label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Avatar", [], "Admin.Global")]], 42, $context, $this->getSourceContext());
        // line 44
        echo "

      ";
        // line 46
        if ( !twig_test_empty(((array_key_exists("avatarUrl", $context)) ? (_twig_default_filter(($context["avatarUrl"] ?? null), "")) : ("")))) {
            // line 47
            echo "      <div class=\"form-group row\">
        <label class=\"form-control-label\"></label>
        <div class=\"col-sm\">
          <img class=\"img-thumbnail clickable-avatar\" src=\"";
            // line 50
            echo twig_escape_filter($this->env, ($context["avatarUrl"] ?? null), "html", null, true);
            echo "\" alt=\"\">
        </div>
      </div>
      ";
        }
        // line 54
        echo "
      ";
        // line 55
        $this->displayBlock('profile_form_rest', $context, $blocks);
        // line 58
        echo "    </div>
  </div>
  <div class=\"card-footer\">
    <a href=\"";
        // line 61
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_profiles_index");
        echo "\" class=\"btn btn-outline-secondary\">
      ";
        // line 62
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Cancel", [], "Admin.Actions"), "html", null, true);
        echo "
    </a>
    <button class=\"btn btn-primary float-right\" id=\"save-button\">
      ";
        // line 65
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Save", [], "Admin.Actions"), "html", null, true);
        echo "
    </button>
  </div>
</div>
";
        // line 69
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["profileForm"] ?? null), 'form_end');
        echo "
";
    }

    // line 55
    public function block_profile_form_rest($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 56
        echo "        ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["profileForm"] ?? null), 'rest');
        echo "
      ";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Configure/AdvancedParameters/Profiles/Blocks/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 56,  124 => 55,  118 => 69,  111 => 65,  105 => 62,  101 => 61,  96 => 58,  94 => 55,  91 => 54,  84 => 50,  79 => 47,  77 => 46,  73 => 44,  71 => 42,  67 => 40,  65 => 38,  60 => 36,  53 => 32,  46 => 28,  43 => 27,  41 => 26,  38 => 25,);
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Configure/AdvancedParameters/Profiles/Blocks/form.html.twig", "C:\\xampp\\htdocs\\prestashop\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Configure\\AdvancedParameters\\Profiles\\Blocks\\form.html.twig");
    }
}
