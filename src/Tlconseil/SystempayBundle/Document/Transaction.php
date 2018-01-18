<?php

namespace Tlconseil\SystempayBundle\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;

/**
 * Transaction.
 *
 * @MongoDB\Document(collection="systempay_transaction")
 */
class Transaction
{
    /**
     * @MongoDB\Id(strategy="INCREMENT", type="int")
     */
    private $id;

    /**
     * @var string
     * @MongoDB\Field(type="string", name="status_code", nullable=true)
     */
    private $status;

    /**
     * @var int
     * @MongoDB\Field(type="int", name="amount")
     */
    private $amount;

    /**
     * @var int
     * @MongoDB\Field(type="int", name="currency")
     */
    private $currency;

    /**
     * @var \DateTime
     * @MongoDB\Field(type="date", name="created_at")
     */
    private $createdAt;

    /**
     * @var \DateTime
     * @MongoDB\Field(type="date", name="updated_at")
     */
    private $updatedAt;

    /**
     * @var string
     * @MongoDB\Field(type="string", name="log_response", nullable=true)
     */
    private $logResponse;

    /**
     * @var bool
     * @MongoDB\Field(type="boolean", name="paid")
     */
    private $paid;

    /**
     * @var bool
     * @MongoDB\Field(type="boolean", name="refunded")
     */
    private $refunded;

    /**
     * @return int
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * @param int $amount
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;
    }

    /**
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * @param \DateTime $createdAt
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;
    }

    /**
     * @return int
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * @param int $currency
     */
    public function setCurrency($currency)
    {
        $this->currency = $currency;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getLogResponse()
    {
        return $this->logResponse;
    }

    /**
     * @param string $logResponse
     */
    public function setLogResponse($logResponse)
    {
        $this->logResponse = $logResponse;
    }

    /**
     * @return bool
     */
    public function isPaid()
    {
        return $this->paid;
    }

    /**
     * @param bool $paid
     */
    public function setPaid($paid)
    {
        $this->paid = $paid;
    }

    /**
     * @return bool
     */
    public function isRefunded()
    {
        return $this->refunded;
    }

    /**
     * @param bool $refunded
     */
    public function setRefunded($refunded)
    {
        $this->refunded = $refunded;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param string $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * @param \DateTime $updatedAt
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;
    }
}
