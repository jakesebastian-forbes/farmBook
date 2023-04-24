<?php

// Set your X-API-KEY with the API key from the Customer Area.
$client = new \Adyen\Client();
$client->setXApiKey("CRED4224T223225L5HMWVQK9G23R3S");
$service = new \Adyen\Service\Checkout($client);
 
$params = array(
  "amount" => array(
    "currency" => "PHP",
    "value" => 10
  ),
  "reference" => "1234522312312",
  "paymentMethod" => array(
    "type" => "gcash",
    "storedPaymentMethodId" => "7219687191761347"
  ),
  "returnUrl" => "https://your-company.com/checkout?shopperOrder=12xy..",
  "shopperReference" => "YOUR_UNIQUE_SHOPPER_ID_IOfW3k9G2PvXFu2j",
  "recurringProcessingModel" => "Subscription",
  "shopperInteraction" => "ContAuth",
  "merchantAccount" => "YOUR_MERCHANT_ACCOUNT"
);
$result = $service->payments($params);



?>