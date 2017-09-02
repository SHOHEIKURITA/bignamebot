<?php
 
$accessToken = getenv('LINE_CHANNEL_ACCESS_TOKEN');
 
//ユーザーからのメッセージ取得
$json_string = file_get_contents('php://input');
$json_object = json_decode($json_string);
 
//取得データ
$replyToken = $json_object->{"events"}[0]->{"replyToken"};        //返信用トークン
$message_type = $json_object->{"events"}[0]->{"message"}->{"type"};    //メッセージタイプ
$message_text = $json_object->{"events"}[0]->{"message"}->{"text"};    //メッセージ内容
 
//メッセージタイプが「text」以外のときは何も返さず終了
if($message_type != "text") exit;
 
//返信メッセージ
//$return_message_text = "「" . $message_text . "」じゃねーよｗｗｗ";

/*
if ($message_text == '名言') {$return_message_text = "商品を信じる、それを使っている人、愛している人を信じる、その気持ちに敬意を表する、共感するというのがないと今後はますますダメだと思う。 by小霜";}
else {$return_message_text = "退学";}
*/

if ($message_text == '名言') {

    int r = rand(1, 2)

    if (r == 1) {$return_message_text = "商品を信じる、それを使っている人、愛している人を信じる、その気持ちに敬意を表する、共感するというのがないと今後はますますダメだと思う。 by小霜";}
    else
    {$return_message_text = "砂山のトンネルをストラテジー側と表現側から掘ってみて、真ん中でがっちり手を繋げた時に、良いクリエイティブが生まれるということ。 by米村";}

}
else {$return_message_text = "退学";}
 
//返信実行
sending_messages($accessToken, $replyToken, $message_type, $return_message_text);
?>
<?php
//メッセージの送信
function sending_messages($accessToken, $replyToken, $message_type, $return_message_text){
    //レスポンスフォーマット
    $response_format_text = [
        "type" => $message_type,
        "text" => $return_message_text
    ];
 
    //ポストデータ
    $post_data = [
        "replyToken" => $replyToken,
        "messages" => [$response_format_text]
    ];
 
    //curl実行
    $ch = curl_init("https://api.line.me/v2/bot/message/reply");
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($post_data));
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        'Content-Type: application/json; charser=UTF-8',
        'Authorization: Bearer ' . $accessToken
    ));
    $result = curl_exec($ch);
    curl_close($ch);
}
?>
