<?php

namespace GoDaddy\WordPress\MWC\Payments\Models;

use GoDaddy\WordPress\MWC\Common\Traits\BillableTrait;
use GoDaddy\WordPress\MWC\Common\Traits\ShippableTrait;
use GoDaddy\WordPress\MWC\Common\Users\User;
use GoDaddy\WordPress\MWC\Payments\Models\PaymentMethods\AbstractPaymentMethod;

class Customer
{
    use BillableTrait;
    use ShippableTrait;

    /** @var int primary key */
    private $id;

    /** @var AbstractPaymentMethod[] owned payment methods */
    private $paymentMethods = [];

    /** @var string primary key in remote system */
    private $remoteId;

    /** @var User native user object */
    private $user;

    /**
     * Set the ID.
     *
     * @param int $id
     *
     * @return self
     */
    public function setId(int $id) : Customer
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Set the payment methods.
     *
     * @param AbstractPaymentMethod[] $paymentMethods
     *
     * @return self
     */
    public function setPaymentMethods(array $paymentMethods) : Customer
    {
        $this->paymentMethods = $paymentMethods;

        return $this;
    }

    /**
     * Set the remote ID.
     *
     * @param string $remoteId
     *
     * @return self
     */
    public function setRemoteId(string $remoteId) : Customer
    {
        $this->remoteId = $remoteId;

        return $this;
    }

    /**
     * Set the User.
     *
     * @param User $user
     *
     * @return self
     */
    public function setUser(User $user) : Customer
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get the ID.
     *
     * @return int|null
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Get the payment methods.
     *
     * @return AbstractPaymentMethod[]
     */
    public function getPaymentMethods() : array
    {
        return $this->paymentMethods;
    }

    /**
     * Get the remote ID.
     *
     * @return string|null
     */
    public function getRemoteId()
    {
        return $this->remoteId;
    }

    /**
     * Get the User.
     *
     * @return User|null
     */
    public function getUser()
    {
        return $this->user;
    }
}
