<?php
require_once __DIR__ .'/../vendor/autoload.php';
use CfCommunity\CfHelper\CfHelper;

$serviceManager = CfHelper::getInstance()->getServiceManager();
$dbService = $serviceManager->getService('database'); //or regular expression example: getService('.*database.*')
//and for example get the host credential
echo $dbService->getValue('host');//or regular expression example: getValue('ho[A-Za-z]+')

echo "<h1>Services</h1>";
//get all your services
$services = $serviceManager->getAllServices();

foreach ($services as $service ) {
  echo "<h2>" . $service->getName() . "</h2>";
  echo "<ul>";
  foreach ( $service->getValues() as $name => $value ) {
    echo "<li>" . $name . " : " . $value . "</li>";
  }
  echo "</ul>";
}
