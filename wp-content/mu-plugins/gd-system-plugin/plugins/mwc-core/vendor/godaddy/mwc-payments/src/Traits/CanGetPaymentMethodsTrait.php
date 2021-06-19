<?php

namespace GoDaddy\WordPress\MWC\Payments\Traits;

use Exception;
use GoDaddy\WordPress\MWC\Common\Helpers\ArrayHelper;
use GoDaddy\WordPress\MWC\Payments\Models\PaymentMethods\AbstractPaymentMethod;

/**
 * Can Get Payment Methods Trait.
 *
 * @since x.y.z
 */
trait CanGetPaymentMethodsTrait
{
    use AdaptsPaymentMethodsTrait;

    /**
     * Performs payment method get request.
     *
     * @since x.y.z
     *
     * @param array $params
     *
     * @return AbstractPaymentMethod
     * @throws Exception
     */
    public function get(array $params) : AbstractPaymentMethod
    {
        if (! method_exists($this, 'doRequest')) {
            throw new Exception('doRequest method is missing');
        }

        $response = $this->doRequest('GET', $params);

        return (new $this->paymentMethodAdapter($response->getBody()))->convertFromSource();
    }

    /**
     * Performs payment method get all request.
     *
     * @since x.y.z
     *
     * @param array $params
     *
     * @return AbstractPaymentMethod[]
     * @throws Exception
     */
    public function getAll(array $params) : array
    {
        if (! method_exists($this, 'doRequest')) {
            throw new Exception('doRequest method is missing');
        }

        $response = $this->doRequest('GET', $params);
        $paymentMethodAdapter = $this->paymentMethodAdapter;

        return array_map(static function ($item) use ($paymentMethodAdapter) {
            return (new $paymentMethodAdapter($item))->convertFromSource();
        }, $response->getBody());
    }
}
