<?php

try
{
    // Load Dependencies
    require_once(dirname(__FILE__) . '\vendor\autoload.php');

    // Load configuration file with URL and Merchant Key
    require_once(dirname(__FILE__) . '\config.php');

    // Create request object
    $request = new \Gateway\One\DataContract\Request\CreateSaleRequest();

    // Online Debit transacton data
    $onlineDebitTransaction = new \Gateway\One\DataContract\Request\CreateSaleRequestData\OnlineDebitTransaction();
    $request->addOnlineDebitTransaction($onlineDebitTransaction);

    $onlineDebitTransaction
        ->setAmountInCents(100)
        ->setBank("Itau");

    $request
      	->getBuyer()
      		->setName("Luke Skywalker")
      	->getOrder()
      		->setOrderReference("201612201205");

    // Create new ApiClient object
    $client = new Gateway\ApiClient();

    // Make the call
    $response = $client->createSale($request);

    // Print the response
    print "<pre>";
    print json_encode(array('success' => $response->isSuccess(), 'data' => $response->getData()), JSON_PRETTY_PRINT);
    print "</pre>";

}
catch (\Gateway\One\DataContract\Report\ApiError $error)
{
    // Print JSON
    print "<pre>";
    print json_encode($error, JSON_PRETTY_PRINT);
    print "</pre>";
}
catch (Exception $ex)
{
    // Print JSON
    print "<pre>";
    print json_encode($ex, JSON_PRETTY_PRINT);
    print "</pre>";
}