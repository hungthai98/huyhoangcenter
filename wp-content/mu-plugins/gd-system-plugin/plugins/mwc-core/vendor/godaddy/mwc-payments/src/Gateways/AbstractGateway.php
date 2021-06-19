<?php

namespace GoDaddy\WordPress\MWC\Payments\Gateways;

use Exception;
use GoDaddy\WordPress\MWC\Common\DataSources\Contracts\DataSourceAdapterContract;
use GoDaddy\WordPress\MWC\Common\Events\Events;
use GoDaddy\WordPress\MWC\Common\Http\Request;
use GoDaddy\WordPress\MWC\Common\Http\Response;
use GoDaddy\WordPress\MWC\Payments\Events\ProviderRequestEvent;
use GoDaddy\WordPress\MWC\Payments\Events\ProviderResponseEvent;

/**
 * Class AbstractGatewayMethod
 */
abstract class AbstractGateway
{
    /**
     * Performs a request that's been adapted.
     *
     * @since x.y.z
     *
     * @param mixed $subject
     * @param DataSourceAdapterContract $adapter
     *
     * @return array|mixed
     * @throws Exception
     */
    public function doAdaptedRequest($subject, DataSourceAdapterContract $adapter)
    {
        $request = $adapter->convertFromSource();

        Events::broadcast(new ProviderRequestEvent($request));

        $response = $this->doRequest($adapter->convertFromSource());

        Events::broadcast(new ProviderResponseEvent($response));

        if ($response->isError()) {
            throw new Exception($response->getErrorMessage());
        }

        return $adapter->convertToSource($response);
    }

    /**
     * Performs a request.
     *
     * @param Request $request request object
     *
     * @return Response
     * @throws Exception
     */
    public function doRequest(Request $request) : Response
    {
        return $request->send();
    }
}
