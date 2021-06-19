<?php

namespace GoDaddy\WordPress\MWC\Payments;

use GoDaddy\WordPress\MWC\Common\Configuration\Configuration;
use GoDaddy\WordPress\MWC\Common\Helpers\ArrayHelper;
use GoDaddy\WordPress\MWC\Common\Traits\IsSingletonTrait;
use GoDaddy\WordPress\MWC\Payments\Providers\AbstractProvider;
use Exception;

/**
 * Class Payments
 */
class Payments
{
    use IsSingletonTrait;

    /** @var AbstractProvider[] payment providers */
    protected $providers = [];

    /**
     * @throws Exception
     */
    public function __construct()
    {
        $this->setProviders(Configuration::get('payments.providers', []));
    }

    /**
     * Sets and instantiates given list of providers.
     *
     * @param array $providersClasses
     * @return Payments
     */
    protected function setProviders(array $providersClasses) : Payments
    {
        foreach ($providersClasses as $class) {
            if (false === is_subclass_of($class, AbstractProvider::class)) {
                continue;
            }

            /** @var AbstractProvider $provider */
            $provider = new $class();

            $this->providers[$provider->getName()] = $provider;
        }

        return $this;
    }

    /**
     * Get the providers.
     *
     * @return AbstractProvider[]
     */
    public function getProviders() : array
    {
        return $this->providers;
    }

    /**
     * Returns the requested provider, if found in the providers attribute.
     *
     * @param string $provider
     * @return AbstractProvider
     * @throws Exception
     */
    public function provider(string $provider) : AbstractProvider
    {
        $foundProvider = ArrayHelper::get($this->providers, $provider);

        if (empty($foundProvider)) {
            throw new Exception("The given provider {$provider} is not found.");
        }

        return $foundProvider;
    }
}
