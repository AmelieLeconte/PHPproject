<?php

namespace Symfony\Config\BootstrapMenu;

require_once __DIR__.\DIRECTORY_SEPARATOR.'MenuConfig'.\DIRECTORY_SEPARATOR.'ItemsConfig.php';

use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class MenuConfig 
{
    private $items;
    private $_usedProperties = [];

    public function items(array $value = []): \Symfony\Config\BootstrapMenu\MenuConfig\ItemsConfig
    {
        $this->_usedProperties['items'] = true;

        return $this->items[] = new \Symfony\Config\BootstrapMenu\MenuConfig\ItemsConfig($value);
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('items', $value)) {
            $this->_usedProperties['items'] = true;
            $this->items = array_map(fn ($v) => new \Symfony\Config\BootstrapMenu\MenuConfig\ItemsConfig($v), $value['items']);
            unset($value['items']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['items'])) {
            $output['items'] = array_map(fn ($v) => $v->toArray(), $this->items);
        }

        return $output;
    }

}
