<?php

namespace GoDaddy\WordPress\MWC\Payments\Models\Transactions;

use GoDaddy\WordPress\MWC\Common\Model\CurrencyAmount;

/**
 * Payment Transaction class
 */
class PaymentTransaction extends AbstractTransaction
{
    /** @var CurrencyAmount transaction amount */
    private $amount;

    /** @var bool */
    private $authOnly = false;

    /** @var CurrencyAmount */
    private $capturedAmount;

    /** @var CurrencyAmount */
    private $refundedAmount;

    /** @var string[] */
    private $remoteCaptureIds = [];

    /** @var string[] */
    private $remoteRefundIds = [];

    /** @var string[] */
    private $remoteVoidIds = [];

    /** @var CurrencyAmount */
    private $tipAmount;

    /** @var string type */
    protected $type = 'payment';

    /**
     * Gets transaction amount.
     *
     * @return CurrencyAmount|null
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Gets authentication mode.
     *
     * @return bool
     */
    public function isAuthOnly() : bool
    {
        return $this->authOnly;
    }

    /**
     * Gets captured amount.
     *
     * @return CurrencyAmount|null
     */
    public function getCapturedAmount()
    {
        return $this->capturedAmount;
    }

    /**
     * Gets refunded amount.
     *
     * @return CurrencyAmount|null
     */
    public function getRefundedAmount()
    {
        return $this->refundedAmount;
    }

    /**
     * Gets remote capture IDs.
     *
     * @return string[]
     */
    public function getRemoteCaptureIds() : array
    {
        return $this->remoteCaptureIds;
    }

    /**
     * Gets remote refund IDs.
     *
     * @return string[]
     */
    public function getRemoteRefundIds() : array
    {
        return $this->remoteRefundIds;
    }

    /**
     * Gets remote Void IDs.
     *
     * @return string[]
     */
    public function getRemoteVoidIds() : array
    {
        return $this->remoteVoidIds;
    }

    /**
     * Gets tip amount.
     *
     * @return CurrencyAmount|null
     */
    public function getTipAmount()
    {
        return $this->tipAmount;
    }

    /**
     * Sets transaction amount.
     *
     * @param CurrencyAmount $amount
     *
     * @return PaymentTransaction
     */
    public function setAmount(CurrencyAmount $amount) : PaymentTransaction
    {
        $this->amount = $amount;

        return $this;
    }

    /**
     * Sets authentication mode.
     *
     * @param bool $authOnly
     *
     * @return PaymentTransaction
     */
    public function setAuthOnly(bool $authOnly) : PaymentTransaction
    {
        $this->authOnly = $authOnly;

        return $this;
    }

    /**
     * Sets captured amount.
     *
     * @param CurrencyAmount $capturedAmount
     *
     * @return PaymentTransaction
     */
    public function setCapturedAmount(CurrencyAmount $capturedAmount) : PaymentTransaction
    {
        $this->capturedAmount = $capturedAmount;

        return $this;
    }

    /**
     * Sets refunded amount.
     *
     * @param CurrencyAmount $refundedAmount
     *
     * @return PaymentTransaction
     */
    public function setRefundedAmount(CurrencyAmount $refundedAmount) : PaymentTransaction
    {
        $this->refundedAmount = $refundedAmount;

        return $this;
    }

    /**
     * Sets remove capture IDs.
     *
     * @param string[] $remoteCaptureIds
     *
     * @return PaymentTransaction
     */
    public function setRemoteCaptureIds(array $remoteCaptureIds) : PaymentTransaction
    {
        $this->remoteCaptureIds = $remoteCaptureIds;

        return $this;
    }

    /**
     * Sets remove refund IDs.
     *
     * @param string[] $remoteRefundIds
     *
     * @return PaymentTransaction
     */
    public function setRemoteRefundIds(array $remoteRefundIds) : PaymentTransaction
    {
        $this->remoteRefundIds = $remoteRefundIds;

        return $this;
    }

    /**
     * Sets remove Void IDs.
     *
     * @param string[] $remoteVoidIds
     *
     * @return PaymentTransaction
     */
    public function setRemoteVoidIds(array $remoteVoidIds) : PaymentTransaction
    {
        $this->remoteVoidIds = $remoteVoidIds;

        return $this;
    }

    /**
     * Sets tip amount.
     *
     * @param CurrencyAmount $tipAmount
     *
     * @return PaymentTransaction
     */
    public function setTipAmount(CurrencyAmount $tipAmount) : PaymentTransaction
    {
        $this->tipAmount = $tipAmount;

        return $this;
    }
}
