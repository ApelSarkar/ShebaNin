<?php
try{
$soapClient = new SoapClient("https://api2.onnorokomSMS.com/sendSMS.asmx?wsdl");
$paramArray = array(
'userName' => "01721303127",
'userPassword' => "c7757dfcb4"
'mobileNumber' => "01721303127",
'smsText' => "This is a SMS.Which I have sended to you.",
'type' => "TEXT",
'maskName' => '', 'campaignName' => 'Sheba-nin',
);
  $value = $soapClient->__call("OneToOne", array($paramArray));
 echo $value->OneToOneResult;
 } catch (Exception $e) {
 echo $e->getMessage();
}