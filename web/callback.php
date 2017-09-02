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

$r = mt_rand(1, 29);

if ($message_text == '名言') {

    if ($r == 1) {$return_message_text = "商品を信じる、それを使っている人、愛している人を信じる、その気持ちに敬意を表する、共感するというのがないと今後はますますダメだと思う。 by小霜";}

    else if ($r == 2) {$return_message_text = "砂山のトンネルをストラテジー側と表現側から掘ってみて、真ん中でがっちり手を繋げた時に、良いクリエイティブが生まれるということ。 by米村";}
    
    else if ($r == 3) {$return_message_text = "なんかねぇ、CMだったかな。矢沢永吉にね、これやってくれないかって誰かが見せたと。その時に、「うーん、俺はいいんだけど、矢沢が何て言うかな」って矢沢永吉が言ったっていうのよ。 by小霜";}

    else if ($r == 4) {$return_message_text = "広告の仕事って、そこの社長や社員ですら気づいていない、あなたの会社は今の時代こんな価値、存在の価値があるんですよっていうのを見つけてあげたりするということも、僕らの仕事だったりするわけ。本人が気づいていないこと。だからまず本能的にそういうところを見る、見つけようっていうところを考えることがすごく大事。 by米村";}

    else if ($r == 5) {$return_message_text = "ストラテジーは理屈だけど、「想い」から入ってほしい。 by小霜";}

    else if ($r == 6) {$return_message_text = "こんなやついるか？ by小霜";}

    else if ($r == 7) {$return_message_text = "マイナスを0にするより、マイナスを＋にしよう。 by米村";}

    else if ($r == 8) {$return_message_text = "一番最初の「惚れた！」って状況を作るのが広告なわけで。 by米村";}

    else if ($r == 9) {$return_message_text = "意味の無い情報が入ってくる余地は無いんだよね。 by米村";}

    else if ($r == 10) {$return_message_text = "クライアントがあって企業のビジネスモデルがあってどういう風にお金を儲けるかがあって、その戦略に基づいてこの商品をどう訴求するかっていうのがあったうえで、じゃあこの商品を表現するコピーはこうですね、そこに落とすための入り口としてのキャッチフレーズはこれですねっていう風にしなきゃいけない。 by小霜";}

    else if ($r == 11) {$return_message_text = "人は人とつながっている時、少し元気になる。 by米村";}

    else if ($r == 12) {$return_message_text = "みんなが持っているコピーライティングっていう概念を壊したい。 by小霜";}

    else if ($r == 13) {$return_message_text = "プロポジションってプロポーズだからさ。 by米村";}

    else if ($r == 14) {$return_message_text = "企画するときは、それを提出する相手のことを常にイメージしなさい。机を相手にして考えるな。その人の表情を常に想像しながら考えること。 by小霜";}

    else if ($r == 15) {$return_message_text = "コピーライターは情報をつかさどる。アートディレクターは◯◯◯をつかさどる。 by米村";}

    else if ($r == 16) {$return_message_text = "残念ながら君たちのものをプレゼンすると、小物だなと思われると思う。あいつちょっと大物かもしれんぞと思われるような、そういう発想をして欲しい。 by小霜";}

    else if ($r == 17) {$return_message_text = "何を世の中に提供できるかっていうことを360度考えないとだめだと思う。 by米村";}

    else if ($r == 18) {$return_message_text = "「人間不在」なんだよ。 by小霜";}

    else if ($r == 19) {$return_message_text = "僕が各自10案といったのは、目指すべき星への線上で10個見つけなければならない。 by米村";}

    else if ($r == 20) {$return_message_text = "この仕事やる以上は誰も馬鹿にしない。まぁ人間て弱いから、人の弱さを理解する、そこにたいして敬意をもってあげる。 by小霜";}

    else if ($r == 21) {$return_message_text = "クリエイティブジャンプというのは、企業の勝手なストラテジーを生活者に自分のことだと思わせるためのアプローチを見つけだすこと。 by米村";}

    else if ($r == 22) {$return_message_text = "日本中の弁当のタコさんウィンナーを魚肉にしてやるぜ！ by小霜";}

    else if ($r == 23) {$return_message_text = "どこまでいっても、どこまでやっても勝利はない。また別の視点とか良さがあるんじゃないかとは常に思う。でもクライアントに出すときは考え尽くしたものを出す。 by米村";}

    else if ($r == 24) {$return_message_text = "みんなが書いているのって俺的には30年前のスピード感なんだよね。遅すぎる。 by小霜";}

    else if ($r == 25) {$return_message_text = "インサイトに対して答えてあげるということより、そのインサイト以上のことを言ってあげる。 by米村";}

    else if ($r == 26) {$return_message_text = "なぜ読む人の気持ちを揺さぶるようなストラテジーが書けないかという話なんだけど、僕は多分この艦これというコンテンツに対するリスペクトがないからだと思う。 by小霜";}

    else if ($r == 27) {$return_message_text = "このUSPを持ってそのインサイトに対してどういう風にアプローチすればしっかり商品の良さが届くのだろうかと考えるのがクリエイティブ。 by米村";}

    else if ($r == 28) {$return_message_text = "ぼくらの仕事っていうのは紙一枚で100万だ200万だ取る仕事なわけよ。そんないい加減なことやって良いねって100万払うヤツが何処の世界にいるんだってことを言いたいわけ。これじゃ仕事にもならないし、遊びとしても何も楽しくないよね。クズだよ。 by小霜";}
    else
    {$return_message_text = "どれだけシンプルにできるか。 by米村";}

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
