<?php

namespace Symfony\Config\OldSoundRabbitMq\DynamicConsumerConfig;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class OptionsConfig 
{
    private $noAck;
    private $_usedProperties = [];

    /**
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function noAck($value): static
    {
        $this->_usedProperties['noAck'] = true;
        $this->noAck = $value;

        return $this;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('no_ack', $value)) {
            $this->_usedProperties['noAck'] = true;
            $this->noAck = $value['no_ack'];
            unset($value['no_ack']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['noAck'])) {
            $output['no_ack'] = $this->noAck;
        }

        return $output;
    }

}
