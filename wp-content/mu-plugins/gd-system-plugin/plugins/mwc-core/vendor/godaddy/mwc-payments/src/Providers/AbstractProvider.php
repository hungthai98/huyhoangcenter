<?php

namespace GoDaddy\WordPress\MWC\Payments\Providers;

use BadMethodCallException;

/**
 * Abstract provider class.
 *
 * @since x.y.z
 */
abstract class AbstractProvider
{
    /** @var string provider description */
    protected $description;

    /** @var string provider label */
    protected $label;

    /** @var string provider name */
    protected $name;

    /**
     * Throws an exception when an unsupported feature method is accessed.
     *
     * @since x.y.z
     *
     * @param $name
     * @param $arguments
     */
    public function __call($name, $arguments)
    {
        throw new BadMethodCallException('Call to undefined method '.__CLASS__.'::'.$name);
    }

    /**
     * Gets the description.
     *
     * @since x.y.z
     *
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * Gets the label.
     *
     * @since x.y.z
     *
     * @return string
     */
    public function getLabel(): string
    {
        return $this->label;
    }

    /**
     * Gets the name.
     *
     * @since x.y.z
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
}
