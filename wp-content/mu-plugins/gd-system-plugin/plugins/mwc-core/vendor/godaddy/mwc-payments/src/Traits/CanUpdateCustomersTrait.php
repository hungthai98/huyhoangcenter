<?php

namespace GoDaddy\WordPress\MWC\Payments\Traits;

use Exception;
use GoDaddy\WordPress\MWC\Payments\Models\Customer;

/**
 * Can update Customers Trait.
 *
 * @since x.y.z
 */
trait CanUpdateCustomersTrait
{
    use AdaptsRequestsTrait;
    use AdaptsCustomersTrait;

    /**
     * Performs update customer request.
     *
     * @since x.y.z
     *
     * @param Customer $customer
     *
     * @return Customer
     * @throws Exception
     */
    public function update(Customer $customer) : Customer
    {
        return $this->doAdaptedRequest($customer, new $this->customerAdapter($customer));
    }
}
