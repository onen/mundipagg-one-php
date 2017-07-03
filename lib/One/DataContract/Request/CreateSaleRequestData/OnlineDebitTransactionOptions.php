<?php

namespace Gateway\One\DataContract\Request\CreateSaleRequestData;

use Gateway\One\DataContract\Common\BaseObject;

/**
 * Class OnlineDebitTransactionOptions
 * @package Gateway\One\DataContract\Request\CreateSaleRequestData
 */
class OnlineDebitTransactionOptions extends BaseObject
{
    /**
     * @var string Url de notificação
     */
    protected $notificationUrl;

    /**
     * @var Bool que define se o pagamento será realizado com dinheiro físico (SafetyPay)
    */
    protected $IsCashTransaction;

    /**
     * @param string $notificationUrl
     * @return $this
     */
    public function setNotificationUrl($notificationUrl)
    {
        $this->NotificationUrl = $notificationUrl;

        return $this;
    }

    /**
     * @param string $IsCashTransaction
     * @return $this
     */
    public function setIsCashTransaction($IsCashTransaction)
    {
        $this->IsCashTransaction = $IsCashTransaction;

        return $this;
    }
}