<?php

namespace Gateway\One\DataContract\Request;

use Gateway\One\DataContract\Common\BaseObject;

/**
 * Class CreateSaleRequest
 * @package Gateway\One\DataContract\Request
 */
class CreateOneRestRequest extends BaseObject{
    protected $MerchantKey;
    protected $RequestKey;
    protected $AmountIncents;
    protected $Bank;
    protected $Buyer;
    protected $InstallmentCount;
    protected $OrderKey;
    protected $OrderRequest;
    protected $PaymentMethod;
    protected $PaymentType;
    protected $ShoppingCart;

    public function __construct(){
        $this->Buyer = null;
        $this->ShoppingCart = null;
    }

    public function getAmountInCents()
    {
        return $this->AmountInCents;
    }

    public function setAmountInCents($amountInCents)
    {
        $this->AmountInCents = $amountInCents;

        return $this;
    }

    public function getBank()
    {
        return $this->Bank;
    }

    public function setBank($bank)
    {
        $this->Bank = $bank;

        return $this;
    }

    public function getInstallmentCount()
    {
        return $this->InstallmentCount;
    }

    public function setInstallmentCount($installmentCount)
    {
        $this->InstallmentCount = $installmentCount;

        return $this;
    }

    public function getOrderKey()
    {
        return $this->OrderKey;
    }

    public function setOrderKey($orderKey)
    {
        $this->OrderKey = $orderKey;

        return $this;
    }

    public function getPaymentMethod()
    {
        return $this->PaymentMethod;
    }

    public function setPaymentMethod($paymentMethod)
    {
        $this->PaymentMethod = $paymentMethod;

        return $this;
    }

    public function getPaymentType()
    {
        return $this->PaymentType;
    }

    public function setPaymentType($paymentType)
    {
        $this->PaymentType = $paymentType;

        return $this;
    }

    public function getMerchantKey()
    {
        return $this->MerchantKey;
    }

    public function setMerchantKey($merchantKey)
    {
        $this->MerchantKey = $merchantKey;

        return $this;
    }

    public function getBuyer()
    {
        if (empty($this->Buyer)){
            $this->Buyer = new OneRestRequestData\BuyerOneRest();
        }

        return $this->Buyer;
    }

    public function getShoppingCart()
    {
        if (empty($this->ShoppingCart)){
            $this->ShoppingCart = new OneRestRequestData\ShoppingCartOneRest();
        }

        return $this->ShoppingCart;
    }

    public function addShoppingCart(CreateSaleRequestData\ShoppingCart $shoppingCart = null)
    {
        if ($shoppingCart == null)
        {
            $shoppingCart = new OneRestRequestData\ShoppingCartOneRest();
        }

        $this->ShoppingCart = $shoppingCart;

        return $shoppingCart;
    }
}