<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'PrestaShop\Module\PsEventbus\Provider\CartDataProvider' shared service.

return $this->services['PrestaShop\\Module\\PsEventbus\\Provider\\CartDataProvider'] = new \PrestaShop\Module\PsEventbus\Provider\CartDataProvider(($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\CartRepository'] ?? $this->load('getCartRepositoryService.php')), ($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\CartProductRepository'] ?? $this->load('getCartProductRepositoryService.php')), ($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\CartRuleRepository'] ?? $this->load('getCartRuleRepositoryService.php')));
