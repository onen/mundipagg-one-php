<?php

require_once(dirname(__FILE__) . '/../init.php');

try
{
    // Define a url utilizada
    \Gateway\ApiClient::setBaseUrl("https://api.mundipaggone.com/Order/OnlineDebit");

    $request = new \Gateway\One\DataContract\Request\OneRestRequestData\CreateOneRestRequest();

    $request->setAmountInCents(100)
    ->setMerchantKey("85328786-8BA6-420F-9948-5352F5A183EB")
    ->setBank("Cielo");

    $request->getBuyer()
    ->setName("Comprador Mundi")
    ->setPersonTypeEnum(\Gateway\One\DataContract\Enum\PersonTypeEnum::PERSON)
    ->setTaxDocumentNumber("12345678900")
    ->setTaxDocumentType(\Gateway\One\DataContract\Enum\DocumentTypeEnum::CPF)
    ->setEmail("comprador@gateway.com")
    ->setGenderEnum(\Gateway\One\DataContract\Enum\GenderEnum::MALE);
    
     
    $request->getBuyer()->addPhoneRequest()
    ->setPhoneNumber("(21)41111111");

    $address = new Gateway\One\DataContract\Common\Address();

    $address->setAddressType(\Gateway\One\DataContract\Enum\AddressTypeEnum::COMMERCIAL)
    ->setStreet("Rua da Quitanda")
    ->setNumber("199")
    ->setComplement("10º andar")
    ->setDistrict("Centro")
    ->setCity("Rio de Janeiro")
    ->setState("RJ")
    ->setZipCode("20091005")
    ->setCountry(\Gateway\One\DataContract\Enum\CountryEnum::BRAZIL);

    $request->getBuyer()->addBuyerAddress($address);


    $shoppingCart = $request->addShoppingCart();
    $shoppingCart->setDeliveryDeadline(new DateTime());
    $shoppingCart->setEstimatedDeliveryDate(new DateTime());
    $shoppingCart->setFreightCostInCents(199);
    $shoppingCart->setShippingCompany("Correios");
    $shoppingCart->getDeliveryAddress()
    ->setAddressType(\Gateway\One\DataContract\Enum\AddressTypeEnum::SHIPPING)
    ->setStreet("Rua da Quitanda")
    ->setNumber("199")
    ->setComplement("10º andar")
    ->setDistrict("Centro")
    ->setCity("Rio de Janeiro")
    ->setState("RJ")
    ->setZipCode("20091005")
    ->setCountry(\Gateway\One\DataContract\Enum\CountryEnum::BRAZIL);

    $shoppingCart->addShoppingCartItem()
    ->setDescription("Apple iPhone 5s 16gb")
    ->setDiscountAmountInCents(0)
    ->setItemReference("AI5S")
    ->setName("iPhone 5S")
    ->setQuantity(1)
    ->setUnitCostInCents(1800)
    ->setTotalCostInCents(1600);


    //Cria um objeto ApiClient
    $client = new Gateway\ApiClient();
    
    // Faz a chamada para criação
    $response = $client->CreateOneRestRequest($request);
    
    print "<pre>";
    print json_encode(array($request->getData()), JSON_PRETTY_PRINT);
    print "</pre>";
    
    // Imprime resposta
    print "<pre>";
    print json_encode(array('success' => $response->isSuccess(), 'data' => $response->getData()), JSON_PRETTY_PRINT);
    print "</pre>";
}
catch (\Gateway\One\DataContract\Report\ApiError $error)
{
        // Imprime json
        print "<pre>";
        print json_encode($error, JSON_PRETTY_PRINT);
        print "</pre>";
}
catch (Exception $ex)
{
        // Imprime json
        print "<pre>";
        print json_encode($ex, JSON_PRETTY_PRINT);
        print "</pre>";
}