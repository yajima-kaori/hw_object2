<?php

require_once('RequestController.php');

// URL最後の数字を取得する
$param = $_GET['action'];
// var_dump($param);

$requestController = new RequestController();

if(method_exists($requestController,$param))
{
  $action =  $requestController->header();
  $action =  $requestController->$param();
  $action =  $requestController->footer();
  $action =  $requestController->getResponse();

  echo $action[0] . "<br>";
  echo $action[1] . "<br>";
  echo $action[2];
}
else
{
  $action =  $requestController->pageNotFound();
  $action =  $requestController->getResponse();
  echo $action[0];
}




// メリット
// request.php を変更する必要がない






