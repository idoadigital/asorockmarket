<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'PrestaShop\Module\PsAccounts\Presenter\PsAccountsPresenter' shared service.

return $this->services['PrestaShop\\Module\\PsAccounts\\Presenter\\PsAccountsPresenter'] = new \PrestaShop\Module\PsAccounts\Presenter\PsAccountsPresenter(${($_ = isset($this->services['PrestaShop\\Module\\PsAccounts\\Service\\PsAccountsService']) ? $this->services['PrestaShop\\Module\\PsAccounts\\Service\\PsAccountsService'] : $this->load('getPsAccountsServiceService.php')) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PsAccounts\\Provider\\ShopProvider']) ? $this->services['PrestaShop\\Module\\PsAccounts\\Provider\\ShopProvider'] : $this->load('getShopProviderService.php')) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PsAccounts\\Service\\ShopLinkAccountService']) ? $this->services['PrestaShop\\Module\\PsAccounts\\Service\\ShopLinkAccountService'] : $this->load('getShopLinkAccountServiceService.php')) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PsAccounts\\Installer\\Installer']) ? $this->services['PrestaShop\\Module\\PsAccounts\\Installer\\Installer'] : $this->load('getInstaller2Service.php')) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PsAccounts\\Repository\\ConfigurationRepository']) ? $this->services['PrestaShop\\Module\\PsAccounts\\Repository\\ConfigurationRepository'] : $this->load('getConfigurationRepositoryService.php')) && false ?: '_'}, ${($_ = isset($this->services['ps_accounts.module']) ? $this->services['ps_accounts.module'] : $this->load('getPsAccounts_ModuleService.php')) && false ?: '_'});
