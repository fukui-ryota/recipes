<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>出力結果</title>
</head>
<body>
    <?php
    // print_r($_POST);
    echo htmlspecialchars($_POST['recipe_name'], ENT_QUOTES);
    echo '<br>';
    echo match ($_POST['category']) {
        '1' => '和食',
        '2' => '中華',
        '3' => '洋食',
        default => '不明',
    } . '<br>';
    echo match ($_POST['difficulty']) {
        '1' => '簡単',
        '2' => '普通',
        '3' => '難しい',
    } . '<br>';
    if (is_numeric($_POST['budget'])) {
        echo number_format($_POST['budget']);
    } else {
        echo 'エラー: 数字を入力してください';
    }
   echo '<br>';
   echo nl2br(htmlspecialchars($_POST['howto'], ENT_QUOTES));
   echo '<br>';
   ?>
</body>
</html>