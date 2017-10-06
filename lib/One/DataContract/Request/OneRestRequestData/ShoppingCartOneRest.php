<?php

namespace Gateway\One\DataContract\Request\OneRestRequestData;

use Gateway\One\DataContract\Common\BaseObject;
use Gateway\One\DataContract\Common\Address;

/**
 * Class ShoppingCart
 * @package Gateway\One\DataContract\Request\OneRestRequestData
 */
class ShoppingCartOneRest extends BaseObject
{
   /**
    * @var string Data limite para entrega
    */
   public $DeliveryDeadline;

   /**
    * @var string Data estimada para entrega
    */
   public $estimatedDeliveryDate;

   /**
    * @var int Custo total do frete
    */
   public $freightCostInCents;

   /**
    * @var string Transportadora responsável pela entrega
    */
   public $ShippingCompany;

   /**
    * @var ShoppingCartItem[] Lista de itens do carrinho de compra
    */
   public $ShoppingCartItemCollection;

   /**
    * @var Address Endereço de entrega do cliente
    */
   public $DeliveryAddress;

    /**
     *
     */
    function __construct()
    {
        $this->ShoppingCartItemCollection = array();
    }

    /**
     * @param \Datetime $deliveryDeadline
     * @return $this
     */
    public function setDeliveryDeadline(\DateTime $deliveryDeadline)
    {
        $this->DeliveryDeadline = $deliveryDeadline->format('Y-m-d\TH:i:s');

        return $this;
    }

    /**
     * @return string
     */
    public function getDeliveryDeadline()
    {
        return \DateTime::createFromFormat('Y-m-d\TH:i:s', $this->DeliveryDeadline);
    }

    /**
     * @param \DateTime $estimatedDeliveryDate
     * @return $this
     */
    public function setEstimatedDeliveryDate(\DateTime $estimatedDeliveryDate)
    {
        $this->EstimatedDeliveryDate = $estimatedDeliveryDate->format('Y-m-d\TH:i:s');

        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getEstimatedDeliveryDate()
    {
        return \DateTime::createFromFormat('Y-m-d\TH:i:s', $this->EstimatedDeliveryDate);
    }


    /**
     * @param int $freightCostInCents
     * @return $this
     */
    public function setFreightCostInCents($freightCostInCents)
    {
        $this->FreightCostInCents = $freightCostInCents;

        return $this;
    }


    /**
     * @return int
     */
    public function getFreightCostInCents()
    {
        return $this->FreightCostInCents;
    }


    /**
     * @param $shippingCompany
     * @return $this
     */
    public function setShippingCompany($shippingCompany)
    {
        $this->ShippingCompany = $shippingCompany;

        return $this;
    }

    /**
     * @return string
     */
    public function getShippingCompany()
    {
        return $this->ShippingCompany;
    }

    /**
     * @return \Gateway\One\ShoppingCartItem[]
     */
    public function getShoppingCartItemCollection()
    {
        return $this->ShoppingCartItemCollection;
    }

    /**
     * @param ShoppingCartItem $shoppingCartItem
     * @return ShoppingCartItem
     */
    public function addShoppingCartItem(ShoppingCartItem $shoppingCartItem = null)
    {
        if ($shoppingCartItem == null)
        {
            $shoppingCartItem = new ShoppingCartItemOneRest();
        }

        $this->ShoppingCartItemCollection[] = $shoppingCartItem;

        return $shoppingCartItem;
    }

    /**
     * @return Address
     */
    public function getDeliveryAddress()
    {
        if (empty($this->DeliveryAddress)){
            $this->DeliveryAddress = new Address();
        }

        return $this->DeliveryAddress;
    }
}