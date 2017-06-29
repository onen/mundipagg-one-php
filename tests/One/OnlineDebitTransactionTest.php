<?php

namespace Gateway\One;

use Gateway\One\DataContract\Request\CreateSaleRequestData\OnlineDebitTransaction;

class OnlineDebitTransactionTest extends \PHPUnit_Framework_TestCase
{
    public function testOnlineDebitTransaction()
    {
        $expected = new OnlineDebitTransaction();

        $expected->setAmountInCents(100);
        $expected->setBank("Itau");

        $this->assertNotEmpty($expected->getAmountInCents());
        $this->assertNotEmpty($expected->getBank());
        
    }

    public function testBank_Success()
    {
        $expected = new OnlineDebitTransaction();

        $expected->setBank("Itau");
        $this->assertNotEmpty($expected->getBank());
    }

    public function testAmountInCents_Success()
    {
        $expected = new OnlineDebitTransaction();

        $expected->setAmountInCents(100);
        $this->assertNotEmpty($expected->getAmountInCents());
    }
}
