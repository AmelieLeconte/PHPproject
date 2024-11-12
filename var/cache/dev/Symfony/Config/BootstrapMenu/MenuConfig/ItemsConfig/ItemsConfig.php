<?php

namespace Symfony\Config\BootstrapMenu\MenuConfig\ItemsConfig;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class ItemsConfig 
{
    private $label;
    private $isDivider;
    private $route;
    private $routeParameters;
    private $url;
    private $roles;
    private $_usedProperties = [];

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function label($value): static
    {
        $this->_usedProperties['label'] = true;
        $this->label = $value;

        return $this;
    }

    /**
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function isDivider($value): static
    {
        $this->_usedProperties['isDivider'] = true;
        $this->isDivider = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function route($value): static
    {
        $this->_usedProperties['route'] = true;
        $this->route = $value;

        return $this;
    }

    /**
     * @param ParamConfigurator|list<ParamConfigurator|mixed> $value
     *
     * @return $this
     */
    public function routeParameters(ParamConfigurator|array $value): static
    {
        $this->_usedProperties['routeParameters'] = true;
        $this->routeParameters = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function url($value): static
    {
        $this->_usedProperties['url'] = true;
        $this->url = $value;

        return $this;
    }

    /**
     * @param ParamConfigurator|list<ParamConfigurator|mixed> $value
     *
     * @return $this
     */
    public function roles(ParamConfigurator|array $value): static
    {
        $this->_usedProperties['roles'] = true;
        $this->roles = $value;

        return $this;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('label', $value)) {
            $this->_usedProperties['label'] = true;
            $this->label = $value['label'];
            unset($value['label']);
        }

        if (array_key_exists('is_divider', $value)) {
            $this->_usedProperties['isDivider'] = true;
            $this->isDivider = $value['is_divider'];
            unset($value['is_divider']);
        }

        if (array_key_exists('route', $value)) {
            $this->_usedProperties['route'] = true;
            $this->route = $value['route'];
            unset($value['route']);
        }

        if (array_key_exists('route_parameters', $value)) {
            $this->_usedProperties['routeParameters'] = true;
            $this->routeParameters = $value['route_parameters'];
            unset($value['route_parameters']);
        }

        if (array_key_exists('url', $value)) {
            $this->_usedProperties['url'] = true;
            $this->url = $value['url'];
            unset($value['url']);
        }

        if (array_key_exists('roles', $value)) {
            $this->_usedProperties['roles'] = true;
            $this->roles = $value['roles'];
            unset($value['roles']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['label'])) {
            $output['label'] = $this->label;
        }
        if (isset($this->_usedProperties['isDivider'])) {
            $output['is_divider'] = $this->isDivider;
        }
        if (isset($this->_usedProperties['route'])) {
            $output['route'] = $this->route;
        }
        if (isset($this->_usedProperties['routeParameters'])) {
            $output['route_parameters'] = $this->routeParameters;
        }
        if (isset($this->_usedProperties['url'])) {
            $output['url'] = $this->url;
        }
        if (isset($this->_usedProperties['roles'])) {
            $output['roles'] = $this->roles;
        }

        return $output;
    }

}
