<?php

namespace GoDaddy\WordPress\MWC\Payments\Traits;

use Exception;
use GoDaddy\WordPress\MWC\Payments\Models\PaymentMethods\AbstractPaymentMethod;

/**
 * Can Delete Payment Methods Trait.
 *
 * @since x.y.z
 */
trait CanDeletePaymentMethodsTrait
{
    use AdaptsPaymentMethodsTrait;
    use AdaptsRequestsTrait;

    /**
     * Performs payment method update request
     *
     * @since x.y.z
     *
     * @param AbstractPaymentMethod $paymentMethod
     *
     * @return AbstractPaymentMethod
     * @throws Exception
     */
    public function delete(AbstractPaymentMethod $paymentMethod) : AbstractPaymentMethod
    {
        return $this->doAdaptedRequest($paymentMethod, new $this->paymentMethodAdapter($paymentMethod));
    }
}
