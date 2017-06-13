<?php

namespace Gateway\One\DataContract\Request\CreateSaleRequestData;

use Gateway\One\DataContract\Common\BaseObject;

/**
 * Class OnlineDebitTransaction
 * @package Gateway\One\DataContract\Request\CreateSaleRequestData
 */
class OnlineDebitTransaction extends BaseObject
{
    /**
     * @var int Valor total em centavos a ser passado na transação de débito.
     */
    protected $AmountInCents;

    /**
     * @var string Banco do comprador
     */
    protected $Bank;

    /**
     *
     */
    public function __construct()
    {

    }

    /**
     * @return int
     */
    public function getAmountInCents()
    {
        return $this->AmountInCents;
    }

    /**
     * @param int $amountInCents
     * @return $this
     */
    public function setAmountInCents($amountInCents)
    {
        $this->AmountInCents = $amountInCents;

        return $this;
    }

    /**
     * @return string
     */
    public function getBank()
    {
        return $this->Bank;
    }

    /**
     * @param int $bank
     * @return $this
     */
    public function setBank($bank)
    {
        $this->Bank = $bank;

        return $this;
    }
}