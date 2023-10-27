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

/* @PrestaShop/Admin/Configure/AdvancedParameters/Employee/Blocks/form.html.twig */
class __TwigTemplate_1ba07724749aebeebb8fe6599f1b7fc4 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'employee_form' => [$this, 'block_employee_form'],
            'employee_form_rest' => [$this, 'block_employee_form_rest'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 25
        echo "
";
        // line 26
        $macros["ps"] = $this->macros["ps"] = $this->loadTemplate("@PrestaShop/Admin/macros.html.twig", "@PrestaShop/Admin/Configure/AdvancedParameters/Employee/Blocks/form.html.twig", 26)->unwrap();
        // line 28
        echo "
";
        // line 29
        $this->displayBlock('employee_form', $context, $blocks);
    }

    public function block_employee_form($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 30
        echo "  ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["employeeForm"] ?? null), 'form_start');
        echo "
    <div class=\"card\">
      <h3 class=\"card-header\">
        ";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Employees", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "
      </h3>
      <div class=\"card-body\">
        <div class=\"form-wrapper\">
          ";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["employeeForm"] ?? null), 'errors');
        echo "

          ";
        // line 39
        echo twig_call_macro($macros["ps"], "macro_form_group_row", [twig_get_attribute($this->env, $this->source, ($context["employeeForm"] ?? null), "firstname", [], "any", false, false, false, 39), [], ["label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("First name", [], "Admin.Global")]], 39, $context, $this->getSourceContext());
        // line 41
        echo "

          ";
        // line 43
        echo twig_call_macro($macros["ps"], "macro_form_group_row", [twig_get_attribute($this->env, $this->source, ($context["employeeForm"] ?? null), "lastname", [], "any", false, false, false, 43), [], ["label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Last name", [], "Admin.Global")]], 43, $context, $this->getSourceContext());
        // line 45
        echo "

          ";
        // line 47
        echo twig_call_macro($macros["ps"], "macro_form_group_row", [twig_get_attribute($this->env, $this->source, ($context["employeeForm"] ?? null), "avatarUrl", [], "any", false, false, false, 47), [], ["label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Avatar", [], "Admin.Global")]], 47, $context, $this->getSourceContext());
        // line 49
        echo "

          <div class=\"form-group row\">
            <label class=\"form-control-label\"></label>
            <div class=\"col-sm\">
              <img class=\"img-thumbnail clickable-avatar\" src=\"";
        // line 54
        echo twig_escape_filter($this->env, ($context["avatarUrl"] ?? null), "html", null, true);
        echo "\" alt=\"\">
            </div>
          </div>

          ";
        // line 58
        echo twig_call_macro($macros["ps"], "macro_form_group_row", [twig_get_attribute($this->env, $this->source, ($context["employeeForm"] ?? null), "has_enabled_gravatar", [], "any", false, false, false, 58), [], ["label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Enable gravatar", [], "Admin.Global")]], 58, $context, $this->getSourceContext());
        // line 60
        echo "

          ";
        // line 62
        echo twig_call_macro($macros["ps"], "macro_form_group_row", [twig_get_attribute($this->env, $this->source, ($context["employeeForm"] ?? null), "email", [], "any", false, false, false, 62), [], ["label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Email address", [], "Admin.Global")]], 62, $context, $this->getSourceContext());
        // line 64
        echo "

          ";
        // line 66
        $context["passwordHelpMessage"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Password should be at least %num% characters long.", ["%num%" => $this->extensions['PrestaShopBundle\Twig\DataFormatterExtension']->intCast($this->extensions['PrestaShopBundle\Twig\LayoutExtension']->getConfiguration("PS_SECURITY_PASSWORD_POLICY_MINIMUM_LENGTH"))], "Admin.Advparameters.Help");
        // line 67
        echo "
          ";
        // line 68
        if (($context["isRestrictedAccess"] ?? null)) {
            // line 69
            echo "            ";
            $context["oldPasswordVars"] = twig_array_merge(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["employeeForm"] ?? null), "change_password", [], "any", false, false, false, 69), "old_password", [], "any", false, false, false, 69), "vars", [], "any", false, false, false, 69), ((array_key_exists("old_password", $context)) ? (_twig_default_filter(($context["old_password"] ?? null), [])) : ([])));
            // line 70
            echo "            ";
            $context["newPasswordFirstVars"] = twig_array_merge(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["employeeForm"] ?? null), "change_password", [], "any", false, false, false, 70), "new_password", [], "any", false, false, false, 70), "children", [], "any", false, false, false, 70), "first", [], "any", false, false, false, 70), "vars", [], "any", false, false, false, 70), ((twig_get_attribute($this->env, $this->source, ($context["new_password"] ?? null), "first_options", [], "any", true, true, false, 70)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["new_password"] ?? null), "first_options", [], "any", false, false, false, 70), [])) : ([])));
            // line 71
            echo "            ";
            $context["newPasswordSecondVars"] = twig_array_merge(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["employeeForm"] ?? null), "change_password", [], "any", false, false, false, 71), "new_password", [], "any", false, false, false, 71), "children", [], "any", false, false, false, 71), "second", [], "any", false, false, false, 71), "vars", [], "any", false, false, false, 71), ((twig_get_attribute($this->env, $this->source, ($context["new_password"] ?? null), "second_options", [], "any", true, true, false, 71)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["new_password"] ?? null), "second_options", [], "any", false, false, false, 71), [])) : ([])));
            // line 72
            echo "
            <div class=\"form-group row\">
              <label class=\"form-control-label\">
                ";
            // line 75
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Password", [], "Admin.Global"), "html", null, true);
            echo "
              </label>
              <div class=\"col-sm\">
                ";
            // line 79
            echo "                ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["employeeForm"] ?? null), "change_password", [], "any", false, false, false, 79), "change_password_button", [], "any", false, false, false, 79), 'widget', ["label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Change password...", [], "messages"), "attr" => ["class" => "btn-outline-secondary js-change-password"]]);
            // line 84
            echo "

                <div class=\"card card-body js-change-password-block d-none\">
                  ";
            // line 88
            echo "                  ";
            echo twig_call_macro($macros["ps"], "macro_form_group_row", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["employeeForm"] ?? null), "change_password", [], "any", false, false, false, 88), "old_password", [], "any", false, false, false, 88), ($context["oldPasswordVars"] ?? null), ["label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Current password", [], "messages"), "required" => true]], 88, $context, $this->getSourceContext());
            // line 91
            echo "

                  ";
            // line 94
            echo "                  <div class=\"form-group row\">
                    ";
            // line 95
            echo twig_call_macro($macros["ps"], "macro_label_with_help", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("New password", [], "messages"), ($context["passwordHelpMessage"] ?? null), "", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["employeeForm"] ?? null), "change_password", [], "any", false, false, false, 95), "new_password", [], "any", false, false, false, 95), "children", [], "any", false, false, false, 95), "first", [], "any", false, false, false, 95), "vars", [], "any", false, false, false, 95), "id", [], "any", false, false, false, 95), true], 95, $context, $this->getSourceContext());
            echo "
                    <div class=\"col-sm\">
                      ";
            // line 97
            echo twig_call_macro($macros["ps"], "macro_form_widget_with_error", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["employeeForm"] ?? null), "change_password", [], "any", false, false, false, 97), "new_password", [], "any", false, false, false, 97), "children", [], "any", false, false, false, 97), "first", [], "any", false, false, false, 97), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["employeeForm"] ?? null), "change_password", [], "any", false, false, false, 97), "new_password", [], "any", false, false, false, 97), "children", [], "any", false, false, false, 97), "first", [], "any", false, false, false, 97), "vars", [], "any", false, false, false, 97)], 97, $context, $this->getSourceContext());
            echo "
                    </div>
                  </div>

                  ";
            // line 102
            echo "                  ";
            // line 103
            echo "                  ";
            echo twig_call_macro($macros["ps"], "macro_form_group_row", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["employeeForm"] ?? null), "change_password", [], "any", false, false, false, 103), "new_password", [], "any", false, false, false, 103), "children", [], "any", false, false, false, 103), "second", [], "any", false, false, false, 103), ($context["newPasswordSecondVars"] ?? null), ["label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Confirm password", [], "messages"), "help" => "", "required" => true]], 103, $context, $this->getSourceContext());
            // line 107
            echo "

                  ";
            // line 109
            echo twig_call_macro($macros["ps"], "macro_form_group_row", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["employeeForm"] ?? null), "change_password", [], "any", false, false, false, 109), "cancel_button", [], "any", false, false, false, 109), ["label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Cancel", [], "Admin.Actions"), "attr" => ["class" => "btn-outline-secondary js-change-password-cancel"]]], 109, $context, $this->getSourceContext());
            // line 114
            echo "

                </div>
              </div>
            </div>
          ";
        } else {
            // line 120
            echo "            ";
            echo twig_call_macro($macros["ps"], "macro_form_group_row", [twig_get_attribute($this->env, $this->source, ($context["employeeForm"] ?? null), "password", [], "any", false, false, false, 120), [], ["label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Password", [], "Admin.Global"), "help" =>             // line 122
($context["passwordHelpMessage"] ?? null)]], 120, $context, $this->getSourceContext());
            // line 123
            echo "
          ";
        }
        // line 125
        echo "
          ";
        // line 126
        echo twig_call_macro($macros["ps"], "macro_form_group_row", [twig_get_attribute($this->env, $this->source, ($context["employeeForm"] ?? null), "language", [], "any", false, false, false, 126), [], ["label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Language", [], "Admin.Global")]], 126, $context, $this->getSourceContext());
        // line 128
        echo "

          ";
        // line 130
        if ( !($context["isRestrictedAccess"] ?? null)) {
            // line 131
            echo "            ";
            echo twig_call_macro($macros["ps"], "macro_form_group_row", [twig_get_attribute($this->env, $this->source, ($context["employeeForm"] ?? null), "active", [], "any", false, false, false, 131), [], ["label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Active", [], "Admin.Global"), "help" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Allow or disallow this employee to log in to the Admin panel.", [], "Admin.Advparameters.Help")]], 131, $context, $this->getSourceContext());
            // line 134
            echo "

            ";
            // line 136
            echo twig_call_macro($macros["ps"], "macro_form_group_row", [twig_get_attribute($this->env, $this->source, ($context["employeeForm"] ?? null), "profile", [], "any", false, false, false, 136), ["attr" => ["data-admin-profile" =>             // line 138
($context["superAdminProfileId"] ?? null), "data-get-tabs-url" =>             // line 139
($context["getTabsUrl"] ?? null)]], ["label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Permission profile", [], "Admin.Advparameters.Feature")]], 136, $context, $this->getSourceContext());
            // line 143
            echo "

            ";
            // line 145
            if (twig_get_attribute($this->env, $this->source, ($context["employeeForm"] ?? null), "shop_association", [], "any", true, true, false, 145)) {
                // line 146
                echo "              ";
                echo twig_call_macro($macros["ps"], "macro_form_group_row", [twig_get_attribute($this->env, $this->source, ($context["employeeForm"] ?? null), "shop_association", [], "any", false, false, false, 146), [], ["label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Shop association", [], "Admin.Global"), "help" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Select the shops the employee is allowed to access.", [], "Admin.Advparameters.Help")]], 146, $context, $this->getSourceContext());
                // line 149
                echo "
            ";
            }
            // line 151
            echo "          ";
        }
        // line 152
        echo "
          ";
        // line 153
        echo twig_call_macro($macros["ps"], "macro_form_group_row", [twig_get_attribute($this->env, $this->source, ($context["employeeForm"] ?? null), "default_page", [], "any", false, false, false, 153), ["attr" => ["data-minimumResultsForSearch" => "7", "data-toggle" => "select2"]], ["label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Default page", [], "Admin.Advparameters.Feature"), "help" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("This page will be displayed right after signing in.", [], "Admin.Advparameters.Help")]], 153, $context, $this->getSourceContext());
        // line 156
        echo "

          ";
        // line 158
        $this->displayBlock('employee_form_rest', $context, $blocks);
        // line 161
        echo "        </div>
      </div>
      <div class=\"card-footer\">
        <a href=\"";
        // line 164
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_employees_index");
        echo "\" class=\"btn btn-outline-secondary\" id=\"cancel-link\">
          ";
        // line 165
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Cancel", [], "Admin.Actions"), "html", null, true);
        echo "
        </a>
        <button class=\"btn btn-primary float-right\" id=\"save-button\">
          ";
        // line 168
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Save", [], "Admin.Actions"), "html", null, true);
        echo "
        </button>
      </div>
    </div>
  ";
        // line 172
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["employeeForm"] ?? null), 'form_end');
        echo "

  ";
        // line 174
        $this->loadTemplate("@PrestaShop/Admin/Helpers/password_feedback.html.twig", "@PrestaShop/Admin/Configure/AdvancedParameters/Employee/Blocks/form.html.twig", 174)->display($context);
    }

    // line 158
    public function block_employee_form_rest($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 159
        echo "            ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["employeeForm"] ?? null), 'rest');
        echo "
          ";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Configure/AdvancedParameters/Employee/Blocks/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  281 => 159,  277 => 158,  273 => 174,  268 => 172,  261 => 168,  255 => 165,  251 => 164,  246 => 161,  244 => 158,  240 => 156,  238 => 153,  235 => 152,  232 => 151,  228 => 149,  225 => 146,  223 => 145,  219 => 143,  217 => 139,  216 => 138,  215 => 136,  211 => 134,  208 => 131,  206 => 130,  202 => 128,  200 => 126,  197 => 125,  193 => 123,  191 => 122,  189 => 120,  181 => 114,  179 => 109,  175 => 107,  172 => 103,  170 => 102,  163 => 97,  158 => 95,  155 => 94,  151 => 91,  148 => 88,  143 => 84,  140 => 79,  134 => 75,  129 => 72,  126 => 71,  123 => 70,  120 => 69,  118 => 68,  115 => 67,  113 => 66,  109 => 64,  107 => 62,  103 => 60,  101 => 58,  94 => 54,  87 => 49,  85 => 47,  81 => 45,  79 => 43,  75 => 41,  73 => 39,  68 => 37,  61 => 33,  54 => 30,  47 => 29,  44 => 28,  42 => 26,  39 => 25,);
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Configure/AdvancedParameters/Employee/Blocks/form.html.twig", "C:\\xampp\\htdocs\\prestashop\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Configure\\AdvancedParameters\\Employee\\Blocks\\form.html.twig");
    }
}
