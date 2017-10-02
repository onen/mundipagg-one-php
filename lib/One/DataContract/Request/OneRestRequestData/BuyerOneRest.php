<?php

namespace Gateway\One\DataContract\Request\OneRestRequestData;

use Gateway\One\DataContract\Common\BaseObject;
use Gateway\One\DataContract\Common\Address;
use Gateway\One\DataContract\Request\OneRestRequestData\PhoneRequest;

class BuyerOneRest extends BaseObject{
    protected $BuyerKey;
    protected $Name;
    protected $PersonTypeEnum;
    protected $BuyerReference;
    protected $TaxDocumentNumber;
    protected $TaxDocumentType;
    protected $GenderEnum;
    protected $Email;
    protected $PhoneRequest;
    protected $BuyerAddressCollection;

    function __construct(){
        $this->BuyerAddressCollection = array();
    }


    public function getName()
    {
        return $this->Name;
    }

    public function setName($name)
    {
        $this->Name = $name;

        return $this;
    }
    public function getPersonTypeEnum()
    {
        return $this->PersonTypeEnum;
    }

    public function setPersonTypeEnum($person)
    {
        $this->PersonTypeEnum = $person;

        return $this;
    }
    public function getBuyerReference()
    {
        return $this->BuyerReference;
    }

    public function setBuyerReference($reference)
    {
        $this->BuyerReference = $reference;

        return $this;
    }
    public function getTaxDocumentNumber()
    {
        return $this->TaxDocumentNumber;
    }

    public function setTaxDocumentNumber($document)
    {
        $this->TaxDocumentNumber = $document;

        return $this;
    }
    public function getTaxDocumentType()
    {
        return $this->TaxDocumentType;
    }

    public function setTaxDocumentType($documentType)
    {
        $this->TaxDocumentType = $documentType;

        return $this;
    }
    public function getGenderEnum()
    {
        return $this->GenderEnum;
    }

    public function setGenderEnum($gender)
    {
        $this->GenderEnum = $gender;

        return $this;
    }
    public function getEmail()
    {
        return $this->Email;
    }

    public function setEmail($email)
    {
        $this->Email = $email;

        return $this;
    }

    public function getBuyerKey()
    {
        return $this->BuyerKey;
    }

    public function setBuyerKey($buyerKey)
    {
        $this->BuyerKey = $buyerKey;

        return $this;
    }

    public function getBuyerAddressCollection()
    {
        return $this->AddressCollection;
    }

    public function addBuyerAddress(Address $address = null)
    {
        if ($address == null)
        {
            $address = new Address();
        }

        $this->AddressCollection[] = $address;

        return $address;
    }

    public function getPhoneRequest()
    {
        return $this->PhoneRequest;
    }

    public function addPhoneRequest(PhoneRequest $phone = null)
    {
        if ($phone == null)
        {
            $phone = new PhoneRequest();
        }
        return $phone;
    }
}