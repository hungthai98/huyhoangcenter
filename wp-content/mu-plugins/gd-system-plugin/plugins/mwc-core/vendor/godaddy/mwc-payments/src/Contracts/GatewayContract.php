<?php

namespace GoDaddy\WordPress\MWC\Payments\Contracts;

use GoDaddy\WordPress\MWC\Common\Http\Request;
use GoDaddy\WordPress\MWC\Common\Http\Response;

/**
 * Gateway contract.
 */
interface GatewayContract
{
    /**
     * Performs a request.
     *
     * @param string $method HTTP method
     * @param array $data request data
     * @return Response
     */
    public function doRequest(string $method, array $data): Response;

    /**
     * Gets a request object.
     *
     * @return Request
     */
    public function getRequest(): Request;
}
