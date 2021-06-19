<?php

namespace GoDaddy\WordPress\MWC\Payments\Traits;

use Exception;
use GoDaddy\WordPress\MWC\Common\DataSources\Contracts\DataSourceAdapterContract;

/**
 * Requests Adapter trait.
 *
 * @since x.y.z
 */
trait AdaptsRequestsTrait
{
    /**
     * Performs the request with the adapted body data.
     *
     * @since x.y.z
     *
     * @param mixed $subject
     * @param DataSourceAdapterContract $adapter
     *
     * @return mixed
     * @throws Exception
     */
    abstract public function doAdaptedRequest($subject, DataSourceAdapterContract $adapter);
}
