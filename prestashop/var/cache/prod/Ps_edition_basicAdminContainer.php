<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Container;
use Symfony\Component\DependencyInjection\Exception\InvalidArgumentException;
use Symfony\Component\DependencyInjection\Exception\LogicException;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;
use Symfony\Component\DependencyInjection\ParameterBag\FrozenParameterBag;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;

/**
 * This class has been auto-generated
 * by the Symfony Dependency Injection Component.
 *
 * @final
 */
class Ps_edition_basicAdminContainer extends Container
{
    private $parameters = [];

    public function __construct()
    {
        $this->parameters = $this->getDefaultParameters();

        $this->services = $this->privates = [];
        $this->methodMap = [
            'PrestaShop\\Module\\PsEditionBasic\\Service\\ConfigurationService' => 'getConfigurationServiceService',
            'ps_edition_basic.module' => 'getPsEditionBasic_ModuleService',
            'ps_edition_basic.presenter.setupGuideData' => 'getPsEditionBasic_Presenter_SetupGuideDataService',
        ];

        $this->aliases = [];
    }

    public function compile(): void
    {
        throw new LogicException('You cannot compile a dumped container that was already compiled.');
    }

    public function isCompiled(): bool
    {
        return true;
    }

    public function getRemovedIds(): array
    {
        return [
            'Psr\\Container\\ContainerInterface' => true,
            'Symfony\\Component\\DependencyInjection\\ContainerInterface' => true,
        ];
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEditionBasic\Service\ConfigurationService' shared service.
     *
     * @return \PrestaShop\Module\PsEditionBasic\Service\ConfigurationService
     */
    protected function getConfigurationServiceService()
    {
        return $this->services['PrestaShop\\Module\\PsEditionBasic\\Service\\ConfigurationService'] = new \PrestaShop\Module\PsEditionBasic\Service\ConfigurationService();
    }

    /**
     * Gets the public 'ps_edition_basic.module' shared service.
     *
     * @return \ps_edition_basic
     */
    protected function getPsEditionBasic_ModuleService()
    {
        return $this->services['ps_edition_basic.module'] = \Module::getInstanceByName('ps_edition_basic');
    }

    /**
     * Gets the public 'ps_edition_basic.presenter.setupGuideData' shared service.
     *
     * @return \PrestaShop\Module\PsEditionBasic\Presenter\SetupGuideDataPresenter
     */
    protected function getPsEditionBasic_Presenter_SetupGuideDataService()
    {
        return $this->services['ps_edition_basic.presenter.setupGuideData'] = new \PrestaShop\Module\PsEditionBasic\Presenter\SetupGuideDataPresenter(($this->services['ps_edition_basic.module'] ?? $this->getPsEditionBasic_ModuleService())->getTranslator());
    }

    /**
     * @return array|bool|float|int|string|\UnitEnum|null
     */
    public function getParameter($name)
    {
        $name = (string) $name;

        if (!(isset($this->parameters[$name]) || isset($this->loadedDynamicParameters[$name]) || array_key_exists($name, $this->parameters))) {
            throw new InvalidArgumentException(sprintf('The parameter "%s" must be defined.', $name));
        }
        if (isset($this->loadedDynamicParameters[$name])) {
            return $this->loadedDynamicParameters[$name] ? $this->dynamicParameters[$name] : $this->getDynamicParameter($name);
        }

        return $this->parameters[$name];
    }

    public function hasParameter($name): bool
    {
        $name = (string) $name;

        return isset($this->parameters[$name]) || isset($this->loadedDynamicParameters[$name]) || array_key_exists($name, $this->parameters);
    }

    public function setParameter($name, $value): void
    {
        throw new LogicException('Impossible to call set() on a frozen ParameterBag.');
    }

    public function getParameterBag(): ParameterBagInterface
    {
        if (null === $this->parameterBag) {
            $parameters = $this->parameters;
            foreach ($this->loadedDynamicParameters as $name => $loaded) {
                $parameters[$name] = $loaded ? $this->dynamicParameters[$name] : $this->getDynamicParameter($name);
            }
            $this->parameterBag = new FrozenParameterBag($parameters);
        }

        return $this->parameterBag;
    }

    private $loadedDynamicParameters = [
        'ps_edition_basic.env' => false,
        'ps_edition_basic.edition_basic_homepage_js' => false,
        'ps_edition_basic.edition_basic_admin_css' => false,
    ];
    private $dynamicParameters = [];

    private function getDynamicParameter(string $name)
    {
        switch ($name) {
            case 'ps_edition_basic.env': $value = $this->getEnv('ENV'); break;
            case 'ps_edition_basic.edition_basic_homepage_js': $value = $this->getEnv('PS_EDITION_BASIC_HOMEPAGE_JS'); break;
            case 'ps_edition_basic.edition_basic_admin_css': $value = $this->getEnv('PS_EDITION_BASIC_ADMIN_CSS'); break;
            default: throw new InvalidArgumentException(sprintf('The dynamic parameter "%s" must be defined.', $name));
        }
        $this->loadedDynamicParameters[$name] = true;

        return $this->dynamicParameters[$name] = $value;
    }

    protected function getDefaultParameters(): array
    {
        return [

        ];
    }
}
