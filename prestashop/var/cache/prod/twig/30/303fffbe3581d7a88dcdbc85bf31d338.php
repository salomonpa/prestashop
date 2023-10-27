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

/* @PrestaShop/Admin/Improve/International/Geolocation/index.html.twig */
class __TwigTemplate_7358f560be2ef9947d17b7a74e9c75f9 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 26
        return "@PrestaShop/Admin/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/layout.html.twig", "@PrestaShop/Admin/Improve/International/Geolocation/index.html.twig", 26);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 29
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 30
        echo "  ";
        if ( !($context["geolocationDatabaseAvailable"] ?? null)) {
            // line 31
            echo "
    <div class=\"alert alert-warning\" role=\"alert\">
      <span class=\"alert-text\">
        ";
            // line 34
            echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Since December 30, 2019, you need to register for a [1]MaxMind[/1] account to get a license key to be able to download the geolocation data. Once downloaded, extract the data using Winrar or Gzip into the /app/Resources/geoip/ directory.", ["[1]" => "<a href=\"https://dev.maxmind.com/geoip/geoip2/geolite2\" target=\"_blank\">", "[/1]" => "</a>"], "Admin.Notifications.Warning");
            echo "
      </span>
    </div>

  ";
        }
        // line 39
        echo "
  ";
        // line 40
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["geolocationByIpAddressForm"] ?? null), 'form_start', ["action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_geolocation_by_ip_address_save")]);
        echo "
  ";
        // line 41
        $this->loadTemplate("@PrestaShop/Admin/Improve/International/Geolocation/Blocks/geolocation_by_ip_address.html.twig", "@PrestaShop/Admin/Improve/International/Geolocation/index.html.twig", 41)->display($context);
        // line 42
        echo "  ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["geolocationByIpAddressForm"] ?? null), 'form_end');
        echo "

  ";
        // line 44
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["geolocationOptionsForm"] ?? null), 'form_start', ["action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_geolocation_options_save")]);
        echo "
  ";
        // line 45
        $this->loadTemplate("@PrestaShop/Admin/Improve/International/Geolocation/Blocks/geolocation_options.html.twig", "@PrestaShop/Admin/Improve/International/Geolocation/index.html.twig", 45)->display($context);
        // line 46
        echo "  ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["geolocationOptionsForm"] ?? null), 'form_end');
        echo "

  ";
        // line 48
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["geolocationIpAddressWhitelistForm"] ?? null), 'form_start', ["action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_geolocation_whitelist_save")]);
        echo "
  ";
        // line 49
        $this->loadTemplate("@PrestaShop/Admin/Improve/International/Geolocation/Blocks/geolocation_ip_address_whitelist.html.twig", "@PrestaShop/Admin/Improve/International/Geolocation/index.html.twig", 49)->display($context);
        // line 50
        echo "  ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["geolocationIpAddressWhitelistForm"] ?? null), 'form_end');
        echo "

";
    }

    // line 54
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 55
        echo "  ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

  <script src=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("themes/new-theme/public/geolocation.bundle.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Improve/International/Geolocation/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 57,  112 => 55,  108 => 54,  100 => 50,  98 => 49,  94 => 48,  88 => 46,  86 => 45,  82 => 44,  76 => 42,  74 => 41,  70 => 40,  67 => 39,  59 => 34,  54 => 31,  51 => 30,  47 => 29,  36 => 26,);
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Improve/International/Geolocation/index.html.twig", "C:\\xampp\\htdocs\\prestashop\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Improve\\International\\Geolocation\\index.html.twig");
    }
}
