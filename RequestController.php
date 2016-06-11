<?php
/**
 * リクエストの種類に応じて処理を振り分けるクラス
 */
class RequestController
{
  // レスポンスデータを格納する
  private $response = array();
  // ヘッダーをレスポンスに追加
  public function header() {
    $this->response[] = 'header';
  }

  // フッターをレスポンスに追加
  public function footer() {
    $this->response[] = 'footer';
  }

  // 'action1' の処理
  public function action1() {
    $this->response[] = 'action1';
  }

  // 'action2' の処理
  public function action2() {
    $this->response[] = 'action2';
  }

  // 'action3' の処理
  public function action3() {
    $this->response[] = 'action3';
  }

  // action が存在しない場合の処理
  public function pageNotFound() {
    $this->response[] = 'Page not found';
  }

  // レスポンスデータを返す
  public function getResponse() {
    return $this->response;
  }
}
