<?php
require_once('config/status_codes.php');
$answer_code = htmlspecialchars($_POST['answer_code'],ENT_QUOTES);
$option = htmlspecialchars($_POST['option'], ENT_QUOTES);
//index.phpからデータを取得

if (!$option) {
    header('location: index.php');
}
//データが正しく送信されなかった場合、リダイレクトするよう設定

foreach ($status_codes as $status_code) {
    if ($status_code['code']=== $answer_code) {
        $code = $status_code['code'];
        $description = $status_code['description'];
    }
}
$result = $option === $code;
//正誤判定
//$resultに答えを格納


?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/result.css">
    <link rel="stylesheet" href="css/sanitize.css">
</head>
<body>
    <header class="header">
        <div class="header__inner">
            <a href="index.php" class="header__logo">Status Code Quiz</a>
        </div>
    </header>
    <main>
        <div class="result__content">
            <div class="result">
                <?php if($result): ?>
                <h2 class="result__text--correct">正解</h2>
                <?php else: ?>
                <h2 class="result__text--incorrect">不正解</h2>
                <? endif; ?>
            </div>
            <div class="answer-table">
                <table class="answer-table__inner">
                    <tr class="answer-table__row">
                        <th class="answer-table__header">ステータスコード</th>
                        <td class="answer-table__text">
                            <?php echo $code ?>
                        </td>
                    </tr>
                    <tr class="answer-table__row">
                        <th class="answer-table__header">説明</th>
                        <td class="answer-table__text">
                            <?php echo $description ?>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </main>
</body>
</html>