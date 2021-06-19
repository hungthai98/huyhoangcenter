<?php

namespace GoDaddy\WordPress\MWC\Payments\Traits;

use Exception;
use GoDaddy\WordPress\MWC\Common\Events\Events;
use GoDaddy\WordPress\MWC\Payments\Events\CreatePaymentMethodEvent;
use GoDaddy\WordPress\MWC\Payments\Models\PaymentMethods\AbstractPaymentMethod;

/**
 * Can Create Payment Methods Trait.
 *
 * @since x.y.z
 */
trait CanCreatePaymentMethodsTrait
{
    use AdaptsPaymentMethodsTrait;
    use AdaptsRequestsTrait;

    /**
     * Creates payment method request
     *
     * @since x.y.z
     *
     * @param AbstractPaymentMethod $paymentMethod
     *
     * @return AbstractPaymentMethod
     * @throws Exception
     */
    public function create(AbstractPaymentMethod $paymentMethod) : AbstractPaymentMethod
    {
        $request = $this->doAdaptedRequest($paymentMethod, new $this->paymentMethodAdapter($paymentMethod));

        Events::broadcast(new CreatePaymentMethodEvent($request));

        return $request;
    }
}
