<?php

try
{
    // Load Dependencies
    require_once('vendor/autoload.php');

    // Define the used URL
    \Gateway\ApiClient::setBaseUrl("https://sandbox.mundipaggone.com");

    // Define the Merchant Key
    \Gateway\ApiClient::setMerchantKey("8A2DD57F-1ED9-4153-B4CE-69683EFADAD5");

    // Create request object
    $request = new \Gateway\One\DataContract\Request\CreateSaleRequest();

    // Online debit transacton data
    $onlineDebitTransaction = new \Gateway\One\DataContract\Request\CreateSaleRequestData\OnlineDebitTransaction();
    $request->addOnlineDebitTransaction($onlineDebitTransaction);

    $onlineDebitTransaction
        ->setAmountInCents(100)
        ->setBank("Itau")
        ->getOptions()
        ->setNotificationUrl("TESTE URL")
        ->setIsCashTransaction("true");

    $request->getBuyer()
        ->setName("Luke");

    $request->getOrder()
        ->setOrderReference("201612201205");
        // ->addAddress()
        // ->setAddressType(\Gateway\One\DataContract\Enum\AddressTypeEnum::COMMERCIAL)
        // ->setStreet("Rua da Quitanda")
        // ->setNumber("199")
        // ->setComplement("10º andar")
        // ->setDistrict("Centro")
        // ->setCity("Rio de Janeiro")
        // ->setState("RJ")
        // ->setZipCode("20091005")
        // ->setCountry(\Gateway\One\DataContract\Enum\CountryEnum::BRAZIL);

    // Create new ApiClient object
    $client = new Gateway\ApiClient();

    // Make the call
    $response = $client->createSale($request);

    print json_encode($response, JSON_PRETTY_PRINT);

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