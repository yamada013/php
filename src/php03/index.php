<?php
require_once('config/status_codes.php');
$random_numbers = array_rand($status_codes,4);
//上記の動作確認（順番をランダムに入れ替え）
//echo ('<pre>');
//var_dump($random_numbers);
//echo ('<pre>');

foreach ($random_numbers as $index) {
    $options[]= $status_codes[$index];
}
//上記の動作確認（４つのランダムな選択肢を用意）
//echo ('<pre>');
//var_dump($options);
//echo ('<pre>');

$question = $options[mt_rand(0,3)];
//$question = $options[array_rand($options,1)];どちらでも可

//上記の動作確認（正解の選択肢を決める）
//echo ('<pre>');
//var_dump($question);
//echo('<pre>');

?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Status Code Quiz</title>
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/sanitize.css">
</head>
<body>
    <header class="header">
        <div class="header__inner">
            <a href="index.php" class="header__logo">Status Code Quiz</a>
        </div>
    </header>
    <main>
        <div class="quiz__content">
            <div class="question">
                <p class="question__text">Q.以下の内容に当てはまるステータスコードを選んでください</p>
                <p class="question__text"><?php echo $question['description']?>
                </p>
            </div>
            <form action="result.php" method="post" class="quiz-form">
                <input type="hidden" name="answer_code" value="<?php echo $question['code']?>">
                <div class="quiz-form__item">
                    <?php foreach ($options as $option ):?>
                    <div class="quiz-form__group">
                        <input type="radio" name="option" id="<?php echo $option['code']?>" value="<?php echo $option['code']?>" class="quiz-form__radio">
                        <label for="<?php echo $option['code']?>" class="quiz-form__label"><?php echo $option['code']?></label>
                    </div>
                    <?php endforeach; ?>
                </div>
                <div class="quiz-form__button">
                    <button class="quiz-form__button-submit" type="submit">回答</button>
                </div>
            </form>
        </div>
    </main>
</body>
</html>