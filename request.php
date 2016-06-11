<?php

require_once('RequestController.php');

// URL最後の数字を取得する
$param = substr(strstr($_SERVER["REQUEST_URI"], '?'),-1);
// var_dump($param);

$requestController = new RequestController();

$action =  $requestController->header();
//エラーになる
$action =  $requestController->action . $param . ();


//
if()
{
  $action =  $requestController->pageNotFound();
  echo $action[0] ;
}

$action =  $requestController->footer();
$action =  $requestController->getResponse();

// var_dump($action);

echo $action[0] . "<br>";
echo $action[1] . "<br>";
echo $action[2];


//めりっとかく






