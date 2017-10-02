<?php

namespace Gateway\One\DataContract\Request\OneRestRequestData;

use Gateway\One\DataContract\Common\BaseObject;

class PhoneRequest extends BaseObject{
    protected $AreaCode;
    protected $CountryCode;
    protected $Extension;
    protected $PhoneNumber;
    protected $PhoneTypeEnum;

    public function getAreaCode()
    {
        return $this->AreaCode;
    }

    public function setAreaCode($code)
    {
        $this->AreaCode = $code;

        return $this;
    }

    public function getPhoneNumber()
    {
        return $this->PhoneNumber;
    }

    public function setPhoneNumber($number)
    {
        $this->PhoneNumber = $number;

        return $this;
    }

    public function getPhoneTypeEnum()
    {
        return $this->PhoneTypeEnum;
    }

    public function setPhoneTypeEnum($type)
    {
        $this->PhoneTypeEnum = $type;

        return $this;
    }
}