<?php

namespace Symfony\Config;

require_once __DIR__.\DIRECTORY_SEPARATOR.'BootstrapMenu'.\DIRECTORY_SEPARATOR.'MenuConfig.php';

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class BootstrapMenuConfig implements \Symfony\Component\Config\Builder\ConfigBuilderInterface
{
    private $version;
    private $dropdownActiveStyle;
    private $dropdownItemActiveStyle;
    private $menus;
    private $_usedProperties = [];

    /**
     * @default 5
     * @param ParamConfigurator|int $value
     * @return $this
     */
    public function version($value): static
    {
        $this->_usedProperties['version'] = true;
        $this->version = $value;

        return $this;
    }

    /**
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function dropdownActiveStyle($value): static
    {
        $this->_usedProperties['dropdownActiveStyle'] = true;
        $this->dropdownActiveStyle = $value;

        return $this;
    }

    /**
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function dropdownItemActiveStyle($value): static
    {
        $this->_usedProperties['dropdownItemActiveStyle'] = true;
        $this->dropdownItemActiveStyle = $value;

        return $this;
    }

    public function menu(string $name, array $value = []): \Symfony\Config\BootstrapMenu\MenuConfig
    {
        if (!isset($this->menus[$name])) {
            $this->_usedProperties['menus'] = true;
            $this->menus[$name] = new \Symfony\Config\BootstrapMenu\MenuConfig($value);
        } elseif (1 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "menu()" has already been initialized. You cannot pass values the second time you call menu().');
        }

        return $this->menus[$name];
    }

    public function getExtensionAlias(): string
    {
        return 'bootstrap_menu';
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('version', $value)) {
            $this->_usedProperties['version'] = true;
            $this->version = $value['version'];
            unset($value['version']);
        }

        if (array_key_exists('dropdown_active_style', $value)) {
            $this->_usedProperties['dropdownActiveStyle'] = true;
            $this->dropdownActiveStyle = $value['dropdown_active_style'];
            unset($value['dropdown_active_style']);
        }

        if (array_key_exists('dropdown_item_active_style', $value)) {
            $this->_usedProperties['dropdownItemActiveStyle'] = true;
            $this->dropdownItemActiveStyle = $value['dropdown_item_active_style'];
            unset($value['dropdown_item_active_style']);
        }

        if (array_key_exists('menus', $value)) {
            $this->_usedProperties['menus'] = true;
            $this->menus = array_map(fn ($v) => new \Symfony\Config\BootstrapMenu\MenuConfig($v), $value['menus']);
            unset($value['menus']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['version'])) {
            $output['version'] = $this->version;
        }
        if (isset($this->_usedProperties['dropdownActiveStyle'])) {
            $output['dropdown_active_style'] = $this->dropdownActiveStyle;
        }
        if (isset($this->_usedProperties['dropdownItemActiveStyle'])) {
            $output['dropdown_item_active_style'] = $this->dropdownItemActiveStyle;
        }
        if (isset($this->_usedProperties['menus'])) {
            $output['menus'] = array_map(fn ($v) => $v->toArray(), $this->menus);
        }

        return $output;
    }

}
