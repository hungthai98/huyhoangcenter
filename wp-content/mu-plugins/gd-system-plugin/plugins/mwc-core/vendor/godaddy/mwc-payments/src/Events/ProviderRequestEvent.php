<?php

namespace GoDaddy\WordPress\MWC\Payments\Events;

use GoDaddy\WordPress\MWC\Common\Events\Contracts\EventContract;
use GoDaddy\WordPress\MWC\Common\Http\Request;

/**
 * Class ProviderRequestEvent.
 */
class ProviderRequestEvent implements EventContract
{
    /** @var Request */
    protected $request;

    /**
     * ProviderRequestEvent constructor.
     *
     * @param Request $request the request that fired this event
     */
    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    /**
     * Gets the request that fired this event.
     *
     * @return Request
     */
    public function getRequest() : Request
    {
        return $this->request;
    }
}
