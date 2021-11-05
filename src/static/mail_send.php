<?php
  // 公開時削除
  header("Access-Control-Allow-Origin: *");

  $mode = "none";
  if( isset($_POST["mode"]) )
      $mode = $_POST["mode"];

  if($mode = "AjaxMailSend") {
    $admin_mail = 'takashi.m.mp@gmail.com'; // テスト用
    // $admin_mail = [クライアントのメールアドレス]; // 本番用
    $message = $_POST["name"] . "　様

この度はお問い合わせありがとうございます。
以下の内容でお問い合わせを受け付けました。

********************************************************

＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝

お名前：" . $_POST["name"] . "
フリガナ：" . $_POST["kana"] . "
電話番号：" . $_POST["phone"] . "
メールアドレス：" . $_POST["email"] . "
お問い合わせ内容：" . $_POST["category"] . "

＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝


" . $_POST["details"] . "


********************************************************

内容確認後、こちらからご連絡致しますので今しばらくお待ちください。
お急ぎの方、数日経ってもこちらからのご返信が届かない方は、
お手数ですがお電話にてお問い合わせ頂きますようお願い致します。

--------------------------------------------------------

[ クライアントの署名 ]
";

    $message_admin = "

ホームページより以下の内容でお問い合わせがありました。


********************************************************

＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝

お名前：" . $_POST["name"] . "
フリガナ：" . $_POST["kana"] . "
電話番号：" . $_POST["phone"] . "
メールアドレス：" . $_POST["email"] . "
お問い合わせ内容：" . $_POST["category"] . "

＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝


" . $_POST["details"] . "


********************************************************
";

    // 自動返信用
    $send_data = array(
      "title" => "お問い合わせありがとうございます。",
      "name" => "[ クライアントの名前 ]",
      "address" => $admin_mail,
      "body" => $message
    );
    // 管理者用
    $send_data_admin = array(
      "title" => "お問い合わせがありました。",
      "name" => "[ クライアントの名前 ]",
      "address" => $admin_mail,
      "body" => $message_admin
    );

    // 自動返信用
    dog_send_mail($send_data, $_POST["email"]);
    // 管理者用
    dog_send_mail($send_data_admin, $admin_mail);

    $result = array("code" => "200", "message" => "");
    echo json_encode($result);
    exit;
  }

  function dog_send_mail($send_data, $to) {
    mb_language("Ja");
    mb_internal_encoding("UTF-8");

    $mailfrom = "From:" . mb_encode_mimeheader($send_data["name"]) . "<" . $send_data["address"] . ">" . "\r\n";
    $mailfrom .= "Return-Path:". $send_data["address"] . "\r\n";

    mb_send_mail($to, $send_data["title"], $send_data["body"], $mailfrom);
  }

  $result = array("code" => "500", "message" => "エラー");
  echo json_encode($result);
  exit;
?>
