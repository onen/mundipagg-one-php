<?php

namespace Gateway\One;

use Gateway\One\DataContract\Request\CreateSaleRequestData\OnlineDebitTransaction;

class OnlineDebitTransactionTest extends \PHPUnit_Framework_TestCase
{
    public function testOnlineDebitTransaction_Success()
    {
        $expected = new OnlineDebitTransaction();

        $expected->setAmountInCents(100);
        $expected->setBank("Itau");

        $this->assertNotEmpty($expected->setAmountInCents());
        $this->assertNotEmpty($expected->setBank());
    }
}