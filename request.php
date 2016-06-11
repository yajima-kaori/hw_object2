<?php

require_once('RequestController.php');

$param = $_GET['action'];



$requestController = new RequestController();

$action =  $requestController->header();


if(method_exists($requestController,$param) && $param != "header" && $param != "footer")
{
  $action =  $requestController->$param();
}
else
{
  $action =  $requestController->pageNotFound();
}

$action =  $requestController->footer();
$action =  $requestController->getResponse();



echo $action[0] . "<br>";
echo $action[1] . "<br>";
echo $action[2];
// メリット
// request.php を変更する必要がない






