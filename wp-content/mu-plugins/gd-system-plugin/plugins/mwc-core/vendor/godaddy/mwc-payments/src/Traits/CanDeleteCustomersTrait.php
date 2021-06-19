<?php

namespace GoDaddy\WordPress\MWC\Payments\Traits;

use Exception;
use GoDaddy\WordPress\MWC\Payments\Models\Customer;

/**
 * Can Delete Customers Trait.
 *
 * @since x.y.z
 */
trait CanDeleteCustomersTrait
{
    use AdaptsRequestsTrait;
    use AdaptsCustomersTrait;

    /**
     * Performs delete customer request.
     *
     * @since x.y.z
     *
     * @param Customer $customer
     *
     * @return Customer
     * @throws Exception
     */
    public function delete(Customer $customer) : Customer
    {
        return $this->doAdaptedRequest($customer, new $this->customerAdapter($customer));
    }
}
