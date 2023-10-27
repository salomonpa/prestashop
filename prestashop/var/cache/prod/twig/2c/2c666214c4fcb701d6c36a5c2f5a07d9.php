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

/* @PrestaShop/Admin/Configure/AdvancedParameters/Email/Blocks/email_configuration.html.twig */
class __TwigTemplate_0aa6ef908371f847f3e76731945eeafb extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'email_configuration' => [$this, 'block_email_configuration'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 26
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme(($context["emailConfigurationForm"] ?? null), [0 => "@PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit.html.twig"], true);
        // line 27
        echo "
";
        // line 28
        $this->displayBlock('email_configuration', $context, $blocks);
    }

    public function block_email_configuration($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 29
        echo "  <div class=\"card\">
    <h3 class=\"card-header\">
      <i class=\"material-icons\">mail</i>
      ";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Email", [], "Admin.Global"), "html", null, true);
        echo "
    </h3>
    <div class=\"card-body\">
      <div class=\"form-wrapper\">
        ";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["emailConfigurationForm"] ?? null), "send_emails_to", [], "any", false, false, false, 36), 'row');
        echo "
        ";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["emailConfigurationForm"] ?? null), "mail_method", [], "any", false, false, false, 37), 'row');
        echo "
        <div class=\"js-smtp-configuration";
        // line 38
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["emailConfigurationForm"] ?? null), "mail_method", [], "any", false, false, false, 38), "vars", [], "any", false, false, false, 38), "value", [], "any", false, false, false, 38) != ($context["smtpMailMethod"] ?? null))) {
            echo " d-none";
        }
        echo "\">
          ";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["emailConfigurationForm"] ?? null), "smtp_config", [], "any", false, false, false, 39), 'widget');
        echo "
        </div>
        ";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["emailConfigurationForm"] ?? null), "mail_type", [], "any", false, false, false, 41), 'row');
        echo "
        ";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["emailConfigurationForm"] ?? null), "log_emails", [], "any", false, false, false, 42), 'row');
        echo "
        <div class=\"alert alert-info\" role=\"alert\">
          <p class=\"alert-text\">
            ";
        // line 45
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Fill in the fields below to set up DKIM signing of outgoing emails. This will reduce the likelihood of your emails being marked as spam.
              You can get the data below from your server administrator or generate it yourself by using one of the freely available tools, such as dkimcore.org.
              Also, make sure that your server is registered as an authorized sender in your SPF record. ", [], "Admin.Advparameters.Help"), "html", null, true);
        // line 47
        echo "
          </p>
        </div>
        ";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["emailConfigurationForm"] ?? null), "dkim_enable", [], "any", false, false, false, 50), 'row');
        echo "
        <div class=\"js-dkim-configuration";
        // line 51
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["emailConfigurationForm"] ?? null), "dkim_enable", [], "any", false, false, false, 51), "vars", [], "any", false, false, false, 51), "value", [], "any", false, false, false, 51) == 0)) {
            echo " d-none";
        }
        echo "\">
          ";
        // line 52
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["emailConfigurationForm"] ?? null), "dkim_config", [], "any", false, false, false, 52), 'widget');
        echo "
        </div>
        ";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["emailConfigurationForm"] ?? null), 'rest');
        echo "
      </div>
    </div>
    <div class=\"card-footer\">
      <div class=\"d-flex justify-content-end\">
        <button class=\"btn btn-primary\" id=\"form-log-email-save-button\">";
        // line 59
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Save", [], "Admin.Actions"), "html", null, true);
        echo "</button>
      </div>
    </div>
  </div>
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Configure/AdvancedParameters/Email/Blocks/email_configuration.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 59,  115 => 54,  110 => 52,  104 => 51,  100 => 50,  95 => 47,  91 => 45,  85 => 42,  81 => 41,  76 => 39,  70 => 38,  66 => 37,  62 => 36,  55 => 32,  50 => 29,  43 => 28,  40 => 27,  38 => 26,);
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Configure/AdvancedParameters/Email/Blocks/email_configuration.html.twig", "C:\\xampp\\htdocs\\prestashop\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Configure\\AdvancedParameters\\Email\\Blocks\\email_configuration.html.twig");
    }
}
