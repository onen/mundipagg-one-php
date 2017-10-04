<?php

namespace Gateway\One\DataContract\Request\OneRestRequestData;

use Gateway\One\DataContract\Common\BaseObject;

/**
 * Class CreateSaleRequest
 * @package Gateway\One\DataContract\Request
 */
class CreateOneRestRequest extends BaseObject{
    public $MerchantKey;
    public $Requestkey;
    public $AmountInCents;
    public $Bank;
    public $Buyer;
    public $Installmentcount;
    public $Orderkey;
    public $Orderrequest;
    public $PaymentMethod;
    public $PaymentType;
    public $Shoppingcart;

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
            $this->Buyer = new BuyerOneRest();
        }

        return $this->Buyer;
    }

    public function getShoppingCart()
    {
        if (empty($this->ShoppingCart)){
            $this->ShoppingCart = new ShoppingCartOneRest();
        }

        return $this->ShoppingCart;
    }

    public function addShoppingCart(ShoppingCartOneRest $shoppingCart = null)
    {
        if ($shoppingCart == null)
        {
            $shoppingCart = new ShoppingCartOneRest();
        }

        $this->ShoppingCart = $shoppingCart;

        return $shoppingCart;
    }
}