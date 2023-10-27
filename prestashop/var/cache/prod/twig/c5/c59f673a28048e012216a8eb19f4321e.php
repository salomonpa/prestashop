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

/* @Modules/ps_mbo/views/templates/hook/twig/explanation_mbo_employee.html.twig */
class __TwigTemplate_5982e43217cad808a83ef583bff125f4 extends Template
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
        // line 19
        echo "<div class=\"alert alert-info alert-dismissible mbo-user-explanation\">
  <h4>";
        // line 20
        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
        echo "</h4>
  <button type=\"button\" class=\"btn mbo-user-explanation-accordeon-btn\">
    <span aria-hidden=\"true\" class=\"material-icons\">contact_support</span>
  </button>
  <div class=\"mbo-user-explanation-msg\" style=\"display: none;\">
    <p>
      ";
        // line 26
        echo twig_nl2br(twig_escape_filter($this->env, ($context["message"] ?? null), "html", null, true));
        echo "
    </p>
  </div>
  <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
    <span aria-hidden=\"true\">&times;</span>
  </button>
</div>
";
    }

    public function getTemplateName()
    {
        return "@Modules/ps_mbo/views/templates/hook/twig/explanation_mbo_employee.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 26,  40 => 20,  37 => 19,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Modules/ps_mbo/views/templates/hook/twig/explanation_mbo_employee.html.twig", "C:\\xampp\\htdocs\\prestashop\\modules\\ps_mbo\\views\\templates\\hook\\twig\\explanation_mbo_employee.html.twig");
    }
}
