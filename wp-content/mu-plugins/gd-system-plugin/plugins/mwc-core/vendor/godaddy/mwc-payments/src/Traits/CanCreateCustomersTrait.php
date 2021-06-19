<?php

namespace GoDaddy\WordPress\MWC\Payments\Traits;

use Exception;
use GoDaddy\WordPress\MWC\Payments\Models\Customer;

/**
 * Can Create Customers Trait.
 *
 * @since x.y.z
 */
trait CanCreateCustomersTrait
{
    use AdaptsRequestsTrait;
    use AdaptsCustomersTrait;

    /**
     * Performs creates customer request.
     *
     * @since x.y.z
     *
     * @param Customer $customer
     *
     * @return Customer
     * @throws Exception
     */
    public function create(Customer $customer) : Customer
    {
        return $this->doAdaptedRequest($customer, new $this->customerAdapter($customer));
    }
}
