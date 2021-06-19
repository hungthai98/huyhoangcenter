<?php

namespace GoDaddy\WordPress\MWC\Payments\Models\Transactions;

use DateTime;
use GoDaddy\WordPress\MWC\Common\Traits\CanBulkAssignPropertiesTrait;
use GoDaddy\WordPress\MWC\Common\Traits\CanConvertToArrayTrait;
use GoDaddy\WordPress\MWC\Payments\Contracts\TransactionStatusContract;
use GoDaddy\WordPress\MWC\Payments\Models\PaymentMethods\AbstractPaymentMethod;
use GoDaddy\WordPress\MWC\Payments\Models\Customer;
use GoDaddy\WordPress\MWC\Common\Model\Orders\Order;
use GoDaddy\WordPress\MWC\Common\Model\CurrencyAmount;

/**
 * Class AbstractTransaction
 */
abstract class AbstractTransaction
{
    use CanConvertToArrayTrait;
    use CanBulkAssignPropertiesTrait;

    /** @var DateTime timestamp record was created */
    protected $createdAt;

    /** @var Customer */
    protected $customer;

    /** @var string notes */
    protected $notes;

    /** @var Order */
    protected $order;

    /** @var AbstractPaymentMethod */
    protected $paymentMethod;

    /** @var DateTime timestamp record was updated */
    protected $updatedAt;

    /** @var string remoteId */
    protected $remoteId;

    /** @var string remoteParentId */
    protected $remoteParentId;

    /** @var string resultCode */
    protected $resultCode;

    /** @var string resultMessage */
    protected $resultMessage;

    /** @var string resultMessage */
    protected $source;

    /** @var TransactionStatusContract */
    protected $status;

    /** @var CurrencyAmount */
    protected $totalAmount;

    /** @var string transaction type */
    protected $type;

    /** @var string provider name */
    protected $providerName;

    /**
     * Gets createdAt.
     *
     * @return DateTime|null
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Gets Customer.
     *
     * @return Customer|null
     */
    public function getCustomer()
    {
        return $this->customer;
    }

    /**
     * Gets the Notes.
     *
     * @return string|null
     */
    public function getNotes()
    {
        return $this->notes;
    }

    /**
     * Gets the order object.
     *
     * @return Order|null
     */
    public function getOrder()
    {
        return $this->order;
    }

    /**
     * Gets paymentMethod.
     *
     * @return AbstractPaymentMethod|null
     */
    public function getPaymentMethod()
    {
        return $this->paymentMethod;
    }

    /**
     * Gets updatedAt.
     *
     * @return DateTime|null
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * Gets remoteId.
     *
     * @return string|null
     */
    public function getRemoteId()
    {
        return $this->remoteId;
    }

    /**
     * Gets remoteParentId.
     *
     * @return string|null
     */
    public function getRemoteParentId()
    {
        return $this->remoteParentId;
    }

    /**
     * Gets resultCode.
     *
     * @return string|null
     */
    public function getResultCode()
    {
        return $this->resultCode;
    }

    /**
     * Gets resultMessage.
     *
     * @return string|null
     */
    public function getResultMessage()
    {
        return $this->resultMessage;
    }

    /**
     * Gets source.
     *
     * @return string|null
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * Gets status.
     *
     * @return TransactionStatusContract|null
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Gets totalAmount.
     *
     * @return CurrencyAmount|null
     */
    public function getTotalAmount()
    {
        return $this->totalAmount;
    }

    /**
     * Gets the transaction type.
     *
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * Gets the provider name.
     *
     * @return string|null
     */
    public function getProviderName()
    {
        return $this->providerName;
    }


    /**
     * Sets created at.
     *
     * @param DateTime $createdAt
     *
     * @return AbstractTransaction
     */
    public function setCreatedAt(DateTime $createdAt) : AbstractTransaction
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Sets the customer.
     *
     * @param Customer $customer
     *
     * @return AbstractTransaction
     */
    public function setCustomer(Customer $customer) : AbstractTransaction
    {
        $this->customer = $customer;

        return $this;
    }

    /**
     * Sets the notes.
     *
     * @param string $notes
     *
     * @return AbstractTransaction
     */
    public function setNotes(string $notes) : AbstractTransaction
    {
        $this->notes = $notes;

        return $this;
    }

    /**
     * Sets the order.
     *
     * @param Order $order
     *
     * @return AbstractTransaction
     */
    public function setOrder(Order $order) : AbstractTransaction
    {
        $this->order = $order;

        return $this;
    }

    /**
     * Sets the paymentMethod.
     *
     * @param AbstractPaymentMethod $paymentMethod
     *
     * @return AbstractTransaction
     */
    public function setPaymentMethod(AbstractPaymentMethod $paymentMethod) : AbstractTransaction
    {
        $this->paymentMethod = $paymentMethod;

        return $this;
    }

    /**
     * Sets updated at.
     *
     * @param DateTime $updatedAt
     *
     * @return AbstractTransaction
     */
    public function setUpdatedAt(DateTime $updatedAt) : AbstractTransaction
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * Sets the remote ID.
     *
     * @param string $remoteId
     *
     * @return AbstractTransaction
     */
    public function setRemoteId(string $remoteId) : AbstractTransaction
    {
        $this->remoteId = $remoteId;

        return $this;
    }

    /**
     * Sets the remoteParentId.
     *
     * @param string $remoteParentId
     *
     * @return AbstractTransaction
     */
    public function setRemoteParentId(string $remoteParentId) : AbstractTransaction
    {
        $this->remoteParentId = $remoteParentId;

        return $this;
    }

    /**
     * Sets the resultCode.
     *
     * @param string $resultCode
     *
     * @return AbstractTransaction
     */
    public function setResultCode(string $resultCode) : AbstractTransaction
    {
        $this->resultCode = $resultCode;

        return $this;
    }

    /**
     * Sets the resultMessage.
     *
     * @param string $resultMessage
     *
     * @return AbstractTransaction
     */
    public function setResultMessage(string $resultMessage) : AbstractTransaction
    {
        $this->resultMessage = $resultMessage;

        return $this;
    }

    /**
     * Sets the source.
     *
     * @param string $source
     *
     * @return AbstractTransaction
     */
    public function setSource(string $source) : AbstractTransaction
    {
        $this->source = $source;

        return $this;
    }

    /**
     * Sets the status.
     *
     * @param TransactionStatusContract $status
     *
     * @return AbstractTransaction
     */
    public function setStatus(TransactionStatusContract $status) : AbstractTransaction
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Sets the totalAmount.
     *
     * @param CurrencyAmount $totalAmount
     *
     * @return AbstractTransaction
     */
    public function setTotalAmount(CurrencyAmount $totalAmount) : AbstractTransaction
    {
        $this->totalAmount = $totalAmount;

        return $this;
    }

    /**
     * Sets the provider name.
     *
     * @param string $providerName
     *
     * @return AbstractTransaction
     */
    public function setProviderName(string $value) : AbstractTransaction
    {
        $this->providerName = $value;

        return $this;
    }
}
