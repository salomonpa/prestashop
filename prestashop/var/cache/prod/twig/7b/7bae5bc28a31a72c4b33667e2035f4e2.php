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

/* @PrestaShop/Admin/Configure/AdvancedParameters/Employee/Blocks/employee_options.html.twig */
class __TwigTemplate_0fd37162ee6604d04bc7aafedcc06c26 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'employee_options_form' => [$this, 'block_employee_options_form'],
            'employee_options_form_rest' => [$this, 'block_employee_options_form_rest'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 25
        echo "
";
        // line 26
        $this->displayBlock('employee_options_form', $context, $blocks);
    }

    public function block_employee_options_form($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 27
        echo "  ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["employeeOptionsForm"] ?? null), 'form_start', ["action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_employees_save_options")]);
        echo "
  <div class=\"card\">
    <h3 class=\"card-header\">
      <i class=\"material-icons\">settings</i>
      ";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Employee options", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "
    </h3>
    <div class=\"card-body\">
      <div class=\"form-wrapper\">
        <div class=\"form-group row\">
          <label for=\"";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["employeeOptionsForm"] ?? null), "password_change_time", [], "any", false, false, false, 36), "vars", [], "any", false, false, false, 36), "id", [], "any", false, false, false, 36), "html", null, true);
        echo "\" class=\"form-control-label\">
            ";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Password regeneration", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "
          </label>

          <div class=\"col-sm\">
            ";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["employeeOptionsForm"] ?? null), "password_change_time", [], "any", false, false, false, 41), 'errors');
        echo "
            ";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["employeeOptionsForm"] ?? null), "password_change_time", [], "any", false, false, false, 42), 'widget');
        echo "
            <small class=\"form-text\">
              ";
        // line 44
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Security: Minimum time to wait between two password changes.", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "
            </small>

            ";
        // line 47
        if ( !($context["canOptionsBeChanged"] ?? null)) {
            // line 48
            echo "            <div class=\"alert alert-warning mt-2 mb-0\" role=\"alert\">
              <p class=\"alert-text\">
                ";
            // line 50
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("You can't change the value of this configuration field in the context of this shop.", [], "Admin.Notifications.Warning"), "html", null, true);
            echo "
              </p>
            </div>
            ";
        }
        // line 54
        echo "          </div>
        </div>

        <div class=\"form-group row\">
          <label for=\"";
        // line 58
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["employeeOptionsForm"] ?? null), "allow_employee_specific_language", [], "any", false, false, false, 58), "vars", [], "any", false, false, false, 58), "id", [], "any", false, false, false, 58), "html", null, true);
        echo "\" class=\"form-control-label\">
            ";
        // line 59
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Memorize the language used in Admin panel forms", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "
          </label>

          <div class=\"col-sm\">
            ";
        // line 63
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["employeeOptionsForm"] ?? null), "allow_employee_specific_language", [], "any", false, false, false, 63), 'errors');
        echo "
            ";
        // line 64
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["employeeOptionsForm"] ?? null), "allow_employee_specific_language", [], "any", false, false, false, 64), 'widget');
        echo "
            <small class=\"form-text\">
              ";
        // line 66
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Allow employees to select a specific language for the Admin panel form.", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "
            </small>

            ";
        // line 69
        if ( !($context["canOptionsBeChanged"] ?? null)) {
            // line 70
            echo "            <div class=\"alert alert-warning mt-2 mb-0\" role=\"alert\">
              <p class=\"alert-text\">
                ";
            // line 72
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("You can't change the value of this configuration field in the context of this shop.", [], "Admin.Notifications.Warning"), "html", null, true);
            echo "
              </p>
            </div>
            ";
        }
        // line 76
        echo "          </div>
        </div>

        ";
        // line 79
        $this->displayBlock('employee_options_form_rest', $context, $blocks);
        // line 82
        echo "      </div>
    </div>
    <div class=\"card-footer\">
      <div class=\"d-flex justify-content-end\">
        <button class=\"btn btn-primary pull-right\"
                ";
        // line 87
        if ( !($context["canOptionsBeChanged"] ?? null)) {
            echo "disabled";
        }
        // line 88
        echo "        >
          ";
        // line 89
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Save", [], "Admin.Actions"), "html", null, true);
        echo "
        </button>
      </div>
    </div>
  </div>
  ";
        // line 94
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["employeeOptionsForm"] ?? null), 'form_end');
        echo "
";
    }

    // line 79
    public function block_employee_options_form_rest($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 80
        echo "          ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["employeeOptionsForm"] ?? null), 'rest');
        echo "
        ";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Configure/AdvancedParameters/Employee/Blocks/employee_options.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  188 => 80,  184 => 79,  178 => 94,  170 => 89,  167 => 88,  163 => 87,  156 => 82,  154 => 79,  149 => 76,  142 => 72,  138 => 70,  136 => 69,  130 => 66,  125 => 64,  121 => 63,  114 => 59,  110 => 58,  104 => 54,  97 => 50,  93 => 48,  91 => 47,  85 => 44,  80 => 42,  76 => 41,  69 => 37,  65 => 36,  57 => 31,  49 => 27,  42 => 26,  39 => 25,);
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Configure/AdvancedParameters/Employee/Blocks/employee_options.html.twig", "C:\\xampp\\htdocs\\prestashop\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Configure\\AdvancedParameters\\Employee\\Blocks\\employee_options.html.twig");
    }
}
